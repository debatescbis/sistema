-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "Sistema_puntuaciones" ------------------
CREATE DATABASE IF NOT EXISTS `Sistema_puntuaciones` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Sistema_puntuaciones`;
-- ---------------------------------------------------------


-- CREATE TABLE "Equipos" --------------------------------------
CREATE TABLE `Equipos` ( 
	`id_equipo` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nombre_equipo` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id_equipo` ),
	CONSTRAINT `unique_id_equipo` UNIQUE( `id_equipo` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 11;
-- -------------------------------------------------------------


-- CREATE TABLE "Debates" --------------------------------------
CREATE TABLE `Debates` ( 
	`id_debate` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`id_juez` Int( 2 ) NOT NULL,
	`fecha_debate` Date NOT NULL,
	`hora_debate` Time NOT NULL,
	`id_ronda` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id_debate` ),
	CONSTRAINT `unique_id_debate` UNIQUE( `id_debate` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------


-- CREATE TABLE "Detalle_debates" ------------------------------
CREATE TABLE `Detalle_debates` ( 
	`id_detalle` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`id_equipo` Int( 11 ) NOT NULL,
	`id_debate` Int( 11 ) NOT NULL,
	`puntaje_final` Int( 11 ) NOT NULL DEFAULT 0,
	PRIMARY KEY ( `id_detalle` ),
	CONSTRAINT `unique_id_detalle` UNIQUE( `id_detalle` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- -------------------------------------------------------------


-- CREATE TABLE "Jueces" ---------------------------------------
CREATE TABLE `Jueces` ( 
	`id_juez` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nombre_juez` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id_juez` ),
	CONSTRAINT `unique_id_juez` UNIQUE( `id_juez` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- -------------------------------------------------------------


-- CREATE TABLE "Ronda" ----------------------------------------
CREATE TABLE `Ronda` ( 
	`id_ronda` Int( 2 ) AUTO_INCREMENT NOT NULL,
	`ronda` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`fecha_ronda` Date NOT NULL,
	`hora_inicio` Time NOT NULL,
	`hora_final` Time NOT NULL,
	PRIMARY KEY ( `id_ronda` ),
	CONSTRAINT `unique_id_ronda` UNIQUE( `id_ronda` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 11;
-- -------------------------------------------------------------


-- CREATE TABLE "Puntuacion_por_juez_equipo" -------------------
CREATE TABLE `Puntuacion_por_juez_equipo` ( 
	`id_registro` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`id_juez` Int( 11 ) NOT NULL,
	`1.1equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`1.2equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`1.3equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`1.4equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`2.1equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`2.2equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`2.3equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`2.4equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`3.1equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`3.2equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`3.3equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`4.1equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`4.2equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`4.3equipo1` Int( 11 ) NOT NULL DEFAULT 0,
	`1.1equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`1.2equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`1.3equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`1.4equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`2.1equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`2.2equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`2.3equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`2.4equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`3.1equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`3.2equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`3.3equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`4.1equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`4.2equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`4.3equipo2` Int( 11 ) NOT NULL DEFAULT 0,
	`id_equipo` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id_registro` ),
	CONSTRAINT `unique_id_registro` UNIQUE( `id_registro` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- Dump data of "Equipos" ----------------------------------
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '1', 'Puerquitos' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '2', 'Ardilla' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '3', 'Los pelones' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '4', 'Los influencers' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '5', 'Los locos' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '6', 'Los trompos' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '7', 'Los locos' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '8', 'Los trompos' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '9', 'Los locos' );
INSERT INTO `Equipos`(`id_equipo`,`nombre_equipo`) VALUES ( '10', 'Los trompos' );
-- ---------------------------------------------------------


-- Dump data of "Debates" ----------------------------------
-- ---------------------------------------------------------


-- Dump data of "Detalle_debates" --------------------------
-- ---------------------------------------------------------


-- Dump data of "Jueces" -----------------------------------
INSERT INTO `Jueces`(`id_juez`,`nombre_juez`) VALUES ( '1', 'Rolando Marroquín' );
INSERT INTO `Jueces`(`id_juez`,`nombre_juez`) VALUES ( '2', 'Juan Manuel Vásquez' );
INSERT INTO `Jueces`(`id_juez`,`nombre_juez`) VALUES ( '3', 'Juan Manuel Vásquez' );
INSERT INTO `Jueces`(`id_juez`,`nombre_juez`) VALUES ( '4', 'Juan Manuel Vásquez' );
-- ---------------------------------------------------------


-- Dump data of "Ronda" ------------------------------------
INSERT INTO `Ronda`(`id_ronda`,`ronda`,`fecha_ronda`,`hora_inicio`,`hora_final`) VALUES ( '1', 'Primera Ronda', '2019-06-20', '08:00:00', '16:00:00' );
INSERT INTO `Ronda`(`id_ronda`,`ronda`,`fecha_ronda`,`hora_inicio`,`hora_final`) VALUES ( '2', 'Segunda Ronda', '2019-07-03', '08:00:00', '12:00:00' );
-- ---------------------------------------------------------


-- Dump data of "Puntuacion_por_juez_equipo" ---------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


