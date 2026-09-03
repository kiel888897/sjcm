<?php
require "config/language.php";
require "config/seo.php";
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?= htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?= htmlspecialchars($seo['keywords'] ?? $defaultKeywords, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image:secure_url" content="<?= htmlspecialchars($ogImageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="<?= htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImageUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-white text-gray-800">
    <!-- NAVBAR -->
    <?php include "navbar.php" ?>
    <main id="main-content">
        <section class="relative pt-44 pb-28 overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-cyan-900 text-white">
            <!-- Decorative Background -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-10 left-10 w-72 h-72 bg-cyan-400 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-10 w-96 h-96 bg-blue-400 rounded-full blur-3xl"></div>
            </div>
            <div class="relative max-w-7xl mx-auto px-6 text-center">
                <p class="text-cyan-300 uppercase tracking-[5px] font-semibold text-sm">
                    <?= $text['services_page_title'] ?? 'Our Services'; ?>
                </p>
                <h1 class="mt-5 text-5xl md:text-6xl font-bold leading-tight">
                    <?= $text['services_page_heading'] ?? 'Integrated Building Consultancy'; ?>
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-blue-100 text-lg leading-relaxed">
                    <?= $text['services_page_subtitle'] ?? 'SJCM provides integrated building consultancy services, from planning through supervision, in accordance with professional standards.'; ?>
                </p>
            </div>
            <!-- Blueprint Line Decoration -->
            <div class="absolute bottom-0 left-0 right-0 h-px bg-white/20"> </div>
        </section>

        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <!-- SERVICES GRID -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- ARCHITECTURE -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5 items-start">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_architecture_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600 leading-relaxed">
                                    <?= $text['service_architecture_description']; ?>
                                </p>
                                <ul class="mt-5 space-y-2 text-sm text-gray-700">
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_architecture_item_1']; ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_architecture_item_2']; ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_architecture_item_3']; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- STRUCTURE -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50 ">
                        <div class="flex gap-5 items-start">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-compass-drafting"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_structure_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600 leading-relaxed">
                                    <?= $text['service_structure_description']; ?>
                                </p>
                                <ul class="mt-5 space-y-2 text-sm">
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_structure_item_1']; ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_structure_item_2']; ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_structure_item_3']; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- MEP -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-gears"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_mep_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600">
                                    <?= $text['service_mep_description']; ?>
                                </p>
                                <ul class="mt-5 space-y-2 text-sm">
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_mep_item_1']; ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_mep_item_2']; ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_mep_item_3']; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- PBG SLF -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_pbg_slf_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600">
                                    <?= $text['service_pbg_slf_description']; ?>
                                </p>
                                <ul class="mt-5 space-y-2 text-sm">

                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_pbg_slf_item_1']; ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_pbg_slf_item_2']; ?>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check text-blue-900"></i>
                                        <?= $text['service_pbg_slf_item_3']; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- DESIGN -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-pen-ruler"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_design_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600">
                                    <?= $text['service_design_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- CHECKING -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-magnifying-glass-chart"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_checking_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600">
                                    <?= $text['service_checking_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Review -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_review_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600">
                                    <?= $text['service_review_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- MANAGEMEN KONSTRUKSI -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5">
                            <div class=" w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-hard-hat"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_construction_management_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600">
                                    <?= $text['service_construction_management_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ESTIMATOR -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-calculator"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_estimator_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600">
                                    <?= $text['service_estimator_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>



                    <!-- QUANTITY SURVEYOR -->
                    <div class="p-8 rounded-3xl border hover:shadow-xl transition bg-gray-50">
                        <div class="flex gap-5">
                            <div class="w-16 h-16 shrink-0 bg-blue-900 text-white rounded-2xl flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-ruler-combined"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">
                                    <?= $text['service_quantity_surveyor_title']; ?>
                                </h3>
                                <p class="mt-3 text-gray-600">
                                    <?= $text['service_quantity_surveyor_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </section>

        <!-- FOOTER -->
    </main> <?php include "footer.php" ?>
    <script src="js/main.js"></script>


</body>

</html>