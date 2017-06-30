<?php

include_once './Evenement.php';
include_once './Personne.php';

class Database {
    
    function creerPersonne(Personne $personne) {
        
        if (!is_dir("Personne")) {
            mkdir("Personne");
        }
        $fichier = fopen("Personne/" . $personne->getLogin() . ".txt", "w");
        fwrite($fichier, serialize($personne));
//        unserialize(get_file_content('$personne.txt'));
        echo 'Votre compte a bien été crée, felicitations!';
        fclose($fichier);
    }

    function creerEvenement(Evenement $evenement) {
        if (!is_dir("Evenement")) {
            mkdir("Evenement");
        }
        $newfile = fopen("Evenement/" . $evenement->getCategorie() . ".txt", "w");
        fwrite($newfile, serialize($evenement));
        fclose($newfile);
    }

    function login($login, $mdp) {
        //Commencer par vérifier si il existe un utilisateur qui correspond au login
        //en faisant un if avec un is_file dedans, qui vérifie si le fichier
        // './Personne/' . $login . '.txt' existe
        if (is_file('Personne/' .$login. '.txt')) {
//        $files = scandir('Personne/');
//        foreach($files as $contenu){
            
//            echo "l'utilisateur est operationnel";
            //Si le fichier existe, alors on récupère son contenu (file_get_content)
            // et on unserialize le contenu (ça nous renverra une instance de Personne
            $contenu = file_get_contents('Personne/' .$login. '.txt');
            $unserialize = unserialize($contenu);
            //Avec cette instance de personne, il faudra comparer si la variable 
            //$mdp correspond à la propriété motDePasse de l'instance de Personne (avec un getMotDePasse() )
            if ($mdp === $unserialize->getMotdepasse()) {
                echo 'bravo tu es connecté/e';
                return $unserialize;
                // print_r($_SESSION['personne']);
                /*session_start();
                echo "votre mot de passe est correct";
                $_SESSION['Personne'] = $unserialize;*/
            } else {
                return false;
                /*echo "votre mot de passe n'est pas correct";*/
            }
            //Si les mot de passe correspondent, alors on créer une session dans laquelle on stock
            //l'instance de personne, la connexion est réussie
            // $_SESSION['Personne'] = new Personne;
            //var_dump($_SESSION['Personne']);
//            $_SESSION['motdepasse'];
            //var_dump($_SESSION['personne']);
            /*
              if (isset($_SESSION['personne'])) {
              echo "Hello, welcome to my site!";
              } else {
              echo "l'identifiant ou le mot de passe n'est pas correct";
              }
             */
        }
        return false;
        //Dans tous les autres cas, la connexion échoue.
    }

    function logout() {
        session_start();
        session_destroy();
        include("index.php");
    }

}
