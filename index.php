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

    <?php include 'navbar.php'; ?>

    <!-- HERO PLACEHOLDER -->
    <section class="pt-24 pb-16 sm:pt-28 sm:pb-20 min-h-[72vh] flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-8 sm:gap-10 items-center">
            <div>
                <p class="text-blue-700 font-semibold tracking-widest uppercase mb-4 text-sm sm:text-base">
                    Construction & Consulting Services
                </p>
                <h1 class="text-4xl sm:text-5xl font-bold leading-tight text-gray-900">
                    Engineering Solutions
                    for Better Building Future
                </h1>
                <p class="mt-6 text-base sm:text-lg text-gray-600 leading-relaxed">
                    Layanan konsultasi arsitektur, struktur, MEP, PBG, SLF dan pengawasan konstruksi
                    dengan standar profesional.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="w-full sm:w-auto text-center bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold shadow-sm hover:bg-blue-800 transition">
                        Konsultasi Sekarang
                    </a>
                    <a href="services.php" class="w-full sm:w-auto text-center border border-blue-900 text-blue-900 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
                        Layanan Kami
                    </a>
                </div>
            </div>
            <div class="relative hero-float hidden md:block">
                <img src="assets/images/hero-building.jpg"
                    class="w-full h-[280px] sm:h-[360px] md:h-[420px] object-cover rounded-3xl shadow-2xl shadow-blue-950/20 transition-transform duration-700 hover:scale-[1.02]"
                    alt="SJCM Engineering Consultant">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-950/75 via-blue-900/60 to-cyan-900/50 rounded-3xl"></div>
                <div class="absolute bottom-10 left-10 text-white max-w-md">
                    <p class="text-sm uppercase tracking-[4px] mb-4 text-blue-200">
                        Engineering Consultant
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->

    <section class="relative py-16 sm:py-20 lg:py-24 bg-gradient-to-b from-slate-100 to-white overflow-hidden">


        <!-- Decorative Background -->
        <div class="
    absolute 
    top-20 
    left-0 
    w-72 
    h-72 
    bg-blue-200/30 
    rounded-full 
    blur-3xl
    ">
        </div>


        <div class="relative max-w-7xl mx-auto px-4 sm:px-6">


            <div class="
        grid 
        md:grid-cols-2 
        gap-8 sm:gap-10 lg:gap-16 
        items-center
        ">



                <!-- IMAGE LEFT -->

                <div class="relative group">


                    <img
                        src="assets/images/about-engineering.jpg"
                        alt="PT Sinergi Jaya Cipta Mandiri Engineering Consultant"
                        class="
                w-full
                h-[280px]
                sm:h-[360px]
                md:h-[420px]
                lg:h-[520px]
                object-cover
                rounded-3xl
                shadow-2xl
                transition
                duration-700
                group-hover:scale-[1.03]
                ">



                    <!-- Overlay -->

                    <div class="
                absolute
                inset-0
                rounded-3xl
                bg-gradient-to-t
                from-blue-950/70
                via-transparent
                to-transparent
                "></div>



                    <!-- Floating Card -->




                </div>
                <!-- TEXT RIGHT -->

                <div>


                    <p class="
                text-blue-700
                font-semibold
                uppercase
                tracking-[4px]
                text-sm
                ">
                        About SJCM
                    </p>



                    <h2 class="
                mt-5
                text-3xl
                sm:text-4xl
                md:text-5xl
                font-bold
                leading-tight
                text-gray-900
                ">

                        Construction
                        <span class="text-blue-900">
                            &
                        </span>
                        Consulting Services
                    </h2>



                    <div class="
                w-20
                h-1
                bg-blue-900
                mt-6
                mb-8
                ">
                    </div>



                    <p class="
                text-gray-600
                text-base
                sm:text-lg
                leading-relaxed
                ">

                        PT Sinergi Jaya Cipta Mandiri merupakan perusahaan
                        konsultan teknik yang menyediakan layanan perencanaan,
                        desain, dan pengawasan konstruksi bangunan.

                    </p>




                    <p class="
                mt-5
                text-gray-600
                text-base
                sm:text-lg
                leading-relaxed
                ">

                        Dengan pendekatan engineering yang terintegrasi,
                        kami memberikan solusi profesional dalam bidang
                        arsitektur, struktur, mechanical electrical plumbing
                        (MEP), PBG, SLF, serta konsultasi konstruksi.

                    </p>


                    <a href="about.php"
                        class="
                inline-flex
                items-center
                gap-3
                mt-10
                bg-blue-900
                text-white
                px-8
                py-3
                rounded-lg
                font-semibold
                hover:bg-blue-800
                transition
                shadow-lg
                ">

                        Learn More

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>



                </div>


            </div>


        </div>


    </section>

    <section class="
