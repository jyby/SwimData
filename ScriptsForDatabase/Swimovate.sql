-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2012 a las 15:13:16
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Swimovate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entrenadores`
--

CREATE TABLE IF NOT EXISTS `Entrenadores` (
  `ID Entrenador` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `e-mail` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID Entrenador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Grupo`
--

CREATE TABLE IF NOT EXISTS `Grupo` (
  `ID Grupo` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ID Entrenador` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID Grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Nadadores`
--

CREATE TABLE IF NOT EXISTS `Nadadores` (
  `Nombre` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `e-mail` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ID Nadador` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'La llave es el e-mail',
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Curso` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Si no está en ningún curso se asume pertenece a la rama',
  `Participa en Rama` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Edad` int(2) NOT NULL,
  `Estatura` float NOT NULL,
  `Peso` int(3) NOT NULL,
  PRIMARY KEY (`ID Nadador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Nadadores`
--

INSERT INTO `Nadadores` (`Nombre`, `e-mail`, `ID Nadador`, `password`, `Curso`, `Participa en Rama`, `Edad`, `Estatura`, `Peso`) VALUES
('Patricio Sepúlveda Heise', 'psepulveda@ing.uchile.cl', 'psepulveda@ing.uchile.cl', 'pass', 'ningún DR', 'si', 23, 1.7, 68);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Series`
--

CREATE TABLE IF NOT EXISTS `Series` (
  `id_serie` int(100) NOT NULL AUTO_INCREMENT,
  `id_nadador` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `modo` varchar(6) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Swim o Chrono',
  `metros_piscina` int(3) NOT NULL,
  `duracion_total` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `distancia_total` int(5) NOT NULL,
  `unidad` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `largos` int(4) NOT NULL,
  `numero_serie` int(3) NOT NULL,
  `duracion_serie` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `descanso` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `brazadas` int(2) NOT NULL,
  `distancia_serie` float NOT NULL,
  `velocidad` int(4) NOT NULL,
  `eficiencia` int(3) NOT NULL,
  `largo_brazada` int(4) NOT NULL,
  `evaluacion` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estilo` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `brazadas_por_min` int(3) NOT NULL,
  PRIMARY KEY (`id_serie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
