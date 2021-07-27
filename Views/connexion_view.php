<?php

include_once 'Models/connexion_model.php';

?>

<!DOCTYPE html>
<html lang="fr">

    <head>

        <title> <?php echo ucfirst(($page)) ?> - JeVote </title>

<!--        <link rel="stylesheet" type="text/css" href="Assets/styles/bootstrap/bootstrap.min.css">-->
        <link rel="stylesheet" href="Assets/images/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="Assets/styles/monstyle/connexion.css">


    </head>

    <body>

        <form method="post" action="Controllers/connexion_controller.php" class="needs-validation">

            <div class="container">

                <div class="container-title">

                    <h2> LOG IN </h2>
                    <span class="bi-lock-fill"></span>

                </div>
                <div class="container-body">

                    <h3>PSEUDO</h3> <input type="text" class="input" name="pseudo" required>
                    <h3>PASSWORD</h3> <input type="password" class="input" name="password" required>
                    <h3>ID</h3> <input type="text" class="input id" name="id" required>

                </div>
                <div class="footer">

                    <a href="Views/inscription_view.php" name="submit" class="sing-in"> SING IN </a>

                    <input type="submit" name="submit" value="LOG IN" class="btn">

                </div>

            </div>

        </form>

    <script src="Assets/js/monjs/connexion.js"></script>

    </body>

</html>