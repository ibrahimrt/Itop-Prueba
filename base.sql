-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-09-2020 a las 01:42:31
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `borrar` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`Id`, `nombre`, `descripcion`, `fecha`, `borrar`) VALUES
(9, 'Construir Prueba', 'Probando la creacion de modulos', '2020-09-16 04:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entity`
--

DROP TABLE IF EXISTS `entity`;
CREATE TABLE IF NOT EXISTS `entity` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `modulo` text COLLATE utf8_bin NOT NULL,
  `borrado` tinyint(1) NOT NULL DEFAULT 0,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_modificacion` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `Id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `entity`
--

INSERT INTO `entity` (`id`, `modulo`, `borrado`, `fecha_creacion`, `fecha_modificacion`) VALUES
(19, 'Modulo1', 0, '2020-09-15 02:39:28', '2020-09-15 02:39:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entityrel`
--

DROP TABLE IF EXISTS `entityrel`;
CREATE TABLE IF NOT EXISTS `entityrel` (
  `relid` int(11) NOT NULL AUTO_INCREMENT,
  `relmodulo` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) NOT NULL,
  `modulo` bigint(20) NOT NULL,
  PRIMARY KEY (`relid`),
  KEY `relmodulo` (`relmodulo`),
  KEY `modulo` (`modulo`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `entityrel`
--

INSERT INTO `entityrel` (`relid`, `relmodulo`, `id`, `modulo`) VALUES
(4, 14, 6, 2),
(5, 11, 6, 3),
(8, 13, 6, 2),
(9, 14, 20, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `potenciales`
--

DROP TABLE IF EXISTS `potenciales`;
CREATE TABLE IF NOT EXISTS `potenciales` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `dni` text COLLATE utf8_bin NOT NULL,
  `baja` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
