/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.31-MariaDB : Database - sonipenggajian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sonipenggajian` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sonipenggajian`;

/*Table structure for table `event` */

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_event` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `fee_per_hari` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `event` */

insert  into `event`(`id`,`nama_event`,`tempat_event`,`tanggal_mulai`,`tanggal_selesai`,`fee_per_hari`,`created_at`,`updated_at`,`deleted_at`) values 
(14,'GNNT','Nusa Dua','2018-12-08','2018-11-30','1','2018-11-20 11:08:22','2018-11-20 11:08:22',NULL),
(15,'abg','smu','2005-02-11','2007-02-11','12','2018-11-20 11:51:58','2018-11-21 01:46:42',NULL);

/*Table structure for table `jabatan` */

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jabatan` */

insert  into `jabatan`(`id`,`jabatan`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Presiden','2018-10-31 08:18:37','2018-10-31 08:45:56','2018-10-31 08:45:56'),
(2,'Wakil Presiden2','2018-10-31 08:24:04','2018-11-05 14:01:57','2018-11-05 14:01:57'),
(17,'asf','2018-11-05 14:18:12','2018-11-05 14:18:15','2018-11-05 14:18:15'),
(18,'Freelance','2018-11-12 14:33:13','2018-11-22 10:36:47','2018-11-22 10:36:47'),
(19,'Staff Program','2018-11-12 14:33:23','2018-11-22 10:36:43','2018-11-22 10:36:43'),
(20,'Kepala Produksi','2018-11-22 10:34:20','2018-11-22 10:36:39','2018-11-22 10:36:39'),
(21,'Accounting','2018-11-22 10:35:00','2018-11-22 10:36:28','2018-11-22 10:36:28'),
(22,'Anggota Produksi','2018-11-22 10:35:42','2018-11-22 10:35:57','2018-11-22 10:35:57'),
(23,'Freelance','2018-11-22 10:36:13','2018-11-22 10:36:21','2018-11-22 10:36:21'),
(24,'Staff Program','2018-11-22 10:37:08','2018-11-22 10:37:08',NULL),
(25,'Accounting','2018-11-22 10:37:19','2018-11-23 12:42:29','2018-11-23 12:42:29'),
(26,'Kepala Produksi','2018-11-22 10:37:33','2018-11-22 10:38:03','2018-11-22 10:38:03'),
(27,'Anggota Produksi','2018-11-22 10:37:44','2018-11-22 10:37:52','2018-11-22 10:37:52'),
(28,'Kepala Produksi','2018-11-22 10:38:15','2018-11-23 12:41:15','2018-11-23 12:41:15'),
(29,'Anggota Produksi','2018-11-22 10:38:26','2018-11-23 12:37:34','2018-11-23 12:37:34'),
(30,'sdsd','2018-11-23 12:42:39','2018-11-23 12:42:45','2018-11-23 12:42:45'),
(31,'sdsd','2018-11-23 12:42:53','2018-11-23 12:43:41','2018-11-23 12:43:41'),
(32,'fgfgfg','2018-11-23 12:43:00','2018-11-23 12:43:30','2018-11-23 12:43:30'),
(33,'dfdfdfd','2018-11-23 12:43:49','2018-11-23 12:43:49',NULL),
(34,'Wakil Presiden2','2018-11-23 12:44:09','2018-11-23 12:44:51','2018-11-23 12:44:51'),
(35,'dfdfdfd','2018-11-23 12:45:06','2018-11-23 12:45:06',NULL),
(36,'kkk','2018-11-23 12:54:22','2018-11-23 12:54:22',NULL),
(37,'aaa','2018-11-23 12:54:28','2018-11-23 12:54:28',NULL);

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_karyawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` decimal(20,3) NOT NULL,
  `no_rekening` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id`,`id_jabatan`,`nama_karyawan`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`alamat`,`no_telepon`,`gaji`,`no_rekening`,`photo`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'18','sasa','asasas','2018-11-15','laki-laki','Klungkung','3434',0.000,'4545','path','2018-11-12 14:59:50','2018-11-17 09:57:10','2018-11-17 09:57:10'),
