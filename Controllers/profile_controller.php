<?php

include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/config.php';
include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/database.php';
include_once $_SERVER['DOCUMENT_ROOT']. 'jevote/_config/response.php';

//RECUPPERATION DE LA DB
global $db;
$id = 1;

if (isset($_POST['submit'])) {

//    INCREMENTER L'ID'
    $id = $id +1;

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
    $sex = ucfirst($sex);

    $lieu = stripslashes($_REQUEST['action']);
    $lieu = mysqli_real_escape_string($db, $lieu);
    $lieu = ucfirst($lieu);

    $date = stripslashes($_REQUEST['date']);
    $date = mysqli_real_escape_string($db, $date);

//    $profile = stripslashes($_REQUEST['profile']);
//    $profile = mysqli_real_escape_string($db, $profile);
//    var_dump($profile);


    if (isset($_FILES['profile']) and !empty($_FILES['profile']['name'])) {

        $taille = 2097152;
        $ver_ext = array('jpg', 'jpeg', 'gif', 'png');
        if ($_FILES['profile']['size'] <= $taille) {

            $ext_img = strtolower(substr(strrchr($_FILES['profile']['name'], '.'), 1));
            if (in_array($ext_img, $ver_ext)) {

                $chemin = "../Assets/images/user/" . $id . "." . $ext_img;
                $res = move_uploaded_file($_FILES['profile']['tmp_name'], $chemin);
                if ($res) {

//                    AVATAR
                    $avatar = $db->prepare('UPDATE users SET profile = :profile WHERE id = :id');
                    $avatar->execute(array(

                        'profile' => $_SESSION['id'] . "." . $ext_img,
                        'id' => $_SESSION['id']

                    ));


                    $query = "UPDATE `users` SET `first_name` = '$nom', `last_name` = '$prenom', `pseudo` = '$pseudo', `email` = '$email', `password` = '".hash('sha256', $mot_passe)."', `sex` = '$sex', `identities` = 'User', `action` = '$lieu', `date` = '$date' WHERE id = '$id'";
                    $res = mysqli_query($db, $query);

                } else {

                    $err_import = "Errreur lors de l'impotation";
                    echo($err_import);

                }

            } else {

                $err_profile = "Votre photo de profil doit etre au format: 'jpg', 'jpeg', 'gif', 'png'";
                echo($err_profile);

            }

        } else {

            $err_profile = "Votre photo de profiles ne doit pas depasser 2Mo";
            echo($err_profile);

        }

    }



}