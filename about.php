<?php
require "config/language.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>
        PT Sinergi Jaya Cipta Mandiri | Engineering Consultant Bali
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
                <?= $text['about_page_heading'] ?? 'Professional Engineering Consultant From Bali'; ?>
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
                    <img src="assets/images/hero-building1.jpg" class="rounded-3xl shadow-lg" alt="SJCM Office Building">
                </div>

            </div>

        </div>

    </section>
    <section class="py-24 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-3xl mx-auto text-center mb-12">
                <p class="text-blue-700 uppercase tracking-[3px] font-semibold text-sm">Vision & Mission</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">Our Direction and Commitment</h2>

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
                            <span>Memberikan pelayanan yang pterbaik untuk setiap klien.</span>
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
                <p class="text-blue-700 uppercase tracking-[3px] font-semibold text-sm">Our Team</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">Meet Our Professional Team</h2>

            </div>

            <div class="grid md:grid-cols-4 gap-3">

                <!-- Founder / Director -->
                <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-blue-100 text-4xl text-blue-900 shadow-inner">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <h3 class="text-xl font-bold mt-6">I Gede Suarjana S.T</h3>
                    <p class="text-blue-700 font-semibold mt-1">Arsitek & Direktur</p>
                    <p class="mt-3 text-gray-600 text-sm">
                        Sarjana Arsitek dengan pengalaman lebih dari 10 tahun di bidang Arsitektur, Interior dan lansekap
                    </p>
                </div>

                <!-- Engineering Team Example -->
                <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-blue-100 text-4xl text-blue-900 shadow-inner">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <!-- <img src="assets/images/team/engineer1.jpg" class="mx-auto rounded-full h-48 w-48 object-cover" alt="Engineer"> -->
                    <h3 class="text-xl font-bold mt-6">Ir. Marlon Simanjuntak ST.,MT.,IPM</h3>
                    <p class="text-blue-700 font-semibold mt-1"> Insinyur Struktur & Direktur</p>
                    <p class="mt-3 text-gray-600 text-sm">
                        SarjanaTeknik Sipil dengan pengalaman lebih dari 10 tahun di bidang Perencanaan Struktur, Estimasi dan Manajemen Konstruksi
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-blue-100 text-4xl text-blue-900 shadow-inner">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <!-- <img src="assets/images/team/engineer2.jpg" class="mx-auto rounded-full h-48 w-48 object-cover" alt="Engineer"> -->
                    <h3 class="text-xl font-bold mt-6">Fajar ST</h3>
                    <p class="text-blue-700 font-semibold mt-1">Insinyur MEP & Komisaris</p>
                    <p class="mt-3 text-gray-600 text-sm">
                        SarjanaTeknik Elektro dengan pengalaman lebih dari 10 tahun di bidang Perencanaan MEP, dan Estimasi.
                    </p>
                </div>
                <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-full bg-blue-100 text-4xl text-blue-900 shadow-inner">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <!-- <img src="assets/images/team/engineer2.jpg" class="mx-auto rounded-full h-48 w-48 object-cover" alt="Engineer"> -->
                    <h3 class="text-xl font-bold mt-6">Anis SE</h3>
                    <p class="text-blue-700 font-semibold mt-1">Admin & Komisaris</p>
                    <p class="mt-3 text-gray-600 text-sm">
                        Sarjana Akutansi dengan pengalaman lebih dari 20 tahun di bidang Administrasi
                    </p>
                </div>

            </div>

        </div>

    </section>

    <?php include 'footer.php' ?>
    <script src="js/main.js"></script>


</body>

</html>