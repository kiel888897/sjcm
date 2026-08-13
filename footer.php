<?php
if (!isset($text) || !is_array($text)) {
    $text = [
        'footer_company' => 'Company',
        'footer_description' => '',
        'footer_services' => 'Services',
        'footer_architecture' => 'Architecture',
        'footer_structure' => 'Structure',
        'footer_mep' => 'MEP',
        'footer_pbg_slf' => 'PBG & SLF',
        'footer_follow' => 'Follow Us',
        'footer_connect' => 'Connect with us',
        'footer_rights' => '© 2024 SJCM. All rights reserved.',
    ];
}
?>
<a href="https://wa.me/628156897486" class="fixed bottom-6 right-6 w-14 h-14 rounded-full bg-green-500 text-white shadow-xl flex items-center justify-center text-3xl hover:bg-green-600 transition z-50" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
</a>
<!-- footer -->
<footer class="bg-blue-950 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12">
        <!-- COMPANY -->
        <div>
            <img
                src="assets/images/logo-white.png" class="w-36 mb-6" alt="SJCM Logo">
            <!-- <p class="text-xs tracking-[3px]uppercase text-blue-200 mb-4">
                Engineering Consultant
            </p> -->
        </div>
        <!-- COMPANY MENU -->
        <div>
            <h3 class="font-bold text-lg mb-6">
                <?php echo $text['footer_company']; ?>
            </h3>

            <p class="text-gray-300 leading-relaxed text-sm">
                <?php echo $text['footer_description']; ?>
            </p>

        </div>

        <!-- SERVICES -->
        <div>
            <h3 class="font-bold text-lg mb-6">
                <?php echo $text['footer_services']; ?>
            </h3>
            <ul class="space-y-4 text-gray-300 text-sm">
                <li>
                    <i class="fa-solid fa-building mr-2 text-blue-300"></i>
                    <?php echo $text['footer_architecture']; ?>
                </li>
                <li>
                    <i class="fa-solid fa-drafting-compass mr-2 text-blue-300"></i>
                    <?php echo $text['footer_structure']; ?>
                </li>
                <li>
                    <i class="fa-solid fa-gears mr-2 text-blue-300"></i>
                    <?php echo $text['footer_mep']; ?>
                </li>
                <li>
                    <i class="fa-solid fa-hard-hat mr-2 text-blue-300"></i>
                    <?php echo $text['footer_construction_management']; ?>
                </li>
                <li>
                    <i class="fa-solid fa-calculator mr-2 text-blue-300"></i>
                    <?php echo $text['footer_cost_estimation']; ?>
                </li>
                <li>
                    <i class="fa-solid fa-file-signature mr-2 text-blue-300"></i>
                    <?php echo $text['footer_pbg_slf']; ?>
                </li>
            </ul>
        </div>
        <!-- SOCIAL -->
        <div>
            <h3 class="font-bold text-lg mb-6">
                <?php echo $text['footer_follow']; ?>
            </h3>
            <p class="text-gray-300 text-sm mb-5">
                <?php echo $text['footer_connect']; ?>
            </p>
            <div class="flex gap-4">
                <a href="https://www.facebook.com/share/19DmYABoMJ/" class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center hover:bg-blue-600 transition">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center hover:bg-pink-600 transition">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center hover:bg-blue-500 transition">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <!-- <a href="https://wa.me/628156897486" class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center hover:bg-green-500 transition">
                    <i class="fa-brands fa-whatsapp"></i>
                </a> -->
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-6">
        <div class="border-t border-white/10 mt-14 pt-6 text-center text-sm text-gray-400">
            <?php echo $text['footer_rights']; ?>
        </div>
    </div>
</footer>