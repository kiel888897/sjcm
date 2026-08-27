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
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary">


    <link rel="stylesheet" href="css/style.css">


    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<body class="bg-white text-gray-800">


    <!-- NAVBAR -->


    <?php include "navbar.php" ?>

    <section class="
relative
pt-44
pb-28
overflow-hidden
bg-gradient-to-br
from-blue-950
via-blue-900
to-cyan-900
text-white
">
        <div class="
absolute
inset-0
opacity-10
">
            <div class="
absolute
top-10
left-10
w-72
h-72
bg-cyan-400
rounded-full
blur-3xl
">
            </div>

            <div class="
absolute
bottom-0
right-10
w-96
h-96
bg-blue-400
rounded-full
blur-3xl
">
            </div>
        </div>

        <div class="
relative
max-w-7xl
mx-auto
px-6
text-center
">
            <p class="
text-cyan-300
uppercase
tracking-[5px]
font-semibold
text-sm
">
                <?= $text['about_page_title'] ?? 'About Us'; ?>
            </p>

            <h1 class="
mt-5
text-5xl
md:text-6xl
font-bold
leading-tight
">
                <?= $text['about_page_heading'] ?? 'Professional Arsitek dan Konsultan Teknik From Bali'; ?>
            </h1>

            <p class="
mt-6
max-w-2xl
mx-auto
text-blue-100
text-lg
leading-relaxed
">
                <?= $text['about_page_subtitle'] ?? 'We provide professional, reliable engineering solutions tailored to your development needs.'; ?>
            </p>
        </div>

        <div class="
