use events;
DROP TABLE IF EXISTS `personne`;
DROP TABLE IF EXISTS `evenement`;


CREATE TABLE personne (
id INT(65) PRIMARY KEY, 
nom VARCHAR(65), 
motdepasse VARCHAR(65), 
mail VARCHAR(65), 
prenom VARCHAR(65), 
age INT(65), 
interet VARCHAR(65), 
region VARCHAR(65), 
sexe VARCHAR(30), 
situation VARCHAR(65),
 login VARCHAR(65)
); 

CREATE TABLE evenement (
id INT(70) PRIMARY KEY,
date INT(10),
lieu VARCHAR(35),
places INT(100),
nom VARCHAR(35),
duree INT(24),
description VARCHAR(601),
organisateur VARCHAR(77),
ressources VARCHAR(101),
capacite varchar (607),
categorie VARCHAR(57)
);

INSERT INTO personne (nom,motdepasse,mail,prenom,age,interet,region,sexe,situation,login) VALUES ('test','test','test','test',10,'test','test','test','test','test');




