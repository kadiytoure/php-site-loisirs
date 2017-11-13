<?php

include_once './database.php';
include_once './index.php';
$nom = filter_input(INPUT_POST, 'logout');



//edheader('location: ./logout.php');
//session_start();
if (isset($_POST['logout']) && isset($_SESSION['personne'])) {
    $quitter=new Database();
    $quitter->logout();
    echo "Merci d'être passé sur notre site, à bientôt!";
    echo "<nav><a href=\"index.php\"/>retour à l'accueil </a></nav><br/>";
    //header("Location:logout.php");
} else {
    echo "la déconnexion est déjà effective!";
    //echo "<nav><a href=\"login.php\"/>se connecter </a></nav><br/>";
}

