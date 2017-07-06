<?php
include_once './database.php';
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// TODO: Créer un événement à partir des info reçu par le formulaire;
// TODO: Stocker l'événement dans la base de données
// TODO: rediriger l'utilisateur vers l'index
$nom = filter_input(INPUT_POST, 'idname');
$lieu = filter_input(INPUT_POST, 'idtown');
$date = filter_input(INPUT_POST, 'iddate');
$description = filter_input(INPUT_POST, 'descriptif');
$places = filter_input(INPUT_POST, 'idplace');
$duree = filter_input(INPUT_POST, 'idtime');
$ressources = filter_input(INPUT_POST, 'idressrce');
$capacite = filter_input(INPUT_POST, 'idcap');

if (!isset($_SESSION['personne'])) {
    echo "<nav><a href=\"login.php\"/>se connecter </a></nav>";
    echo "vous n'êtes pas connecté!";
    exit();
}

$event = new Evenement($date, $lieu, $places, $nom, $duree, $description, $ressources, $capacite);
$database = new Database();
$database->creerEvenement($event);
$perso = $_SESSION['personne'];

if($database->creerEvenement($event) !== false) {
    echo "<nav><a href=\"index.php\"/>retour à la page d'accueil </a></nav>";
    echo "Bravo! L'événement a bien été crée!</br>";
}else{
    echo "<nav><a href=\"event.html\"/>retour à la page d'accueil </a></nav>";
    echo "l'évenement n'a pu être crée, revois tes informations!";
    
}