absolute
bottom-0
left-0
right-0
h-px
bg-white/20
">
        </div>
    </section>




    <section class="py-24 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6">


            <div class="grid md:grid-cols-2 gap-16 items-center">

                <div>
                    <p class="text-gray-600 leading-relaxed">
                        PT Sinergi Jaya Cipta Mandiri adalah perusahaan berbadan hukum yang telah berdiri pada tahun 2025 di Denpasar, Bali.
                        Didirikan oleh para profesional dengan pengalaman panjang di bidang teknik dan administrasi.
                        Perusahaan bergerak di bidang perencanaan, pengawasan, manajemen konstruksi, arsitektur, struktur, mechanical electrical plumbing, Estimator, perijinan PBG, dan SLF
                    </p>

                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Dengan modal pendidikan tinggi, pengalaman panjang dari masing-masing pendiri, perusahaan yakin dapat memberikan jasa pelayanan konsultasi yang berkualitas, profesional dan berintegritas tinggi.

                    </p>

                    <a href="contact.php" class="inline-block mt-6 text-blue-900 font-semibold">Contact Us →</a>
                </div>

                <div>
                    <img src="assets/images/aboutsjcm.jpg" class="rounded-3xl shadow-lg" alt="SJCM Office Building">
                </div>

            </div>

        </div>

    </section>
    <section class="py-24 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mx-auto text-center mb-12">
                <p class="text-blue-700 uppercase tracking-[3px] font-semibold text-sm"><?= $text['about_vision_label'] ?? 'Vision & Mission'; ?></p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3"><?= $text['about_vision_heading'] ?? 'Our Direction and Commitment'; ?></h2>

            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <div class="rounded-3xl border border-blue-100 bg-gradient-to-br from-blue-50 to-cyan-50 p-8 shadow-sm hover:shadow-lg transition">
                    <div class="w-14 h-14 rounded-2xl bg-blue-900 text-white flex items-center justify-center mb-6">
                        <i class="fa-solid fa-bullseye text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Vision</h3>
                    <p class="mt-4 text-gray-700 leading-relaxed font-bold">
                        Menjadi penyedia jasa konsultan teknik yang handal, inovatif, dan bermanfaat bagi masyarakat Indonesia.
                    </p>
                </div>

                <div class="rounded-3xl border border-gray-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-600 text-white flex items-center justify-center mb-6">
                        <i class="fa-solid fa-rocket text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Mission</h3>
                    <ul class="mt-4 space-y-3 text-gray-700 leading-relaxed">
                        <li class="flex gap-3">
                            <span class="text-blue-700 mt-1">•</span>
                            <span>Memberikan pelayanan yang terbaik untuk setiap klien.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-700 mt-1">•</span>
                            <span>Memberikan produk/jasa konsultan yang bermutu tinggi.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-700 mt-1">•</span>
                            <span>Meningkatkan kemampuan dan skill sumber daya manusia.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-700 mt-1">•</span>
                            <span>Selalu mengikuti dan menggunakan peralatan teknologi tinggi.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-700 mt-1">•</span>
                            <span>Meningkatkan kepedulian terhadap lingkungan dan sosial budaya di bali.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-700 mt-1">•</span>
                            <span>Memberikan manfaat dan nilai tambah kepada pemegang saham, karyawan, dan masyarakat sekitar.
                            </span>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section>
    <section class="py-24 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <p class="text-blue-700 uppercase tracking-[3px] font-semibold text-sm"><?= $text['about_team_label'] ?? 'Our Team'; ?></p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3"><?= $text['about_team_heading'] ?? 'Meet Our Professional Team'; ?></h2>

            </div>

            <div class="grid md:grid-cols-4 gap-3">

                <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-blue-100 text-4xl text-blue-900 shadow-inner">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <button type="button"
                        class="mt-6 text-xl font-bold text-gray-900 hover:text-blue-700 transition"
                        data-name="I Gede Suarjana S.T"
                        data-role="Arsitek & Direktur"
                        data-certificate="assets/images/team/skk-igede.jpg"
                        data-certificate-skn="assets/images/team/skn-igede.jpg">
                        I Gede Suarjana S.T
                    </button>
                    <p class="text-blue-700 font-semibold mt-1">Arsitek & Direktur</p>
                    <p class="mt-3 text-gray-600 text-sm">
                        Sarjana Arsitek dengan pengalaman lebih dari 10 tahun di bidang Arsitektur, Interior dan lansekap
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-blue-100 text-4xl text-blue-900 shadow-inner">
                        <i class="fa-solid fa-helmet-safety"></i>
                    </div>
                    <button type="button"
                        class="mt-6 text-xl font-bold text-gray-900 hover:text-blue-700 transition"
                        data-name="Ir. Marlon Simanjuntak ST.,MT.,IPM"
                        data-role="Insinyur Struktur & Direktur"
                        data-certificate="assets/images/team/skk-marlon.jpg"
                        data-certificate-skn="assets/images/team/skn-marlon.jpg">
                        Ir. Marlon Simanjuntak ST.,MT.,IPM
                    </button>
                    <p class="text-blue-700 font-semibold mt-1">Insinyur Struktur & Direktur</p>
                    <p class="mt-3 text-gray-600 text-sm">
                        Sarjana Teknik Sipil dengan pengalaman lebih dari 10 tahun di bidang Perencanaan Struktur, Estimasi dan Manajemen Konstruksi
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-blue-100 text-4xl text-blue-900 shadow-inner">
                        <i class="fa-solid fa-plug-circle-bolt"></i>
                    </div>
                    <button type="button"
                        class="mt-6 text-xl font-bold text-gray-900 hover:text-blue-700 transition"
                        data-name="Fajar ST"
                        data-role="Insinyur MEP & Komisaris"
                        data-certificate="assets/images/team/skk-fajar.jpg"
                        data-certificate-skn="assets/images/team/skn-fajar.jpg">
                        Fajar ST
                    </button>
                    <p class="text-blue-700 font-semibold mt-1">Insinyur MEP & Komisaris</p>
                    <p class="mt-3 text-gray-600 text-sm">
                        Sarjana Teknik Elektro dengan pengalaman lebih dari 10 tahun di bidang Perencanaan MEP, dan Estimasi.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-blue-100 text-4xl text-blue-900 shadow-inner">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    <button type="button"
                        class="mt-6 text-xl font-bold text-gray-900 hover:text-blue-700 transition"
                        data-name="Anis SE"
                        data-role="Admin & Komisaris"
                        data-certificate="assets/images/team/skk-anis.jpg"
                        data-certificate-skn="assets/images/team/skn-anis.jpg">
                        Anis SE
                    </button>
                    <p class="text-blue-700 font-semibold mt-1">Admin & Komisaris</p>
                    <p class="mt-3 text-gray-600 text-sm">
                        Sarjana Akuntansi dengan pengalaman lebih dari 20 tahun di bidang Administrasi.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <div id="teamModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/55 p-4">
        <div class="relative w-full max-w-3xl max-h-[90vh] overflow-y-auto rounded-3xl bg-white p-6 shadow-2xl">
            <button type="button" id="closeTeamModal" class="absolute right-4 top-4 text-2xl text-gray-500 hover:text-gray-800 focus:outline-none" aria-label="Close">
                &times;
            </button>
            <div class="text-center">
                <h3 id="teamModalName" class="text-2xl font-bold text-gray-900">Nama</h3>
                <p id="teamModalRole" class="mt-2 text-sm font-semibold uppercase tracking-[3px] text-blue-700">Jabatan</p>
            </div>
            <div class="mt-6 grid md:grid-cols-2 gap-4">

                <div class="overflow-hidden rounded-2xl border border-blue-100 bg-blue-50">
                    <img id="teamModalCertImage" src="assets/images/team/skk-nama.jpg" alt="Sertifikat" class="w-full h-auto max-h-96 rounded-xl object-contain bg-white" onerror="this.onerror=null;this.src='assets/images/team/skk-nama.jpg';" />
                </div>

                <div class="overflow-hidden rounded-2xl border border-blue-100 bg-blue-50">
                    <img id="teamModalCertImageSkn" src="assets/images/team/skn-nama.jpg" alt="Sertifikat tambahan" class="w-full h-auto max-h-96 rounded-xl object-contain bg-white" onerror="this.onerror=null;this.src='assets/images/team/skn-nama.jpg';" />
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>
    <script src="js/main.js"></script>


</body>

</html>