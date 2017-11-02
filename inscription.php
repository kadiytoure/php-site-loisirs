<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel=“stylesheet” href=“https://necolas.github.io/normalize.css/7.0.0/normalize.css“>
        <!-- Bootstrap3 online-->
        <link rel=“stylesheet” href=“https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css” integrity=“sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u” crossorigin=“anonymous”>
        <!-- Bootstrap3 theme online-->
        <title>Inscription</title>
    </head>
    <style>
              body {
              
               background-image: url("img/girl.jpg");
               background-size: cover;
               background-repeat: no-repeat;
                
            }
            form {
                text-shadow: 1px 3px 14px #fff;
                font-weight: 100px;
               
                margin: auto;
              
            }
            /*
            #center {
                background-color: red;
                height: 10em;
            }
            
            .center1 {
                background-color: yellow;
                height: 5em;
            }
            */
            #age {
                width: 230px;
            }
            
            #idpays {
                width: 245px;
            }
            
            #pays {
                width: 245px;
            }
            
            label {
                font-weight: bold;
            }
            
            p {
                font-weight: bold;
            }
    </style>
    <body>
        <!--
        <div class="container-fluid col-md-3" id="center">
            <div class="col-md-offset-4 col-md-4 col-md-offset-4 center1"></div>
        </div>
        -->
        <h1>Formulaire d'inscription</h1>
        <form class='form-horizontal'method="POST" action="utilisateur.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label" >Votre nom:</label>
                <div class="col-10">
                    <input id="nom"  name="idname" type="text" /><br/>
                </div>
            </div>
            
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label" >Votre prenom:</label>
                <div class="col-10">
                    <input id="prenom" name="idprenom" type="text"/><br/>
                </div>
            </div>
            
            <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Age: </label>
                <div class="col-10">
                    <input id="age" name="idage" type="number" /><br/>
                </div>
            </div>
            
            <p>Votre sexe:</p>
            <input type='radio' name='genre' value="male" id="genretwo" checked />
            <label for="genretwo"> masculin</label>
            <input type="radio" name="genre" value="female" id="genreone" checked />
            <label for="genreone"> feminin </label><br/>
            
            <div class="form-group">
                <label for="mail" class="col -sm-2 control-label">Votre mail: </label>
                <div class="col-10">
                    <input id="mail" name="idmail" type="email" />
                </div>
            </div>
            
            <div class="form-group">
                <label for="identifiant" class="col-sm-2 control-label" >Votre identifiant:</label>
                <div class="col-10">
                    <input id="identifiant"  name="ididentifiant" type="text"/><br/>
                </div>
            </div>
            
            <div class="form-group">
                <label for="psswd" class="col-sm-2 control-label">Votre mot de passe :</label>
                <div class="col-10">
                    <input id="psswd" name="idpsswd" type="password" /><br/>
                </div>
            </div>
            
            <div class="form-group">
            <label for="pays" class="col-sm-2 control-label"> Dans quel pays habitez-vous?</label><br />
            <div class="col-10">
            <select name="pays" id="idpays">
                <option value="country">France</option>
                <option value="country">Allemagne</option>
                <option value="country">Espagne</option>
                <option value="country"> Angleterre</option>
                <option value="country"> Portugal</option>
                <option value="country"> Roumanie</option>
            </select>
            </div>
            </div>
            <div class="form-group">
            <label for="region" class="col-sm-2 control-label">Dans quel region habitez-vous ?</label><br />
            <div class="col-10">
            <select name="region" id="pays">           
                <option value="loremipsum">AuvergneRhône-Alpes</option>           
                <option value="loremipsum">Aquitaine</option>           
                <option value="loremipsum">Franche Comte</option> 
                <option value="loremipsum">Ile de France</option>
                <option value="loremipsum">Provence Alpes Côte d'Azur</option>
                <option value="loremipsum"> Languedoc-Roussillon</option>
            </select>
            </div>   
            </div>
            <section>
                <p>Quel est votre situation personnelle?</p>
                <input type="radio" name="perso" id="idcelib" checked />
                <label for="celib">celibataire</label>
                <input type="radio" name="perso" id="idmarié" checked />
                <label for="marier"> marié(e)</label>
                <p>Quel est votre situation professionnelle?</p>
                <input type="checkbox" name="trav"  value="chômage" id="idchomage" />
                <label for="chmge" class='checkbox-inline'>au chômage</label>
                <input type="checkbox"  name="trav" value="reconversion" id="idreconv" />
                <label for="reconv" class='checkbox-inline'>en reconversion professionnelle</label>
                <input type="checkbox" name="trav" value="actif" id="idactif" />
                <label for="actif" class='checkbox-inline'>en profession</label> 
            </section>
               
            <section>
                <div>
                    <p> Selectionner vo(s) centre(s) d'intérêt</p>
                    <input type="checkbox" name= "interet" value="sports" id="idsports" />
                    <label for="sp">sports</label>
                    <input type="checkbox" name="interet" value="travel" id="idtravel" />
                    <label for="vg">voyages</label>
                    <input type="checkbox" name="interet" value="ct" id="idct" />
                    <label for="ctr">culture</label>
                    <input type="checkbox" name="interet" value="art" id="idart" />
                    <label for="art">arts</label>
                    <input type="checkbox" name="interet" value="crs" id="idcrs" />
                    <label for="crs">education</label> 
                    <input type="checkbox" name="interet" value="orie" id="idapp" />
                    <label for="orientation">orientation professionnelle</label>
                    <input type="checkbox" name="interet" value="gastron" id="idgastron" />
                    <label for="gastronomie">gastronomie</label>
                </div>
            </section>
                
            <button type="submit" class="btn btn-primary" />Register</button><br/>
    </form> 
      
</body>
</html>
