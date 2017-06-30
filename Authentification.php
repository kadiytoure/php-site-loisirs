<?php
//session_start();
include_once './Database.php';



$identifiant = filter_input(INPUT_POST, 'idpseudo');
$motdepasse = filter_input(INPUT_POST, 'idpsswd') ;

$database = new Database();

$a =$database->login($identifiant, $motdepasse);

if($a !== false){
    $_SESSION['personne'] = serialize($a);
}else{
    echo ' un problem';
}



/*if ($identifiant & $motdepasse = "personne/") {
    echo "Votre mot de passe est correct";
    include_once './index.php';
    include_once './logout.php';
} else {
     echo "Votre mot de passe n'est pas correct, veuillez vous inscrire s'il vous plaît";
     include_once './inscription.php';
}*/