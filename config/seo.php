<?php

$siteUrl = 'https://sjcm4u.com';
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$currentPage = basename($currentPath) ?: 'index.php';

$seoPages = [
    'index.php' => [
        'title' => 'PT Sinergi Jaya Cipta Mandiri | Arsitek dan Konsultan Teknik Bali',
        'description' => 'PT Sinergi Jaya Cipta Mandiri adalah konsultan arsitektur, struktur, MEP, PBG, SLF, dan konstruksi profesional di Denpasar, Bali.',
    ],
    'about.php' => [
        'title' => 'Tentang SJCM | Konsultan Teknik dan Arsitektur Bali',
        'description' => 'Kenali PT Sinergi Jaya Cipta Mandiri, tim profesional, visi, dan layanan konsultasi teknik kami di Denpasar, Bali.',
    ],
    'services.php' => [
        'title' => 'Layanan Konsultan Teknik | SJCM Bali',
        'description' => 'Layanan arsitektur, struktur, MEP, PBG, SLF, desain, checking, manajemen konstruksi, estimator, dan quantity surveyor dari SJCM Bali.',
    ],
    'projects.php' => [
        'title' => 'Portofolio Proyek Engineering | SJCM Bali',
        'description' => 'Lihat portofolio proyek arsitektur, struktur, dan MEP PT Sinergi Jaya Cipta Mandiri di Bali.',
    ],
    'contact.php' => [
        'title' => 'Kontak SJCM | Konsultan Teknik Bali',
        'description' => 'Hubungi PT Sinergi Jaya Cipta Mandiri untuk konsultasi arsitektur, struktur, MEP, PBG, SLF, dan kebutuhan konstruksi.',
    ],
];

$seo = $seoPages[$currentPage] ?? $seoPages['index.php'];
$canonicalUrl = rtrim($siteUrl, '/') . ($currentPage === 'index.php' ? '/' : '/' . $currentPage);
