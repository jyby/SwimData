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
  `log_date` date NOT NULL,
  `log_time` time NOT NULL,
  `log_type` enum('Chrono','Swim') NOT NULL,
  `pool` int(11) NOT NULL,
  `units` varchar(10) NOT NULL,
  `total_duration` time NOT NULL,
  `calories` int(11) NOT NULL,
  `total_lengths` int(11) NOT NULL,
  `total_distance` int(11) NOT NULL,
  `nset` int(11) NOT NULL,
  `duration` time NOT NULL,
  `strokes` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `efficiency` int(11) NOT NULL,
  `stroke_rate` int(11) NOT NULL,
  `hr_min` int(11) NOT NULL,
  `hr_max` int(11) NOT NULL,
  `hr_avg` int(11) NOT NULL,
  `hr_begin` int(11) NOT NULL,
  `hr_end` int(11) NOT NULL,
  `version` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nadador_id` (`nadador_id`),
  CONSTRAINT `serie_ibfk_1` FOREIGN KEY (`nadador_id`) REFERENCES `nadador` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2012-04-02 20:31:22
