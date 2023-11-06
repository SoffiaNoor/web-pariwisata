-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table web_pariwisata.booking_uuid
CREATE TABLE IF NOT EXISTS `booking_uuid` (
  `ID` varchar(36) NOT NULL DEFAULT uuid(),
  `NIK` varchar(16) NOT NULL DEFAULT '',
  `Nama` varchar(50) NOT NULL DEFAULT '',
  `Usia` int(11) NOT NULL,
  `TanggalBooking` date NOT NULL,
  `Email` varchar(50) NOT NULL DEFAULT '',
  `NoTelpon` varchar(50) NOT NULL DEFAULT '',
  `KotaAsal` varchar(50) NOT NULL DEFAULT '',
  `Destinasi` varchar(50) NOT NULL DEFAULT '',
  `JumlahOrang` int(11) NOT NULL DEFAULT 0,
  `CreatedOn` timestamp NULL DEFAULT NULL,
  `UpdatedOn` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
