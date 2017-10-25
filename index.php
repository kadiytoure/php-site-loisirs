
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
            echo "<a href=\"allevents.php\">Visualiser les événements crées</a>";    
        } else {
            echo "<a href=\"login.php\">Acceder à son compte </a>";
            echo "<a href=\"inscription.php\">Nouveau membre? S'inscrire</a><br/>";
        }   
        ?>

        <?php   
       ?>
          
          
         
    </body>
</head>
</html>

