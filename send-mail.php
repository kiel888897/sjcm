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
        $_SESSION['form_error'] = 'Too many requests. Please try again in a few minutes.';
        header('Location: contact.php#contact-form-section');
        exit;
    }

    $_SESSION[$limitKey] = $attempts;
}

function redirectBack(string $message, string $type = 'error'): void
{
    $_SESSION['form_' . $type] = $message;
    header('Location: contact.php#contact-form-section');
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

    $connectionHost = $host;
    if ($encryption === 'ssl') {
        $connectionHost = 'ssl://' . $host;
    }

    $stream = fsockopen($connectionHost, $port, $errno, $errstr, 30);
    if (!$stream) {
        return false;
    }

    stream_set_timeout($stream, 30);

    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '220') {
        fclose($stream);
        return false;
    }

    if ($encryption === 'tls') {
        fwrite($stream, "EHLO " . $host . "\r\n");
        $response = readSmtpResponse($stream);
        if (substr($response, 0, 3) !== '250') {
            fclose($stream);
            return false;
        }

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
    }

    fwrite($stream, "EHLO " . $host . "\r\n");
    $response = readSmtpResponse($stream);
    if (substr($response, 0, 3) !== '250') {
        fclose($stream);
        return false;
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
        'Content-Type: text/html; charset=UTF-8',
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
    redirectBack('Invalid request.');
}

if (!empty($_POST['website'])) {
    redirectBack('Request rejected.');
}

$ip = getClientIp();
addRateLimit($ip);

$submittedAt = isset($_POST['ts']) ? (int) $_POST['ts'] : 0;
if ($submittedAt > 0 && (time() - $submittedAt) < 3) {
    redirectBack('The form was sent too quickly. Please wait a few seconds and try again.');
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$captchaToken = trim((string) ($_POST['g-recaptcha-response'] ?? ''));

if ($name === '' || $email === '' || $phone === '' || $message === '') {
    redirectBack('All fields are required.');
}

if (strlen($name) < 2 || strlen($message) < 10) {
    redirectBack('The form data is invalid. Please check your input and try again.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectBack('Email format is invalid.');
}

if (!preg_match('/^[0-9+\-\s()]{8,20}$/', $phone)) {
    redirectBack('Phone number is invalid.');
}

$captchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
$captchaPayload = http_build_query([
    'secret' => $mailConfig['secret_key'],
    'response' => $captchaToken,
    'remoteip' => $ip,
]);

$captchaResponse = @file_get_contents($captchaUrl . '?' . $captchaPayload);
if ($captchaResponse === false) {
    redirectBack('Security verification failed. Please try again.');
}

$captchaData = json_decode($captchaResponse, true);
if (!is_array($captchaData) || empty($captchaData['success']) || ($captchaData['score'] ?? 0) < 0.5) {
    redirectBack('Security verification failed. Please try again in a moment.');
}

$subject = 'SJCM Contact Form: ' . $name;
$waPhone = preg_replace('/\D+/', '', $phone);
if (strlen($waPhone) > 0 && $waPhone[0] === '0') {
    $waPhone = '62' . substr($waPhone, 1);
}
$waMessage = "Hello {$name}, I am from sjcm4u.com. Thank you for contacting us. We have received your message.";
$waLink = 'https://wa.me/' . $waPhone . '?text=' . rawurlencode($waMessage);
$body = "<p><strong>Name:</strong> " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
$body .= "<p><strong>Email:</strong> " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
$body .= "<p><strong>Phone:</strong> " . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>";
$body .= "<p><strong>WhatsApp:</strong> <a href=\"" . htmlspecialchars($waLink, ENT_QUOTES, 'UTF-8') . "\" style=\"display:inline-block;padding:10px 18px;background:#25D366;color:#ffffff;text-decoration:none;border-radius:6px;font-weight:bold;\">Here</a></p>";
$body .= "<p><strong>IP:</strong> " . htmlspecialchars($ip, ENT_QUOTES, 'UTF-8') . "</p>";
$body .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . "</p>";

if (!smtpSend($mailConfig['smtp_username'], 'SJCM Website', $mailConfig['recipient_email'], $subject, $body)) {
    redirectBack('Sorry, the email could not be sent. Please try again later.');
}

$_SESSION['form_success'] = 'Thank you. Your message has been sent successfully. Our team will contact you soon.';
header('Location: contact.php#contact-form-section');
exit;
