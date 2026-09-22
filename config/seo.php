<?php

$siteUrl = 'https://sjcm4u.com';
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$currentPage = basename($currentPath) ?: 'index.php';
$defaultKeywords = 'SJCM, PT Sinergi Jaya Cipta Mandiri, konsultan PBG Bali, jasa PBG Bali, pengurusan PBG Bali, arsitek Bali, konsultan teknik Bali, MEP consultant, SLF Bali, construction consultant';
$ogImageUrl = rtrim($siteUrl, '/') . '/assets/images/og-images.jpg';

$seoPages = [
    'index.php' => [
        'title' => 'PT Sinergi Jaya Cipta Mandiri | Architect & Engineering Consultant Bali',
        'description' => 'SJCM is a professional konsultan PBG Bali and engineering consulting firm providing architecture, structure, MEP, SLF, and construction services in Bali, Indonesia.',
        'keywords' => 'SJCM Bali, konsultan PBG Bali, jasa PBG Bali, pengurusan PBG Bali, arsitek Bali, konsultan teknik Bali, MEP consultant, SLF Bali, construction management Bali',
    ],
    'about.php' => [
        'title' => 'About SJCM | Engineering Consultant & Architecture Bali',
        'description' => 'Learn about PT Sinergi Jaya Cipta Mandiri, our professional team, vision, and engineering consulting services in Denpasar, Bali.',
        'keywords' => 'about SJCM, profile perusahaan Bali, arsitek Bali, konsultan teknik Bali, engineering consultant Bali, architecture firm Bali',
    ],
    'services.php' => [
        'title' => 'Konsultan PBG Bali | Jasa PBG, SLF & Engineering SJCM',
        'description' => 'SJCM menyediakan jasa konsultan PBG Bali, pendampingan pengurusan PBG dan SLF, serta layanan arsitektur, struktur, MEP, dan konstruksi untuk proyek di Bali.',
        'keywords' => 'konsultan PBG Bali, jasa PBG Bali, pengurusan PBG Bali, konsultan SLF Bali, arsitek Bali, konsultan struktur Bali, MEP Bali, manajemen konstruksi Bali',
    ],
    'projects.php' => [
        'title' => 'Project Portfolio | Architecture, Structure & MEP Bali',
        'description' => 'Browse our engineering project portfolio in architecture, structure, and MEP across Bali, Indonesia.',
        'keywords' => 'project portfolio Bali, architecture project Bali, structure project Bali, MEP project Bali, engineering project portfolio',
    ],
    'contact.php' => [
        'title' => 'Hubungi Konsultan PBG Bali | SJCM',
        'description' => 'Hubungi SJCM, konsultan PBG Bali, untuk konsultasi pengurusan PBG, SLF, desain arsitektur, struktur, MEP, dan kebutuhan konstruksi di Bali.',
        'keywords' => 'hubungi konsultan PBG Bali, konsultasi PBG Bali, jasa pengurusan PBG Bali, SLF Bali, konsultan teknik Bali, SJCM',
    ],
    'video.php' => [
        'title' => 'SJCM Architecture and Engineering Consultant Video',
        'description' => 'Watch SJCM architecture and engineering consulting services for building projects in Bali, Indonesia.',
        'keywords' => 'SJCM video, architecture consultant Bali, engineering consultant Bali, construction consultant video',
    ],
];

$seo = $seoPages[$currentPage] ?? $seoPages['index.php'];
$canonicalUrl = rtrim($siteUrl, '/') . ($currentPage === 'index.php' ? '/' : '/' . $currentPage);
