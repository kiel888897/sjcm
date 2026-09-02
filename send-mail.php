<?php
session_start();

$mailConfig = require __DIR__ . '/config/mail.php';

function getClientIp(): string
{
    $keys = ['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP', 'REMOTE_ADDR'];

    foreach ($keys as $key) {
        if (!empty($_SERVER[$key])) {
            $ip = $_SERVER[$key];
            if (strpos($ip, ',') !== false) {
                $ip = trim(explode(',', $ip)[0]);
            }
            return filter_var($ip, FILTER_VALIDATE_IP) ?: 'unknown';
        }
    }

    return 'unknown';
}

function addRateLimit(string $ip): void
{
    $limitKey = 'contact_attempts_' . md5($ip);
    $now = time();
    $attempts = $_SESSION[$limitKey] ?? [];

    $attempts = array_values(array_filter($attempts, fn($timestamp) => ($now - (int) $timestamp) < 900));
    $attempts[] = $now;

    if (count($attempts) > 5) {
        $_SESSION['form_error'] = 'Terlalu banyak permintaan. Silakan coba beberapa menit lagi.';
        header('Location: contact.php');
        exit;
    }

    $_SESSION[$limitKey] = $attempts;
}

function redirectBack(string $message, string $type = 'error'): void
{
    $_SESSION['form_' . $type] = $message;
    header('Location: contact.php');
    exit;
}

function readSmtpResponse($stream): string
{
    $response = '';

    while (!feof($stream)) {
        $line = fgets($stream, 515);
        if ($line === false) {
            break;
        }

        $response .= $line;

        if (strlen($line) >= 3 && substr($line, 3, 1) === ' ') {
            break;
        }
    }

    return $response;
}

function smtpSend(string $fromEmail, string $fromName, string $toEmail, string $subject, string $body): bool
{
    $config = require __DIR__ . '/config/mail.php';
    $host = $config['smtp_host'];
    $port = $config['smtp_port'];
    $encryption = strtolower((string) $config['smtp_encryption']);
    $username = $config['smtp_username'];
    $password = $config['smtp_password'];

    $stream = fsockopen($host, $port, $errno, $errstr, 30);
    if (!$stream) {
        return false;
    }

    stream_set_timeout($stream, 30);

    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '220') {
        fclose($stream);
        return false;
    }

    fwrite($stream, "EHLO " . $host . "\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '250') {
        fclose($stream);
        return false;
    }

    if ($encryption === 'tls') {
        fwrite($stream, "STARTTLS\r\n");
        $response = readSmtpResponse($stream);
        if (substr($response, 0, 3) !== '220') {
            fclose($stream);
            return false;
        }

        if (!stream_socket_enable_crypto($stream, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            fclose($stream);
            return false;
        }

        fwrite($stream, "EHLO " . $host . "\r\n");
        $response = readSmtpResponse($stream);
        if (substr($response, 0, 3) !== '250') {
            fclose($stream);
            return false;
        }
    }

    fwrite($stream, "AUTH LOGIN\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '334') {
        fclose($stream);
        return false;
    }

    fwrite($stream, base64_encode($username) . "\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '334') {
        fclose($stream);
        return false;
    }

    fwrite($stream, base64_encode($password) . "\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '235') {
        fclose($stream);
        return false;
    }

    fwrite($stream, "MAIL FROM:<" . $fromEmail . ">\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '250') {
        fclose($stream);
        return false;
    }

    fwrite($stream, "RCPT TO:<" . $toEmail . ">\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '250' && substr($response, 0, 3) !== '251') {
        fclose($stream);
        return false;
    }

    fwrite($stream, "DATA\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '354') {
        fclose($stream);
        return false;
    }

    $headers = [
        'From: ' . $fromName . ' <' . $fromEmail . '>',
        'To: ' . $toEmail,
        'Subject: ' . $subject,
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: base64',
        '',
    ];

    $encodedBody = chunk_split(base64_encode($body));
    fwrite($stream, implode("\r\n", $headers) . "\r\n" . $encodedBody . "\r\n.\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '250') {
        fclose($stream);
        return false;
    }

    fwrite($stream, "QUIT\r\n");
    readSmtpResponse($stream);
    fclose($stream);

    return true;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectBack('Permintaan tidak valid.');
}

if (!empty($_POST['website'])) {
    redirectBack('Permintaan ditolak.');
}

$ip = getClientIp();
addRateLimit($ip);

$submittedAt = isset($_POST['ts']) ? (int) $_POST['ts'] : 0;
if ($submittedAt > 0 && (time() - $submittedAt) < 3) {
    redirectBack('Form terlalu cepat dikirim, mohon tunggu beberapa detik.');
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$captchaToken = trim((string) ($_POST['g-recaptcha-response'] ?? ''));

if ($name === '' || $email === '' || $phone === '' || $message === '') {
    redirectBack('Semua field wajib diisi.');
}

if (strlen($name) < 2 || strlen($message) < 10) {
    redirectBack('Data form tidak valid. Mohon cek kembali isian Anda.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectBack('Format email tidak valid.');
}

if (!preg_match('/^[0-9+\-\s()]{8,20}$/', $phone)) {
    redirectBack('Nomor telepon tidak valid.');
}

$captchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
$captchaPayload = http_build_query([
    'secret' => $mailConfig['secret_key'],
    'response' => $captchaToken,
    'remoteip' => $ip,
]);

$captchaResponse = @file_get_contents($captchaUrl . '?' . $captchaPayload);
if ($captchaResponse === false) {
    redirectBack('Verifikasi keamanan gagal. Silakan coba lagi.');
}

$captchaData = json_decode($captchaResponse, true);
if (!is_array($captchaData) || empty($captchaData['success']) || ($captchaData['score'] ?? 0) < 0.5) {
    redirectBack('Verifikasi keamanan gagal. Coba lagi dalam beberapa saat.');
}

$subject = 'SJCM Contact Form: ' . $name;
$body = "Nama: {$name}\n";
$body .= "Email: {$email}\n";
$body .= "Telepon: {$phone}\n";
$body .= "IP: {$ip}\n\n";
$body .= "Pesan:\n{$message}\n";

if (!smtpSend($mailConfig['smtp_username'], 'SJCM Website', $mailConfig['recipient_email'], $subject, $body)) {
    redirectBack('Maaf, email gagal dikirim. Silakan coba beberapa saat lagi.');
}

$_SESSION['form_success'] = 'Terima kasih, pesan Anda berhasil dikirim. Tim SJCM akan segera membalas.';
header('Location: contact.php');
exit;
