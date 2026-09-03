<?php
require "config/language.php";
require "config/seo.php";
$mailConfig = require __DIR__ . "/config/mail.php";
$statusMessage = $_SESSION['form_success'] ?? $_SESSION['form_error'] ?? null;
unset($_SESSION['form_success'], $_SESSION['form_error']);
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?= htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?></title>


    <meta name="description" content="<?= htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?= htmlspecialchars($seo['keywords'], ENT_QUOTES, 'UTF-8'); ?>">
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
    <script src="https://www.google.com/recaptcha/api.js?render=<?= htmlspecialchars($mailConfig['site_key'], ENT_QUOTES, 'UTF-8'); ?>"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


</head>


<body class="bg-white text-gray-800">
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
                    <?= $text['contact_page_title'] ?? 'Contact Us'; ?>
                </p>
                <h1 class="mt-5 text-5xl md:text-6xl font-bold leading-tight">
                    <?= $text['contact_page_heading'] ?? 'Get In Touch With SJCM'; ?>
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-blue-100 text-lg leading-relaxed">
                    <?= $text['contact_page_subtitle'] ?? 'Reach out to us for project consultation and professional technical services.'; ?>
                </p>
            </div>
            <!-- Blueprint Line Decoration -->
            <div class="absolute bottom-0 left-0 right-0 h-px bg-white/20"></div>
        </section>

        <section class="py-24 bg-gray-50">


            <div class="max-w-7xl mx-auto px-6">


                <div class="grid lg:grid-cols-2 gap-12 items-center">


                    <!-- LEFT CONTACT -->

                    <div>


                        <p class="text-blue-700 uppercase tracking-[3px] font-semibold text-sm">

                            <?= $text['contact_info_label'] ?? 'Contact Information'; ?>

                        </p>


                        <h2 class="text-4xl font-bold text-gray-900 mt-3">

                            <?= $text['contact_info_heading'] ?? "Let's Discuss Your Project"; ?>

                        </h2>


                        <p class="mt-4 text-gray-600 leading-relaxed">

                            <?= $text['contact_info_desc'] ?? 'Contact the professional SJCM team for building planning consultation, engineering design, PBG, SLF, and your construction needs.'; ?>

                        </p>



                        <div class="grid md:grid-cols-1 gap-5 mt-10">



                            <!-- OFFICE -->

                            <div class="group bg-white rounded-2xl p-6 border shadow-sm hover:shadow-xl transition flex gap-5 items-start">


                                <div class="w-14 h-14 rounded-xl bg-blue-950 text-white flex items-center justify-center text-xl shrink-0">


                                    <i class="fa-solid fa-location-dot"></i>


                                </div>



                                <div>


                                    <h3 class="font-bold text-lg text-gray-900">

                                        <?= $text['contact_office'] ?? 'Office'; ?>

                                    </h3>


                                    <a href="#" class="text-gray-600 mt-2 block leading-relaxed hover:text-blue-900">

                                        Jl. Pulau Galang,
                                        Perum Prima Graha No.10,
                                        Pemogan, Denpasar Bali

                                    </a>


                                </div>



                            </div>





                            <!-- WHATSAPP -->

                            <div class="group bg-white rounded-2xl p-6 border shadow-sm hover:shadow-xl transition flex gap-5 items-start">


                                <div class="w-14 h-14 rounded-xl bg-green-500 text-white flex items-center justify-center text-xl shrink-0">


                                    <i class="fa-brands fa-whatsapp"></i>


                                </div>



                                <div>


                                    <h3 class="font-bold text-lg text-gray-900">

                                        <?= $text['contact_whatsapp'] ?? 'WhatsApp'; ?>

                                    </h3>


                                    <a href="https://wa.me/628156897486" target="_blank" class="text-gray-600 mt-2 block hover:text-green-600">

                                        +62 815-6897-486

                                    </a>


                                </div>


                            </div>





                            <!-- EMAIL -->

                            <div class="group bg-white rounded-2xl p-6 border shadow-sm hover:shadow-xl transition flex gap-5 items-start">


                                <div class="w-14 h-14 rounded-xl bg-blue-700 text-white flex items-center justify-center text-xl shrink-0">


                                    <i class="fa-solid fa-envelope"></i>


                                </div>



                                <div>


                                    <h3 class="font-bold text-lg text-gray-900">

                                        <?= $text['contact_email'] ?? 'Email'; ?>

                                    </h3>


                                    <a href="mailto:admin@sjcm4u.com" class="text-gray-600 mt-2 block hover:text-blue-900">

                                        admin@sjcm4u.com

                                    </a>


                                </div>


                            </div>



                        </div>



                    </div>





                    <!-- MAP -->

                    <div class="relative">


                        <div class="rounded-3xl overflow-hidden shadow-xl border bg-white p-3">


                            <iframe class="w-full h-[500px] rounded-2xl"
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3943.995350959838!2d115.18973207501477!3d-8.691989991356477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwNDEnMzEuMiJTIDExNcKwMTEnMzIuMyJF!5e0!3m2!1sid!2sid!4v1787905616098!5m2!1sid!2sid"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>

                        </div>



                        <!-- FLOATING LABEL -->

                        <a href="https://maps.app.goo.gl/SBHXokce6ZLGQfeh9" target="_blank" class="absolute inset-0 z-10">

                            <div class="absolute bottom-8 left-8 bg-white rounded-xl shadow-lg px-5 py-4">

                                <p class="font-bold text-gray-900">

                                    <?= $text['contact_map_label'] ?? 'SJCM Office'; ?>

                                </p>


                                <p class="text-sm text-gray-500">

                                    <?= $text['contact_map_city'] ?? 'Denpasar, Bali'; ?>

                                </p>


                            </div>
                        </a>



                    </div>



                </div>


            </div>


        </section>
        <section id="contact-form-section" class="py-24 bg-gray-50">

            <div class="max-w-2xl mx-auto px-6">

                <h2 class="text-3xl font-bold text-center mb-8"><?= $text['contact_form_heading'] ?? 'Send Us a Message'; ?></h2>

                <?php if ($statusMessage): ?>
                    <div data-form-status class="mb-6 rounded-lg border px-4 py-3 text-sm <?= strpos(strtolower($statusMessage), 'success') !== false || strpos(strtolower($statusMessage), 'thank you') !== false ? 'border-green-200 bg-green-50 text-green-700' : 'border-red-200 bg-red-50 text-red-700'; ?>">
                        <?= htmlspecialchars($statusMessage, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php endif; ?>

                <form id="contactForm" action="send-mail.php" method="POST" class="grid gap-6" novalidate>
                    <input type="text" name="name" placeholder="<?= $text['contact_form_name'] ?? 'Your Name'; ?>" required class="border p-4 rounded-lg w-full">

                    <input type="email" name="email" placeholder="<?= $text['contact_form_email'] ?? 'Your Email'; ?>" required class="border p-4 rounded-lg w-full">

                    <input type="tel" name="phone" placeholder="<?= $text['contact_form_phone'] ?? 'Your Phone'; ?>" required class="border p-4 rounded-lg w-full">

                    <textarea name="message" rows="5" placeholder="<?= $text['contact_form_message'] ?? 'Your Message'; ?>" required class="border p-4 rounded-lg w-full"></textarea>

                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                    <input type="hidden" name="ts" value="<?= time(); ?>">
                    <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off">

                    <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-800">
                        <?= $text['contact_form_button'] ?? 'Send Message'; ?>
                    </button>
                </form>

            </div>

        </section>
    </main>
    <?php include 'footer.php' ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const tokenField = document.getElementById('g-recaptcha-response');
            const siteKey = '<?= htmlspecialchars($mailConfig['site_key'], ENT_QUOTES, 'UTF-8'); ?>';
            const statusBox = document.querySelector('[data-form-status]');

            if (statusBox) {
                statusBox.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

            if (!form || !tokenField || !siteKey) {
                return;
            }

            const updateToken = function() {
                if (typeof grecaptcha === 'undefined') {
                    return;
                }

                grecaptcha.ready(function() {
                    grecaptcha.execute(siteKey, {
                        action: 'contact'
                    }).then(function(token) {
                        tokenField.value = token;
                    });
                });
            };

            updateToken();

            form.addEventListener('submit', function() {
                if (!tokenField.value) {
                    updateToken();
                }
            });
        });
    </script>
    <script src="js/main.js"></script>


</body>

</html>