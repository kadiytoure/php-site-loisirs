<?php

 include_once './database.php';
 include_once './personne.php';
include_once './evenement.php';
        // TODO: Lire les événements depuis la base de données (récupérer un tableau d'événements)
        // TODO: afficher les événements.
        $database = new Database();
       
     
        $afficheevent = $database->getEvenements();
        
        ($afficheevent);
        foreach($afficheevent as $showevent){
        
           $showevent->genererhtmlevents();

        }