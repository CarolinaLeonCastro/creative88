<?php
// index.php combiné avec navbar et footer

session_start();

// Définition de la langue
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$_SESSION['lang'] = $lang;

// Inclusion des traductions
$translations = include "languages/{$lang}.php";

// Définir la page actuelle à afficher
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Par défaut, la page est 'home'

// Sections à inclure pour chaque page
$page_sections = [
    'home' => ['home', 'contact'],
    'services' => ['services', 'contact'],
    'about' => ['about', 'contact'],
    'pricing' => ['pricing', 'contact'],
    // Ajoutez d'autres pages ici
];

// Si la page demandée existe dans le tableau, on utilise ses sections, sinon on affiche la page 'home'
$sections = isset($page_sections[$page]) ? $page_sections[$page] : $page_sections['home'];

// Fonction pour ajouter la classe active
function activeClass($pageName, $currentPage) {
    return $pageName === $currentPage ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['title']; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/images/favicon.ico" rel="shortcut icon">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <!-- Début de la Navbar intégrée -->
    <nav class="navbar fixed top-0 start-0 end-0 z-999 transition-all duration-500 py-5 items-center shadow-md lg:shadow-none [&.is-sticky]:bg-white group [&.is-sticky]:shadow-md bg-white lg:bg-transparent"
    id="navbar">
    <div class="container">
        <div class="flex lg:flex-nowrap flex-wrap items-center">
            <a href="index.php?page=home" class="flex items-center">
                <img src="assets/images/LogoLight.png" alt="Logo Creative 88">
            </a>

            <!-- Menu burger pour mobile -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button class="hs-collapse-toggle" type="button" id="hs-unstyled-collapse"
                    data-hs-collapse="#navbarCollapse">
                    <i data-lucide="menu" class="h-8 w-8 text-black"></i>
                </button>
            </div>

            <!-- Menu principal (mobile et desktop) -->
<div class="navigation hs-collapse transition-all duration-300 lg:basis-auto basis-full grow hidden items-center justify-center lg:flex mx-auto overflow-hidden mt-6 lg:mt-0 nav-light"
    id="navbarCollapse">
    <ul class="navbar-nav flex-col lg:flex-row gap-y-2 flex lg:items-center justify-center"
        id="navbar-navlist">
        <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark all duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
            <a id="nav-home"
                class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize"
                href="index.php?page=home&lang=<?php echo $lang; ?>"><?php echo $translations['navbar']['home']; ?></a>
        </li>
        <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
            <a id="nav-services"
                class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize"
                href="index.php?page=services&lang=<?php echo $lang; ?>"><?php echo $translations['navbar']['services']; ?></a>
        </li>
        <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
            <a id="nav-about-us"
                class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize"
                href="index.php?page=about&lang=<?php echo $lang; ?>"><?php echo $translations['navbar']['about_us']; ?></a>
        </li>
        <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
            <a id="nav-pricing"
                class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize"
                href="index.php?page=pricing&lang=<?php echo $lang; ?>"><?php echo $translations['navbar']['pricing']; ?></a>
        </li>
        <li class="nav-item mx-1.5 transition-all text-dark lg:text-black group-[&.is-sticky]:text-dark duration-300 hover:text-primary [&.active]:!text-primary group-[&.is-sticky]:[&.active]:text-primary">
            <a id="nav-contact"
                class="nav-link inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 capitalize"
                href="#contact"><?php echo $translations['navbar']['contact']; ?></a>
        </li>
    </ul>
    <div class="ms-auto shrink hidden lg:inline-flex gap-2">
                    <a href="#contact" id="nav-get-in span" class="py-2 px-6 inline-flex items-center gap-2 rounded-md text-base text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" class="lucide lucide-send h-4 w-4 fill-white/40"><path d="m22 2-7 20-4-9-9-4Z"></path><path d="M22 2 11 13"></path></svg>
                        <span class="hidden sm:block">Get in touch</span>
                    </a>
                </div> 

                <!-- Sélecteur de langue ajouté ici -->
                <div class="flex lg:hidden justify-center mt-4">
                    <a href="?lang=en"
                        class="px-3 py-2 text-sm font-medium <?php echo $lang === 'en' ? 'bg-primary text-white' : 'text-gray-800'; ?>">EN</a>
                    <a href="?lang=fr"
                        class="px-3 py-2 text-sm font-medium <?php echo $lang === 'fr' ? 'bg-primary text-white' : 'text-gray-800'; ?>">FR</a>
                    <a href="?lang=nl"
                        class="px-3 py-2 text-sm font-medium <?php echo $lang === 'nl' ? 'bg-primary text-white' : 'text-gray-800'; ?>">NL</a>
                </div>
            </div>

            <!-- Sélecteur de langue pour desktop -->
            <div class="ms-auto shrink hidden lg:inline-flex gap-2">
                <a href="?lang=en"
                    class="px-2 py-1 text-sm font-medium <?php echo $lang === 'en' ? 'bg-primary text-white' : 'text-gray-800'; ?>">EN</a>
                <a href="?lang=fr"
                    class="px-2 py-1 text-sm font-medium <?php echo $lang === 'fr' ? 'bg-primary text-white' : 'text-gray-800'; ?>">FR</a>
                <a href="?lang=nl"
                    class="px-2 py-1 text-sm font-medium <?php echo $lang === 'nl' ? 'bg-primary text-white' : 'text-gray-800'; ?>">NL</a>
            </div>

        </div>
    </div>
</nav>

    <!-- Fin de la Navbar -->


    <!-- Inclusion des sections spécifiques à chaque page -->
    <?php
    foreach ($sections as $section) {
        $section_path = "includes/sections/{$section}.php";
        if (file_exists($section_path)) {
            include $section_path;
        } else {
            echo "<p>Erreur : le fichier {$section}.php n'a pas été trouvé dans le dossier includes/sections.</p>";
        }
    }
    ?>

  <!-- Début du Footer intégré -->
<footer class="bg-[#17243A] w-full">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 pb-16 pt-16">
            <div class="col-span-full lg:col-span-2">
                <div class="max-w-2xl mx-auto">
                    <div class="flex items-center">
                        <img src="assets/images/LogoDark.png" alt="" class="h-10 me-5">
                    </div>
                    <p class="text-gray-300 max-w-xs mt-6">Clos des cerisiers 59, 7850 Enghien.</p>
                </div>
                <div class="mt-6 grid space-y-3">
                    <a class="inline-flex items-center gap-x-4 text-gray-300 hover:text-gray-400 transition-all duration-300"
                        href="mailto:hello@creative88.be">
                        <svg xmlns="https://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-mail">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        hello@creative88.be
                    </a>
                    <p class="text-gray-300 mt-4">TVA: BE0763956261</p>
                </div>
            </div>

            <div class="col-span-1">
                <h4 class="font-semibold text-gray-100 uppercase">Company</h4>
                <div class="mt-6 grid space-y-3">
                    <p><a class="inline-flex gap-x-2 text-base text-gray-300 hover:text-gray-400 transition-all duration-300"
                            href="index.php?page=home&lang=<?php echo $lang; ?>">Home</a></p>
                    <p><a class="inline-flex gap-x-2 text-base text-gray-300 hover:text-gray-400 transition-all duration-300"
                            href="index.php?page=services&lang=<?php echo $lang; ?>">Services</a></p>
                    <p><a class="inline-flex gap-x-2 text-base text-gray-300 hover:text-gray-400 transition-all duration-300"
                            href="index.php?page=about&lang=<?php echo $lang; ?>">About us</a></p>
                    <p><a class="inline-flex gap-x-2 text-base text-gray-300 hover:text-gray-400 transition-all duration-300"
                            href="index.php?page=pricing&lang=<?php echo $lang; ?>">Pricing</a></p>
                    <p><a class="inline-flex gap-x-2 text-base text-gray-300 hover:text-gray-400 transition-all duration-300"
                            href="#contact">Contact</a></p>
                </div>
            </div>

            <div class="col-span-1">
                <img src="./assets/images/footer.png" alt="Footer funny Image" class="h-48 w-full object-cover rounded-lg"
                    loading="lazy">
            </div>
        </div>
    </div>

    <div class="py-4 bg-[#1C2940] w-full">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-between items-center w-full">
                <p class="text-base text-white">
                    <script>document.write(new Date().getFullYear())</script>© Creative88
                </p>

                <div class="flex space-x-4">
                    <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-white hover:bg-primary transition-all duration-300"
                        href="https://github.com/not-kami">
                        <svg class="flex-shrink-0 size-4" xmlns="https://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>

                    <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-white hover:bg-primary transition-all duration-300"
                        href="https://github.com/CarolinaLeonCastro">
                        <svg class="flex-shrink-0 size-4" xmlns="https://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

        </footer>

    <!-- Fin du Footer -->
    <div id="cookieBanner"
            class="fixed bottom-0 left-0 w-full bg-cookieBanner text-white py-4 px-6 text-center shadow-lg z-999">
            <p class="text-sm"><?php echo $translations['cookies']['message']; ?></p>
            <button id="acceptCookies"
                class="bg-primary hover:bg-primaryDark text-white font-semibold py-2 px-4 mt-4 rounded-md">
                <?php echo $translations['cookies']['accept']; ?>
            </button>
    </div>
    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">
        <i data-lucide="arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            lucide.createIcons();
        });
    </script>
    <script src="assets/libs/preline/preline.js" ></script>
    <script src="assets/libs/jarallax/jarallax.min.js"></script>
    <script src="assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/libs/gumshoejs/gumshoe.polyfills.min.js"></script>
    <script src="assets/js/app.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cookieBanner = document.getElementById("cookieBanner");
            const acceptCookiesBtn = document.getElementById("acceptCookies");

            if (!localStorage.getItem("cookiesAccepted")) {
                cookieBanner.style.display = "block";
            }

            acceptCookiesBtn.addEventListener("click", function () {
                cookieBanner.style.display = "none";
                localStorage.setItem("cookiesAccepted", "true");
            });
        });
    </script>
</body>
</html>
