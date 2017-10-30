-- MySQL dump 10.15  Distrib 10.0.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: events
-- ------------------------------------------------------
-- Server version	10.0.31-MariaDB-0ubuntu0.16.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `events`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `events` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `events`;

--
-- Table structure for table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evenement` (
  `id` int(70) NOT NULL,
  `date` int(10) DEFAULT NULL,
  `lieu` varchar(35) DEFAULT NULL,
  `places` int(100) DEFAULT NULL,
  `nom` varchar(35) DEFAULT NULL,
  `duree` int(24) DEFAULT NULL,
  `description` varchar(601) DEFAULT NULL,
  `organisateur` varchar(77) DEFAULT NULL,
  `ressources` varchar(101) DEFAULT NULL,
  `capacite` varchar(607) DEFAULT NULL,
  `categorie` varchar(57) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evenement`
--

LOCK TABLES `evenement` WRITE;
/*!40000 ALTER TABLE `evenement` DISABLE KEYS */;
/*!40000 ALTER TABLE `evenement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne` (
  `id` int(65) NOT NULL AUTO_INCREMENT,
  `nom` varchar(65) DEFAULT NULL,
  `motdepasse` varchar(65) DEFAULT NULL,
  `mail` varchar(65) DEFAULT NULL,
  `prenom` varchar(65) DEFAULT NULL,
  `age` int(65) DEFAULT NULL,
  `interet` varchar(65) DEFAULT NULL,
  `region` varchar(65) DEFAULT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `situation` varchar(65) DEFAULT NULL,
  `login` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
INSERT INTO `personne` VALUES (1,'frofo','frifri','tfzyt@gmail.com','fufu',11,'travel','loremipsum','male','on','frofro'),(2,'test','test','test','test',10,'test','test','test','test','test'),(3,'frofo','frifri','tfzyt@gmail.com','fufu',11,'travel','loremipsum','male','on','frofro'),(4,'gui','mimi','rdrddx@gmail.com','u_u_uçyybb',20,'ct','loremipsum','male','on','mumu'),(5,'tata','titi','styz@hotmail.com','tutu',12,'orie','loremipsum','female','on','tata'),(6,'toto','tutu','ctyf@hotmail.fr','oui',10,'travel','loremipsum','male','on','tyty');
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-30 16:14:05
