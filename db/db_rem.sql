/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - db_rem
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rem` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_rem`;

/*Table structure for table `tb_hak_akses` */

DROP TABLE IF EXISTS `tb_hak_akses`;

CREATE TABLE `tb_hak_akses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_hak_akses` */

insert  into `tb_hak_akses`(`id`,`nama`) values 
(1,'super-admin'),
(2,'user');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `redirect_url` varchar(255) DEFAULT '/',
  `id_hak_akses` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`username`,`password`,`redirect_url`,`id_hak_akses`) values 
(1,'admin','$2y$10$fQTu.fjCjQE99xkiJz1eZeEWqEkZc6VxWcdXse/4bRiNkoDPuWX8a','/about',1),
(2,'radif','$2y$10$cTUzvR7kOqnXT4KdbJzw7Oq.sddd5gNsMqK1dJVZV90TrP27ZC9pK','/',2),
(3,'faizal','$2y$10$cTUzvR7kOqnXT4KdbJzw7Oq.sddd5gNsMqK1dJVZV90TrP27ZC9pK','/',2),
(4,'super-admin','$2y$10$fQTu.fjCjQE99xkiJz1eZeEWqEkZc6VxWcdXse/4bRiNkoDPuWX8a','/',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
