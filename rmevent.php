<?php

include_once './evenement.php';
include_once './database.php';
session_start();



$button = filter_input(INPUT_POST, 'delete');
$_SESSION['personne'];
//faire new database où l'on appelle la fonction qui se trouve dans database, cf->validevent.php;
$data = new Database();
$data->supp($button);
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
function supprimer() {
    
}