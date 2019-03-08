/*
SQLyog Community v13.1.1 (64 bit)
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
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=latin1;

/*Data for the table `tb_wilayah` */

insert  into `tb_wilayah`(`id`,`nama_wilayah`,`parent_id`,`type`) values 
(2,'Aceh',0,'Provinsi'),
(3,'Jawa Barat',0,'Provinsi'),
(4,'Kabupaten Aceh Barat',2,'Kabupaten'),
(5,'Kabupaten Aceh Barat Daya',2,'Kabupaten'),
(6,'Kabupaten Aceh Besar',2,'Kabupaten'),
(7,'Kabupaten Aceh Jaya',2,'Kabupaten'),
(8,'Kabupaten Aceh Selatan',2,'Kabupaten'),
(9,'Kabupaten Aceh Singkil',2,'Kabupaten'),
(10,'Kabupaten Aceh Tamiang',2,'Kabupaten'),
(11,'Kabupaten Aceh Tengah',2,'Kabupaten'),
(12,'Kabupaten Aceh Tenggara',2,'Kabupaten'),
(13,'Kabupaten Aceh Timur',2,'Kabupaten'),
(14,'Kabupaten Aceh Utara',2,'Kabupaten'),
(15,'Kabupaten Bener Meriah',2,'Kabupaten'),
(16,'Kabupaten Bireuen',2,'Kabupaten'),
(17,'Gayo Lues',2,'Kabupaten'),
(18,'Kabupaten Nagan Raya',2,'Kabupaten'),
(19,'Kabupaten Pidie',2,'Kabupaten'),
(20,'Kabupaten Pidie Jaya',2,'Kabupaten'),
(21,'Kabupaten Simeulue',2,'Kabupaten'),
(22,'Kota Banda Aceh',2,'Kabupaten'),
(23,'Kota Langsa',2,'Kabupaten'),
(24,'Kota Lhokseumawe',2,'Kabupaten'),
(25,'Kota Sabang',2,'Kabupaten'),
(26,'Kota Subulussalam',2,'Kabupaten'),
(27,'Kabupaten Bandung',3,'Kabupaten'),
(28,'Kabupaten Bandung Barat',3,'Kabupaten'),
(29,'Kabupaten Bekasi',3,'Kabupaten'),
(30,'Kabupaten Bogor',3,'Kabupaten'),
(31,'Kabupaten Ciamis',3,'Kabupaten'),
(32,'Kabupaten Cianjur',3,'Kabupaten'),
(33,'Kabupaten Cirebon',3,'Kabupaten'),
(34,'Kabupaten Garut',3,'Kabupaten'),
(35,'Kabupaten Indramayu',3,'Kabupaten'),
(36,'Kabupaten Karawang',3,'Kabupaten'),
(37,'Kabupaten Kuningan',3,'Kabupaten'),
(38,'Kabupaten Majalengka',3,'Kabupaten'),
(39,'Kabupaten Pangandaran',3,'Kabupaten'),
(40,'Kabupaten Purwakarta',3,'Kabupaten'),
(41,'Kabupaten Subang',3,'Kabupaten'),
(42,'Kabupaten Sukabumi',3,'Kabupaten'),
(43,'Kabupaten Sumedang',3,'Kabupaten'),
(44,'Kabupaten Tasikmalaya',3,'Kabupaten'),
(45,'Kota Bandung',3,'Kabupaten'),
(46,'Kota Banjar',3,'Kabupaten'),
(47,'Kota Bekasi',3,'Kabupaten'),
(48,'Kota Bogor',3,'Kabupaten'),
(49,'Kota Cimahi',3,'Kabupaten'),
(50,'Kota Cirebon',3,'Kabupaten'),
(51,'Kota Depok',3,'Kabupaten'),
(52,'Kota Sukabumi',3,'Kabupaten'),
(53,'Kota Tasikmalaya',3,'Kabupaten'),
(54,'Bali',0,'Provinsi'),
(55,'Kabupaten Badung',54,'Kabupaten'),
(56,'Kabupaten Bangli',54,'Kabupaten'),
(57,'Kabupaten Buleleng',54,'Kabupaten'),
(58,'Kabupaten Gianyar',54,'Kabupaten'),
(59,'Kabupaten Jembrana',54,'Kabupaten'),
(60,'Kabupaten Karangasem',54,'Kabupaten'),
(61,'Kabupaten Klungkung',54,'Kabupaten'),
(62,'Kabupaten Tabanan',54,'Kabupaten'),
(63,'Kota Denpasar',54,'Kabupaten'),
(64,'Banten',0,'Provinsi'),
(65,'Kabupaten Lebak',64,'Kabupaten'),
(66,'Kabupaten Pandeglang',64,'Kabupaten'),
(67,'Kabupaten Serang',64,'Kabupaten'),
(68,'Kabupaten Tangerang',64,'Kabupaten'),
(69,'Kota Cilegon',64,'Kabupaten'),
(70,'Kota Serang',64,'Kabupaten'),
(71,'Kota Tangerang',64,'Kabupaten'),
(72,'Kota Tangerang Selatan',64,'Kabupaten'),
(73,'Bengkulu',0,'Provinsi'),
(74,'Kabupaten Bengkulu Selatan',73,'Kabupaten'),
(75,'Kabupaten Bengkulu Tengah',73,'Kabupaten'),
(76,'Kabupaten Bengkulu Utara',73,'Kabupaten'),
(77,'Kabupaten Kaur',73,'Kabupaten'),
(78,'Kabupaten Kepahiang',73,'Kabupaten'),
(79,'Kabupaten Lebong',73,'Kabupaten'),
(80,'Kabupaten Mukomuko',73,'Kabupaten'),
(81,'Kabupaten Rejang Lebong',73,'Kabupaten'),
(82,'Kabupaten Seluma',73,'Kabupaten'),
(83,'Kota Bengkulu',73,'Kabupaten'),
(84,'Gorontalo',0,'Provinsi'),
(85,'Kabupaten Boalemo',84,'Kabupaten'),
(86,'Kabupaten Bone Bolango',84,'Kabupaten'),
(87,'Kabupaten Gorontalo',84,'Kabupaten'),
(88,'Kabupaten Gorontalo Utara',84,'Kabupaten'),
(89,'Kabupaten Pohuwato',84,'Kabupaten'),
(90,'Kota Gorontalo',84,'Kabupaten'),
(91,'Jakarta',0,'Provinsi'),
(92,'Daerah Khusus Ibukota Jakarta',91,'Kabupaten'),
(93,'Kabupaten Administrasi Kepulauan Seribu',91,'Kabupaten'),
(94,'Kota Administrasi Jakarta Barat',91,'Kabupaten'),
(95,'Kota Administrasi Jakarta Pusat',91,'Kabupaten'),
(96,'Kota Administrasi Jakarta Selatan',91,'Kabupaten'),
(97,'Kota Administrasi Jakarta Timur',91,'Kabupaten'),
(98,'Kota Administrasi Jakarta Utara',91,'Kabupaten'),
(99,'Jambi',0,'Provinsi'),
(100,'Kabupaten Batanghari',99,'Kabupaten'),
(101,'Kabupaten Bungo',99,'Kabupaten'),
(102,'Kabupaten Kerinci',99,'Kabupaten'),
(103,'Kabupaten Merangin',99,'Kabupaten'),
(104,'Kabupaten Muaro Jambi',99,'Kabupaten'),
(105,'Kabupaten Sarolangun',99,'Kabupaten'),
(106,'Kabupaten Tanjung Jabung Barat',99,'Kabupaten'),
(107,'Kabupaten Tanjung Jabung Timur',99,'Kabupaten'),
(108,'Kabupaten Tebo',99,'Kabupaten'),
(109,'Kota Jambi',99,'Kabupaten'),
(110,'Kota Sungaipenuh',99,'Kabupaten'),
(111,'Jawa Tengah',0,'Provinsi'),
(112,'Kabupaten Banjarnegara',111,'Kabupaten'),
(113,'Kabupaten Banyumas',111,'Kabupaten'),
(114,'Kabupaten Batang',111,'Kabupaten'),
(115,'Kabupaten Blora',111,'Kabupaten'),
(116,'Kabupaten Boyolali',111,'Kabupaten'),
(117,'Kabupaten Brebes',111,'Kabupaten'),
(118,'Kabupaten Cilacap',111,'Kabupaten'),
(119,'Kabupaten Demak',111,'Kabupaten'),
(120,'Kabupaten Grobogan',111,'Kabupaten'),
(121,'Kabupaten Jepara',111,'Kabupaten'),
(122,'Kabupaten Karanganyar',111,'Kabupaten'),
(123,'Kabupaten Kebumen',111,'Kabupaten'),
(124,'Kabupaten Kendal',111,'Kabupaten'),
(125,'Kabupaten Klaten',111,'Kabupaten'),
(126,'Kabupaten Kudus',111,'Kabupaten'),
(127,'Kabupaten Magelang',111,'Kabupaten'),
(128,'Kabupaten Pati',111,'Kabupaten'),
(129,'Kabupaten Pekalongan',111,'Kabupaten'),
(130,'Kabupaten Pemalang',111,'Kabupaten'),
(131,'Kabupaten Purbalingga',111,'Kabupaten'),
(132,'Kabupaten Purworejo',111,'Kabupaten'),
(133,'Kabupaten Rembang',111,'Kabupaten'),
(134,'Kabupaten Semarang',111,'Kabupaten'),
(135,'Kabupaten Sragen',111,'Kabupaten'),
(136,'Kabupaten Sukoharjo',111,'Kabupaten'),
(137,'Kabupaten Tegal',111,'Kabupaten'),
(138,'Kabupaten Temanggung',111,'Kabupaten'),
(139,'Kabupaten Wonogiri',111,'Kabupaten'),
(140,'Kabupaten Wonosobo',111,'Kabupaten'),
(141,'Kota Magelang',111,'Kabupaten'),
(142,'Kota Pekalongan',111,'Kabupaten'),
(143,'Kota Salatiga',111,'Kabupaten'),
(144,'Kota Semarang',111,'Kabupaten'),
(145,'Kota Surakarta',111,'Kabupaten'),
(146,'Kota Tegal',111,'Kabupaten'),
(147,'Jawa Timur',0,'Provinsi'),
(148,'Kabupaten Bangkalan',147,'Kabupaten'),
(149,'Kabupaten Banyuwangi',147,'Kabupaten'),
(150,'Kabupaten Blitar',147,'Kabupaten'),
(151,'Kabupaten Bojonegoro',147,'Kabupaten'),
(152,'Kabupaten Bondowoso',147,'Kabupaten'),
(153,'Kabupaten Gresik',147,'Kabupaten'),
(154,'Kabupaten Jember',147,'Kabupaten'),
(155,'Kabupaten Jombang',147,'Kabupaten'),
(156,'Kabupaten Kediri',147,'Kabupaten'),
(157,'Kabupaten Lamongan',147,'Kabupaten'),
(158,'Kabupaten Lumajang',147,'Kabupaten'),
(159,'Kabupaten Madiun',147,'Kabupaten'),
(160,'Kabupaten Magetan',147,'Kabupaten'),
(161,'Kabupaten Malang',147,'Kabupaten'),
(162,'Kabupaten Mojokerto',147,'Kabupaten'),
(163,'Kabupaten Nganjuk',147,'Kabupaten'),
(164,'Kabupaten Ngawi',147,'Kabupaten'),
(165,'Kabupaten Pacitan',147,'Kabupaten'),
(166,'Kabupaten Pamekasan',147,'Kabupaten'),
(167,'Kabupaten Pasuruan',147,'Kabupaten'),
(168,'Kabupaten Ponorogo',147,'Kabupaten'),
(169,'Kabupaten Probolinggo',147,'Kabupaten'),
(170,'Kabupaten Sampang',147,'Kabupaten'),
(171,'Kabupaten Sidoarjo',147,'Kabupaten'),
(172,'Kabupaten Situbondo',147,'Kabupaten'),
(173,'Kabupaten Sumenep',147,'Kabupaten'),
(174,'Kabupaten Trenggalek',147,'Kabupaten'),
(175,'Kabupaten Tuban',147,'Kabupaten'),
(176,'Kabupaten Tulungagung',147,'Kabupaten'),
(177,'Kota Batu',147,'Kabupaten'),
(178,'Kota Blitar',147,'Kabupaten'),
(179,'Kota Kediri',147,'Kabupaten'),
(180,'Kota Madiun',147,'Kabupaten'),
(181,'Kota Malang',147,'Kabupaten'),
(182,'Kota Mojokerto',147,'Kabupaten'),
(183,'Kota Pasuruan',147,'Kabupaten'),
(184,'Kota Probolinggo',147,'Kabupaten'),
(185,'Kota Surabaya',147,'Kabupaten'),
(186,'Kalimantan Barat',0,'Provinsi'),
(187,'Kabupaten Bengkayang',186,'Kabupaten'),
(188,'Kabupaten Kapuas Hulu',186,'Kabupaten'),
(189,'Kabupaten Kayong Utara',186,'Kabupaten'),
(190,'Kabupaten Ketapang',186,'Kabupaten'),
(191,'Kabupaten Kubu Raya',186,'Kabupaten'),
(192,'Kabupaten Landak',186,'Kabupaten'),
(193,'Kabupaten Melawi',186,'Kabupaten'),
(194,'Kabupaten Mempawah',186,'Kabupaten'),
(195,'Kabupaten Sambas',186,'Kabupaten'),
(196,'Kabupaten Sanggau',186,'Kabupaten'),
(197,'Kabupaten Sekadau',186,'Kabupaten'),
(198,'Kabupaten Sintang',186,'Kabupaten'),
(199,'Kota Pontianak',186,'Kabupaten'),
(200,'Kota Singkawang',186,'Kabupaten'),
(201,'Kalimantan Selatan',0,'Provinsi'),
(202,'Kabupaten Balangan',201,'Kabupaten'),
(203,'Kabupaten Banjar',201,'Kabupaten'),
(204,'Kabupaten Barito Kuala',201,'Kabupaten'),
(205,'Kabupaten Hulu Sungai Selatan',201,'Kabupaten'),
(206,'Kabupaten Hulu Sungai Tengah',201,'Kabupaten'),
(207,'Kabupaten Hulu Sungai Utara',201,'Kabupaten'),
(208,'Kabupaten Kotabaru',201,'Kabupaten'),
(209,'Kabupaten Tabalong',201,'Kabupaten'),
(210,'Kabupaten Tanah Bumbu',201,'Kabupaten'),
(211,'Kabupaten Tanah Laut',201,'Kabupaten'),
(212,'Kabupaten Tapin',201,'Kabupaten'),
(213,'Kota Banjarbaru',201,'Kabupaten'),
(214,'Kota Banjarmasin',201,'Kabupaten'),
(215,'Kalimantan Tengah',0,'Provinsi'),
(216,'Kabupaten Barito Selatan',215,'Kabupaten'),
(217,'Kabupaten Barito Timur',215,'Kabupaten'),
(218,'Kabupaten Barito Utara',215,'Kabupaten'),
(219,'Kabupaten Gunung Mas',215,'Kabupaten'),
(220,'Kabupaten Kapuas',215,'Kabupaten'),
(221,'Kabupaten Katingan',215,'Kabupaten'),
(222,'Kabupaten Kotawaringin Barat',215,'Kabupaten'),
(223,'Kabupaten Kotawaringin Timur',215,'Kabupaten'),
(224,'Kabupaten Lamandau',215,'Kabupaten'),
(225,'Kabupaten Murung Raya',215,'Kabupaten'),
(226,'Kabupaten Pulang Pisau',215,'Kabupaten'),
(227,'Kabupaten Sukamara',215,'Kabupaten'),
(228,'Kabupaten Seruyan',215,'Kabupaten'),
(229,'Kota Palangka Raya',215,'Kabupaten'),
(230,'Kalimantan Timur',0,'Provinsi'),
(231,'Kabupaten Berau',230,'Kabupaten'),
(232,'Kabupaten Kutai Barat',230,'Kabupaten'),
(233,'Kabupaten Kutai Kartanegara',230,'Kabupaten'),
(234,'Kabupaten Kutai Timur',230,'Kabupaten'),
(235,'Kabupaten Mahakam Ulu',230,'Kabupaten'),
(236,'Kabupaten Paser',230,'Kabupaten'),
(237,'Kabupaten Penajam Paser Utara',230,'Kabupaten'),
(238,'Kota Balikpapan',230,'Kabupaten'),
(239,'Kota Bontang',230,'Kabupaten'),
(240,'Kota Samarinda',230,'Kabupaten'),
(241,'Kalimantan Utara',0,'Provinsi'),
(242,'Kabupaten Bulungan',241,'Kabupaten'),
(243,'Kabupaten Malinau',241,'Kabupaten'),
(244,'Kabupaten Nunukan',241,'Kabupaten'),
(245,'Kabupaten Tana Tidung',241,'Kabupaten'),
(246,'Kota Tarakan',241,'Kabupaten'),
(247,'Kepulauan Bangka Belitung',0,'Provinsi'),
(248,'Kabupaten Bangka',247,'Kabupaten'),
(249,'Kabupaten Bangka Barat',247,'Kabupaten'),
(250,'Kabupaten Bangka Selatan',247,'Kabupaten'),
(251,'Kabupaten Bangka Tengah',247,'Kabupaten'),
(252,'Kabupaten Belitung',247,'Kabupaten'),
(253,'Kabupaten Belitung Timur',247,'Kabupaten'),
(254,'Kota Pangkal Pinang',247,'Kabupaten'),
(255,'Kepulauan Riau',0,'Provinsi'),
(256,'Kabupaten Bintan',255,'Kabupaten'),
(257,'Kabupaten Karimun',255,'Kabupaten'),
(258,'Kabupaten Kepulauan Anambas',255,'Kabupaten'),
(259,'Kabupaten Lingga',255,'Kabupaten'),
(260,'Kabupaten Natuna',255,'Kabupaten'),
(261,'Kota Batam',255,'Kabupaten'),
(262,'Kota Tanjung Pinang',255,'Kabupaten');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
