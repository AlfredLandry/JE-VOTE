<?php
// Initialise session
session_start();

// Destroy session.
if(session_destroy())
{
    // Redirected to connexion
    header("Location: ../index.php");
}