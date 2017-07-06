<?php
?>
// Page permettant de créer des events;

<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Rajout d'un événement</title>
    <form method="post"  action="#">
        <label for="name"> Nom de l'événement sportif:</label> 
        <input id="name" name="idname" type="text" placeholder="match de football OL-Nice"/>
        <label for="town">Lieu de l'événement sportif:</label>
        <input id="town" name="idtown" type="text" placeholder="parc OL"/>
        <p>Sélectionne l'endroit où tu veux t'asseoir</p>
        <input type="radio" name="accompagne" value="grad" id="top" checked /> <label for="premier">Gradins</label>
        <input type="radio" name="accompagne" value="classe" id="bas" checked/> <label for="enbas">VIP</label>
        <input type="radio" name="accompagne" value="mi" id="milieu" checked/> <label for="inter">Intermédiaire</label>
        <input type="radio" name="accompagne" value="child" id="enf" checked/> <label for=""
        
    </form>
</html>
