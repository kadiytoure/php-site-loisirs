
<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
            
        } else {
            echo "<a href=\"login.php\">Acceder à son compte </a>";
            echo "<a href=\"inscription.php\">Nouveau membre? S'inscrire</a><br/>";
        }   
        ?>

        <?php
        // TODO: Lire les événements depuis la base de données (récupérer un tableau d'événements)
        // TODO: afficher les événements.
        ?>

    </body>
</head>
</html>

