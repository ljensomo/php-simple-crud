/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.1.36-MariaDB : Database - db_sample
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sample` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sample`;

/*Table structure for table `tbl_sample` */

DROP TABLE IF EXISTS `tbl_sample`;

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `column1` varchar(50) DEFAULT NULL,
  `column2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sample` */

insert  into `tbl_sample`(`id`,`column1`,`column2`) values (1,'asd','asd'),(2,'Test','test');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
