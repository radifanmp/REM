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

/*Table structure for table `tb_agama` */

DROP TABLE IF EXISTS `tb_agama`;

CREATE TABLE `tb_agama` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_agama` varchar(15) DEFAULT NULL,
  `gambar_agama` varchar(100) DEFAULT NULL,
  `cover_agama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_agama` */

insert  into `tb_agama`(`id`,`nama_agama`,`gambar_agama`,`cover_agama`) values 
(1,'ISLAM','/img/masjidtest.jpg',NULL),
(2,'KATOLIK','/img/katoliktest.jpg',NULL),
(3,'PROTESTAN','/img/protestantest.jpg',NULL),
(4,'HINDU','/img/puretest.jpg',NULL),
(5,'BUDDHA','/img/viharatest.jpg',NULL),
(6,'KONG HU CU','/img/klentengtest.jpg',NULL);

/*Table structure for table `tb_anggota` */

DROP TABLE IF EXISTS `tb_anggota`;

CREATE TABLE `tb_anggota` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_agama` bigint(20) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` text,
  `foto_profil` varchar(100) DEFAULT NULL,
  `is_deleted` int(2) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_anggota` */

insert  into `tb_anggota`(`id`,`id_user`,`nama`,`email`,`id_agama`,`jenis_kelamin`,`no_telp`,`alamat`,`foto_profil`,`is_deleted`,`created_date`) values 
(1,1,NULL,NULL,NULL,NULL,NULL,NULL,'uploads/foto_profil/dp.png',NULL,'2019-02-23 22:51:57'),
(2,6,'JAMES WATSON',NULL,2,'Perempuan',NULL,NULL,'uploads/foto_profil/zGhFscsmJRw5osDvPbYpTjJkclP3wEhTfUd7Irhf.jpeg',NULL,'2019-02-23 22:58:48'),
(3,7,'Angga Wijaya','asdasd@gmail.com',1,'Laki - Laki','123123',NULL,'uploads/foto_profil/wLW81q9xE7cMyFsnJvuPPFD8gNcfLYl6MNjem1ZQ.jpeg',NULL,'2019-03-03 18:05:59'),
(5,3,'Faizal',NULL,NULL,NULL,NULL,NULL,'uploads/foto_profil/dp.png',NULL,'2019-03-07 16:51:13'),
(6,8,'Atta',NULL,NULL,NULL,NULL,NULL,'uploads/foto_profil/dp.png',NULL,'2019-03-07 16:56:22'),
(7,9,'Say',NULL,NULL,NULL,NULL,NULL,'uploads/foto_profil/dp.png',NULL,'2019-03-07 16:58:33'),
(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'uploads/foto_profil/dp.png',NULL,'2019-03-07 16:59:42'),
(9,10,'Phil','phil@neverland.com',1,'Laki - Laki',NULL,NULL,'uploads/foto_profil/dp.png',NULL,'2019-03-07 20:35:19');

/*Table structure for table `tb_hak_akses` */

DROP TABLE IF EXISTS `tb_hak_akses`;

CREATE TABLE `tb_hak_akses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `is_deleted` int(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_hak_akses` */

insert  into `tb_hak_akses`(`id`,`nama`,`is_deleted`) values 
(1,'super-admin',NULL),
(2,'user',NULL);

/*Table structure for table `tb_setting` */

DROP TABLE IF EXISTS `tb_setting`;

CREATE TABLE `tb_setting` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_setting` */

insert  into `tb_setting`(`id`,`key`,`value`) values 
(1,'default_profil','uploads/foto_profil/dp.png'),
(2,'password_global','studio12');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `redirect_url` varchar(255) DEFAULT '/',
  `is_deleted` int(2) DEFAULT '0',
  `id_hak_akses` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`username`,`password`,`redirect_url`,`is_deleted`,`id_hak_akses`) values 
(1,'admin','$2y$10$fQTu.fjCjQE99xkiJz1eZeEWqEkZc6VxWcdXse/4bRiNkoDPuWX8a','/about',0,1),
(2,'radif','$2y$10$cTUzvR7kOqnXT4KdbJzw7Oq.sddd5gNsMqK1dJVZV90TrP27ZC9pK','/',0,2),
(3,'faizal','$2y$10$cTUzvR7kOqnXT4KdbJzw7Oq.sddd5gNsMqK1dJVZV90TrP27ZC9pK','/',0,2),
(4,'super-admin','$2y$10$fQTu.fjCjQE99xkiJz1eZeEWqEkZc6VxWcdXse/4bRiNkoDPuWX8a','/',0,1),
(6,'james','$2y$10$UMnkbgycw0iBTZRcpGXq9um5uwbaRUZbUA8NT9lyticcVzrKTQnpu','/',0,2),
(7,'angga_wijaya','$2y$10$4zDFtf0S8b8VCxu7rB4BveMzvddU9A9VAVm0FMMwboCtdPynPHNoK','/',0,2),
(8,'atta','$2y$10$U7UYNTKfuLYC/zRtuEuYS.VQYPoCCgEvkJ9hlYyWZixAlb/72f4Ca','/',0,2),
(9,'say','$2y$10$/NnDF0DVPzT88WTghncOqedKroXOW/8J.BK9bcWHRM3fZYKxzvWLq','/',0,2),
(10,'phil','$2y$10$zJyy02c.t77QJG16qU2J7eUqKDVvVG6JiXELw3UEQ//yV1Z63O3yq','/',0,2);

/*Table structure for table `tb_wilayah` */

DROP TABLE IF EXISTS `tb_wilayah`;

CREATE TABLE `tb_wilayah` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_wilayah` varchar(100) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_wilayah` */

insert  into `tb_wilayah`(`id`,`nama_wilayah`,`parent_id`,`type`) values 
(2,'Aceh',0,'Provinsi'),
(3,'Jawa Barat',0,'Provinsi'),
(4,'Aceh Barat',2,'Kabupaten');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
