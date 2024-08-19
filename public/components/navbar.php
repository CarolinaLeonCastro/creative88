<?php
// Charger le fichier de langue en fonction de la sélection
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$lang_file = 'lang/' . $lang . '.php';

if (file_exists($lang_file)) {
    $translations = include($lang_file);
} else {
    $translations = include('lang/en.php'); // Fallback to English
}
?>

<nav class="navbar fixed top-0 start-0 end-0 z-999 transition-all duration-500 py-5 items-center shadow-md lg:shadow-none [&.is-sticky]:bg-white group [&.is-sticky]:shadow-md bg-white lg:bg-transparent" id="navbar">
    <div class="container">
        <div class="flex lg:flex-nowrap flex-wrap items-center">

            <a href="index.php?page=home&lang=<?php echo $lang; ?>" class="flex items-center">
                <img src="assets/images/LogoLight.png" alt="Logo Creative 88">
            </a>

            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button class="hs-collapse-toggle" type="button" id="hs-unstyled-collapse" data-hs-collapse="#navbarCollapse">
                    <i data-lucide="menu" class="h-8 w-8 text-black"></i>
                </button>
            </div>

            <div class="navigation hs-collapse transition-all duration-300 lg:basis-auto basis-full grow hidden items-center justify-center lg:flex mx-auto overflow-hidden mt-6 lg:mt-0 nav-light" id="navbarCollapse">
                <ul class="navbar-nav flex-col lg:flex-row gap-y-2 flex lg:items-center justify-center" id="navbar-navlist">
                    <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark all duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
                        <a class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize" href="index.php?page=home&lang=<?php echo $lang; ?>"><?php echo $translations['nav_home']; ?></a>
                    </li>

                    <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
                        <a class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize" href="index.php?page=services&lang=<?php echo $lang; ?>"><?php echo $translations['nav_services']; ?></a>
                    </li>

                    <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
                        <a class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize" href="index.php?page=features&lang=<?php echo $lang; ?>"><?php echo $translations['nav_features']; ?></a>
                    </li>

                    <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
                        <a class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize" href="index.php?page=pricing&lang=<?php echo $lang; ?>"><?php echo $translations['nav_pricing']; ?></a>
                    </li>

                    <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
                        <a class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize" href="index.php?page=contact&lang=<?php echo $lang; ?>"><?php echo $translations['nav_contact']; ?></a>
                    </li>
                </ul>
            </div>

            <div class="ms-auto shrink hidden lg:inline-flex gap-2">
                <a href="index.php?page=contact&lang=<?php echo $lang; ?>" class="py-2 px-6 inline-flex items-center gap-2 rounded-md text-base text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                    <i data-lucide="send" class="h-4 w-4 fill-white/40"></i>
                    <span class="hidden sm:block"><?php echo $translations['get_in_touch']; ?></span>
                </a>
            </div>

            <!-- Language Switcher -->
            <div class="language-switcher ms-auto shrink hidden lg:inline-flex gap-2">
                <a href="?lang=en" class="text-sm <?php echo $lang == 'en' ? 'font-bold' : ''; ?>">EN</a>
                <a href="?lang=fr" class="text-sm <?php echo $lang == 'fr' ? 'font-bold' : ''; ?>">FR</a>
                <a href="?lang=nl" class="text-sm <?php echo $lang == 'nl' ? 'font-bold' : ''; ?>">NL</a>
            </div>
        </div>
    </div>
</nav>
