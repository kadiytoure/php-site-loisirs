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
    protected $organisateur;
    protected $ressources;
    protected $capacite;
    protected $categorie;

    function __construct($date, $lieu, $places, $nom, $duree, $description, $organisateur, $ressources, $capacite, $categorie) {
        $this->date = $date;
        $this->lieu = $lieu;
        $this->places = $places;
        $this->nom = $nom;
        $this->duree = $duree;
        $this->description = $description;
        $this->organisateur = $organisateur;
        $this->ressources = $ressources;
        $this->capacite = $capacite;
        $this->categorie = $categorie;
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

    function getOrganisateur() {
        return $this->organisateur;
    }
    
    function getCategorie() {
        return $this->categorie;
    }

    function genererhtmlevents() {
        echo'<h1>Meetups Sports et Loisirs:</h1>';
        echo '</br>';
        echo '<section>';
        echo "<h3> Nom : </h3><p>" . $this->nom . '</p>';
        echo "<h3> Organisateur : </h3><p>" . $this->organisateur . '</p>';
        echo "<h3> Date : </h3><p>" . $this->date . '</p>';
        echo "<h3> Lieu : </h3><p>" . $this->lieu . '</p>';
        echo "<h3> Duree : </h3><p> " . $this->duree . '</p>';
        echo "<h3> Places : </h3><p>" . $this->places . '</p>';
        echo "<h3> Ressources : </h3><p>" . $this->ressources . '</p>';
        echo "<h3> Capacite : </h3><p>" . $this->capacite . '</p>';
        echo "<h3> Categorie : </h3><p> " . $this->categorie . '</p>';
        echo "<h3> Description : </h3><p> " . $this->description . '</p>';
       
        if (isset($_SESSION['personne']) && $_SESSION['personne'] == $this->organisateur) {
            echo '<form method="post" action="rmevent.php">';
            echo '<div>';
          echo '<input type="hidden" name="supp" value= "'.$this->nom.'" />';
            echo '<input type="submit" name="delete" value="Supprimer">';
            echo '</div>';
            echo '</form>';
        }
         echo '</section>'; 
    }

}