(2,'18','indra dana','gianyar','2018-11-04','laki-laki','Gianyar','08111',0.000,'12345','path','2018-11-13 02:37:38','2018-11-13 02:37:44','2018-11-13 02:37:44'),
(3,'19','sonisetiawan','Gianyar','1996-06-26','laki-laki','Gianyar','0818888',0.000,'99999','path','2018-11-17 09:56:56','2018-11-17 09:57:01','2018-11-17 09:57:01'),
(4,'18','I Wayan Soni Setiawan','Pupuan Tegallalang Gianyar','1996-06-26','laki-laki','Tegal Payang, Tegallalang, Gianyar','081805538447',0.000,'23416677889','path','2018-11-17 09:57:43','2018-11-19 13:40:18',NULL),
(5,'19','Ayu Astari Dewi','Tegallalang Gianyar','2025-05-05','perempuan','Tegallalang Gianyar','083114112118',0.000,'1234567898','path','2018-11-17 13:23:49','2018-11-19 01:29:04',NULL),
(6,'19','indra dana','Gianyar','2018-12-03','laki-laki','Gianyar','0899999999',0.000,'12345','path','2018-11-19 01:32:30','2018-11-23 12:37:13','2018-11-23 12:37:13'),
(7,'19','Aris Sadana','Gianyar','2031-02-13','laki-laki','Klungkung','89898',3434343.000,'839483489348934','path','2018-11-19 13:16:10','2018-11-21 10:21:47','2018-11-21 10:21:47'),
(8,'18','asasa','asasas','2018-10-31','laki-laki','asasas','3434',4545.000,'4545','path','2018-11-19 13:35:06','2018-11-21 10:21:36','2018-11-21 10:21:36'),
(9,'19','asasa232','gianyar','2018-11-21','perempuan','Tegallalang Gianyar','5565',33434.000,'34343','','2018-11-19 13:45:39','2018-11-21 10:21:31','2018-11-21 10:21:31'),
(10,'19','sdsdsd','dsdsd','2018-11-24','laki-laki','sds','9',99.000,'9','','2018-11-19 13:47:20','2018-11-21 10:21:19','2018-11-21 10:21:19'),
(11,'18','e45','sdsd','2018-11-17','laki-laki','9','9',9.000,'9','asasa','2018-11-19 13:47:59','2018-11-21 10:21:13','2018-11-21 10:21:13'),
(12,'18','sdsd','dfdf','2018-11-15','laki-laki','9','9',9.000,'9',NULL,'2018-11-19 13:57:58','2018-11-21 10:21:07','2018-11-21 10:21:07'),
(13,'19','4545','asasas','2018-11-15','laki-laki','Tegallalang Gianyar','4',4.000,'3',NULL,'2018-11-19 13:59:42','2018-11-21 10:20:59','2018-11-21 10:20:59'),
(14,'18','asas','Gianyar','2018-11-20','laki-laki','Gianyar','9',9.000,'9',NULL,'2018-11-19 14:02:36','2018-11-21 10:20:56','2018-11-21 10:20:56'),
(15,'18','sdsd','gianyar','2018-11-29','laki-laki','Klungkung','9',9.000,'9',NULL,'2018-11-19 14:03:40','2018-11-21 10:20:53','2018-11-21 10:20:53'),
(16,'19','wfcac','vava','2018-11-25','laki-laki','grgqg','55',345345.000,'5',NULL,'2018-11-19 14:08:22','2018-11-21 10:20:50','2018-11-21 10:20:50'),
(17,'24','I Kadek Wiastara','Gianyar','2018-11-04','laki-laki','Gianyar','087554433111',1000000.000,'1122334455',NULL,'2018-11-22 10:40:31','2018-11-22 10:40:49','2018-11-22 10:40:49');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`kategori`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'pemerintahan','2018-11-05 13:40:57','2018-11-05 13:42:12','2018-11-05 13:42:12'),
(2,'pemerintahan','2018-11-05 13:58:50','2018-11-05 13:59:33','2018-11-05 13:59:33'),
(3,'pemerintahan','2018-11-05 13:59:56','2018-11-05 13:59:59','2018-11-05 13:59:59'),
(4,'pemerintahan','2018-11-05 14:00:31','2018-11-05 14:06:33','2018-11-05 14:06:33'),
(5,'lucu','2018-11-05 14:00:38','2018-11-05 14:00:43','2018-11-05 14:00:43'),
(6,'assdsd','2018-11-05 14:15:04','2018-11-05 14:15:08','2018-11-05 14:15:08'),
(7,'Pemerintahan','2018-11-08 02:59:53','2018-11-08 02:59:53',NULL),
(8,'Peresmian','2018-11-08 03:00:14','2018-11-08 03:00:14',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_100000_create_password_resets_table',1),
(2,'2014_11_12_000000_create_users_table',1),
(3,'2014_12_12_000000_create_users_table',2),
(4,'2018_10_31_080317_create_jabatan_tables',3),
(5,'2018_11_31_080317_create_jabatan_tables',4),
(6,'2018_11_02_162704_create_karyawan_table',5),
(7,'2018_11_02_163223_create_event_table',6),
(8,'2018_11_05_130517_create_kategori_table',7),
(9,'2018_10_05_130517_create_kategori_table',8),
(10,'2018_11_19_132027_add_gaji_to_karyawan',9),
(11,'2018_11_21_083311_create_gaji_table',10),
(12,'2018_11_21_083523_create_panitia_table',11);

/*Table structure for table `panitia` */

DROP TABLE IF EXISTS `panitia`;

CREATE TABLE `panitia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `posisi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `panitia` */

insert  into `panitia`(`id`,`posisi`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Acara','2018-11-21 08:40:24','2018-11-21 09:00:03',NULL),
(2,'Dokumentasi','2018-11-21 08:46:36','2018-11-21 09:00:24',NULL),
(3,'Produksi','2018-11-21 09:01:10','2018-11-21 09:01:10',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`username`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'test123','test@gmail.com','test123','$2y$10$KTXfLzB.IGLbxEW/bKMTOO0mprsXv.3EU6NuQ/YcZMto//mNP06DG','0b5YdLLdiDGNheIZlEk7d41vy3RCeFF9afnLosKP5UNmZgp6Y6MwomNXA6Qx',NULL,NULL),
(5,'Soni','sonisetiawan666@gmail.com','Soni123','$2y$10$KTXfLzB.IGLbxEW/bKMTOO0mprsXv.3EU6NuQ/YcZMto//mNP06DG',NULL,'2018-11-19 01:02:53','2018-11-19 01:02:53');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
