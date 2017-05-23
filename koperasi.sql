-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 06:47 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tang_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `kd_jab` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `jk`, `tempat_lahir`, `tang_lahir`, `alamat`, `pengguna_id`, `kd_jab`, `created_at`, `updated_at`) VALUES
(3, 'chigga', 'Laki-laki', 'samarinda', '1994-12-12', 'perjuangan', 5, 1, '2017-05-18 06:01:23', '2017-05-18 06:01:23'),
(4, 'lele', 'Laki-laki', 'kolam', '1998-12-01', 'aaaaa', 6, 3, '2017-05-19 03:53:21', '2017-05-19 03:53:21'),
(5, 'el loco', 'Laki-laki', 'samarinda', '1992-12-12', 'alsdasdasd', 7, 1, '2017-05-19 21:34:08', '2017-05-19 21:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `angsur`
--

CREATE TABLE IF NOT EXISTS `angsur` (
  `id` int(10) unsigned NOT NULL,
  `pinjam_id` int(10) unsigned NOT NULL,
  `pengelola_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `angsur`
--

INSERT INTO `angsur` (`id`, `pinjam_id`, `pengelola_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2017-05-19 15:01:27', '2017-05-19 15:01:27'),
(2, 2, 1, '2017-05-19 15:07:36', '2017-05-19 15:07:36'),
(3, 2, 3, '2017-05-19 15:07:43', '2017-05-19 15:07:43'),
(4, 2, 3, '2017-05-19 15:34:56', '2017-05-19 15:34:56'),
(5, 1, 3, '2017-05-19 15:40:53', '2017-05-19 15:40:53'),
(6, 5, 3, '2017-05-19 15:41:29', '2017-05-19 15:41:29'),
(7, 3, 1, '2017-05-19 15:41:50', '2017-05-19 15:41:50'),
(8, 1, 1, '2017-05-19 15:44:51', '2017-05-19 15:44:51'),
(9, 9, 3, '2017-05-19 16:02:38', '2017-05-19 16:02:38'),
(10, 10, 1, '2017-05-19 16:53:56', '2017-05-19 16:53:56'),
(11, 2, 3, '2017-05-19 21:04:10', '2017-05-19 21:04:10'),
(12, 11, 1, '2017-05-19 22:25:06', '2017-05-19 22:25:06'),
(13, 5, 1, '2017-05-19 22:34:25', '2017-05-19 22:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'HRD', NULL, NULL),
(2, 'Keuangan', NULL, NULL),
(3, 'pemasaran', NULL, NULL),
(4, 'operasional', NULL, NULL),
(5, 'Gudang', NULL, NULL),
(6, 'Personel', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jab` int(10) unsigned NOT NULL,
  `nama_jab` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_pokok` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `nama_jab`, `gaji_pokok`, `created_at`, `updated_at`) VALUES
(1, 'Manajer', '10000000', NULL, NULL),
(2, 'Kepala Divisi', '7500000', NULL, NULL),
(3, 'Staf', '5000000', NULL, NULL),
(4, 'Pegawai', '3000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `angsur_id` int(10) unsigned NOT NULL,
  `divisi_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`angsur_id`, `divisi_id`, `created_at`, `updated_at`) VALUES
(10, 3, '2017-05-19 19:44:39', '2017-05-19 19:44:39'),
(11, 2, '2017-05-19 22:31:01', '2017-05-19 22:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_01_07_073615_create_tagged_table', 1),
(4, '2014_01_07_073615_create_tags_table', 1),
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2016_06_29_073615_create_tag_groups_table', 1),
(8, '2016_06_29_073615_update_tags_table', 1),
(26, '2017_05_18_002727_buat_table_pengguna', 2),
(27, '2017_05_18_040554_buat_table_jabatan', 2),
(28, '2017_05_18_041552_buat_table_anggota', 2),
(34, '2017_05_18_234653_buat_table_pengelola', 3),
(35, '2017_05_19_083019_buat_table_simpan', 4),
(38, '2017_05_19_124700_buat_table_pinjam', 5),
(39, '2017_05_19_221539_buat_table_angsur', 6),
(42, '2017_05_20_025856_buat_table_divisi', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE IF NOT EXISTS `pengelola` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tang_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id`, `nama`, `jk`, `tempat_lahir`, `tang_lahir`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'chrisman', 'Laki-laki', 'Samarinda', '1996-12-25', 'perjuangan 7', 1, NULL, NULL),
(3, 'Katon nur', 'Laki-laki', 'Bontang Utara', '1997-02-05', 'Bontang Utara', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'cnaga', '123123', '0WeHAxsnkZ4017H7hEaY0UPS9bD8DojzPRnAzr4hvJ6ycFC8AXYUqzOcHUGK', 1, '2017-05-18 05:57:59', '2017-05-18 05:57:59'),
(4, 'kakakaton', '123321', '5dTHxKg1tEdvcZoAOjy25rojgYv94nmahCzQIFVdW76JkOAr6S1bhmPo5GfT', 1, '2017-05-18 06:04:40', '2017-05-18 06:04:40'),
(5, 'newbie111', '123123', '1KMvlLPcQtUNf5EJvmUuxLzZv5G4u8l2vdCXqP6tlizb9OZHepXKWLarLmuO', 0, NULL, NULL),
(6, 'baru', '123123', 'LkDWnGhNEkiP2WFFnf7wBGWAJSVKTvCLDW8MSDafrVmigUv1Op15ZChd6W9C', 0, '2017-05-19 03:53:20', '2017-05-19 03:53:20'),
(7, 'ohyeah', '121212', 'I3LrEdxqKI0jKsYVspa6xpzRghztqOUwpft3uE9jlxZOFaH2jcoGT4o6HEbJ', 0, '2017-05-19 21:34:08', '2017-05-19 21:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE IF NOT EXISTS `pinjam` (
  `id` int(10) unsigned NOT NULL,
  `anggota_id` int(10) unsigned NOT NULL,
  `pengelola_id` int(10) unsigned NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kali_angsur` int(11) NOT NULL,
  `angsur` int(11) NOT NULL,
  `sisa` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `anggota_id`, `pengelola_id`, `jumlah`, `kali_angsur`, `angsur`, `sisa`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 6000000, 6, 1000000, 0, '2017-05-19 07:15:23', '2017-05-19 15:44:51'),
(2, 4, 3, 6000000, 6, 1000000, 4, '2017-05-19 07:17:42', '2017-05-19 21:04:10'),
(3, 3, 3, 2000000, 6, 134000, 5, '2017-05-19 07:19:49', '2017-05-19 15:41:51'),
(5, 3, 1, 6000000, 6, 6000000, 3, '2017-05-19 13:39:30', '2017-05-19 22:34:25'),
(9, 4, 1, 6000000, 6, 1000000, 5, '2017-05-19 13:55:33', '2017-05-19 16:02:38'),
(10, 4, 3, 5000000, 6, 833333, 5, '2017-05-19 16:53:19', '2017-05-19 16:53:56'),
(11, 5, 3, 2000000, 6, 333333, 5, '2017-05-19 22:24:23', '2017-05-19 22:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `simpan`
--

CREATE TABLE IF NOT EXISTS `simpan` (
  `id` int(10) unsigned NOT NULL,
  `anggota_id` int(10) unsigned NOT NULL,
  `pengelola_id` int(10) unsigned NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chrisman', 'chris.naga25@gmail.com', '$2y$10$ga0VuEISAtnfA/mvR5kawuwsE79dRMAZ2FLaKy26y.I4Sdo4wAcBW', 'svxjvREM75sOwzwppIuSbYcMSAemr0WLz8gom3JdvtkFx1hGrjfaDfxYJ0gh', '2017-05-17 03:27:58', '2017-05-17 03:27:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`), ADD KEY `pengguna_id` (`pengguna_id`), ADD KEY `kd_jab` (`kd_jab`);

--
-- Indexes for table `angsur`
--
ALTER TABLE `angsur`
  ADD PRIMARY KEY (`id`), ADD KEY `angsur_pinjam_id_foreign` (`pinjam_id`), ADD KEY `angsur_pengelola_id_foreign` (`pengelola_id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD KEY `laporan_angsur_id_foreign` (`angsur_id`), ADD KEY `divisi_id` (`divisi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`), ADD KEY `pengelola_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`), ADD KEY `pinjam_anggota_id_foreign` (`anggota_id`), ADD KEY `pinjam_pengelola_id_foreign` (`pengelola_id`);

--
-- Indexes for table `simpan`
--
ALTER TABLE `simpan`
  ADD PRIMARY KEY (`id`), ADD KEY `simpan_anggota_id_foreign` (`anggota_id`), ADD KEY `simpan_pengelola_id_foreign` (`pengelola_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `angsur`
--
ALTER TABLE `angsur`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `simpan`
--
ALTER TABLE `simpan`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `anggota_ibfk_2` FOREIGN KEY (`kd_jab`) REFERENCES `jabatan` (`id_jab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `angsur`
--
ALTER TABLE `angsur`
ADD CONSTRAINT `angsur_pengelola_id_foreign` FOREIGN KEY (`pengelola_id`) REFERENCES `pengelola` (`id`),
ADD CONSTRAINT `angsur_pinjam_id_foreign` FOREIGN KEY (`pinjam_id`) REFERENCES `pinjam` (`id`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
ADD CONSTRAINT `laporan_angsur_id_foreign` FOREIGN KEY (`angsur_id`) REFERENCES `angsur` (`id`),
ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`divisi_id`) REFERENCES `divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengelola`
--
ALTER TABLE `pengelola`
ADD CONSTRAINT `pengelola_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`);

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
ADD CONSTRAINT `pinjam_anggota_id_foreign` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`),
ADD CONSTRAINT `pinjam_pengelola_id_foreign` FOREIGN KEY (`pengelola_id`) REFERENCES `pengelola` (`id`);

--
-- Constraints for table `simpan`
--
ALTER TABLE `simpan`
ADD CONSTRAINT `simpan_anggota_id_foreign` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`),
ADD CONSTRAINT `simpan_pengelola_id_foreign` FOREIGN KEY (`pengelola_id`) REFERENCES `pengelola` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
