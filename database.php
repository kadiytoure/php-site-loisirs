<?php

include_once './evenement.php';
include_once './personne.php';

class Database {
  

    
       private $db;
       public function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=events', 'toure', 'kadiy');
           $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } 
       
       public function addPerson(Personne $personne):bool{
       
         $queryInsert = $this->db->prepare('INSERT INTO `personne` '
                 .'(nom, motdepasse, mail, prenom, age, interet, region, sexe, situation, login)'
                 . "VALUES ( :nom, :motdepasse, :mail, :prenom, :age, :interet, :region, :sexe, :situation, :login)");
         //assignation des paramètres;
//         $queryInsert->bindValue('id', $personne->getId(), PDO::PARAM_STR);
         $queryInsert->bindValue('nom', $personne->getNom(), PDO::PARAM_STR);
         $queryInsert->bindValue('motdepasse', $personne->getMotdepasse(), PDO::PARAM_STR);
         $queryInsert->bindValue('mail', $personne->getMail(), PDO::PARAM_STR);
         $queryInsert->bindValue('prenom', $personne->getPrenom(), PDO::PARAM_STR);
         $queryInsert->bindValue('age', $personne->getAge(), PDO::PARAM_STR);
         $queryInsert->bindValue('interet', $personne->getInteret(), PDO::PARAM_STR);
         $queryInsert->bindValue('region', $personne->getRegion(), PDO::PARAM_STR);
         $queryInsert->bindValue('sexe', $personne->getSexe(), PDO::PARAM_STR);
         $queryInsert->bindValue('situation', $personne->getSituation(), PDO::PARAM_STR);
         $queryInsert->bindValue('login', $personne->getLogin(), PDO::PARAM_STR);
         //on execute en vérifiant si l'éxecution fonctionne ou non
         if ($queryInsert->execute()){
             //Si oui on récupère l'id de la ligne qui vient d'être ajoutée 
            $personne->setId(intval($this->db->lastInsertId()));
            //On envoie true pour dire que tout s'est bien passé
            return true;
         }
         //On renvoie false si il y a un problème quelconque
         return false;
       }
      
    function creerEvenement(Evenement $evenement) {
        if (!is_dir("Evenement")) {
            mkdir("Evenement");
        }
        //créer un sous dossier du nom de l'organisateur de l'évènement
        //à l'intérieur du dossier Evenement (on pourra récupérer cet
        //organisateur avec $evenement->getOrganisateur() par exemple)
        if (!is_dir("Evenement/" . $evenement->getOrganisateur())) {
            mkdir("Evenement/" . $evenement->getOrganisateur());
        }
        //modifier le fopen pour que l'évènement soit sauvegarder dans le 
        //bon sous dossier
        $newfile = fopen("Evenement/" . $evenement->getOrganisateur() . "/" . $evenement->getNom() . ".txt", "w");
        fwrite($newfile, serialize($evenement));
        fclose($newfile);
    }

    //Créer une méthode getEvenements() qui va aller scanner le dossier des évènements et les renvoyer sous forme de tableau

    function getEvenements() {
        $event = array();
        $cdir = scandir("Evenement/");
        foreach ($cdir as $dossier_organiser) {
            //faire un second foreach pour parcourir tous les fichiers
            //contenus dans chaque sous dossier
            // supprimer les '.' && '..';
            echo $dossier_organiser ;
            if ($dossier_organiser !== '.' && $dossier_organiser !== '..') {
                $files = scandir("Evenement/" . $dossier_organiser);
                foreach ($files as $file) {
                    if (is_file('Evenement/' . $dossier_organiser . "/" . $file)) {
                      
                        $contenu_event = file_get_contents("Evenement/" . $dossier_organiser . "/" . $file);
                        $content = unserialize($contenu_event);
                        //var_dump($content);
                        $event[] = $content;
                        ($event);
 
                    }
                    // }
                }
            }
            
        }
        return $event;
    }

    /*

      //faire un tableau vide qui contiendra les évènements
      //faire un scandir de ton dossier évènement
      //faire un get contents de chaque fichier de ce dossier et le unserialize
      //rajouter le contenu unserializé à l'intérieur du tableau
      //faire un return du tableau

     */

    function login($login, $mdp) {
//        if(isset($login) AND isset($mdp) AND $login != NULL AND $mdp != NULL){
//            echo "success of authentification!";
//        }else{
//            echo "authentification failed";
//            exit(1);
//        }
        $queryInsert = $this->db->prepare("SELECT * FROM personne WHERE login=:login AND motdepasse=:mdp");
        $queryInsert->bindValue('login', $login, PDO::PARAM_STR);
        $queryInsert->bindValue('mdp', $mdp, PDO::PARAM_STR);
        $queryInsert->execute();
           if ($queryInsert->rowCount() == 1){
               $ligneid = $queryInsert->fetch();
//           $personne->setId(intval($this->db->lastInsertId())); 
           return true;
 
        }
        return false;
        //Dans tous les autres cas, la connexion échoue.
    }
    

    function logout() {

        session_destroy();
    }
    
    //faire une fonction de suppression d'un évènement qui acceptera en argument un identifiant (genre
    //le nom de l'évènement ou autre) et qui ira supprimer le fichier qui lui est lié sur le pc
    
function supp ($file, $dossier) {
    if (is_file ("Evenement/" . $dossier."/" . $file . '.txt')) {

   unlink("Evenement/" . $dossier."/" . $file . '.txt');
    }

}
  
}