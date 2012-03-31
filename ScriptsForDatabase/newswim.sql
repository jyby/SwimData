-- Adminer 3.3.4 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `entrenador`;
CREATE TABLE `entrenador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `grupo`;
CREATE TABLE `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(255) NOT NULL,
  `entrenador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entrenador_id` (`entrenador_id`),
  CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`entrenador_id`) REFERENCES `entrenador` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `nadador`;
CREATE TABLE `nadador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `codigo_curso` varchar(255) NOT NULL,
  `participa_rama` tinyint(1) NOT NULL COMMENT '0: no, 1: si',
  `edad` int(11) NOT NULL,
  `estatura` float NOT NULL COMMENT 'kilogramos',
  `peso` float NOT NULL COMMENT 'metros',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `serie`;
CREATE TABLE `serie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nadador_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modo` tinyint(4) NOT NULL COMMENT '0: ''swim'', 1:''chrono''',
  `metros_piscina` int(11) NOT NULL,
  `duracion` varchar(20) NOT NULL,
  `distancia` float NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `largos` int(11) NOT NULL,
  `numero_serie` int(11) NOT NULL,
  `duracion_serie` varchar(20) NOT NULL,
  `distancia_serie` float NOT NULL,
  `descanso` varchar(20) NOT NULL,
  `brazadas` int(11) NOT NULL,
  `estilo` varchar(255) NOT NULL,
  `comentario` text NOT NULL,
  `brazadas_por_min` int(11) NOT NULL,
  `eficiencia` float NOT NULL,
  `velocidad` float NOT NULL,
  `largo_brazada` float NOT NULL,
  `evaluacion` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nadador_id` (`nadador_id`),
  CONSTRAINT `serie_ibfk_1` FOREIGN KEY (`nadador_id`) REFERENCES `nadador` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2012-03-31 18:56:15
