<?php
session_start();

// Détection de la langue (par défaut : 'en')
$lang = 'en';

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

// Chargement du fichier de traduction correspondant
$langFile = 'lang/' . $lang . '.php';

if (file_exists($langFile)) {
    $translations = include($langFile);
} else {
    $translations = include('lang/en.php'); // Langue par défaut
}

// Détermination de la page à charger
$page = 'home';

if (isset($_GET['page'])) {
    $filename = 'pages/' . $_GET['page'] . '.php';
    if (file_exists($filename)) {
        $page = $_GET['page'];
    } else {
        $page = '404';
    }
}

include 'public/components/skeleton.php';
?>
