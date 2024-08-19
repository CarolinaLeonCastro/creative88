<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <link rel="canonical" href="https://www.creative88.be">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $translations['site_title']; ?></title>
    
    <!-- Meta Description -->
    <meta name="description" content="<?php echo $translations['meta_description']; ?>">
    
    <!-- Meta Keywords -->
    <meta name="keywords" content="<?php echo $translations['meta_keywords']; ?>">
    
    <!-- Meta Author -->
    <meta name="author" content="Creative 88">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?php echo $translations['og_title']; ?>">
    <meta property="og:description" content="<?php echo $translations['og_description']; ?>">
    <meta property="og:image" content="https://www.creative88.be/assets/images/SocialBanner.png">
    <meta property="og:url" content="https://www.creative88.be">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $translations['twitter_title']; ?>">
    <meta name="twitter:description" content="<?php echo $translations['twitter_description']; ?>">
    <meta name="twitter:image" content="https://www.creative88.be/assets/images/SocialBanner.png">
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="assets/images/favicon.ico" rel="shortcut icon">

    <!-- Icons CSS -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- Jarallax CSS -->
    <link href="assets/libs/jarallax/jarallax.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <?php
    // Layout des pages et leurs sections
    $layout = [
        'home' => ['hero', 'services', 'about', 'features', 'pricing', 'faq', 'contact'],
        'about_us' => ['about', 'contact'],
        'services' => ['services', 'contact'],
        'pricing' => ['pricing', 'faq', 'contact'],
        'contact' => ['contact'],
        '404' => []
    ];

    if (isset($layout[$page])) {
        foreach ($layout[$page] as $section) {
            echo '<link rel="stylesheet" type="text/css" href="style/' . $section . '.css">';
        }
    } else {
        echo '<link rel="stylesheet" type="text/css" href="style/404.css">';
    }
    ?>
</head>

<body>
<header>
    <?php include 'public/components/navbar.php'; ?>
</header>

<main>
    <!-- Sections spécifiques à chaque page -->
    <?php 
    if (isset($layout[$page])) {
        foreach ($layout[$page] as $section) {
            include 'public/sections/' . $section . '.php';
        }
    } else {
        include 'public/404.php';
    }
    ?>
</main>

<footer>
    <?php include 'public/components/footer.php'; ?>
</footer>

</body>
</html>
