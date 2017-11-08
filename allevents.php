<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Evenements crées</title>
        <style>
            body {
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                margin: 0;
                padding: 0;
                background-color: lightgray;
                background-repeat: no-repeat;
                background-size: cover;
                min-height: 100vh;
            }
            
              h1{
                display: flex;
                justify-content: center;
                weight: bold;
                font-size: 47px;
                text-shadow: 1px 3px 14px #fff;
                
            }
            
            section {
                display: flex;
                flex-direction: column;
                font-weight: bold;
                font-size: 16px;
                color: black;
                align-items: center;
            }
        </style>
    <body>
        


<?php

 include_once './database.php';
 include_once './personne.php';
 include_once './evenement.php';



        // TODO: Lire les événements depuis la base de données (récupérer un tableau d'événements)
        // TODO: afficher les événements.
        $database = new Database();
       
     
        $afficheevent = $database->getEvenements();
        
        
        foreach($afficheevent as $showevent){
        
           $showevent->genererhtmlevents();

        }
     ?>   
</body>
</head>
</html>
        