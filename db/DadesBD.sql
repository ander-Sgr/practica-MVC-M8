-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versió del servidor:          5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versió:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for php_crud
CREATE DATABASE IF NOT EXISTS `php_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php_crud`;

-- Dumping structure for table php_crud.assistencia
CREATE TABLE IF NOT EXISTS `assistencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `present` tinyint(4) NOT NULL,
  `absent` tinyint(4) NOT NULL,
  `data` date NOT NULL,
  `estudiant_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`estudiant_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='Taula assistencia';

-- Dumping data for table php_crud.assistencia: ~21 rows (approximately)
/*!40000 ALTER TABLE `assistencia` DISABLE KEYS */;
REPLACE INTO `assistencia` (`id`, `present`, `absent`, `data`, `estudiant_id`) VALUES
	(1, 1, 0, '2022-11-14', 11),
	(2, 1, 0, '2022-11-14', 12),
	(3, 0, 1, '2022-11-14', 13),
	(4, 0, 1, '2022-11-14', 14),
	(5, 0, 1, '2022-11-14', 16),
	(6, 1, 0, '2022-11-14', 17),
	(7, 1, 0, '2022-11-14', 18),
	(8, 0, 1, '2022-11-16', 11),
	(9, 0, 1, '2022-11-16', 12),
	(10, 1, 0, '2022-11-16', 13),
	(11, 1, 0, '2022-11-16', 14),
	(12, 0, 1, '2022-11-16', 16),
	(13, 1, 0, '2022-11-16', 17),
	(14, 1, 0, '2022-11-16', 18),
	(22, 1, 0, '2022-11-18', 11),
	(23, 1, 0, '2022-11-18', 12),
	(24, 0, 1, '2022-11-18', 13),
	(25, 0, 1, '2022-11-18', 14),
	(26, 1, 0, '2022-11-18', 16),
	(27, 1, 0, '2022-11-18', 17),
	(28, 0, 1, '2022-11-18', 18);
/*!40000 ALTER TABLE `assistencia` ENABLE KEYS */;

-- Dumping structure for table php_crud.estudiant
CREATE TABLE IF NOT EXISTS `estudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(55) CHARACTER SET latin1 NOT NULL,
  `matricula` int(11) NOT NULL,
  `data` date NOT NULL,
  `classe` varchar(55) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='Taula estudiant\r\n';

-- Dumping data for table php_crud.estudiant: ~6 rows (approximately)
/*!40000 ALTER TABLE `estudiant` DISABLE KEYS */;
REPLACE INTO `estudiant` (`id`, `nom`, `matricula`, `data`, `classe`) VALUES
	(11, 'Maria', 1212, '2001-12-11', 'PHP'),
	(12, 'Attila', 3333, '2000-01-27', 'PHP'),
	(13, 'Anderson ', 2222, '2002-01-20', 'JAVA'),
	(14, 'Javier', 4444, '1999-11-09', 'JAVA'),
	(16, 'Muhammad', 3421, '1999-02-01', 'XML'),
	(17, 'Daniel ', 4521, '2000-01-05', 'PHP'),
	(18, 'Ismael', 1587, '2000-05-25', 'JAVA');
/*!40000 ALTER TABLE `estudiant` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
