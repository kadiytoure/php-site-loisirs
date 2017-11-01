<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-image: url("img/boys.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        
       
   
    </style>
    <body>
        
        <form class="form-horizontal" method="POST" action="authentification.php">
            <h1>Sign in</h1>
            <div class="form-group">
                <label for="pseudo" class="col-sm-2 control-label">Ton identifiant :</label>
                <div class="col-sm-10">
            <input id="pseudo" class="form-control" name="idpseudo" type="text" value=""/><br/>
                </div>
            </div>
            <div class="form-group">
            <label for="psswd" class="col-sm-2 control-label">Ton mot de passe :</label>
            <div class="col-sm-10"> 
            <input id="psswd" class="form-control" name="idpsswd" type="password" value=""/><br/>
            </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Sign In</button><br/>
        </form>
        </body>
</html>



