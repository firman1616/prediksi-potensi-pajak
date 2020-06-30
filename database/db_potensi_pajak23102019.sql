/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.36-MariaDB : Database - db_potensi_pajak
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_potensi_pajak` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_potensi_pajak`;

/*Table structure for table `tbl_hotel` */

DROP TABLE IF EXISTS `tbl_hotel`;

CREATE TABLE `tbl_hotel` (
  `id_hotel` int(11) NOT NULL AUTO_INCREMENT,
  `masa_pajak` varchar(20) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `jumlah_pajak` varchar(30) DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hotel` */

/*Table structure for table `tbl_restoran` */

DROP TABLE IF EXISTS `tbl_restoran`;

CREATE TABLE `tbl_restoran` (
  `id_resto` int(11) NOT NULL AUTO_INCREMENT,
  `masa_pajak` varchar(20) DEFAULT NULL,
  `tahun` varchar(30) DEFAULT NULL,
  `jumlah_pajak` varchar(50) DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  PRIMARY KEY (`id_resto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_restoran` */

insert  into `tbl_restoran`(`id_resto`,`masa_pajak`,`tahun`,`jumlah_pajak`,`date_validation`) values 
(1,'Januari','2019','10624850','2019-10-20 11:59:21'),
(2,'Februari','2019','12515300','2019-10-20 11:59:49'),
(3,'Maret','2019','17358850','2019-10-20 12:00:22'),
(4,'April','2019','16703550','2019-10-20 12:00:46'),
(5,'Mei','2019','20657750','2019-10-20 12:01:13'),
(6,'Juni','2019','24248000','2019-10-20 12:01:47'),
(7,'Juli','2019','19970350','2019-10-22 06:18:01');

/*Table structure for table `tbl_target` */

DROP TABLE IF EXISTS `tbl_target`;

CREATE TABLE `tbl_target` (
  `id_target` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(30) DEFAULT NULL,
  `target` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_target`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_target` */

insert  into `tbl_target`(`id_target`,`bulan`,`target`) values 
(1,'Februari','10250000'),
(2,'Maret','250000000');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` text,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`nama`,`username`,`password`,`level`) values 
(1,'Moch. Firman Firdaus','admin','e79c7323f62151abde47e29987b38859',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
