<?php


class Evenement {

    //put your code here

    protected $date;
    protected $lieu;
    protected $places;
    protected $nom;
    protected $duree;
    protected $description;
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


}
 