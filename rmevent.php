<?php

include_once './evenement.php';
include_once './database.php';

session_start();



$button = filter_input(INPUT_POST, 'supp');

//faire new database où l'on appelle la fonction qui se trouve dans database, cf->validevent.php;
$database = new Database();
$file = $button;
$dossier = $_SESSION['personne'];

$database->supp($file, $dossier);



echo "<nav><a href=\"index.php\"/>retour à la page d'accueil </a></nav>";
echo "super, événement supprimé";
/*
$delete = $_POST['delete'];
echo '<p>' . $filename . '</p>';
unlink('personne/'.$delete);
echo '<p>' . $filename . 'has been deleted</p>';
header('location: index.php');
*/
/*
if(is_file( "Evenement/($_POST['delete']))) {
    unlink ($_POST['delete']);
}
 * 
 */
