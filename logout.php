<?php
include_once './personne.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
            <button name="logout"> Deconnexion </button>
        </form>
    </body>
</html>
