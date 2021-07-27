<?php
include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/config.php';
include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/database.php';
include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/response.php';

//RECUPPERATION DE LA DB
global $db;

if (isset($_POST['submit'])) {

    //RECUPERATION DES CHAMPS
    $pseudo = stripslashes($_REQUEST['pseudo']);
    $pseudo = mysqli_real_escape_string($db, $pseudo);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($db, $password);

    $identities = stripslashes($_REQUEST['id']);
    $identities = mysqli_real_escape_string($db, $identities);

//    echo ($pseudo);
//    echo ($password);
//    echo ($id);

    $_SESSION['pseudo'] = $pseudo;

    $query = "SELECT * FROM users WHERE pseudo ='$pseudo' AND identities='$identities' AND password='".hash('sha256', $password)."'" ;
    $result = mysqli_query($db, $query) or die(mysqli_error());


    if (mysqli_num_rows($result) == 1) {

        $Id = mysqli_fetch_assoc($result);

        // vérifier si l'utilisateur est un administrateur ou un utilisateur

        if ($Id['identities'] == 'administrateur') {
            $_SESSION['id'] = $Id['id'];
            header('location: ../Views/home_view.php');
            echo 'cool';

        }else{
            echo 'pas mal';
            header('location: ../Views/home_view.php');
        }
    }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        echo ($message);
//        header('location: ../Views/connexion_view.php');
    }

}
