

<?php
include_once './Personne.php';
include_once './Database.php';

$name = filter_input(INPUT_POST, 'idname');
$firstname = filter_input(INPUT_POST, 'idprenom') ;
$years = filter_input(INPUT_POST, 'idage' );
$masc = filter_input(INPUT_POST, 'genre');
$fem = filter_input(INPUT_POST, 'genre');
$mssge = filter_input(INPUT_POST, 'idmail');
$identite = filter_input(INPUT_POST, 'ididentifiant');
$psswd = filter_input(INPUT_POST, 'idpsswd');
$pays = filter_input(INPUT_POST, 'pays');
$home = filter_input(INPUT_POST, 'region');
$alone = filter_input(INPUT_POST, 'perso');
$cple = filter_input(INPUT_POST, 'perso');
$chmge = filter_input(INPUT_POST, 'chômage');
$retrav = filter_input(INPUT_POST, 'reconversion');
$trav = filter_input(INPUT_POST, 'actif');
$sport = filter_input(INPUT_POST, 'sports');
$travelling = filter_input(INPUT_POST, 'travel');
$patrimoine = filter_input(INPUT_POST, 'ct');
$dessin = filter_input(INPUT_POST, 'art');
$eduquer = filter_input(INPUT_POST, 'crs');
$orienter = filter_input(INPUT_POST, 'orie');
$food = filter_input(INPUT_POST, 'gastron');

//echo "félicitations! Votre compte a bien été crée!"
//('location: include_once ./index.php');

$utilisateur = new Personne($name, $psswd, $mssge, $firstname, $years, $sport, $home, $masc, $cple, $identite);

$database = new Database();
$database->creerPersonne($utilisateur);
?>
<nav><a href="index.php"/>retour à l'accueil</a></nav>
<nav><a href="login.php"/> ou se connecter à son compte</a></nav>






