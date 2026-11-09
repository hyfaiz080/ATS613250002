-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ats613250002
CREATE DATABASE IF NOT EXISTS `ats613250002` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ats613250002`;

-- Dumping structure for table ats613250002.member_002
CREATE TABLE IF NOT EXISTS `member_002` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(34) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `aktive` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=613250011 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Database Member 1';

-- Dumping data for table ats613250002.member_002: ~1 rows (approximately)
INSERT INTO `member_002` (`id`, `email`, `password`, `nama`, `aktive`) VALUES
	(613250002, 'hyfaiz@gmail.com', 'cwrty2019', 'Faiz Fadhil', '1');

-- Dumping structure for table ats613250002.mobil_002
CREATE TABLE IF NOT EXISTS `mobil_002` (
  `no_id` int NOT NULL AUTO_INCREMENT,
  `nomor_kendaraan` varchar(12) NOT NULL DEFAULT '0',
  `jenis_kendaraan` enum('Sedan','Pickup','Truk','Bemo') NOT NULL DEFAULT 'Sedan',
  `pemilik` varchar(50) NOT NULL DEFAULT '',
  `tahun_pembuatan` char(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB AUTO_INCREMENT=613250023 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabel Mobil';

-- Dumping data for table ats613250002.mobil_002: ~3 rows (approximately)
INSERT INTO `mobil_002` (`no_id`, `nomor_kendaraan`, `jenis_kendaraan`, `pemilik`, `tahun_pembuatan`) VALUES
	(613250002, 'D 12345 AWW', 'Sedan', 'Faiz Fadhil', '2016'),
	(613250010, 'D 12345 WOW', 'Pickup', 'Abidzar', '2020'),
	(613250022, 'D 12345 RMD', 'Truk', 'Fauzi', '2014');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
