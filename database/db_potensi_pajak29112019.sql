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

USE `db_masjid`;

/*Table structure for table `tbl_hotel` */

DROP TABLE IF EXISTS `tbl_hotel`;

CREATE TABLE `tbl_hotel` (
  `id_hotel` int(11) NOT NULL AUTO_INCREMENT,
  `masa_pajak` varchar(20) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `jumlah_pajak` varchar(30) DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hotel` */

/*Table structure for table `tbl_hotel_c1` */

DROP TABLE IF EXISTS `tbl_hotel_c1`;

CREATE TABLE `tbl_hotel_c1` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date DEFAULT NULL,
  `nominal` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hotel_c1` */

/*Table structure for table `tbl_hotel_camplong` */

DROP TABLE IF EXISTS `tbl_hotel_camplong`;

CREATE TABLE `tbl_hotel_camplong` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date DEFAULT NULL,
  `nominal` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hotel_camplong` */

/*Table structure for table `tbl_hotel_musdalifah` */

DROP TABLE IF EXISTS `tbl_hotel_musdalifah`;

CREATE TABLE `tbl_hotel_musdalifah` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date DEFAULT NULL,
  `nominal` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hotel_musdalifah` */

/*Table structure for table `tbl_restoran` */

DROP TABLE IF EXISTS `tbl_restoran`;

CREATE TABLE `tbl_restoran` (
  `id_resto` int(11) NOT NULL AUTO_INCREMENT,
  `masa_pajak` varchar(20) DEFAULT NULL,
  `tahun` varchar(30) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `jumlah_pajak` varchar(50) DEFAULT NULL,
  `date_validation` datetime DEFAULT NULL,
  PRIMARY KEY (`id_resto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_restoran` */

insert  into `tbl_restoran`(`id_resto`,`masa_pajak`,`tahun`,`tgl_transaksi`,`jumlah_pajak`,`date_validation`) values 
(2,'Januari','2017','2017-01-01','350000','2019-11-07 13:37:53'),
(3,'Januari','2017','2017-01-02','409400','2019-11-07 13:38:33'),
(4,'Januari','2017','2017-01-03','712600','2019-11-07 13:41:33'),
(5,'Januari','2017','2017-01-04','340400','2019-11-07 13:50:58');

/*Table structure for table `tbl_rm_amanis` */

DROP TABLE IF EXISTS `tbl_rm_amanis`;

CREATE TABLE `tbl_rm_amanis` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date DEFAULT NULL,
  `nominal` varchar(20) DEFAULT NULL,
  `nama_wp` varchar(20) DEFAULT 'RM Amanis',
  `validasi` datetime DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_rm_amanis` */

insert  into `tbl_rm_amanis`(`id_transaksi`,`tgl_transaksi`,`nominal`,`nama_wp`,`validasi`) values 
(1,'2019-11-21','55000','RM Amanis','2019-11-21 10:27:49'),
(2,'2019-11-28','200000000','RM Amanis','2019-11-28 15:22:30');

/*Table structure for table `tbl_rm_brewok` */

DROP TABLE IF EXISTS `tbl_rm_brewok`;

CREATE TABLE `tbl_rm_brewok` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date DEFAULT NULL,
  `nominal` varchar(20) DEFAULT NULL,
  `nama_wp` varchar(20) DEFAULT 'RM Brewok',
  `validasi` datetime DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_rm_brewok` */

insert  into `tbl_rm_brewok`(`id_transaksi`,`tgl_transaksi`,`nominal`,`nama_wp`,`validasi`) values 
(1,'2019-11-21','250000','RM Brewok','2019-11-21 16:15:54');

/*Table structure for table `tbl_rm_sumber_hidup` */

DROP TABLE IF EXISTS `tbl_rm_sumber_hidup`;

CREATE TABLE `tbl_rm_sumber_hidup` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date DEFAULT NULL,
  `nominal` varchar(20) DEFAULT NULL,
  `nama_wp` varchar(20) DEFAULT 'RM Sumber Hidup',
  `validasi` datetime DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_rm_sumber_hidup` */

insert  into `tbl_rm_sumber_hidup`(`id_transaksi`,`tgl_transaksi`,`nominal`,`nama_wp`,`validasi`) values 
(1,'2019-01-01','396750','RM Sumber Hidup','2019-11-29 08:37:38'),
(2,'2019-01-02','442800','RM Sumber Hidup','2019-11-29 08:37:51'),
(3,'2019-01-03','497950','RM Sumber Hidup','2019-11-29 08:39:36'),
(4,'2019-01-04','388100','RM Sumber Hidup','2019-11-29 08:39:56'),
(5,'2019-01-05','456800','RM Sumber Hidup','2019-11-29 08:40:11'),
(6,'2019-01-06','422700','RM Sumber Hidup','2019-11-29 08:40:48'),
(7,'2019-01-07','404300','RM Sumber Hidup','2019-11-29 08:43:23'),
(8,'2019-01-08','290400','RM Sumber Hidup','2019-11-29 08:44:36'),
(9,'2019-01-09','273850','RM Sumber Hidup','2019-11-29 08:45:05'),
(10,'2019-01-10','368850','RM Sumber Hidup','2019-11-29 08:46:34'),
(11,'2019-01-11','405300','RM Sumber Hidup','2019-11-29 08:48:35'),
(12,'2019-01-12','267150','RM Sumber Hidup','2019-11-29 08:51:36'),
(13,'2019-01-13','404050','RM Sumber Hidup','2019-11-29 08:56:02'),
(14,'2019-01-14','255200','RM Sumber Hidup','2019-11-29 08:56:21'),
(15,'2019-01-15','312800','RM Sumber Hidup','2019-11-29 08:56:36'),
(16,'2019-01-16','345850','RM Sumber Hidup','2019-11-29 08:57:12'),
(17,'2019-01-17','243700','RM Sumber Hidup','2019-11-29 09:01:44'),
(18,'2019-01-18','256900','RM Sumber Hidup','2019-11-29 09:03:19'),
(19,'2019-01-19','358600','RM Sumber Hidup','2019-11-29 09:11:45'),
(20,'2019-01-20','502150','RM Sumber Hidup','2019-11-29 09:12:03'),
(21,'2019-01-21','331850','RM Sumber Hidup','2019-11-29 09:12:52'),
(22,'2019-01-22','325250','RM Sumber Hidup','2019-11-29 09:13:49'),
(23,'2019-01-23','260000','RM Sumber Hidup','2019-11-29 09:14:01'),
(24,'2019-01-24','320050','RM Sumber Hidup','2019-11-29 09:16:14'),
(25,'2019-01-25','241650','RM Sumber Hidup','2019-11-29 09:16:30'),
(26,'2019-01-26','347950','RM Sumber Hidup','2019-11-29 09:18:09'),
(27,'2019-01-27','370900','RM Sumber Hidup','2019-11-29 09:18:26'),
(28,'2019-01-28','278350','RM Sumber Hidup','2019-11-29 09:18:43');

/*Table structure for table `tbl_target` */

DROP TABLE IF EXISTS `tbl_target`;

CREATE TABLE `tbl_target` (
  `id_target` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(30) DEFAULT NULL,
  `target` varchar(30) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_target`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_target` */

insert  into `tbl_target`(`id_target`,`bulan`,`target`,`tahun`) values 
(1,'Oktober','100000000','2018'),
(2,'Oktober','10250000','2018');

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
