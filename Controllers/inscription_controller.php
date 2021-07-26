<?php

include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/config.php';
include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/database.php';
include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/response.php';

//RECUPPERATION DE LA DB
global $db;

if (isset($_POST['submit'])) {

    //RECUPERATION DES CHAMPS
    $nom = stripslashes($_REQUEST['first_name']);
    $nom = mysqli_real_escape_string($db, $nom);

    $prenom = stripslashes($_REQUEST['last_name']);
    $prenom = mysqli_real_escape_string($db, $prenom);

    $pseudo = stripslashes($_REQUEST['pseudo']);
    $pseudo = mysqli_real_escape_string($db, $pseudo);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($db, $email);

    $mot_passe = stripslashes($_REQUEST['last_name']);
    $mot_passe = mysqli_real_escape_string($db, $mot_passe);

    $sex = stripslashes($_REQUEST['sexe']);
    $sex = mysqli_real_escape_string($db, $sex);

    $lieu = stripslashes($_REQUEST['action']);
    $lieu = mysqli_real_escape_string($db, $lieu);

    $date = stripslashes($_REQUEST['date']);
    $date = mysqli_real_escape_string($db, $date);

    $profile = stripslashes($_REQUEST['profile']);
    $profile = mysqli_real_escape_string($db, $profile);

    $query = "INSERT into `users` (first_name, last_name, pseudo,email , password, sex, identities, action, date, profile)
				VALUES ('$nom', '$prenom', '$pseudo', '$email','.hash('sha256', $mot_passe).', '$sex', '$lieu', '$date', '$profile')";
    $res = mysqli_query($db, $query);

    if ($res === true) {

        echo 'Vous etes inscrit';

    } else {

        echo 'PAS INSCRIT';

    }

}