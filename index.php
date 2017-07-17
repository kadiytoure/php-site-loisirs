
<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Page d'accueil</title>
    <body>
        <h1>Bienvenue au site dédié aux meetups loisirs!</h1>


        <?php
        //lancer la session_start
        //Vérifier avec un isset si la variable $_SESSION contient bien une clef personne ( $_SESSION['personne'] )
        session_start();
        if (isset ($_SESSION['personne'])) {
             echo "<a href=\"logout.php\">Se deconnecter </a>";
            echo "<a href=\"deconnexion.php\"></a><br/>";
            echo "<a href=\"event.html\">Créer évenement </a>";
            
        } else {
            echo "<a href=\"login.php\">Acceder à son compte </a>";
            echo "<a href=\"inscription.php\">Nouveau membre? S'inscrire</a><br/>";
        }   
        ?>

        <?php        include_once './database.php';
                     include_once './personne.php';
                     include_once './evenement.php';
        // TODO: Lire les événements depuis la base de données (récupérer un tableau d'événements)
        // TODO: afficher les événements.
        $database = new Database();
        echo "début" ;
     
        $afficheevent = $database->getEvenements();
        echo "fin" ;
        ($afficheevent);
        foreach($afficheevent as $showevent){
        
           $showevent->genererhtmlevents();
           //($showevent);
           //vérifier avec un if si l'utilisateur est connecté et si oui, vérifier si
           //l'utilisateur connecté correspond à l'utilisateur organisateur de l'évènement
           
           //si oui, on affiche un petit formulaire avec un bouton pour supprimer l'évènement
           
           //Le formulaire en question devra pointer vers une page où le traitement de la suppression
           //sera fait
           
           
           
           /*
           if($login == $user){
                $user = $_SESSION['personne'];
               $login = $user->getOrganisateur();
                echo '<form action="rmevent.php" method="POST"/>
                    <input type="submit" value="delete"/>
                </form>';
           }
           
           
           
           /*
           
           $user = $user->getLogin();
           
           if ($user = SESSION['personne']->getLogin()) {
           ?>   
           <form action="rmevent.php" method="POST"/>
           <input type="submit" value="delete"/>
    </form>
           <?php    
           }*/
        }
       ?>
          
          
         
    </body>
</head>
</html>

