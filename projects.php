<?php
require "config/language.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>
        PT Sinergi Jaya Cipta Mandiri | Arsitek dan Konsultan Teknik Bali
    </title>


    <meta name="description"
        content="
PT Sinergi Jaya Cipta Mandiri adalah konsultan arsitektur,
struktur, MEP, PBG dan SLF profesional di Denpasar Bali.
">


    <link rel="stylesheet" href="css/style.css">


    <script src="https://cdn.tailwindcss.com"></script>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<body class="bg-white text-gray-800">
    <!-- NAVBAR -->
    <?php include "navbar.php" ?>
    <section class="relative pt-44 pb-28 overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-cyan-900 text-white">
        <!-- Decorative Background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-72 h-72 bg-cyan-400 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-10 w-96 h-96 bg-blue-400 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-6 text-center">
            <p class="text-cyan-300 uppercase tracking-[5px] font-semibold text-sm">
                Our Portfolio
            </p>
            <h1 class="mt-5 text-5xl md:text-6xl font-bold leading-tight">
                Arsitek & Konsultan Teknik
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-blue-100 text-lg leading-relaxed">
                Dokumentasi proyek yang mencerminkan kemampuan kami dalam perencanaan, desain, pengecekan dan pengawasan konstruksi.
            </p>
        </div>
        <!-- Blueprint Line Decoration -->
        <div class="absolute bottom-0 left-0 right-0 h-px bg-white/20"> </div>
    </section>
    <section class="pt-24 bg-gray-50">
        <div class="flex justify-center gap-4 mb-14 flex-wrap">
            <button data-filter="all" class="filter-btn px-6 py-2 rounded-full bg-blue-900 text-white font-semibold">
                All
            </button>

            <button data-filter="architecture"
                class="filter-btn px-6 py-2 rounded-full border">
                Architecture
            </button>
            <button
                data-filter="structure" class="filter-btn px-6 py-2 rounded-full border">
                Structure
            </button>
            <button
                data-filter="mep" class="filter-btn px-6 py-2 rounded-full border">
                MEP
            </button>
        </div>
    </section>

    <section class="pb-20">
        <div class="max-w-7xl mx-auto px-6 space-y-12">
            <!-- Architecture -->
            <div class="project-item bg-white rounded-3xl shadow-lg overflow-hidden grid md:grid-cols-2" data-category="residential architecture">
                <!-- SLIDER -->
                <div class="relative overflow-hidden h-72 md:h-96 lg:h-[450px ]">
                    <img src="assets/images/projects/arsitektur/ar1.jpg" class="project-slide w-full h-full object-cover absolute transition duration-700">
                    <img src="assets/images/projects/arsitektur/ar2.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar3.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar4.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar5.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar6.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar7.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar8.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar9.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar10.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar11.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar12.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar13.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar14.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar15.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar16.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
                    <img src="assets/images/projects/arsitektur/ar17.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/arsitektur/ar1.jpg'">
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
                        Architecture
                    </p>
                    <h3 class="mt-3 text-2xl font-bold text-gray-800">Desain yang Memperhatikan Pengalaman Pengguna</h3>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Perencanaan arsitektur estetis dan fungsional; fokus pada tata ruang, sirkulasi, dan identitas visual yang kuat untuk setiap proyek.
                    </p>
                    <ul class="mt-5 space-y-2 text-sm text-gray-700">
                        <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Konsep desain & skematik</li>
                        <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Koordinasi interior dan material</li>
                        <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Izin & dokumentasi teknis</li>
                    </ul>
                </div>
            </div>

            <!-- Structure -->
            <div class="project-item bg-white rounded-3xl shadow-lg overflow-hidden grid md:grid-cols-2" data-category="structure">
                <!-- SLIDER -->
                <div class="relative overflow-hidden h-72 md:h-96 lg:h-[450px ]">
                    <img src="assets/images/projects/struktur/st1.jpg" class="project-slide w-full h-full object-cover absolute transition duration-700">
                    <img src="assets/images/projects/struktur/st2.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st3.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st4.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st5.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st6.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st7.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st8.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st9.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st10.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st11.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st12.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st13.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">
                    <img src="assets/images/projects/struktur/st14.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/struktur/st1.jpg'">

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
                        Structure
                    </p>
                    <h3 class="mt-3 text-2xl font-bold text-gray-800">Solusi Struktur yang Andal</h3>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Perancangan struktur yang mengutamakan keselamatan dan efisiensi; solusi struktural disesuaikan dengan kondisi site dan kebutuhan arsitektural.
                    </p>
                    <ul class="mt-5 space-y-2 text-sm text-gray-700">
                        <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Analisis beban & optimasi struktur</li>
                        <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Desain pondasi dan sistem rangka</li>
                        <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Detailing & shop drawing</li>
                    </ul>
                </div>
            </div>

            <!-- MEP -->
            <div class="project-item bg-white rounded-3xl shadow-lg overflow-hidden grid md:grid-cols-2" data-category="mep">
                <!-- slider      -->
                <div class="relative overflow-hidden h-72 md:h-96 lg:h-[450px ]">
                    <img src="assets/images/projects/mep/me1.jpg" class="project-slide w-full h-full object-cover absolute transition duration-700" onerror="this.src='assets/images/projects/project1-1.jpg'">
                    <img src="assets/images/projects/mep/me2.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/project1-2.jpg'">
                    <img src="assets/images/projects/mep/me3.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/project1-3.jpg'">
                    <img src="assets/images/projects/mep/me4.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/project1-3.jpg'">
                    <img src="assets/images/projects/mep/me5.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/project1-3.jpg'">
                    <img src="assets/images/projects/mep/me6.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/project1-3.jpg'">
                    <img src="assets/images/projects/mep/me7.jpg" class="project-slide w-full h-full object-cover absolute opacity-0 transition duration-700" onerror="this.src='assets/images/projects/project1-3.jpg'">

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
                        MEP
                    </p>
                    <h3 class="mt-3 text-2xl font-bold text-gray-800">Sistem Bangunan Terintegrasi</h3>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Integrasi sistem MEP yang terkoordinasi untuk kenyamanan, keselamatan, dan efisiensi energi dalam operasional bangunan.
                    </p>
                    <div class="mt-6 space-y-3 text-gray-700">
                        <ul class="mt-5 space-y-2 text-sm text-gray-700">
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Electrical system design</li>
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Plumbing and drainage planning</li>
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>HVAC and ventilation coordination</li>
                            <li><i class="fa-solid fa-check text-blue-900 mr-2"></i>Energy efficiency & passive strategies</li>
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
                <img id="modalImage" src="" alt="" class="w-full h-auto object-contain bg-black">
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

        function openModal(button) {
            const container = button.closest('.project-item');
            const slides = Array.from(container.querySelectorAll('.project-slide'));
            modalSlides = slides.map(s => s.getAttribute('src'));
            modalIndex = slides.findIndex(s => !s.classList.contains('opacity-0'));
            if (modalIndex === -1) modalIndex = 0;

            const captionEl = container.querySelector('.p-10 h3') || container.querySelector('.p-10 p');
            const caption = captionEl ? captionEl.innerText.trim() : '';

            const modal = document.getElementById('imageModal');
            document.getElementById('modalImage').src = modalSlides[modalIndex] || '';
            // document.getElementById('modalCaption').innerText = caption;
            modal.classList.remove('hidden');
            // focus to capture keyboard
            modal.focus && modal.focus();
        }

        function modalNext() {
            if (!modalSlides || !modalSlides.length) return;
            modalIndex = (modalIndex + 1) % modalSlides.length;
            document.getElementById('modalImage').src = modalSlides[modalIndex];
        }

        function modalPrev() {
            if (!modalSlides || !modalSlides.length) return;
            modalIndex = (modalIndex - 1 + modalSlides.length) % modalSlides.length;
            document.getElementById('modalImage').src = modalSlides[modalIndex];
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.getElementById('modalImage').src = '';
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