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
                Engineering Projects
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-blue-100 text-lg leading-relaxed">
                Dokumentasi proyek yang mencerminkan kemampuan kami dalam
                perencanaan, desain, dan pengawasan konstruksi.
            </p>
        </div>
        <!-- Blueprint Line Decoration -->
        <div class="absolute bottom-0 left-0 right-0 h-px bg-white/20"> </div>
    </section>
    <section class="pt-24 bg-gray-50">
        <div class="
flex
justify-center
gap-4
mb-14
flex-wrap
">


            <button
                data-filter="all"
                class="
filter-btn
px-6
py-2
rounded-full
bg-blue-900
text-white
font-semibold
">
                All
            </button>


            <button
                data-filter="architecture"
                class="
filter-btn
px-6
py-2
rounded-full
border
">
                Architecture
            </button>


            <button
                data-filter="structure"
                class="
filter-btn
px-6
py-2
rounded-full
border
">
                Structure
            </button>


            <button
                data-filter="mep"
                class="
filter-btn
px-6
py-2
rounded-full
border
">
                MEP
            </button>


            <button
                data-filter="residential"
                class="
filter-btn
px-6
py-2
rounded-full
border
">
                Residential
            </button>


        </div>
    </section>

    <section class="pb-20">


        <div class="
max-w-7xl
mx-auto
px-6
space-y-12
">


            <!-- PROJECT 1 -->

            <div
                class="
project-item
bg-white
rounded-3xl
shadow-lg
overflow-hidden
grid
md:grid-cols-2
"
                data-category="residential architecture">


                <!-- SLIDER -->

                <div class="
relative
overflow-hidden
">


                    <img
                        src="assets/images/projects/project1-1.jpg"
                        class="
project-slide
w-full
h-full
object-cover
absolute
transition
duration-700
">


                    <img
                        src="assets/images/projects/project1-2.jpg"
                        class="
project-slide
w-full
h-full
object-cover
absolute
opacity-0
transition
duration-700
">


                    <img
                        src="assets/images/projects/project1-3.jpg"
                        class="
project-slide
w-full
h-full
object-cover
absolute
opacity-0
transition
duration-700
">




                    <!-- Button -->


                    <button
                        onclick="prevSlide(this)"
                        class="
absolute
left-5
top-1/2
bg-white/80
w-10
h-10
rounded-full
">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>



                    <button
                        onclick="nextSlide(this)"
                        class="
absolute
right-5
top-1/2
bg-white/80
w-10
h-10
rounded-full
">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>



                </div>




                <!-- DETAIL -->

                <div class="
p-10
">


                    <p class="
text-blue-700
uppercase
tracking-widest
text-sm
font-semibold
">
                        Residential
                    </p>



                    <h2 class="
text-3xl
font-bold
mt-3
">
                        Luxury Residence Bali
                    </h2>



                    <p class="
mt-5
text-gray-600
leading-relaxed
">

                        Perencanaan dan pengembangan
                        hunian premium dengan pendekatan
                        arsitektur modern dan sistem engineering
                        terintegrasi.

                    </p>



                    <div class="
mt-8
space-y-3
text-gray-700
">


                        <p>
                            <i class="fa-solid fa-location-dot text-blue-900 mr-2"></i>
                            Bali, Indonesia
                        </p>


                        <p>
                            <i class="fa-solid fa-calendar text-blue-900 mr-2"></i>
                            2026
                        </p>


                        <p>
                            <i class="fa-solid fa-layer-group text-blue-900 mr-2"></i>
                            Architecture | Structure | MEP
                        </p>



                    </div>






                </div>



            </div>





        </div>


    </section>

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
    </script>

</body>

</html>