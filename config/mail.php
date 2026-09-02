<?php

return [
    'smtp_host' => getenv('SJCM_SMTP_HOST') ?: 'smtp.gmail.com',
    'smtp_port' => (int) (getenv('SJCM_SMTP_PORT') ?: 587),
    'smtp_encryption' => getenv('SJCM_SMTP_ENCRYPTION') ?: 'tls',
    'smtp_username' => getenv('SJCM_SMTP_USERNAME') ?: 'admin@sjcm4u.com',
    'smtp_password' => getenv('SJCM_SMTP_PASSWORD') ?: 'Tv.Q3,+q6O%-^TC3',
    'recipient_email' => getenv('SJCM_TO_EMAIL') ?: 'admin@sjcm4u.com',
    'recipient_name' => getenv('SJCM_TO_NAME') ?: 'SJCM',
    'site_key' => getenv('SJCM_RECAPTCHA_SITE_KEY') ?: '6Lcd3qQtAAAAAGhmDlmzGYiQRW6fz1sFmHS631Ho',
    'secret_key' => getenv('SJCM_RECAPTCHA_SECRET_KEY') ?: '6Lcd3qQtAAAAAIJP79LH6ZL-4Y4dcj2TGWRCMpSO',
];
