<?php

require "config/language.php";
require "config/seo.php";

$videoPageUrl = rtrim($siteUrl, '/') . '/video.php';
$videoUrl = rtrim($siteUrl, '/') . '/assets/hero3.mp4';
$videoThumbnailUrl = rtrim($siteUrl, '/') . '/assets/images/og-images.jpg';
$videoTitle = $text['video_page_title'] ?? 'SJCM Architecture and Engineering Consultant';
$videoDescription = $text['video_page_description'] ?? 'Discover SJCM architecture and engineering consulting services in Bali.';
$videoUploadDate = '2026-09-07';

?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title><?= htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8'); ?> | SJCM</title>
    <meta name="description" content="<?= htmlspecialchars($videoDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?= htmlspecialchars($videoPageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="video.other">
    <meta property="og:title" content="<?= htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($videoDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($videoPageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?= htmlspecialchars($videoThumbnailUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script type="application/ld+json">
        <?= json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'VideoObject',
            'name' => $videoTitle,
            'description' => $videoDescription,
            'thumbnailUrl' => [$videoThumbnailUrl],
            'uploadDate' => $videoUploadDate,
            'contentUrl' => $videoUrl,
            'embedUrl' => $videoPageUrl,
            'mainEntityOfPage' => $videoPageUrl,
            'inLanguage' => $lang === 'id' ? 'id-ID' : 'en-US',
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'PT Sinergi Jaya Cipta Mandiri',
                'url' => rtrim($siteUrl, '/') . '/',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => rtrim($siteUrl, '/') . '/assets/images/logo.png',
                ],
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
    </script>
    <?php include 'google-tag.php'; ?>
</head>

<body class="bg-slate-50 text-gray-800">
    <?php include 'navbar.php'; ?>

    <main class="pt-32 pb-20">
        <article class="max-w-5xl mx-auto px-6">
            <div class="mb-8 max-w-3xl">
                <p class="text-blue-700 font-semibold uppercase tracking-[4px] text-sm">
                    <?= htmlspecialchars($text['hero_video_label'] ?? 'Architect and Engineering Consultant', ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <h1 class="mt-4 text-4xl sm:text-5xl font-bold leading-tight text-gray-900">
                    <?= htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8'); ?>
                </h1>
                <p class="mt-5 text-lg leading-relaxed text-gray-600">
                    <?= htmlspecialchars($videoDescription, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p class="mt-4 leading-relaxed text-gray-600">
                    <?= htmlspecialchars($text['video_page_context'] ?? 'See how our team approaches architectural design, structural engineering, MEP coordination, and construction consulting for building projects in Bali.', ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </div>

            <div class="overflow-hidden rounded-3xl bg-blue-950 shadow-2xl shadow-blue-950/20">
                <video
                    class="block aspect-video w-full object-cover"
                    controls
                    preload="metadata"
                    playsinline
                    poster="<?= htmlspecialchars($videoThumbnailUrl, ENT_QUOTES, 'UTF-8'); ?>"
                    aria-label="<?= htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8'); ?>">
                    <source src="<?= htmlspecialchars($videoUrl, ENT_QUOTES, 'UTF-8'); ?>" type="video/mp4">
                    <?= htmlspecialchars($text['video_not_supported'] ?? 'Your browser does not support HTML video.', ENT_QUOTES, 'UTF-8'); ?>
                </video>
            </div>

            <section class="mt-12 border-t border-gray-200 pt-10">
                <h2 class="text-2xl font-bold text-gray-900">
                    <?= htmlspecialchars($text['video_related_services_title'] ?? 'Engineering consulting for your building project', ENT_QUOTES, 'UTF-8'); ?>
                </h2>
                <p class="mt-4 max-w-3xl leading-relaxed text-gray-600">
                    <?= htmlspecialchars($text['video_related_services_description'] ?? 'SJCM supports clients with architecture, structure, MEP engineering, construction management, cost estimation, PBG, and SLF services from planning through project delivery.', ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <a href="services.php" class="mt-6 inline-flex rounded-lg bg-blue-900 px-6 py-3 font-semibold text-white transition hover:bg-blue-800">
                    <?= htmlspecialchars($text['video_services_button'] ?? 'Explore our services', ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </section>
        </article>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>