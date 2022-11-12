-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.26 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for med
CREATE DATABASE IF NOT EXISTS `med` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `med`;

-- Dumping structure for table med.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table med.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', '1111');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table med.doctor
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `specialty` int NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `FK_doctor_specialies` (`specialty`),
  CONSTRAINT `FK_doctor_specialies` FOREIGN KEY (`specialty`) REFERENCES `specialies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table med.doctor: ~0 rows (approximately)
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` (`id`, `uname`, `name`, `specialty`, `password`) VALUES
	(1, 'darshan', 'darshan dharmaraj', 2, '0000');
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;

-- Dumping structure for table med.gender
CREATE TABLE IF NOT EXISTS `gender` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gender_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table med.gender: ~2 rows (approximately)
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` (`id`, `gender_type`) VALUES
	(1, 'male'),
	(2, 'female');
/*!40000 ALTER TABLE `gender` ENABLE KEYS */;

-- Dumping structure for table med.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int NOT NULL AUTO_INCREMENT,
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
  CONSTRAINT `FK_patient_responsible` FOREIGN KEY (`responsible`) REFERENCES `responsible` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table med.patient: ~1 rows (approximately)
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` (`id`, `uname`, `name`, `gender`, `nic`, `dob`, `address`, `contact`, `notes`, `responsible`, `pass`) VALUES
	(1, 'kasun', 'Kasun Gamage', 1, '98568', '1995-02-08', 'no 1, main road.', '0774567890', 'kkkkkkkkkkkkkkkkkkkkkkkk', 1, '0000');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;

-- Dumping structure for table med.responsible
CREATE TABLE IF NOT EXISTS `responsible` (
  `id` int NOT NULL AUTO_INCREMENT,
  `person` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table med.responsible: ~2 rows (approximately)
/*!40000 ALTER TABLE `responsible` DISABLE KEYS */;
INSERT INTO `responsible` (`id`, `person`) VALUES
	(1, 'self'),
	(2, 'patient'),
	(3, 'guardian');
/*!40000 ALTER TABLE `responsible` ENABLE KEYS */;

-- Dumping structure for table med.specialies
CREATE TABLE IF NOT EXISTS `specialies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `speciality` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table med.specialies: ~0 rows (approximately)
/*!40000 ALTER TABLE `specialies` DISABLE KEYS */;
INSERT INTO `specialies` (`id`, `speciality`) VALUES
	(1, 'skin'),
	(2, 'ENT');
/*!40000 ALTER TABLE `specialies` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