py-16
sm:py-20
lg:py-24
">


        <div class="
max-w-7xl
mx-auto
px-6
">


            <div class="mb-12">


                <p class="text-blue-700
                font-semibold
                uppercase
                tracking-[4px]
                text-sm
">

                    Our Services

                </p>


                <h2 class="
text-4xl
font-bold
">

                    Integrated Building Consultancy

                </h2>


            </div>





            <div class="
grid
sm:grid-cols-2
lg:grid-cols-3
gap-6
sm:gap-8
">


                <div class="
border
rounded-2xl
p-8
hover:shadow-xl
transition
">


                    <h3 class="
text-xl
font-bold
">

                        Architecture

                    </h3>


                    <p class="
mt-4
text-gray-600
">

                        Architectural planning,
                        design development,
                        and construction documentation.

                    </p>


                </div>





                <div class="
border
rounded-2xl
p-8
hover:shadow-xl
transition
">


                    <h3 class="
text-xl
font-bold
">

                        Structural Engineering

                    </h3>


                    <p class="
mt-4
text-gray-600
">

                        Safe and efficient structural
                        solutions based on engineering standards.

                    </p>


                </div>





                <div class="
border
rounded-2xl
p-8
hover:shadow-xl
transition
">


                    <h3 class="
text-xl
font-bold
">

                        MEP Engineering

                    </h3>


                    <p class="
