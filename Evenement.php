<?php


class Evenement {

    //put your code here

    protected $date;
    protected $lieu;
    protected $type;
    protected $places;
    protected $nom;
    protected $duree;
    protected $categorie;
    protected $description;
    protected $ressources;
    protected $capacite;
    
    function __construct($date, $lieu, $type, $places, $nom, $duree, $categorie, $description, $ressources, $capacite) {
        $this->date = $date;
        $this->lieu = $lieu;
        $this->type = $type;
        $this->places = $places;
        $this->nom = $nom;
        $this->duree = $duree;
        $this->categorie = $categorie;
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

    function getType() {
        return $this->type;
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

    function getCategorie() {
        return $this->categorie;
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


}
 