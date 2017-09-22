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
$category = filter_input(INPUT_POST, 'interet');

if (!isset($_SESSION['personne'])) {
    echo "<nav><a href=\"login.php\"/>se connecter </a></nav>";
    echo "vous n'êtes pas connecté!";
    exit();
}
if(!empty($nom) && !empty($lieu) && !empty($date) && !empty($description) && !empty($places) && !empty($duree) && !empty($ressources) && !empty($capacite) && !empty($category)){
    //modifier le new Evenement pour rajouter l'organisateur que tu récupère en $_SESSION
    $organiser = $_SESSION['personne'];
  
   
  
$event = new Evenement($date, $lieu, $places, $nom, $duree, $description,$organiser, $ressources, $capacite, $category);
       // $date, $lieu, $places, $nom, $duree, $description, $organisateur, $ressources, $capacite);
$database = new Database();
$database->creerEvenement($event);
$perso = $_SESSION['personne'];
echo "<nav><a href=\"index.php\"/>retour à la page d'accueil </a></nav>";
echo "<nav><a href=\"allevents.php\"/>Visualiser l'événement </a></nav>";
echo "Bravo! Evenement crée!";
}else{
    echo "<nav><a href=\"event.html\"/>recrée ton événement </a></nav>";
    echo "événement n'ayant pu être crée, recommence";
}

