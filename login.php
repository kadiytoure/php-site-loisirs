<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <h1>Sign in</h1>
        <form class="form-horizontal" method="POST" action="authentification.php">
            <div class="form-group">
                <label for="pseudo" class="col-sm-2 control-label">Ton identifiant :</label>
                <div class="col-sm-10">
            <input id="pseudo" name="idpseudo" type="text" value=""/><br/>
                </div>
            </div>
            <div class="form-group">
            <label for="psswd" class="col-sm-2 control-label">Ton mot de passe :</label>
            <div class="col-sm-10"> 
            <input id="psswd" name="idpsswd" type="password" value=""/><br/>
            </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn-btn-default">Connexion</button><br/>
        </form>
        </body>
</html>



