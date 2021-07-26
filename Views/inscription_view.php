<?php

include_once '../Models/inscription_model.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <title> Inscription - JeVote </title>

    <!--        <link rel="stylesheet" type="text/css" href="Assets/styles/bootstrap/bootstrap.min.css">-->
    <link rel="stylesheet" href="../Assets/images/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../Assets/styles/monstyle/inscription.css">


</head>

<body>

<form method="post" action="../Controllers/inscription_controller.php" class="needs-validation">

    <div class="container">

        <div class="container-title">

            <h2> SING IN </h2>
            <span class="bi-person-plus"></span>

        </div>
        <div class="container-body">

            <div class="col">

                <h3>FIRST NAME</h3> <input type="text" class="input" name="first_name" required>
                <h3>LAST NAME</h3> <input type="text" class="input" name="last_name" required>

            </div>

            <div class="col">

                <h3>PSEUDO </h3> <input type="text" class="input" name="pseudo" required>
                <h3>EMAIL</h3> <input type="email" class="input" name="email" required>

            </div>

            <div class="col">

                <h3>PASSWORD</h3> <input type="password" class="input" name="password" required>
                <h3>SEX</h3> <select class="input" name="sexe"> <option value="homme"> MALE </option> <option value="femme"> FEMALE </option> <option value="pas precise"> PERSONAL </option> </select>

            </div>

            <div class="col">

                <h3>LOCATION</h3> <input type="text" class="input" name="action" required>
                <h3>DATE</h3> <input type="datetime-local" class="input" name="date" required>

            </div>

            <div class="">

                <h3>PROFILE</h3> <input type="file" name="profile" required>

            </div>

        </div>
        <div class="footer">

            <input type="submit" name="submit" value="SING IN" class="btn">

        </div>

    </div>

</form>

</body>

</html>