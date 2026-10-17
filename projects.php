<?php
require "config/language.php";
require "config/seo.php";

$escapeAttr = static fn($value) => htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

$architectureTitle = $text['project_architecture_title'] ?? 'Architecture Project';
$structureTitle = $text['project_structure_title'] ?? 'Structure Project';
$mepTitle = $text['project_mep_title'] ?? 'MEP Project';

$architectureAltBase = $escapeAttr($architectureTitle . ' - SJCM Portfolio');
$structureAltBase = $escapeAttr($structureTitle . ' - SJCM Portfolio');
$mepAltBase = $escapeAttr($mepTitle . ' - SJCM Portfolio');

$architectureSlides = array_map(static fn($i) => "assets/images/projects/arsitektur/ar{$i}.jpg", range(1, 17));
$structureSlides = array_map(static fn($i) => "assets/images/projects/struktur/st{$i}.jpg", range(1, 14));
$mepSlides = array_map(static fn($i) => "assets/images/projects/mep/me{$i}.jpg", range(1, 7));

$architectureFallback = $architectureSlides[0];
$structureFallback = $structureSlides[0];
$mepFallback = $mepSlides[0];
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

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <?php include 'google-tag.php'; ?>
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
                    <?= $text['projects_page_title'] ?? 'Our Portfolio'; ?>
                </p>
                <h1 class="mt-5 text-5xl md:text-6xl font-bold leading-tight">
                    <?= $text['projects_page_heading'] ?? 'Engineering Projects'; ?>
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-blue-100 text-lg leading-relaxed">
                    <?= $text['projects_page_subtitle'] ?? 'Project documentation reflecting our capabilities in planning, design, inspection, and construction supervision.'; ?>
                </p>
            </div>
            <!-- Blueprint Line Decoration -->
            <div class="absolute bottom-0 left-0 right-0 h-px bg-white/20"> </div>
        </section>
        <section class="pt-24 bg-gray-50">
            <div class="flex justify-center gap-4 mb-14 flex-wrap">
                <button data-filter="all" class="filter-btn px-6 py-2 rounded-full bg-blue-900 text-white font-semibold">
                    <?= $text['filter_all'] ?? 'All'; ?>
                </button>

                <button data-filter="architecture"
                    class="filter-btn px-6 py-2 rounded-full border">
                    <?= $text['filter_architecture'] ?? 'Architecture'; ?>
                </button>
                <button
                    data-filter="structure" class="filter-btn px-6 py-2 rounded-full border">
                    <?= $text['filter_structure'] ?? 'Structure'; ?>
                </button>
                <button
                    data-filter="mep" class="filter-btn px-6 py-2 rounded-full border">
                    <?= $text['filter_mep'] ?? 'MEP'; ?>
                </button>
            </div>
        </section>

        <section class="pb-20">
            <div class="max-w-7xl mx-auto px-6 space-y-12">
                <!-- Architecture -->
                <div class="project-item bg-white rounded-3xl shadow-lg overflow-hidden grid md:grid-cols-2" data-category="residential architecture">
                    <!-- SLIDER -->
                    <div class="relative overflow-hidden h-72 md:h-96 lg:h-[450px ]">
                        
                        <?php foreach ($architectureSlides as $i => $src) { ?>
                            <img
                                src="<?= $escapeAttr($src); ?>"
                                alt="<?= $architectureAltBase; ?><?= $i ? ' - Photo ' . ($i + 1) : ''; ?>"
                                class="project-slide w-full h-full object-cover absolute transition duration-700<?= $i ? ' opacity-0' : ''; ?>"
                                <?= $i ? 'onerror="this.src=\'' . $escapeAttr($architectureFallback) . '\'"' : ''; ?>>
                        <?php } ?>

                        <!-- Buttons -->
                        <button onclick="prevSlide(this)" class="absolute left-5 top-1/2 -translate-y-1/2 bg-white/80 w-10 h-10 rounded-full">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button onclick="nextSlide(this)" class="absolute right-5 top-1/2 -translate-y-1/2 bg-white/80 w-10 h-10 rounded-full">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <button onclick="openModal(this)" class="absolute right-3 md:right-16 top-5 bg-white/80 w-10 h-10 rounded-full" title="Lihat foto besar">
                            <i class="fa-solid fa-expand"></i>
                        </button>
                    </div>
                    <!-- DETAIL -->
                    <div class="p-10">
                        <p class="text-blue-700 uppercase tracking-widest text-sm font-semibold">
                            <?= $text['project_architecture_label']; ?>
                        </p>
                        <h3 class="mt-3 text-2xl font-bold text-gray-800"><?= $text['project_architecture_title']; ?></h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            <?= $text['project_architecture_description']; ?>
                        </p>
                        <ul class="mt-5 space-y-2 text-sm text-gray-700">
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_architecture_item_1']; ?></li>
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_architecture_item_2']; ?></li>
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_architecture_item_3']; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Structure -->
                <div class="project-item bg-white rounded-3xl shadow-lg overflow-hidden grid md:grid-cols-2" data-category="structure">
                    <!-- SLIDER -->
                    <div class="relative overflow-hidden h-72 md:h-96 lg:h-[450px ]">
                        
                        <?php foreach ($structureSlides as $i => $src) { ?>
                            <img
                                src="<?= $escapeAttr($src); ?>"
                                alt="<?= $structureAltBase; ?><?= $i ? ' - Photo ' . ($i + 1) : ''; ?>"
                                class="project-slide w-full h-full object-cover absolute transition duration-700<?= $i ? ' opacity-0' : ''; ?>"
                                <?= $i ? 'onerror="this.src=\'' . $escapeAttr($structureFallback) . '\'"' : ''; ?>>
                        <?php } ?>


                        <!-- Buttons -->
                        <button onclick="prevSlide(this)" class="absolute left-5 top-1/2 -translate-y-1/2 bg-white/80 w-10 h-10 rounded-full">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button onclick="nextSlide(this)" class="absolute right-5 top-1/2 -translate-y-1/2 bg-white/80 w-10 h-10 rounded-full">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <button onclick="openModal(this)" class="absolute right-3 md:right-16 top-5 bg-white/80 w-10 h-10 rounded-full" title="Lihat foto besar">
                            <i class="fa-solid fa-expand"></i>
                        </button>
                    </div>
                    <!-- DETAIL -->
                    <div class="p-10">
                        <p class="text-blue-700 uppercase tracking-widest text-sm font-semibold">
                            <?= $text['project_structure_label']; ?>
                        </p>
                        <h3 class="mt-3 text-2xl font-bold text-gray-800"><?= $text['project_structure_title']; ?></h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            <?= $text['project_structure_description']; ?>
                        </p>
                        <ul class="mt-5 space-y-2 text-sm text-gray-700">
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_structure_item_1']; ?></li>
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_structure_item_2']; ?></li>
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_structure_item_3']; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- MEP -->
                <div class="project-item bg-white rounded-3xl shadow-lg overflow-hidden grid md:grid-cols-2" data-category="mep">
                    <!-- slider      -->
                    <div class="relative overflow-hidden h-72 md:h-96 lg:h-[450px ]">
                        
                        <?php foreach ($mepSlides as $i => $src) { ?>
                            <img
                                src="<?= $escapeAttr($src); ?>"
                                alt="<?= $mepAltBase; ?><?= $i ? ' - Photo ' . ($i + 1) : ''; ?>"
                                class="project-slide w-full h-full object-cover absolute transition duration-700<?= $i ? ' opacity-0' : ''; ?>"
                                <?= $i ? 'onerror="this.src=\'' . $escapeAttr($mepFallback) . '\'"' : ''; ?>>
                        <?php } ?>


                        <button onclick="prevSlide(this)" class="absolute left-5 top-1/2 -translate-y-1/2 bg-white/80 w-10 h-10 rounded-full">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button onclick="nextSlide(this)" class="absolute right-5 top-1/2 -translate-y-1/2 bg-white/80 w-10 h-10 rounded-full">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <button onclick="openModal(this)" class="absolute right-3 md:right-16 top-5 bg-white/80 w-10 h-10 rounded-full" title="Lihat foto besar">
                            <i class="fa-solid fa-expand"></i>
                        </button>
                    </div>
                    <!-- details  -->
                    <div class="p-10">
                        <p class="text-blue-700 uppercase tracking-widest text-sm font-semibold">
                            <?= $text['project_mep_label']; ?>
                        </p>
                        <h3 class="mt-3 text-2xl font-bold text-gray-800"><?= $text['project_mep_title']; ?></h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            <?= $text['project_mep_description']; ?>
                        </p>
                        <div class="mt-6 space-y-3 text-gray-700">
                            <ul class="mt-5 space-y-2 text-sm text-gray-700">
                                <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_mep_item_1']; ?></li>
                                <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_mep_item_2']; ?></li>
                                <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_mep_item_3']; ?></li>
                                <li><i class="fa-solid fa-check text-blue-900 mr-2"></i><?= $text['project_mep_item_4']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- IMAGE MODAL -->
        <div id="imageModal" class="fixed inset-0 bg-black/60 hidden z-50 flex items-center justify-center">
            <div class="max-w-5xl w-full mx-4">
                <div class="relative bg-white rounded-xl overflow-hidden">
                    <button onclick="closeModal()" class="absolute right-4 top-4 bg-white/90 w-10 h-10 rounded-full z-50">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <button onclick="modalPrev()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 w-10 h-10 rounded-full z-50">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button onclick="modalNext()" class="absolute right-4 md:right-16 top-1/2 -translate-y-1/2 bg-white/90 w-10 h-10 rounded-full z-50">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <img id="modalImage" src="" alt="SJCM project portfolio image" class="w-full h-auto object-contain bg-black">
                    <!-- <div id="modalCaption" class="p-4 text-gray-700"></div> -->
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include "footer.php" ?>
        <script src="js/main.js"></script>
        <script>
            // FILTER

            const buttons = document.querySelectorAll(".filter-btn");

            const projects = document.querySelectorAll(".project-item");


            buttons.forEach(btn => {


                btn.addEventListener("click", () => {


                    let filter = btn.dataset.filter;



                    buttons.forEach(b => {

                        b.classList.remove(
                            "bg-blue-900",
                            "text-white"
                        );

                    });



                    btn.classList.add(
                        "bg-blue-900",
                        "text-white"
                    );



                    projects.forEach(project => {


                        let category = project.dataset.category;



                        if (
                            filter === "all" ||
                            category.includes(filter)
                        )

                        {

                            project.style.display = "grid";

                        } else

                        {

                            project.style.display = "none";

                        }



                    });


                });


            });





            // SLIDER

            function nextSlide(button) {


                let container =
                    button.closest(".project-item");


                let slides =
                    container.querySelectorAll(".project-slide");


                let active = [...slides].findIndex(
                    slide => !slide.classList.contains("opacity-0")
                );



                slides[active].classList.add("opacity-0");


                let next =
                    (active + 1) % slides.length;


                slides[next]
                    .classList.remove("opacity-0");


            }



            function prevSlide(button) {


                let container =
                    button.closest(".project-item");


                let slides =
                    container.querySelectorAll(".project-slide");


                let active = [...slides].findIndex(
                    slide => !slide.classList.contains("opacity-0")
                );



                slides[active].classList.add("opacity-0");


                let prev =
                    (active - 1 + slides.length) % slides.length;


                slides[prev]
                    .classList.remove("opacity-0");


            }

            // Modal: buka foto besar
            let modalSlides = [];
            let modalIndex = 0;
            let modalAlt = 'SJCM project portfolio image';

            function openModal(button) {
                const container = button.closest('.project-item');
                const slides = Array.from(container.querySelectorAll('.project-slide'));
                modalSlides = slides.map(s => s.getAttribute('src'));
                modalIndex = slides.findIndex(s => !s.classList.contains('opacity-0'));
                if (modalIndex === -1) modalIndex = 0;

                const captionEl = container.querySelector('.p-10 h3') || container.querySelector('.p-10 p');
                const caption = captionEl ? captionEl.innerText.trim() : '';

                const modal = document.getElementById('imageModal');
                const modalImage = document.getElementById('modalImage');
                modalAlt = caption ? `${caption} - SJCM` : 'SJCM project portfolio image';
                modalImage.src = modalSlides[modalIndex] || '';
                modalImage.alt = modalAlt;
                // document.getElementById('modalCaption').innerText = caption;
                modal.classList.remove('hidden');
                // focus to capture keyboard
                modal.focus && modal.focus();
            }

            function modalNext() {
                if (!modalSlides || !modalSlides.length) return;
                modalIndex = (modalIndex + 1) % modalSlides.length;
                const modalImage = document.getElementById('modalImage');
                modalImage.src = modalSlides[modalIndex];
                modalImage.alt = modalAlt;
            }

            function modalPrev() {
                if (!modalSlides || !modalSlides.length) return;
                modalIndex = (modalIndex - 1 + modalSlides.length) % modalSlides.length;
                const modalImage = document.getElementById('modalImage');
                modalImage.src = modalSlides[modalIndex];
                modalImage.alt = modalAlt;
            }

            function closeModal() {
                const modal = document.getElementById('imageModal');
                modal.classList.add('hidden');
                const modalImage = document.getElementById('modalImage');
                modalImage.src = '';
                modalImage.alt = 'SJCM project portfolio image';
                // document.getElementById('modalCaption').innerText = '';
            }

            // Tutup modal saat klik di luar konten
            document.addEventListener('click', function(e) {
                const modal = document.getElementById('imageModal');
                if (!modal) return;
                if (!modal.classList.contains('hidden') && e.target.id === 'imageModal') {
                    closeModal();
                }
            });

            // Keyboard navigation for modal
            document.addEventListener('keydown', function(e) {
                const modal = document.getElementById('imageModal');
                if (!modal || modal.classList.contains('hidden')) return;
                if (e.key === 'ArrowRight') {
                    modalNext();
                } else if (e.key === 'ArrowLeft') {
                    modalPrev();
                } else if (e.key === 'Escape') {
                    closeModal();
                }
            });

            // Click on modal image to go next
            document.getElementById('modalImage')?.addEventListener('click', function() {
                modalNext();
            });

            // Auto-slide untuk masing-masing project
            document.querySelectorAll('.project-item').forEach(item => {
                const interval = 4000; // ms
                setInterval(() => {
                    const slides = item.querySelectorAll('.project-slide');
                    if (!slides.length) return;
                    const active = [...slides].findIndex(s => !s.classList.contains('opacity-0'));
                    slides[active].classList.add('opacity-0');
                    const next = (active + 1) % slides.length;
                    slides[next].classList.remove('opacity-0');
                }, interval);
            });
        </script>

</body>

</html>