mt-4
text-gray-600
">

                        Integrated mechanical,
                        electrical, and plumbing systems.

                    </p>


                </div>



            </div>


        </div>


    </section>
    <section class="py-16 sm:py-20 lg:py-24 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6">


            <!-- Header -->

            <div class="text-center mb-14">

                <p class="
            text-blue-700
            font-semibold
            uppercase
            tracking-[4px]
            text-sm
            ">
                    Our Services
                </p>


                <h2 class="
            mt-4
            text-4xl
            md:text-5xl
            font-bold
            text-gray-900
            ">
                    Integrated Engineering
                    <span class="text-blue-900">
                        Consultancy
                    </span>
                </h2>


                <p class="
            mt-5
            max-w-3xl
            mx-auto
            text-gray-600
            text-lg
            ">
                    Providing professional engineering solutions
                    for building planning, design, compliance,
                    and construction management.
                </p>


            </div>




            <!-- Service Grid -->


            <div class="
        grid
        sm:grid-cols-2
        lg:grid-cols-4
        gap-6
        ">


                <!-- Architecture -->

                <div class="
            group
            bg-white
            rounded-2xl
            p-7
            border
            border-gray-200
            hover:border-blue-900
            hover:shadow-xl
            transition
            duration-300
            ">


                    <div class="
                w-14
                h-14
                rounded-xl
                bg-blue-900
                text-white
                flex
                items-center
                justify-center
                text-2xl
                mb-5
                group-hover:scale-110
                transition
                ">

                        <i class="fa-solid fa-building"></i>

                    </div>



                    <h3 class="
                text-xl
                font-bold
                ">
                        Architecture
                    </h3>


                    <p class="
                mt-3
                text-gray-600
                text-sm
                ">
                        Architectural planning
                        and building concept development.
                    </p>


                </div>





                <!-- Structure -->


                <div class="
            group
            bg-white
            rounded-2xl
            p-7
            border
            border-gray-200
            hover:border-blue-900
            hover:shadow-xl
            transition
            ">


                    <div class="
                w-14
                h-14
                rounded-xl
                bg-blue-900
                text-white
                flex
                items-center
                justify-center
                text-2xl
                mb-5
                ">

                        <i class="fa-solid fa-compass-drafting"></i>

                    </div>


                    <h3 class="text-xl font-bold">
                        Structure
                    </h3>


                    <p class="mt-3 text-gray-600 text-sm">
                        Structural engineering
                        and building safety solutions.
                    </p>


                </div>





                <!-- MEP -->


                <div class="
            group
            bg-white
            rounded-2xl
            p-7
            border
            border-gray-200
            hover:border-blue-900
            hover:shadow-xl
            transition
            ">


                    <div class="
                w-14
                h-14
                rounded-xl
                bg-blue-900
                text-white
                flex
                items-center
                justify-center
                text-2xl
                mb-5
                ">

                        <i class="fa-solid fa-gears"></i>

                    </div>


                    <h3 class="text-xl font-bold">
                        MEP
                    </h3>


                    <p class="mt-3 text-gray-600 text-sm">
                        Mechanical, electrical,
                        and plumbing systems.
                    </p>


                </div>





                <!-- PBG SLF -->


                <div class="
            group
            bg-white
            rounded-2xl
            p-7
            border
            border-gray-200
            hover:border-blue-900
            hover:shadow-xl
            transition
            ">


                    <div class="
                w-14
                h-14
                rounded-xl
                bg-blue-900
                text-white
                flex
                items-center
                justify-center
                text-2xl
                mb-5
                ">

                        <i class="fa-solid fa-file-circle-check"></i>

                    </div>


                    <h3 class="text-xl font-bold">
                        PBG & SLF
                    </h3>


                    <p class="mt-3 text-gray-600 text-sm">
                        Building approval and
                        compliance services.
                    </p>


                </div>





                <!-- Design -->


                <div class="
            group
            bg-white
            rounded-2xl
            p-7
            border
            hover:shadow-xl
            transition
            ">


                    <div class="
                w-14
                h-14
                rounded-xl
                bg-blue-900
                text-white
                flex
                items-center
                justify-center
                text-2xl
                mb-5
                ">

                        <i class="fa-solid fa-pen-ruler"></i>

                    </div>


                    <h3 class="text-xl font-bold">
                        Design
                    </h3>


                    <p class="mt-3 text-gray-600 text-sm">
                        Detailed engineering
                        design development.
                    </p>


                </div>





                <!-- Checking -->


                <div class="
            group
            bg-white
            rounded-2xl
            p-7
            border
            hover:shadow-xl
            transition
            ">


                    <div class="
                w-14
                h-14
                rounded-xl
                bg-blue-900
                text-white
                flex
                items-center
                justify-center
                text-2xl
                mb-5
                ">

                        <i class="fa-solid fa-magnifying-glass-chart"></i>

                    </div>


                    <h3 class="text-xl font-bold">
                        Checking
                    </h3>


                    <p class="mt-3 text-gray-600 text-sm">
                        Technical review and
                        quality checking.
                    </p>


                </div>




                <!-- Review -->


                <div class="
            group
            bg-white
            rounded-2xl
            p-7
            border
            hover:shadow-xl
            transition
            ">


                    <div class="
                w-14
                h-14
                rounded-xl
                bg-blue-900
                text-white
                flex
                items-center
                justify-center
                text-2xl
                mb-5
                ">

                        <i class="fa-solid fa-list-check"></i>

                    </div>


                    <h3 class="text-xl font-bold">
                        Review
                    </h3>


                    <p class="mt-3 text-gray-600 text-sm">
                        Engineering assessment
                        and evaluation.
                    </p>


                </div>


            </div>



            <!-- Button -->

            <div class="text-center mt-12">

                <a href="services.php"
                    class="
            bg-blue-900
            text-white
            px-8
            py-3
            rounded-lg
            font-semibold
            hover:bg-blue-800
            transition
            ">
                    View Details Services →
                </a>

            </div>


        </div>


    </section>
    <section class="
bg-gray-50
py-24
">


        <div class="
max-w-7xl
mx-auto
px-6
">


            <h2 class="
text-4xl
font-bold
mb-12
">

                Why Choose SJCM?

            </h2>


            <div class="
grid
md:grid-cols-3
gap-10
">


                <div>

                    <h3 class="font-bold text-xl">

                        Professional Team

                    </h3>

                    <p class="mt-3 text-gray-600">

                        Supported by experienced engineering
                        and administration professionals.

                    </p>

                </div>



                <div>

                    <h3 class="font-bold text-xl">

                        Integrated Services

                    </h3>

                    <p class="mt-3 text-gray-600">

                        From planning,
                        design checking,
                        until building compliance.

                    </p>

                </div>



                <div>

                    <h3 class="font-bold text-xl">

                        Quality Commitment

                    </h3>

                    <p class="mt-3 text-gray-600">

                        Delivering accurate,
                        efficient, and reliable solutions.

                    </p>

                </div>


            </div>


        </div>


    </section>
    <section class="
py-16
sm:py-20
lg:py-24
bg-blue-900
text-white
text-center
">


        <h2 class="
text-4xl
font-bold
">

            Let's Build Your Project
            With Confidence

        </h2>


        <p class="
mt-4
text-blue-100
">

            Consult our engineering team today.

        </p>


        <a href="contact.php"
            class="
inline-block
mt-8
bg-white
text-blue-900
px-8
py-3
rounded-full
font-semibold
">

            Contact Us

        </a>


    </section>



    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>


</body>

</html>