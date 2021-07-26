<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
error_reporting(E_ALL);
ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();


// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "JeParticipe");
define("WEBSITE_NAME", "JeParticipe");
define("WEBSITE_URL", "https://jeparticipe.com");
define("WEBSITE_DESCRIPTION", "Ce site a été crée pour vous permettre de participer a des élections dans votre cadre et peut importe ou vous vous trouvez en quelques clics de souris.");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "fr, en");
define("WEBSITE_AUTHOR", "Talom Alfred");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "JeParticipe");
define("WEBSITE_FACEBOOK_DESCRIPTION", "Ce site a été crée pour vous permettre de participer a des élections dans votre cadre et peut importe ou vous vous trouvez en quelques clics de souris.");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jevote');

//Language
