
<?php
include_once './Personne.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Espace Authentification</h1>
        <form method="POST" action="Authentification.php">
            <label for="pseudo">Votre identifiant :</label>
            <input id="pseudo" name="idpseudo" type="text" value=""/><br/>
            <label for="psswd">Votre mot de passe :</label>
            <input id="psswd" name="idpsswd" type="password" value=""/><br/>
            <button>Connexion</button><br/>
        </form>
        </body>
</html>



