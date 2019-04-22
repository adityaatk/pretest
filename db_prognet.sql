/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.28-MariaDB : Database - db_prognet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_prognet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_prognet`;

/*Table structure for table `tb_mhs` */

DROP TABLE IF EXISTS `tb_mhs`;

CREATE TABLE `tb_mhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('1','2') DEFAULT NULL COMMENT '1 = Laki-laki, 2 = Perempuan',
  KEY `id_mhs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1705551116 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mhs` */

insert  into `tb_mhs`(`id`,`nama`,`alamat`,`jenis_kelamin`) values (1705551112,'Ida Bagus Aditya Tri Kemaswara','Jl Suli Gg VI no 6','1'),(1705551113,'I Putu Gogeta','Jl Pulau Langit no 5','1'),(1705551114,'I Made Goku Suhendra','JL Planet Namex Gg Mars no. 69','1'),(1705551115,'Ni Nyoman Hinata','Jl Konoha Gg Kunai no 7','2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
