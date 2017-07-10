

<?php
include_once './personne.php';
include_once './database.php';

$name = filter_input(INPUT_POST, 'idname');
$firstname = filter_input(INPUT_POST, 'idprenom');
$years = filter_input(INPUT_POST, 'idage');
$fem = filter_input(INPUT_POST, 'genre');
$mssge = filter_input(INPUT_POST, 'idmail');
$identite = filter_input(INPUT_POST, 'ididentifiant');
$psswd = filter_input(INPUT_POST, 'idpsswd');
$pays = filter_input(INPUT_POST, 'pays');
$home = filter_input(INPUT_POST, 'region');
$cple = filter_input(INPUT_POST, 'perso');
$chmge = filter_input(INPUT_POST, 'trav');
$sport = filter_input(INPUT_POST, 'interet');


//echo "félicitations! Votre compte a bien été crée!"
//('location: include_once ./index.php');
if(!empty($name) && !empty($firstname) && !empty($years) && !empty($fem) && !empty($mssge) 
        && !empty($identite) && !empty($psswd) && !empty($pays) && !empty($home) && !empty($cple) 
        && !empty($chmge) && !empty($sport)) {
    $utilisateur = new Personne($name, $psswd, $mssge, $firstname, $years, $sport, $home, $fem, $cple,$identite);

    $database = new Database();
    $database->creerPersonne($utilisateur);
    echo "<nav><a href=\"index.php\"/>retour à l'accueil</a></nav>";
    echo "<nav><a href=\"login.php\"/> ou se connecter à son compte</a></nav>";
    echo "felicitations! ton compte a bien été crée!";

}else{
    echo "<nav><a href=\"inscription.php\"/>se réinscrire</a></nav>";
    echo "informations incomplètes, réinscris-toi!";
}










