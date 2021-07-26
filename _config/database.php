<?php

// Connexion a la base de donnees MySQL
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verifier la connexion
if ($db === false) {
    die("ERREUR : IMPOSSIBLE DE SE CONNECTER AU SERVEUR !!!. " . mysqli_connect_error());
}
