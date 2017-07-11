<?php


class Evenement {

    //put your code here

    protected $date;
    protected $lieu;
    protected $places;
    protected $nom;
    protected $duree;
    protected $description;
    //Ajouter une propriété représentant l'organisateur de l'évènement
    
    protected $ressources;
    protected $capacite;
    
    function __construct($date, $lieu, $places, $nom, $duree, $description, $ressources, $capacite) {
        $this->date = $date;
        $this->lieu = $lieu;
        $this->places = $places;
        $this->nom = $nom;
        $this->duree = $duree;
        $this->description = $description;
        $this->ressources = $ressources;
        $this->capacite = $capacite;
    }
    function getDate() {
        return $this->date;
    }

    function getLieu() {
        return $this->lieu;
    }


    function getPlaces() {
        return $this->places;
    }

    function getNom() {
        return $this->nom;
    }

    function getDuree() {
        return $this->duree;
    }

    function getDescription() {
        return $this->description;
    }

    function getRessources() {
        return $this->ressources;
    }

    function getCapacite() {
        return $this->capacite;
    }

function genererhtmlevents() {
    echo'<h2>informations generales sur l\'evenement:</h2>';
    echo '<section>';
    echo "<h3> nom : </h3><p>". $this->nom . '</p>';   
    echo "<h3>date : </h3><p>". $this->date . '</p>';
    echo "<h3> lieu : </h3><p>". $this->lieu . '</p>';
    echo "<h3> duree : </h3><p> ". $this->duree . '</p>';    
    echo "<h3> places : </h3><p>". $this->places . '</p>';
    echo "<h3> ressources : </h3><p>". $this->ressources . '</p>';
    echo "<h3> capacite : </h3><p>". $this->capacite . '</p>';
    echo "<h3> description : </h3><p> ". $this->description . '</p>';    
    echo '</section>';

}
}
 