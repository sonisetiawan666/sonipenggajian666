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
  `id_kategori` int(10) DEFAULT NULL,
  `nama_event` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_event` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `fee_per_hari` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `event` */

insert  into `event`(`id`,`id_kategori`,`nama_event`,`tempat_event`,`tanggal_mulai`,`tanggal_selesai`,`fee_per_hari`,`deskripsi`,`created_at`,`updated_at`,`deleted_at`) values 
(1,5,'soundrenaline','GWK Culture Park','2018-12-30','2019-01-02','300','Soundrenaline Merupakan Event Tahunan yang menyelenggaran hiburan musik.','2018-12-06 01:30:58','2018-12-08 02:36:49',NULL),
(2,5,'Gathering','Nusa Dua','2018-12-02','2018-12-03','100000','hiburan musik','2018-12-08 02:29:13','2018-12-08 02:31:36',NULL),
(3,4,'Youtfest','Gianyar','2018-12-07','2018-12-08','100','gianyar gumi seni','2018-12-08 03:41:10','2018-12-08 03:41:10',NULL);

/*Table structure for table `jabatan` */

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jabatan` */

insert  into `jabatan`(`id`,`jabatan`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Staff Program','2018-12-06 01:22:30','2018-12-06 01:22:30',NULL),
(2,'Acara','2018-12-06 01:22:38','2018-12-06 01:22:38',NULL),
(3,'Kepala Produksi','2018-12-06 01:22:48','2018-12-06 01:22:48',NULL),
(4,'Kameramen',NULL,NULL,NULL),
(5,'Vidiographer',NULL,NULL,NULL),
(6,'penari',NULL,NULL,NULL),
(7,'penabuh',NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id`,`id_jabatan`,`nama_karyawan`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`alamat`,`no_telepon`,`gaji`,`no_rekening`,`photo`,`created_at`,`updated_at`,`deleted_at`) values 
(24,'','I Wayan Soni Setiawan','Gianyar','2018-12-02','Laki-laki','Gianyar','087654',1000000.000,'87658854',NULL,'0000-00-00 00:00:00','2018-12-06 01:24:06','2018-12-06 01:24:06'),
(25,'5','I Wayan Soni Setiawan','Gianyar','2018-12-02','laki-laki','Gianyar','087654',1000000.000,'87658854',NULL,NULL,'2018-12-10 13:21:35',NULL),
(26,'2','indra dana','Blahbatuh Gianyar','2018-12-30','laki-laki','Blahbatuh Gianyar','081786443',1000.000,'8758647536',NULL,'2018-12-06 01:24:35','2018-12-06 01:25:41',NULL),
(27,'6','Luh Putu','Gianyar','2018-12-02','perempuan','Gianyar','6757',1111.000,'855858',NULL,'2018-12-09 08:28:05','2018-12-09 08:28:05',NULL);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`kategori`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Pemerintahan','2018-12-06 01:23:03','2018-12-06 01:23:03',NULL),
(2,'Olahraga','2018-12-06 01:23:11','2018-12-06 01:23:11',NULL),
(3,'Pameran','2018-12-06 01:23:25','2018-12-06 01:23:25',NULL),
(4,'Gathering','2018-12-06 01:23:41','2018-12-06 01:23:41',NULL),
(5,'Hiburan','2018-12-06 01:23:53','2018-12-06 01:23:53',NULL),
(6,'pppp','2018-12-10 13:31:12','2018-12-10 13:31:12',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(12,'2018_11_21_083523_create_panitia_table',11),
(13,'2018_12_05_125106_create_table_pelanggan',12);

/*Table structure for table `panitia` */

DROP TABLE IF EXISTS `panitia`;

CREATE TABLE `panitia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `posisi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `panitia` */

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id`,`nama_pelanggan`,`perusahaan`,`alamat`,`no_telepon`,`email`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Bu Dayu Puspa','BPD Bali Renon','Gatsu Timur','081456','dayupuspa@gmail.com','2018-12-06 01:26:18','2018-12-10 13:32:30',NULL),
(2,'Pak Budi','PT. Yamaha Indonesia','Klungkung','45747','dayupuspa@gmail.com','2018-12-10 13:32:23','2018-12-10 13:32:35','2018-12-10 13:32:35');

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
  `id_karyawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`username`,`password`,`remember_token`,`created_at`,`updated_at`,`id_karyawan`) values 
(1,'test123','test@gmail.com','test123','$2y$10$KTXfLzB.IGLbxEW/bKMTOO0mprsXv.3EU6NuQ/YcZMto//mNP06DG','0b5YdLLdiDGNheIZlEk7d41vy3RCeFF9afnLosKP5UNmZgp6Y6MwomNXA6Qx',NULL,NULL,'24'),
(5,'Soni','sonisetiawan666@gmail.com','Soni123','$2y$10$KTXfLzB.IGLbxEW/bKMTOO0mprsXv.3EU6NuQ/YcZMto//mNP06DG',NULL,'2018-11-19 01:02:53','2018-11-19 01:02:53','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
