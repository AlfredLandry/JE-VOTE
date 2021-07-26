<?php

// Inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_config/database.php';
include_once '_functions/funtions.php';

// Définition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'connexion';
}

// Array contenant toutes les pages
$allPages = scandir('controllers/');

// Vérification de l'existence de la page
if (in_array($page.'_controller.php', $allPages)) {

    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {

    echo '404 Error';

}