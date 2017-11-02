
<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Page d'accueil</title>
        <style>
            body {
               
                display: flex;
                flex-direction: column;
                margin: 0;
                padding: 0;
                background-image: url("img/boys.jpg");
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
            
            a {
                text-decoration: none;
                display:flex;
                
            }
            
        
        </style>
    <body>
        <h1>Bienvenue au site dédié aux meetups loisirs!</h1>
        <!--<img src="img/boys.jpg" id="home"  alt="home"/> -->
        


        <?php
        //lancer la session_start
        //Vérifier avec un isset si la variable $_SESSION contient bien une clef personne ( $_SESSION['personne'] )
      
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

