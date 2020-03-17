-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para usuarios
CREATE DATABASE IF NOT EXISTS `usuarios` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `usuarios`;

-- Volcando estructura para tabla usuarios.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla usuarios.personas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`id`, `nombres`, `apellidos`, `email`, `password`, `estado`) VALUES
	(1, 'katerine', 'sopa de pollo', 'xxx', '8d70d8ab2768f232ebe874175065ead3', 'activo'),
	(2, 'daniela ', ' ssss ', ' madqgmail', '6562c5c1f33db6e05a082a88cddab5ea', 'activo'),
	(4, 'brigith ', ' no ', ' brigithcordoba22@gmail.com', '28ea19352381b8659df830dd6d5c90a3', 'inactivo');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
