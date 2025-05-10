<?php
// Déterminer la page à afficher
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Liste des pages autorisées
$allowed_pages = ['home', 'analytics', 'messages', 'users', 'products','categories' ,'orders', 'settings', 'help'];

// Vérifier si la page demandée est valide
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Inclure l'en-tête
include 'includes/header.php';

// Inclure la sidebar
include 'includes/sidebar.php';

// Inclure le contenu de la page demandée
include "dashboard/$page.php";

// Inclure le pied de page
include 'includes/footer.php';
?>