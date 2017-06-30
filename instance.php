<?php
include_once './Personne.php';


$prenom = filter_input(INPUT_POST, 'idprenom');
$nom = filter_input(INPUT_POST, 'idname') ;
$age = filter_input(INPUT_POST, 'idage') ;
$homme = filter_input(INPUT_POST, 'genre') ;
$femme = filter_input(INPUT_POST, 'genre') ;
$mail = filter_input(INPUT_POST, 'idmail') ;
$pseudo = filter_input(INPUT_POST, 'ididentifiant') ;
$mdp = filter_input(INPUT_POST, 'idpsswd') ;
$country = filter_input(INPUT_POST, 'pays') ;
$region = filter_input(INPUT_POST, 'region') ;
$celib = filter_input(INPUT_POST, 'perso');
$marier = filter_input(INPUT_POST, 'perso');
$pro = filter_input(INPUT_POST, 'chômage');
$reconv = filter_input(INPUT_POST, 'actif');
$sportif = filter_input(INPUT_POST, 'sports');
$voyager = filter_input(INPUT_POST, 'travel');
$cultiver = filter_input(INPUT_POST, 'ct') ;
$artistique = filter_input(INPUT_POST, 'art');
$apprendre = filter_input(INPUT_POST, 'crs');
$orientation = filter_input(INPUT_POST, 'orie') ;
$gastronomie = filter_input(INPUT_POST, 'gastron') ;

//créer une instance de Personne en utilisant les valeurs du $_POST
$personne = new Personne($nom, $mdp, $mail, $prenom, $age, $sportif, $region, $celib, $pro, $pseudo);
//new Personne($nom, $motdepasse, $mail, $prenom, $age, $interet, $region, $sexe, $situation, $login)
//créer une instance de Database (en faisant un include et un new Da,tabase)
$donnees = new Database();     
        
//utiliser l'instance de Database pour appeler sa méthode creerPersonne en lui donnant en argument 
//la Personne créée juste au dessus 
$donnees->creerPersonne($personne);

//$proid = $_POST['ididentifiant'];
//$psswd = $_POST['idpsswd'];
//
//if ($proid & $psswd != "Personne/"){
//    echo "la connexion n'est pas effective";
//} else {
//    echo "la connexion est effective";
//}







