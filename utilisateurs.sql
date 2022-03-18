-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: users
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `prenom` varchar(100) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES 
  ('Mamadou Tahirou','Bah','LeGeek','passer'),
  ('Elhadj Amadou','Bah','LeBeau','passe'),
  ('Aissatou','Bah','AichaJunior','passa'),
  ('Adama Bailo','Bah','Adamss','passas'),
  ('Salimatou','Barry','Mere','passer'),
  ('Hamidou Woury','Ba','Youri','passe'),
  ('Mamadou Mouctar','Diallo','TM','passe'),
  ('Elhadj Ibrahima','Diallo','Lova','passer'),
  ('Mamadou Diao','Bah','MaDiB','passe'),
  ('Moussa','Diallo','mc19','passer'),
  ('Mamadou Lougmane','Diallo','LoukBi','passe'),
  ('Thierno Amadou','Diallo','TAD','passera'),
  ('Aboubacar','Niang','Aboubakr','passe'),
  ('Mamadou Bhoye','Diallo','Bhoye','passe'),
  ('Mamadou Malal','Diallo','Malal','passe'),
  ('Amadou Lamarana','Bah','ALB','drake'),
  ('Mamadou Aliou','Barry','Mister','barry'),
  ('Cheikh Amadou Bamba','Kamara','cheikhouna','passe'),
  ('Bousso','Diop','bouss','passera'),
  ('Amina Rabia Djamila','Sow','rabia','passer'),
  ('Zackaria','Diallo','waliouon','passe'),
  ('Mamadou Cellou ','Bah','cellou','passe'),
  ('Serigne Saliou','Faye','monfrere','passer');
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-10 22:30:34
