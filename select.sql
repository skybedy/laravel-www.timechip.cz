-- --------------------------------------------------------
-- Hostitel:                     127.0.0.1
-- Verze serveru:                10.4.24-MariaDB - mariadb.org binary distribution
-- OS serveru:                   Win64
-- HeidiSQL Verze:               11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Exportování struktury databáze pro
CREATE DATABASE IF NOT EXISTS `timechip_cz` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `timechip_cz`;

-- Exportování struktury pro tabulka timechip_cz.select
CREATE TABLE IF NOT EXISTS `select` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `race_id` int(10) unsigned NOT NULL,
  `event_order` tinyint(3) unsigned NOT NULL,
  `select_order` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `name` varchar(50) NOT NULL,
  `name_id` varchar(50) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Exportování dat pro tabulku timechip_cz.select: ~3 rows (přibližně)
/*!40000 ALTER TABLE `select` DISABLE KEYS */;
INSERT INTO `select` (`id`, `race_id`, `event_order`, `select_order`, `name`, `name_id`, `content`) VALUES
	(1, 3, 1, 1, 'Tričko', 'tricko', '["Bez trička","L","XL","XL"]'),
	(2, 0, 0, 0, 'bla2', '', ''),
	(3, 0, 0, 0, 'bla3', '', '');
/*!40000 ALTER TABLE `select` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
