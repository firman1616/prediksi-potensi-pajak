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
USE `db_potensi_pajak`;

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
  `validasi` datetime DEFAULT CURRENT_TIMESTAMP,
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
  `validasi` datetime DEFAULT CURRENT_TIMESTAMP,
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
  `validasi` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=latin1;

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
(28,'2019-01-28','278350','RM Sumber Hidup','2019-11-29 09:18:43'),
(29,'2019-01-29','258450','RM Sumber Hidup','2019-12-04 10:50:17'),
(30,'2019-01-30','296600','RM Sumber Hidup','2019-12-04 10:50:31'),
(31,'2019-01-31','299400','RM Sumber Hidup','2019-12-04 10:50:47'),
(32,'2019-02-01','282350','RM Sumber Hidup','2019-12-04 10:51:22'),
(33,'2019-02-02','288250','RM Sumber Hidup','2019-12-04 10:51:33'),
(34,'2019-02-03','549150','RM Sumber Hidup','2019-12-04 10:51:45'),
(35,'2019-02-04','372350','RM Sumber Hidup','2019-12-04 11:00:23'),
(36,'2019-02-05','384100','RM Sumber Hidup','2019-12-04 11:00:38'),
(37,'2019-02-06','348200','RM Sumber Hidup','2019-12-04 11:00:54'),
(38,'2019-02-07','393300','RM Sumber Hidup','2019-12-04 11:03:47'),
(39,'2019-02-08','339850','RM Sumber Hidup','2019-12-04 11:04:07'),
(40,'2019-02-09','315550','RM Sumber Hidup','2019-12-04 11:04:20'),
(41,'2019-02-10','369550','RM Sumber Hidup','2019-12-04 11:04:46'),
(42,'2019-02-11','283600','RM Sumber Hidup','2019-12-04 11:04:57'),
(43,'2019-02-12','266850','RM Sumber Hidup','2019-12-04 11:05:10'),
(44,'2019-02-13','286400','RM Sumber Hidup','2019-12-04 11:05:20'),
(45,'2019-02-14','316150','RM Sumber Hidup','2019-12-04 11:05:31'),
(46,'2019-02-15','304100','RM Sumber Hidup','2019-12-04 11:05:40'),
(47,'2019-02-16','503500','RM Sumber Hidup','2019-12-04 11:05:51'),
(48,'2019-02-17','848350','RM Sumber Hidup','2019-12-04 11:06:02'),
(49,'2019-02-18','548400','RM Sumber Hidup','2019-12-04 11:06:11'),
(50,'2019-02-19','488100','RM Sumber Hidup','2019-12-04 11:06:21'),
(51,'2019-02-20','673000','RM Sumber Hidup','2019-12-04 11:06:30'),
(52,'2019-02-21','450200','RM Sumber Hidup','2019-12-04 11:06:38'),
(53,'2019-02-22','481350','RM Sumber Hidup','2019-12-04 11:06:46'),
(54,'2019-02-23','542150','RM Sumber Hidup','2019-12-04 11:06:57'),
(55,'2019-02-24','632000','RM Sumber Hidup','2019-12-04 11:07:07'),
(56,'2019-02-25','535350','RM Sumber Hidup','2019-12-04 11:07:19'),
(57,'2019-02-26','528350','RM Sumber Hidup','2019-12-04 11:07:29'),
(58,'2019-02-27','557000','RM Sumber Hidup','2019-12-04 11:07:38'),
(59,'2019-02-28','627800','RM Sumber Hidup','2019-12-04 11:07:56'),
(60,'2019-03-01','472150','RM Sumber Hidup','2019-12-06 14:48:09'),
(61,'2019-03-02','662000','RM Sumber Hidup','2019-12-06 14:48:19'),
(62,'2019-03-03','724650','RM Sumber Hidup','2019-12-06 14:48:29'),
(63,'2019-03-04','581550','RM Sumber Hidup','2019-12-06 14:48:38'),
(64,'2019-03-05','572250','RM Sumber Hidup','2019-12-06 14:48:53'),
(65,'2019-03-06','450450','RM Sumber Hidup','2019-12-06 14:49:09'),
(66,'2019-03-07','808100','RM Sumber Hidup','2019-12-06 14:49:21'),
(67,'2019-03-08','470600','RM Sumber Hidup','2019-12-06 14:49:38'),
(69,'2019-03-09','606650','RM Sumber Hidup','2019-12-06 15:20:38'),
(70,'2019-03-10','773100','RM Sumber Hidup','2019-12-06 15:24:47'),
(72,'2019-03-12','539000','RM Sumber Hidup','2019-12-06 15:43:44'),
(73,'2019-03-11','539000','RM Sumber Hidup','2019-12-06 16:05:23'),
(74,'2019-03-13','463900','RM Sumber Hidup','2019-12-06 16:06:11'),
(75,'2019-03-14','595400','RM Sumber Hidup','2019-12-06 16:09:36'),
(76,'2019-03-15','471550','RM Sumber Hidup','2019-12-06 16:10:19'),
(77,'2019-03-16','581400','RM Sumber Hidup','2019-12-06 16:11:19'),
(78,'2019-03-17','569850','RM Sumber Hidup','2019-12-06 16:11:55'),
(79,'2019-03-18','450100','RM Sumber Hidup','2019-12-06 16:12:26'),
(80,'2019-03-19','350650','RM Sumber Hidup','2019-12-06 16:12:59'),
(81,'2019-03-20','331150','RM Sumber Hidup','2019-12-06 16:13:38'),
(82,'2019-03-21','553150','RM Sumber Hidup','2019-12-06 16:14:09'),
(83,'2019-03-22','453850','RM Sumber Hidup','2019-12-06 16:14:42'),
(84,'2019-03-23','673050','RM Sumber Hidup','2019-12-06 16:15:18'),
(85,'2019-03-24','627050','RM Sumber Hidup','2019-12-06 16:15:50'),
(86,'2019-03-25','536250','RM Sumber Hidup','2019-12-06 16:16:50'),
(87,'2019-03-26','544150','RM Sumber Hidup','2019-12-06 16:17:20'),
(88,'2019-03-27','348450','RM Sumber Hidup','2019-12-06 16:17:55'),
(89,'2019-03-28','625350','RM Sumber Hidup','2019-12-06 16:18:56'),
(90,'2019-03-29','611600','RM Sumber Hidup','2019-12-06 16:19:23'),
(91,'2019-03-30','735000','RM Sumber Hidup','2019-12-06 16:20:10'),
(92,'2019-03-31','773750','RM Sumber Hidup','2019-12-06 16:20:52'),
(93,'2019-04-01','467100','RM Sumber Hidup','2019-12-06 16:28:20'),
(94,'2019-04-02','496500','RM Sumber Hidup','2019-12-06 16:29:42'),
(95,'2019-04-02','496500','RM Sumber Hidup','2019-12-06 16:29:54'),
(96,'2019-04-03','740650','RM Sumber Hidup','2019-12-06 16:30:39'),
(97,'2019-04-04','646100','RM Sumber Hidup','2019-12-06 16:31:06'),
(98,'2019-04-05','412350','RM Sumber Hidup','2019-12-06 16:31:33'),
(99,'2019-04-06','683000','RM Sumber Hidup','2019-12-06 16:32:00'),
(100,'2019-04-07','738150','RM Sumber Hidup','2019-12-06 16:32:56'),
(101,'2019-04-07','738150','RM Sumber Hidup','2019-12-06 16:33:03'),
(102,'2019-04-08','270500','RM Sumber Hidup','2019-12-06 16:33:53'),
(103,'2019-04-09','352400','RM Sumber Hidup','2019-12-06 16:34:18'),
(104,'2019-04-10','509650','RM Sumber Hidup','2019-12-06 16:34:44'),
(105,'2019-04-11','479250','RM Sumber Hidup','2019-12-06 16:35:14'),
(106,'2019-04-12','555500','RM Sumber Hidup','2019-12-06 16:35:46'),
(107,'2019-04-13','617100','RM Sumber Hidup','2019-12-06 16:37:44'),
(108,'2019-04-14','737650','RM Sumber Hidup','2019-12-06 16:38:21'),
(109,'2019-04-15','455450','RM Sumber Hidup','2019-12-06 16:39:18'),
(110,'2019-04-16','577300','RM Sumber Hidup','2019-12-06 16:39:53'),
(111,'2019-04-17','695000','RM Sumber Hidup','2019-12-06 16:41:02'),
(112,'2019-04-18','551650','RM Sumber Hidup','2019-12-06 16:41:44'),
(113,'2019-04-19','704700','RM Sumber Hidup','2019-12-06 16:42:20'),
(114,'2019-04-20','554100','RM Sumber Hidup','2019-12-06 16:44:06'),
(115,'2019-04-21','768600','RM Sumber Hidup','2019-12-06 16:45:14'),
(116,'2019-04-22','498900','RM Sumber Hidup','2019-12-06 16:45:41'),
(117,'2019-04-23','457500','RM Sumber Hidup','2019-12-06 16:46:11'),
(118,'2019-04-24','568500','RM Sumber Hidup','2019-12-06 16:46:37'),
(119,'2019-04-25','629950','RM Sumber Hidup','2019-12-06 16:47:09'),
(120,'2019-04-26','459200','RM Sumber Hidup','2019-12-06 16:47:38'),
(122,'2019-04-28','760100','RM Sumber Hidup','2019-12-06 16:48:31'),
(123,'2019-04-29','561850','RM Sumber Hidup','2019-12-06 16:49:11'),
(124,'2019-04-30','388550','RM Sumber Hidup','2019-12-06 16:49:49'),
(125,'2019-04-27','366300','RM Sumber Hidup','2019-12-06 16:51:39'),
(126,'2019-05-01','719100','RM Sumber Hidup','2019-12-06 16:56:49'),
(127,'2019-05-02','547050','RM Sumber Hidup','2019-12-06 16:57:52'),
(128,'2019-05-03','495300','RM Sumber Hidup','2019-12-06 16:58:15'),
(129,'2019-05-04','615450','RM Sumber Hidup','2019-12-06 16:58:39'),
(130,'2019-05-05','707600','RM Sumber Hidup','2019-12-06 16:59:07'),
(131,'2019-05-06','575550','RM Sumber Hidup','2019-12-06 16:59:37'),
(132,'2019-05-07','494250','RM Sumber Hidup','2019-12-06 16:59:59'),
(133,'2019-05-08','511300','RM Sumber Hidup','2019-12-06 17:00:21'),
(134,'2019-05-09','599000','RM Sumber Hidup','2019-12-06 17:00:43'),
(135,'2019-05-10','531900','RM Sumber Hidup','2019-12-06 17:01:07'),
(136,'2019-05-11','679700','RM Sumber Hidup','2019-12-06 17:01:32'),
(137,'2019-05-12','668200','RM Sumber Hidup','2019-12-06 17:01:58'),
(138,'2019-05-13','435200','RM Sumber Hidup','2019-12-06 17:02:28'),
(139,'2019-05-14','451400','RM Sumber Hidup','2019-12-06 17:03:02'),
(140,'2019-05-15','487550','RM Sumber Hidup','2019-12-06 17:03:29'),
(141,'2019-05-16','773600','RM Sumber Hidup','2019-12-06 17:03:59'),
(142,'2019-05-17','692800','RM Sumber Hidup','2019-12-06 17:18:15'),
(143,'2019-05-18','763000','RM Sumber Hidup','2019-12-06 17:18:43'),
(144,'2019-05-19','945600','RM Sumber Hidup','2019-12-06 17:19:24'),
(145,'2019-05-20','661000','RM Sumber Hidup','2019-12-06 17:19:48'),
(146,'2019-05-21','476700','RM Sumber Hidup','2019-12-06 17:20:22'),
(147,'2019-05-22','511300','RM Sumber Hidup','2019-12-06 17:20:48'),
(148,'2019-05-23','693000','RM Sumber Hidup','2019-12-06 17:21:21'),
(149,'2019-05-24','748850','RM Sumber Hidup','2019-12-06 17:21:52'),
(150,'2019-05-25','775000','RM Sumber Hidup','2019-12-06 17:22:19'),
(151,'2019-05-26','1022850','RM Sumber Hidup','2019-12-06 17:22:51'),
(152,'2019-05-27','752100','RM Sumber Hidup','2019-12-06 17:23:18'),
(153,'2019-05-28','699250','RM Sumber Hidup','2019-12-06 17:23:43'),
(154,'2019-05-29','716700','RM Sumber Hidup','2019-12-06 17:24:05'),
(155,'2019-05-30','977150','RM Sumber Hidup','2019-12-06 17:24:27'),
(156,'2019-05-31','930300','RM Sumber Hidup','2019-12-06 17:24:59'),
(157,'2019-06-01','1063250','RM Sumber Hidup','2019-12-06 17:27:15'),
(158,'2019-06-01','1063250','RM Sumber Hidup','2019-12-06 17:27:22'),
(159,'2019-06-02','1152650','RM Sumber Hidup','2019-12-06 17:28:37'),
(160,'2019-06-03','1183850','RM Sumber Hidup','2019-12-06 17:29:18'),
(161,'2019-06-04','1204500','RM Sumber Hidup','2019-12-06 17:31:54'),
(162,'2019-06-05','850700','RM Sumber Hidup','2019-12-06 17:32:16'),
(163,'2019-06-06','1182850','RM Sumber Hidup','2019-12-06 17:32:49'),
(164,'2019-06-07','1149900','RM Sumber Hidup','2019-12-06 17:33:19'),
(165,'2019-06-08','1172250','RM Sumber Hidup','2019-12-06 17:33:48'),
(166,'2019-06-09','1172250','RM Sumber Hidup','2019-12-06 17:34:16'),
(167,'2019-06-10','660300','RM Sumber Hidup','2019-12-06 17:34:37'),
(168,'2019-06-11','704500','RM Sumber Hidup','2019-12-06 17:35:00'),
(169,'2019-06-12','630250','RM Sumber Hidup','2019-12-06 17:35:27'),
(170,'2019-06-13','767150','RM Sumber Hidup','2019-12-06 17:35:55'),
(171,'2019-06-14','670900','RM Sumber Hidup','2019-12-06 17:36:29'),
(172,'2019-06-15','506450','RM Sumber Hidup','2019-12-06 17:36:50'),
(173,'2019-06-16','551600','RM Sumber Hidup','2019-12-06 17:37:13'),
(174,'2019-06-17','695250','RM Sumber Hidup','2019-12-06 17:37:45'),
(175,'2019-06-18','709150','RM Sumber Hidup','2019-12-06 17:38:21'),
(176,'2019-06-19','727850','RM Sumber Hidup','2019-12-06 17:38:43'),
(177,'2019-06-20','901150','RM Sumber Hidup','2019-12-06 17:39:10'),
(178,'2019-06-21','634150','RM Sumber Hidup','2019-12-06 17:39:35'),
(179,'2019-06-22','467100','RM Sumber Hidup','2019-12-06 17:39:58'),
(180,'2019-06-23','745650','RM Sumber Hidup','2019-12-06 17:40:24'),
(181,'2019-06-24','604500','RM Sumber Hidup','2019-12-06 17:40:46'),
(182,'2019-06-25','478600','RM Sumber Hidup','2019-12-06 17:41:09'),
(183,'2019-06-26','591400','RM Sumber Hidup','2019-12-06 17:41:35'),
(184,'2019-06-27','697650','RM Sumber Hidup','2019-12-06 17:41:58'),
(185,'2019-06-28','734250','RM Sumber Hidup','2019-12-06 17:42:17'),
(186,'2019-06-29','850750','RM Sumber Hidup','2019-12-06 17:42:45'),
(187,'2019-06-30','894750','RM Sumber Hidup','2019-12-06 17:43:12'),
(188,'2019-07-01','765150','RM Sumber Hidup','2019-12-09 15:40:26'),
(189,'2019-07-02','690250','RM Sumber Hidup','2019-12-09 15:40:51'),
(190,'2019-07-03','645500','RM Sumber Hidup','2019-12-09 15:41:10'),
(191,'2019-07-04','812150','RM Sumber Hidup','2019-12-09 15:41:27'),
(192,'2019-07-05','585650','RM Sumber Hidup','2019-12-09 15:41:43'),
(193,'2019-07-06','726600','RM Sumber Hidup','2019-12-09 15:42:13'),
(194,'2019-07-07','855300','RM Sumber Hidup','2019-12-09 15:42:38'),
(195,'2019-07-08','604750','RM Sumber Hidup','2019-12-09 15:42:58'),
(196,'2019-07-09','576450','RM Sumber Hidup','2019-12-09 15:43:16'),
(197,'2019-07-10','739950','RM Sumber Hidup','2019-12-09 15:43:40'),
(198,'2019-07-11','828350','RM Sumber Hidup','2019-12-09 15:43:56'),
(199,'2019-07-12','737900','RM Sumber Hidup','2019-12-09 15:44:16'),
(200,'2019-07-13','922400','RM Sumber Hidup','2019-12-09 15:45:02'),
(201,'2019-07-14','868650','RM Sumber Hidup','2019-12-09 15:46:22'),
(202,'2019-07-15','868650','RM Sumber Hidup','2019-12-09 15:47:27'),
(203,'2019-07-16','297900','RM Sumber Hidup','2019-12-09 15:47:43'),
(204,'2019-07-17','490100','RM Sumber Hidup','2019-12-09 15:48:11'),
(205,'2019-07-18','779950','RM Sumber Hidup','2019-12-09 15:48:38'),
(206,'2019-07-19','598300','RM Sumber Hidup','2019-12-09 15:48:55'),
(207,'2019-07-20','777000','RM Sumber Hidup','2019-12-09 15:50:24'),
(208,'2019-07-21','666700','RM Sumber Hidup','2019-12-09 15:50:42');

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
