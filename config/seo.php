<?php

$siteUrl = 'https://sjcm4u.com';
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$currentPage = basename($currentPath) ?: 'index.php';
$defaultKeywords = 'SJCM, PT Sinergi Jaya Cipta Mandiri, arsitek Bali, engineering consultant Bali, konsultan teknik Bali, architecture consultant, structure consultant, MEP consultant, PBG SLF, construction consultant';
$ogImageUrl = rtrim($siteUrl, '/') . '/assets/images/og-images.jpg';

$seoPages = [
    'index.php' => [
        'title' => 'PT Sinergi Jaya Cipta Mandiri | Architect & Engineering Consultant Bali',
        'description' => 'SJCM is a professional architecture, structure, MEP, PBG, SLF, and construction consulting firm in Bali, Indonesia. We provide engineering solutions for better building future.',
        'keywords' => 'SJCM Bali, arsitek Bali, engineering consultant Bali, konsultan teknik Bali, architect and engineering consultant, MEP consultant, PBG SLF, construction management Bali',
    ],
    'about.php' => [
        'title' => 'About SJCM | Engineering Consultant & Architecture Bali',
        'description' => 'Learn about PT Sinergi Jaya Cipta Mandiri, our professional team, vision, and engineering consulting services in Denpasar, Bali.',
        'keywords' => 'about SJCM, profile perusahaan Bali, arsitek Bali, konsultan teknik Bali, engineering consultant Bali, architecture firm Bali',
    ],
    'services.php' => [
        'title' => 'Engineering Services | Architecture, Structure, MEP, PBG & SLF Bali',
        'description' => 'SJCM provides architecture, structure, MEP, PBG, SLF, design review, checking, construction management, estimator, and quantity surveyor services in Bali.',
        'keywords' => 'architecture service Bali, structure consulting Bali, MEP consultant, PBG service Bali, SLF consultant, construction management Bali, quantity surveyor Bali',
    ],
    'projects.php' => [
        'title' => 'Project Portfolio | Architecture, Structure & MEP Bali',
        'description' => 'Browse our engineering project portfolio in architecture, structure, and MEP across Bali, Indonesia.',
        'keywords' => 'project portfolio Bali, architecture project Bali, structure project Bali, MEP project Bali, engineering project portfolio',
    ],
    'contact.php' => [
        'title' => 'Contact SJCM | Engineering Consultant Bali',
        'description' => 'Contact PT Sinergi Jaya Cipta Mandiri for architecture, structure, MEP, PBG, SLF, and construction consulting services in Bali.',
        'keywords' => 'contact SJCM, konsultasi arsitek Bali, engineering consultant Bali, desain bangunan Bali, PBG SLF consultant, contact engineering services Bali',
    ],
];

$seo = $seoPages[$currentPage] ?? $seoPages['index.php'];
$canonicalUrl = rtrim($siteUrl, '/') . ($currentPage === 'index.php' ? '/' : '/' . $currentPage);
