<?php
session_start();
include_once './database.php';
include_once './index.php';



$identifiant = filter_input(INPUT_POST, 'idpseudo');
$motdepasse = filter_input(INPUT_POST, 'idpsswd');

$database = new Database();

$personne =$database->login($identifiant, $motdepasse);
//var_dump($personne);

if($personne !== false){
   
    $_SESSION['personne'] = $identifiant;
    echo "Ton identifiant et ton mot de passe sont corrects. Tu t'appelles ".$_SESSION['personne'];
    echo "<nav><a href=\"index.php\"/>retour à la page d'accueil </a></nav></br>";
    //echo  "<nav><a href=\"Authentification.php\"/>accéder à son espace personnel</a></nav>";
}else{
    echo 'Votre identifiant et/ou votre mot de passe ne sont pas corrects.';
    echo "<nav><a href=\"inscription.php\"/>Inscris-toi </a></nav>";
    echo "<nav><a href=\"login.php\"/>Où reconnecte-toi </a></nav></br>";
}




