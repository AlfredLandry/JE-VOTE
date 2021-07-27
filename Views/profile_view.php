<?php

include_once '../Models/profile_model.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <title> Edition de profile - JeVote </title>

    <!--        <link rel="stylesheet" type="text/css" href="Assets/styles/bootstrap/bootstrap.min.css">-->
    <link rel="stylesheet" href="../Assets/images/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../Assets/styles/monstyle/inscription.css">


</head>

<body>

<form method="post" action="../Controllers/profile_controller.php" class="needs-validation" enctype="multipart/form-data">

    <div class="container">

        <div class="container-title">

            <h2> EDIT PROFILE </h2>
            <span class="bi-pencil-square"></span>
            <h3> OPTIONAL </h3>

        </div>
        <div class="container-body">

            <div class="col">

                <h3>FIRST NAME</h3> <input type="text" class="input" name="first_name" >
                <h3>LAST NAME</h3> <input type="text" class="input" name="last_name" >

            </div>

            <div class="col">

                <h3>PSEUDO </h3> <input type="text" class="input" name="pseudo" >
                <h3>EMAIL</h3> <input type="email" class="input" name="email" >

            </div>

            <div class="col">

                <h3>PASSWORD</h3> <input type="password" class="input" name="password" >
                <h3>SEX</h3> <select class="input" name="sexe"> <option value="homme"> MALE </option> <option value="femme"> FEMALE </option> <option value="pas precise"> PERSONAL </option> </select>

            </div>

            <div class="col">

                <h3>LOCATION</h3> <input type="text" class="input" name="action" >
                <h3>DATE</h3> <input type="datetime-local" class="input" name="date" >

            </div><br>

            <div class="">

                <h3>PROFILE IMAGE</h3> <input type="file" name="profile">

            </div>

        </div>
        <div class="footer">

            <input type="submit" name="submit" value="UPDATE" class="btn">

        </div>

    </div>

</form>

</body>

</html>