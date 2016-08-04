/*
SQLyog Community v12.09 (64 bit)
MySQL - 10.1.13-MariaDB : Database - diplomatic
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`diplomatic` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `diplomatic`;

/*Table structure for table `creds` */

DROP TABLE IF EXISTS `creds`;

CREATE TABLE `creds` (
  `id_visitante` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mac` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `huesped` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_visitante`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `creds` */

insert  into `creds`(`id_visitante`,`name`,`mac`,`email`,`checkin`,`checkout`,`huesped`) values (1,'','','','2016-07-13','0000-00-00','0'),(2,'','','','2016-07-13','0000-00-00','0'),(3,'marcelo','4','soporte@soporte.com','2016-07-13','2016-07-13','1'),(4,'333333333','4','3333333333333','2016-07-13','0000-00-00','1'),(5,'333333333','4','3333333333333','2016-07-13','0000-00-00','1'),(6,'ww','4','wwwww@sdsd.com','2016-07-13','0000-00-00','0'),(7,'aldana','4','aldana@soporte.com','2016-07-13','0000-00-00','1'),(8,'tu vieja','4','vie4ja@soporte.vieja.com','2016-07-13','0000-00-00','1'),(9,'tu vieja2','4','vie4ja@soporte.vieja.com','2016-07-13','0000-00-00','1'),(10,'otra vieja','4','vieja@soporte.com','2016-07-13','2016-07-13','1'),(11,'','','','2016-07-13','0000-00-00','0'),(12,'','','','2016-07-13','0000-00-00','0'),(13,'','','','2016-07-13','0000-00-00','0'),(14,'','','','2016-07-13','0000-00-00','0'),(15,'mama','4','papa@soporeet.com','2016-07-13','0000-00-00','1'),(16,'aaaa','4','aaaaaaaaaaaaaaaa@asasa.com','2016-07-13','0000-00-00','0'),(17,'tu casa','4','lacasa@casa.com','2016-07-13','2016-07-24','0'),(18,'marcelo','4','tuvieja@gmail.com','2016-08-01','2016-08-01','1'),(19,'marcelo','4','tuvieja@gmail.com','2016-08-01','2016-08-01','1'),(20,'tuvieja','4','soporte@soporte.com','2016-08-01','2016-08-01','1'),(21,'tuvieja','4','soporte@soporte.com','2016-08-01','2016-08-01','1'),(22,'aaaaaaaaaaaaaa','4','sssssssssssss@asas.com','2016-08-01','2016-08-26','0'),(23,'','','','2016-08-01','1970-01-01','0'),(24,'aaaaaaaaaaaaaa','4','sssssssssssss@asas.com','2016-08-01','2016-08-26','0'),(25,'aaaaaaaaaaaaaa','4','sssssssssssss@asas.com','2016-08-01','2016-08-26','0'),(26,'sesese','4','wordpa@soporte.com','2016-08-02','2016-08-12','0'),(27,'sesese','4','wordpa@soporte.com','2016-08-02','2016-08-12','0'),(28,'sesese','4','wordpa@soporte.com','2016-08-02','2016-08-12','0'),(29,'sesese','4','wordpa@soporte.com','2016-08-02','2016-08-12','0'),(30,'la vieja','4','prueba@laplaya.net','2016-08-02','2016-08-27','0'),(31,'la vieja','4','prueba@laplaya.net','2016-08-02','2016-08-27','1'),(32,'trabajo','4','trabajando@trabajando.com','2016-08-02','2016-08-24','1'),(33,'trabajo','4','trabajando@trabajando.com','2016-08-02','2016-08-24','1'),(34,'soporte','4','prueba@soporte.com','2016-08-02','1970-01-01','0'),(35,'','','','2016-08-02','1970-01-01','0'),(36,'nombre de prueba','4','prueba@soporte.com','2016-08-02','1970-01-01','0'),(37,'gmail prueba','478:7878:4ds5d:s5d4s','soporte@gmail.com','2016-08-02','1970-01-01','0'),(38,'gmail prueba','478:7878:4ds5d:s5d4s','soporte@gmail.com','2016-08-02','1970-01-01','0'),(39,'gmail prueba2','478:7878:4ds5d:s5d4s','soporte@gmail.com','2016-08-02','2016-08-02','0'),(40,'prueba Huesped','478:7878:4ds5d:s5d4s','checkout@gmail.com','2016-08-02','2016-08-06','1'),(41,'prueba Huesped','478:7878:4ds5d:s5d4s','checkout@gmail.com','2016-08-02','2016-08-06','1'),(42,'prueba Huesped','478:7878:4ds5d:s5d4s','checkout@gmail.com','2016-08-02','2016-08-06','1'),(43,'soporte1242','478:7878:4ds5d:s5d4s','marcelo@saddsds.net','2016-08-02','2016-08-03','1'),(44,'soporte1242','478:7878:4ds5d:s5d4s','marcelo@saddsds.net','2016-08-02','2016-08-03','1'),(45,'el de yahoo','478:7878:4ds5d:s5d4s','marcelo@yahoo.com','2016-08-02','2016-08-31','1'),(46,'','','','2016-08-03','2016-08-03','0'),(47,'marcelo','20:cf:30:84:00:68','soporte@ssdsdsd.com','2016-08-03','2016-08-05','1');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(10) DEFAULT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(75) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nick_name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(750) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
