<?php

if (!isset($lang)) {
    $lang = $_GET['lang'] ?? 'en';
}


$currentPage = basename($_SERVER['PHP_SELF']);

?>


<!-- PREMIUM NAVBAR -->

<header>

    <nav class="
fixed
top-0
left-0
w-full
bg-white/80
backdrop-blur-xl
border-b
border-gray-100
shadow-sm
z-50
">


        <div class="
max-w-7xl
mx-auto
px-6
py-4
flex
items-center
justify-between
relative
">


            <!-- LOGO -->

            <a href="index.php"
                class="
flex
items-center
group
">


                <img
                    src="assets/images/logob.png"
                    class="
h-14
w-auto
transition
duration-300
group-hover:scale-105
"
                    alt="SJCM Logo">



                <div class="lg:block ml-3">


                    <h2 class="
font-bold
text-blue-950
text-base
md:text-lg
leading-tight
tracking-tight
">

                        PT Sinergi Jaya Cipta Mandiri

                    </h2>


                    <p class="
text-xs
text-gray-500
mt-1
font-medium
tracking-wide
">

                        <?= $text['tagline'] ?? 'Architect and Engineering Consultant'; ?>

                    </p>


                </div>


            </a>





            <!-- DESKTOP MENU -->


            <div class="
hidden
lg:flex
absolute
left-1/2
-translate-x-1/2
items-center
gap-9
">


                <a href="index.php"
                    class="nav-item 
<?= $currentPage == 'index.php' ? 'active' : '' ?>
">

                    <?= $text['home'] ?? 'Home'; ?>


                </a>



                <a href="about.php"
                    aria-label="About SJCM"
                    title="About SJCM"
                    class="
nav-item
<?= $currentPage == 'about.php' ? 'active' : '' ?>
">

                    <?= $text['about'] ?? 'About'; ?>


                </a>




                <a href="services.php"
                    class="
nav-item
<?= $currentPage == 'services.php' ? 'active' : '' ?>
">

                    <?= $text['services'] ?? 'Services'; ?>


                </a>




                <a href="projects.php"
                    class="
nav-item
<?= $currentPage == 'projects.php' ? 'active' : '' ?>
">

                    <?= $text['projects'] ?? 'Projects'; ?>


                </a>







            </div>







            <!-- RIGHT AREA -->


            <div class="
hidden
lg:flex
items-center
gap-6
">



                <!-- LANGUAGE -->


                <div class="flex items-center gap-2 text-sm font-semibold whitespace-nowrap" aria-label="Language selector">
                    <i class="fa-solid fa-globe text-blue-900 text-sm" aria-hidden="true"></i>

                    <a href="?lang=en"
                        aria-label="Switch to English"
                        title="English"
                        class="transition rounded px-1.5 py-1 <?= $lang == 'en' ? 'text-blue-950 font-bold' : 'text-gray-700 hover:text-blue-900' ?>">
                        EN
                    </a>

                    <span class="text-gray-400" aria-hidden="true">|</span>

                    <a href="?lang=id"
                        aria-label="Pindah ke Bahasa Indonesia"
                        title="Indonesia"
                        class="transition rounded px-1.5 py-1 <?= $lang == 'id' ? 'text-blue-950 font-bold' : 'text-gray-700 hover:text-blue-900' ?>">
                        ID
                    </a>
                </div>







                <!-- CTA -->


                <a href="contact.php"

                    class="
bg-blue-950
text-white
px-7
py-3
rounded-full
font-semibold
text-sm
tracking-wide
hover:bg-blue-800
hover:shadow-lg
transition
duration-300
">

                    <?= $text['consultation'] ?? 'Consultation'; ?>


                </a>



            </div>





            <!-- MOBILE BUTTON -->


            <button

                id="mobile-menu-button"

                class="
lg:hidden
text-blue-950
text-2xl
focus:outline-none
">

                <i class="fa-solid fa-bars"></i>


            </button>



        </div>







        <!-- MOBILE MENU -->


        <div

            id="mobile-menu"

            class="
hidden
lg:hidden
bg-white
border-t
border-gray-100
shadow-lg
">


            <div

                class="
px-6
py-6
space-y-5
">



                <a href="index.php"

                    class="
block
nav-item
<?= $currentPage == 'index.php' ? 'active' : '' ?>
">

                    <?= $text['home'] ?? 'Home'; ?>


                </a>




                <a href="about.php"
                    aria-label="About SJCM"
                    title="About SJCM"
                    class="
block
nav-item
<?= $currentPage == 'about.php' ? 'active' : '' ?>
">

                    <?= $text['about'] ?? 'About'; ?>


                </a>




                <a href="services.php"

                    class="
block
nav-item
<?= $currentPage == 'services.php' ? 'active' : '' ?>
">

                    <?= $text['services'] ?? 'Services'; ?>


                </a>




                <a href="projects.php"

                    class="
block
nav-item
<?= $currentPage == 'projects.php' ? 'active' : '' ?>
">

                    <?= $text['projects'] ?? 'Projects'; ?>


                </a>








                <!-- LANGUAGE MOBILE -->


                <div class="flex items-center justify-center gap-3 pt-3 border-t border-gray-100 text-sm font-semibold" aria-label="Language selector mobile">
                    <i class="fa-solid fa-globe text-blue-900" aria-hidden="true"></i>

                    <a href="?lang=en"
                        aria-label="Switch to English"
                        title="English"
                        class="rounded px-2 py-1 <?= $lang == 'en' ? 'text-blue-950 font-bold' : 'text-gray-700' ?>">
                        EN
                    </a>

                    <span class="text-gray-400" aria-hidden="true">|</span>

                    <a href="?lang=id"
                        aria-label="Pindah ke Bahasa Indonesia"
                        title="Indonesia"
                        class="rounded px-2 py-1 <?= $lang == 'id' ? 'text-blue-950 font-bold' : 'text-gray-700' ?>">
                        ID
                    </a>
                </div>






                <a href="contact.php"

                    class="
block
text-center
bg-blue-950
text-white
px-6
py-3
rounded-full
font-semibold
hover:bg-blue-800
transition
">

                    <?= $text['consultation'] ?? 'Consultation'; ?>


                </a>



            </div>


        </div>



    </nav>


</header>