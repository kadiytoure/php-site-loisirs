<?php
session_start();
include_once './database.php';



$identifiant = filter_input(INPUT_POST, 'idpseudo');
$motdepasse = filter_input(INPUT_POST, 'idpsswd');

$database = new Database();

$personne =$database->login($identifiant, $motdepasse);

if($personne !== false){
    $_SESSION['personne'] = $personne;
    echo "Ton identifiant et ton mot de passe sont corrects.";
    echo "<nav><a href=\"index.php\"/>retour à la page d'accueil </a></nav></br>";
    //echo  "<nav><a href=\"Authentification.php\"/>accéder à son espace personnel</a></nav>";
}else{
    echo 'Votre identifiant et/ou votre mot de passe ne sont pas corrects.';
    echo "<nav><a href=\"inscription.php\"/>Inscris-toi </a></nav>";
    echo "<nav><a href=\"login.php\"/>Où reconnecte-toi </a></nav></br>";
}



/*if ($identifiant & $motdepasse = "personne/") {
    echo "Votre mot de passe est correct";
    include_once './index.php';
    include_once './logout.php';
} else {
     echo "Votre mot de passe n'est pas correct, veuillez vous inscrire s'il vous plaît";
     include_once './inscription.php';
}*/

