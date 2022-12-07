-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: med
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','1111');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_chanel_time`
--

DROP TABLE IF EXISTS `d_chanel_time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `d_chanel_time` (
  `chnl_id` int NOT NULL AUTO_INCREMENT,
  `date_time` datetime NOT NULL,
  `doc_id` int NOT NULL,
  `stat` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`chnl_id`) USING BTREE,
  KEY `FK__doctor` (`doc_id`),
  CONSTRAINT `FK__doctor` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_chanel_time`
--

LOCK TABLES `d_chanel_time` WRITE;
/*!40000 ALTER TABLE `d_chanel_time` DISABLE KEYS */;
INSERT INTO `d_chanel_time` VALUES (1,'2022-12-07 15:00:47',1,1),(2,'2022-12-06 20:30:25',1,0);
/*!40000 ALTER TABLE `d_chanel_time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `specialty` int NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `FK_doctor_specialies` (`specialty`),
  CONSTRAINT `FK_doctor_specialies` FOREIGN KEY (`specialty`) REFERENCES `specialies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES (1,'darshan','darshan dharmaraj',2,'0000');
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gender` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gender_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gender`
--

LOCK TABLES `gender` WRITE;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` VALUES (1,'male'),(2,'female');
/*!40000 ALTER TABLE `gender` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient` (
  `id` int NOT NULL AUTO_INCREMENT,
  `preg_no` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `uname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `gender` int NOT NULL DEFAULT '0',
  `nic` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `dob` date NOT NULL DEFAULT '0000-00-00',
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `contact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `notes` text COLLATE utf8mb4_bin NOT NULL,
  `responsible` int NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_patient_gender` (`gender`),
  KEY `FK_patient_responsible` (`responsible`),
  CONSTRAINT `FK_patient_gender` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`),
  CONSTRAINT `FK_patient_responsible` FOREIGN KEY (`responsible`) REFERENCES `responsible` (`responsible_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (1,'p66666','kasun','Kasun Gamage',1,'98568','1995-02-08','no 1, main road.','0774567890','kkkkkkkkkkkkkkkkkkkkkkkk',1,'0000');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_channels`
--

DROP TABLE IF EXISTS `patient_channels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_channels` (
  `p_chnl_id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int NOT NULL,
  `chnl_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `paid` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_chnl_id`),
  KEY `FK__patient` (`patient_id`),
  KEY `FK__d_chanel_time` (`chnl_id`),
  CONSTRAINT `FK__d_chanel_time` FOREIGN KEY (`chnl_id`) REFERENCES `d_chanel_time` (`chnl_id`),
  CONSTRAINT `FK__patient` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_channels`
--

LOCK TABLES `patient_channels` WRITE;
/*!40000 ALTER TABLE `patient_channels` DISABLE KEYS */;
INSERT INTO `patient_channels` VALUES (1,1,1,1,1);
/*!40000 ALTER TABLE `patient_channels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receptionist`
--

DROP TABLE IF EXISTS `receptionist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receptionist` (
  `res_id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nic` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `contact` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `gender` int NOT NULL,
  PRIMARY KEY (`res_id`),
  KEY `FK_receptionist_gender` (`gender`),
  CONSTRAINT `FK_receptionist_gender` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receptionist`
--

LOCK TABLES `receptionist` WRITE;
/*!40000 ALTER TABLE `receptionist` DISABLE KEYS */;
INSERT INTO `receptionist` VALUES (1,'dasun','Dasun Madushan','9997755552','0777466543','0000',1);
/*!40000 ALTER TABLE `receptionist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsible`
--

DROP TABLE IF EXISTS `responsible`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `responsible` (
  `responsible_id` int NOT NULL AUTO_INCREMENT,
  `person` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`responsible_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsible`
--

LOCK TABLES `responsible` WRITE;
/*!40000 ALTER TABLE `responsible` DISABLE KEYS */;
INSERT INTO `responsible` VALUES (1,'self'),(2,'patient'),(3,'guardian');
/*!40000 ALTER TABLE `responsible` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialies`
--

DROP TABLE IF EXISTS `specialies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `specialies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `speciality` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialies`
--

LOCK TABLES `specialies` WRITE;
/*!40000 ALTER TABLE `specialies` DISABLE KEYS */;
INSERT INTO `specialies` VALUES (1,'skin'),(2,'ENT');
/*!40000 ALTER TABLE `specialies` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 13:55:20
