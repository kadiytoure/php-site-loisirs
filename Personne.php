<?php


class Personne {
//put your code here

protected $nom;
protected $motdepasse;
protected $mail;
protected $prenom;
protected $age;
protected $interet;
protected $region;
protected $sexe;
protected $situation;
protected $login;


function __construct($nom, $motdepasse, $mail, $prenom, $age, $interet, $region, $sexe, $situation, $login) {
    $this->nom = $nom;
    $this->motdepasse = $motdepasse;
    $this->mail = $mail;
    $this->prenom = $prenom;
    $this->age = $age;
    $this->interet = $interet;
    $this->region = $region;
    $this->sexe = $sexe;
    $this->situation = $situation;
    $this->login = $login;

}
function getNom() {
    return $this->nom;
}

function getMotdepasse() {
    return $this->motdepasse;
}

function getMail() {
    return $this->mail;
}

function getPrenom() {
    return $this->prenom;
}

function getAge() {
    return $this->age;
}

function getInteret() {
    return $this->interet;
}

function getRegion() {
    return $this->region;
}

function getSexe() {
    return $this->sexe;
}

function getSituation() {
    return $this->situation;
}

function getLogin() {
    return $this->login;
}




}

