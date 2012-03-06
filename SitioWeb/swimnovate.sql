-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-03-2012 a las 17:30:07
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `swimnovate`
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
-- Estructura de tabla para la tabla `Entrenamientos`
--

CREATE TABLE IF NOT EXISTS `Entrenamientos` (
  `ID Entrenamiento` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ID Nadador` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Metros Piscina` float NOT NULL,
  `Duración Entrenamiento` time NOT NULL,
  `Largos` int(4) NOT NULL,
  `Metros Totales` float NOT NULL,
  `Descanso` time NOT NULL,
  PRIMARY KEY (`ID Entrenamiento`)
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
  `Contraseña` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Curso` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Si no está en ningún curso se asume pertenece a la rama',
  `Participa en Rama` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Edad` int(2) NOT NULL,
  `Estatura` float NOT NULL,
  `Peso` int(3) NOT NULL,
  PRIMARY KEY (`ID Nadador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Series`
--

CREATE TABLE IF NOT EXISTS `Series` (
  `ID Serie` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ID Entrenamiento` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Número` int(3) NOT NULL,
  `Duración Serie` time NOT NULL,
  `Brazadas` int(2) NOT NULL,
  `Distancia Serie` float NOT NULL,
  `Velocidad` int(4) NOT NULL,
  `Eficiencia` int(3) NOT NULL,
  `Largo Brazada` int(4) NOT NULL,
  `Evaluación` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Comentarios` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Estilo` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Brazadas por minuto` int(3) NOT NULL,
  PRIMARY KEY (`ID Serie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
