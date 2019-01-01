-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 10:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonipenggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `tanggal_absensi`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2018-12-12', 'asa', NULL, NULL, NULL),
(2, '2018-12-14', '1', '2018-12-30 01:12:00', '2018-12-30 01:12:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absensi_event`
--

CREATE TABLE `absensi_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi_event`
--

INSERT INTO `absensi_event` (`id`, `id_event`, `tanggal_absensi`, `status`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(33, '1', '2018-12-31', '0', '', '2018-12-23 02:40:58', '2018-12-23 02:41:03', NULL),
(34, '1', '2018-12-30', '0', '', '2018-12-23 02:41:08', '2018-12-23 02:41:14', NULL),
(35, '1', '2018-12-23', '0', '', '2018-12-23 03:27:47', '2018-12-23 03:27:54', NULL),
(36, '3', '2018-12-08', '0', '', '2018-12-23 03:54:41', '2018-12-23 03:54:46', NULL),
(37, '3', '2018-12-07', '1', '', '2018-12-23 03:57:37', '2018-12-23 03:57:37', NULL),
(38, '1', '2018-12-31', '0', '', '2018-12-24 17:52:11', '2018-12-24 17:52:23', NULL),
(39, '2', '2018-12-27', '1', '', '2018-12-26 20:47:30', '2018-12-26 20:47:30', NULL),
(40, '2', '2018-12-27', '1', '', '2018-12-26 20:47:33', '2018-12-26 20:47:33', NULL),
(41, '2', '2018-12-27', '0', '', '2018-12-26 20:47:35', '2018-12-26 20:47:40', NULL),
(42, '2', '2018-12-27', '0', '', '2018-12-26 20:49:14', '2018-12-26 20:49:20', NULL),
(43, '2', '2018-12-27', '0', '', '2018-12-26 20:52:36', '2018-12-26 20:52:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `det_absensi`
--

CREATE TABLE `det_absensi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_absensi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` datetime NOT NULL,
  `jam_selesai` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `det_absensi_event`
--

CREATE TABLE `det_absensi_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_absensi_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_panitia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `det_absensi_event`
--

INSERT INTO `det_absensi_event` (`id`, `id_absensi_event`, `id_event`, `id_panitia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, '33', '1', '5', '2018-12-23 02:41:03', '2018-12-23 02:41:03', NULL),
(25, '33', '1', '3', '2018-12-23 02:41:03', '2018-12-23 02:41:03', NULL),
(26, '34', '1', '5', '2018-12-23 02:41:14', '2018-12-23 02:41:14', NULL),
(27, '35', '1', '5', '2018-12-23 03:27:54', '2018-12-23 03:27:54', NULL),
(28, '36', '3', '11', '2018-12-23 03:54:45', '2018-12-23 03:54:45', NULL),
(29, '38', '1', '12', '2018-12-24 17:52:23', '2018-12-24 17:52:23', NULL),
(30, '38', '1', '5', '2018-12-24 17:52:23', '2018-12-24 17:52:23', NULL),
(31, '41', '2', '8', '2018-12-26 20:47:40', '2018-12-26 20:47:40', NULL),
(37, 'undefined', '2', '8', '2018-12-26 20:48:57', '2018-12-26 20:48:57', NULL),
(38, '42', '2', '8', '2018-12-26 20:49:20', '2018-12-26 20:49:20', NULL),
(39, '42', '2', '7', '2018-12-26 20:49:20', '2018-12-26 20:49:20', NULL),
(40, 'undefined', '2', '8', '2018-12-26 20:49:25', '2018-12-26 20:49:25', NULL),
(41, 'undefined', '2', '8', '2018-12-26 20:49:30', '2018-12-26 20:49:30', NULL),
(42, 'undefined', '2', '7', '2018-12-26 20:49:30', '2018-12-26 20:49:30', NULL),
(43, 'undefined', '2', '8', '2018-12-26 20:49:30', '2018-12-26 20:49:30', NULL),
(44, 'undefined', '2', '7', '2018-12-26 20:49:31', '2018-12-26 20:49:31', NULL),
(45, '43', '2', '8', '2018-12-26 20:52:40', '2018-12-26 20:52:40', NULL),
(46, 'undefined', '2', '8', '2018-12-26 20:52:55', '2018-12-26 20:52:55', NULL),
(47, '[object HTMLCollection]', '2', '8', '2018-12-26 20:54:07', '2018-12-26 20:54:07', NULL),
(48, 'function(a,b){return new n.fn.init(a,b)}', '2', '8', '2018-12-26 20:55:45', '2018-12-26 20:55:45', NULL),
(49, 'undefined', '2', '8', '2018-12-26 20:56:08', '2018-12-26 20:56:08', NULL),
(50, 'undefined', '2', '7', '2018-12-26 20:56:08', '2018-12-26 20:56:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `det_gaji`
--

CREATE TABLE `det_gaji` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_gaji` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_gaji` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_gaji` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` decimal(20,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `det_gaji`
--

INSERT INTO `det_gaji` (`id`, `id_gaji`, `daftar_gaji`, `deskripsi_gaji`, `jumlah`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, '4', 'Gaji Pokok', 'Gaji Pokok Periode Januari 2019', '3000000', '2018-12-29 17:40:28', '2018-12-29 17:40:28', NULL),
(15, '4', 'Fee Event', 'Event Maharaja Sukawati Periode Januari', '200000', '2018-12-29 17:41:49', '2018-12-29 17:41:49', NULL),
(16, '4', 'Fee Event', 'Sukamalada Ubud', '900000', '2018-12-29 17:42:05', '2018-12-29 17:42:05', NULL),
(17, '4', 'THR', 'THR Galungan, Kuningan, Natal, Tahun Baru', '2000000', '2018-12-29 17:42:43', '2018-12-29 17:42:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
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
  `id_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `id_kategori`, `nama_event`, `tempat_event`, `tanggal_mulai`, `tanggal_selesai`, `fee_per_hari`, `deskripsi`, `created_at`, `updated_at`, `deleted_at`, `id_pelanggan`) VALUES
(1, 5, 'soundrenaline', 'GWK Culture Park', '2018-12-30', '2019-01-02', '300', 'Soundrenaline Merupakan Event Tahunan yang menyelenggaran hiburan musik.', '2018-12-05 17:30:58', '2018-12-07 18:36:49', NULL, '1'),
(2, 5, 'Gathering', 'Nusa Dua', '2018-12-02', '2018-12-03', '100000', 'hiburan musik', '2018-12-07 18:29:13', '2018-12-11 06:35:29', NULL, '1'),
(3, 4, 'Youtfest', 'Gianyar', '2018-12-07', '2018-12-08', '100', 'gianyar gumi seni', '2018-12-07 19:41:10', '2018-12-07 19:41:10', NULL, '1'),
(4, 2, 'Nasasa', 'bAli', '2018-12-13', '2018-12-28', '900090', 'dsdsd', '2018-12-17 05:09:14', '2018-12-17 05:09:14', NULL, '1'),
(5, 1, 'Test1212', 'sdsd', '2018-12-27', '2018-12-29', '23323', '34343', '2018-12-26 20:20:17', '2018-12-26 20:20:17', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `total_gaji` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `id_user`, `periode_awal`, `periode_akhir`, `total_gaji`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '2018-12-27', '2018-12-27', '0.00', '2018-12-27 03:26:13', '2018-12-27 03:26:13', NULL),
(2, '1', '2018-12-01', '2018-12-31', '0.00', '2018-12-27 03:27:08', '2018-12-27 03:27:08', NULL),
(3, '5', '2018-12-01', '2018-12-31', '0.00', '2018-12-27 03:39:29', '2018-12-27 03:39:29', NULL),
(4, '5', '2018-12-01', '2018-12-31', '0.00', '2018-12-27 03:39:55', '2018-12-27 03:39:55', NULL),
(5, '1', '2018-12-13', '2018-12-19', '0.00', '2018-12-27 03:52:18', '2018-12-27 03:52:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Staff Program', '2018-12-05 17:22:30', '2018-12-05 17:22:30', NULL),
(2, 'Acara', '2018-12-05 17:22:38', '2018-12-05 17:22:38', NULL),
(3, 'Kepala Produksi', '2018-12-05 17:22:48', '2018-12-05 17:22:48', NULL),
(4, 'Kameramen', NULL, NULL, NULL),
(5, 'Vidiographer', NULL, NULL, NULL),
(6, 'penari', NULL, NULL, NULL),
(7, 'penabuh', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `id_jabatan`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_telepon`, `gaji`, `no_rekening`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, '', 'I Wayan Soni Setiawan', 'Gianyar', '2018-12-02', 'Laki-laki', 'Gianyar', '087654', '1000000.000', '87658854', NULL, '0000-00-00 00:00:00', '2018-12-05 17:24:06', '2018-12-05 17:24:06'),
(25, '5', 'I Wayan Soni Setiawan', 'Gianyar', '2018-12-02', 'laki-laki', 'Gianyar', '087654', '1000000.000', '87658854', '/upload/photo/i-wayan-soni-setiawan.jpg', NULL, '2018-12-15 02:17:06', NULL),
(26, '2', 'indra dana', 'Blahbatuh Gianyar', '2018-12-30', 'laki-laki', 'Blahbatuh Gianyar', '081786443', '1000.000', '8758647536', NULL, '2018-12-05 17:24:35', '2018-12-05 17:25:41', NULL),
(27, '6', 'Luh Putu', 'Gianyar', '2018-12-02', 'perempuan', 'Gianyar', '6757', '1111.000', '855858', NULL, '2018-12-09 00:28:05', '2018-12-09 00:28:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pemerintahan', '2018-12-05 17:23:03', '2018-12-05 17:23:03', NULL),
(2, 'Olahraga', '2018-12-05 17:23:11', '2018-12-05 17:23:11', NULL),
(3, 'Pameran', '2018-12-05 17:23:25', '2018-12-05 17:23:25', NULL),
(4, 'Gathering', '2018-12-05 17:23:41', '2018-12-05 17:23:41', NULL),
(5, 'Hiburan', '2018-12-05 17:23:53', '2018-12-05 17:23:53', NULL),
(6, 'pppp', '2018-12-10 05:31:12', '2018-12-10 05:31:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2014_11_12_000000_create_users_table', 1),
(3, '2014_12_12_000000_create_users_table', 2),
(4, '2018_10_31_080317_create_jabatan_tables', 3),
(5, '2018_11_31_080317_create_jabatan_tables', 4),
(6, '2018_11_02_162704_create_karyawan_table', 5),
(7, '2018_11_02_163223_create_event_table', 6),
(8, '2018_11_05_130517_create_kategori_table', 7),
(9, '2018_10_05_130517_create_kategori_table', 8),
(10, '2018_11_19_132027_add_gaji_to_karyawan', 9),
(11, '2018_11_21_083311_create_gaji_table', 10),
(12, '2018_11_21_083523_create_panitia_table', 11),
(13, '2018_12_05_125106_create_table_pelanggan', 12),
(14, '2018_11_21_025037_create_panitia_table', 13),
(15, '2018_12_17_052515_create_table_absensi_event', 14),
(16, '2018_12_30_101505_create_permission_tables', 15);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id`, `id_user`, `id_event`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', NULL, '2018-12-16 04:43:26', '2018-12-16 04:43:26'),
(2, '1', '1', NULL, '2018-12-16 04:44:26', '2018-12-16 04:44:26'),
(3, '5', '1', '2018-12-16 04:33:32', '2018-12-16 04:33:32', NULL),
(4, '5', '1', '2018-12-16 04:34:38', '2018-12-16 04:43:19', '2018-12-16 04:43:19'),
(5, '5', '1', '2018-12-16 04:38:01', '2018-12-16 04:38:01', NULL),
(6, '5', '1', '2018-12-16 04:39:02', '2018-12-16 04:44:31', '2018-12-16 04:44:31'),
(7, '5', '2', '2018-12-16 04:58:56', '2018-12-16 04:58:56', NULL),
(8, '1', '2', '2018-12-16 04:58:57', '2018-12-16 04:58:57', NULL),
(9, '1', '3', '2018-12-16 05:01:36', '2018-12-16 05:01:36', NULL),
(10, '5', '4', '2018-12-17 05:10:18', '2018-12-17 05:10:18', NULL),
(11, '5', '3', '2018-12-23 03:54:33', '2018-12-23 03:54:33', NULL),
(12, '1', '1', '2018-12-24 17:51:59', '2018-12-24 17:51:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `perusahaan`, `alamat`, `no_telepon`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bu Dayu Puspa', 'BPD Bali Renon', 'Gatsu Timur', '081456', 'dayupuspa@gmail.com', '2018-12-05 17:26:18', '2018-12-10 05:32:30', NULL),
(2, 'Pak Budi', 'PT. Yamaha Indonesia', 'Klungkung', '45747', 'dayupuspa@gmail.com', '2018-12-10 05:32:23', '2018-12-10 05:32:35', '2018-12-10 05:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_karyawan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `id_karyawan`) VALUES
(1, 'test123', 'test@gmail.com', 'test123', '$2y$10$KTXfLzB.IGLbxEW/bKMTOO0mprsXv.3EU6NuQ/YcZMto//mNP06DG', '7cRCPIajKRRdOSPMQfmUz4Nik2vdxITWJZGqn0SkowDaFmjonWxJWGDzDcBg', NULL, NULL, 25),
(5, 'Soni', 'sonisetiawan666@gmail.com', 'Soni123', '$2y$10$KTXfLzB.IGLbxEW/bKMTOO0mprsXv.3EU6NuQ/YcZMto//mNP06DG', NULL, '2018-11-18 17:02:53', '2018-11-18 17:02:53', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absensi_event`
--
ALTER TABLE `absensi_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `det_absensi`
--
ALTER TABLE `det_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `det_absensi_event`
--
ALTER TABLE `det_absensi_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `det_gaji`
--
ALTER TABLE `det_gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `absensi_event`
--
ALTER TABLE `absensi_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `det_absensi`
--
ALTER TABLE `det_absensi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `det_absensi_event`
--
ALTER TABLE `det_absensi_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `det_gaji`
--
ALTER TABLE `det_gaji`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
