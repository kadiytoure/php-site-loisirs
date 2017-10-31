<?php
include_once './personne.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel=“stylesheet” href=“https://necolas.github.io/normalize.css/7.0.0/normalize.css“>
        <!-- Bootstrap3 online-->
        <link rel=“stylesheet” href=“https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css” integrity=“sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u” crossorigin=“anonymous”>
        <!-- Bootstrap3 theme online-->
        <title></title>
        <style>
            body {
            background-image: url("img/mer.jpg");
            background-size: cover;
            }
            
        </style>
        
    </head>
    <body>
        <h1>Deconnexion</h1>
        <form method="POST" action="deconnexion.php">
            <button type="submit" class="btn btn-primary" name="logout"> Deconnexion </button>
        </form>
    </body>
</html>
