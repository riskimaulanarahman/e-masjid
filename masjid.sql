-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2021 at 04:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` bigint(20) UNSIGNED NOT NULL,
  `kode_bank` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icons` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `kode_bank`, `nama_bank`, `icons`, `created_at`, `updated_at`) VALUES
(2, '002', 'BANK BNI', 'PikPng.com_bni-logo-png_4896877.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alquran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mukenah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sajadah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_wudhu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keranda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kain_kafan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ambulans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masjid_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `alquran`, `mukenah`, `sajadah`, `tempat_wudhu`, `keranda`, `kain_kafan`, `ambulans`, `masjid_id`, `created_at`, `updated_at`) VALUES
(5, '554', '11', '21', '5', '231', '213', '212', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infaq`
--

CREATE TABLE `infaq` (
  `id_infaq` bigint(20) UNSIGNED NOT NULL,
  `atasnama_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infaq`
--

INSERT INTO `infaq` (`id_infaq`, `atasnama_rek`, `no_rek`, `created_at`, `updated_at`) VALUES
(1, 'Masjid Jami Nurul Iman', '121', '2021-08-05 23:56:56', '2021-08-05 23:56:56'),
(2, 'Masjid Jami Nurul Iman', '05748', '2021-08-05 23:58:25', '2021-08-05 23:58:25'),
(3, 'Masjid Jami Nurul Iman', '05748', '2021-08-06 00:56:00', '2021-08-06 00:56:00'),
(4, 'Masjid Jami Nurul Iman', '05748', '2021-08-06 00:56:01', '2021-08-06 00:56:01'),
(5, 'Masjid Jami Nurul Iman', '05748', '2021-08-06 00:58:23', '2021-08-06 00:58:23'),
(6, 'Masjid Jami Nurul Iman', '05748', '2021-08-06 01:12:29', '2021-08-06 01:12:29'),
(7, 'Masjid Jami Nurul Iman', '121', '2021-08-06 01:23:47', '2021-08-06 01:23:47'),
(8, 'Masjid Jami Nurul Iman', '05748', '2021-08-06 21:10:33', '2021-08-06 21:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategory` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategory`, `kategori`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'Masjid Agung', 'mosque (1).png', NULL, NULL),
(3, 'Musholla', '20210615 - Pinday Trader Logo - 1x1 Flat - Logo Only.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hari_mg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mg` time NOT NULL,
  `tgl_mg` date NOT NULL,
  `tema_mg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penceramah_mg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_bln` time NOT NULL,
  `hari_bln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bln` date NOT NULL,
  `tema_bln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penceramah_bln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masjid_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `hari_mg`, `jam_mg`, `tgl_mg`, `tema_mg`, `penceramah_mg`, `jam_bln`, `hari_bln`, `tgl_bln`, `tema_bln`, `penceramah_bln`, `masjid_id`, `created_at`, `updated_at`) VALUES
(8, 'senin', '06:59:00', '2022-10-09', 'tema mingguan', 'penceramah 1', '09:22:00', 'minggu', '2222-10-09', 'tema bulanan', 'penceramah 2', 7, NULL, '2021-08-13 05:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `masjid`
--

CREATE TABLE `masjid` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `petunjuk_arah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `peta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_infaq` bigint(20) UNSIGNED NOT NULL,
  `id_bank` bigint(20) UNSIGNED NOT NULL,
  `id_kategory` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masjid`
--

INSERT INTO `masjid` (`id`, `nama_masjid`, `alamat`, `kapasitas`, `luas`, `posisi`, `petunjuk_arah`, `peta`, `foto`, `id_infaq`, `id_bank`, `id_kategory`, `created_at`, `updated_at`) VALUES
(7, 'Masjid Nurul Hijrah', 'Jl. Imam Bonjol No.KM 6, RT.050/RW.26, Klandasan Ulu, Balikpapan Kota, Kota Balikpapan, Kalimantan Timur', '10000', '300', '-1.2681736080901347,116.87813758850099', 'https://www.google.co.id/maps/dir//Masjid+Nurul+Hijrah,+Permai+(Adi+Guna,+Blk.+A2+Jl.+Komp.+Batu+Ampar+No.09,+Batu+Ampar,+Kec.+Balikpapan+Utara,+Kota+Balikpapan,+Kalimantan+Timur+76136/@-1.2000276,116.8633735,18.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2df148eba7811faf:0x1c77a92cc9f5474c!2m2!1d116.8635209!2d-1.1994958', 'https://www.google.com/maps/place/Masjid+Jami+Nurul+Iman/@-1.2598501,116.8341494,13z/data=!4m9!1m2!2m1!1smasjid+nurul+iman+balikpapan!3m5!1s0x0:0xd17dd015c67fcaef!8m2!3d-1.2598493!4d116.8691707!15sChxtYXNqaWQgbnVydWwgaW1hbiBiYWxpa3BhcGFukgEGbW9zcXVl', 'WhatsApp Image 2021-08-01 at 09.47.58.jpeg', 8, 2, 2, '2021-08-06 21:10:33', '2021-08-06 21:10:33');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_27_9150_create_masjids_table', 1),
(5, '2021_07_06_065239_create_kegiatan_table', 1),
(6, '2021_07_06_074535_create_pengurus_table', 1),
(7, '2021_07_06_074600_create_infaq_table', 1),
(8, '2021_08_06_061343_create_fasilitas_table', 2),
(9, '2021_08_06_061823_create_masjid_table', 3),
(10, '2021_08_06_061937_create_fasilitas_table', 4),
(11, '2021_08_06_064448_create_kategori_table', 5),
(12, '2021_08_06_064813_create_bank_table', 6),
(13, '2021_08_06_065059_create_infaq_table', 7),
(14, '2021_08_06_065559_create_masjid_table', 8),
(15, '2021_08_06_065829_create_fasilitas_table', 9),
(16, '2021_08_06_070013_create_pengurus_table', 10),
(17, '2021_08_06_070212_create_kegiatan_table', 11),
(18, '2014_10_12_00000_create_users_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thn_kepengurusan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dewan_pembina` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekertaris` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendahara` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seksi_ibadah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seksi_sarana` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seksi_pembinawanita` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seksi_pemuda` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seksi_fadhukifayah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seksi_zakat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seksi_qurban` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masjid_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `thn_kepengurusan`, `dewan_pembina`, `ketua`, `sekertaris`, `bendahara`, `seksi_ibadah`, `seksi_sarana`, `seksi_pembinawanita`, `seksi_pemuda`, `seksi_fadhukifayah`, `seksi_zakat`, `seksi_qurban`, `masjid_id`, `created_at`, `updated_at`) VALUES
(2, '2016 - 2021', 'H. M. Masdi', 'Drs. ABDUL HAKIM', 'H. ABDUL KADIR', 'SUGIATNO', 'H. M. ZAIN. R', 'H. SUDJADI. S', 'Hj. HARMIAH', 'HASBULLAH', 'M. ASPAR', 'BACO TAGI', 'H. ANDI BUDIMAN', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'andi', 'andinarru9@gmail.com', NULL, '$2y$10$dUvlhL1QU1.H2B5HN.ekDupNrJZBJcBdj9t9ZAbn4wQW.3tq2Sc/C', NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$jFH4gYuPlwBy947MsIFVpepr/XBkaIdkEqfS5W6F9OJ7nWXXmpVBa', NULL, '2021-08-13 05:33:50', '2021-08-13 05:33:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_id_masjid_foreign` (`masjid_id`);

--
-- Indexes for table `infaq`
--
ALTER TABLE `infaq`
  ADD PRIMARY KEY (`id_infaq`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategory`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kegiatan_id_masjid_foreign` (`masjid_id`);

--
-- Indexes for table `masjid`
--
ALTER TABLE `masjid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masjid_id_infaq_foreign` (`id_infaq`),
  ADD KEY `masjid_id_bank_foreign` (`id_bank`),
  ADD KEY `masjid_id_kategory_foreign` (`id_kategory`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengurus_id_masjid_foreign` (`masjid_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `infaq`
--
ALTER TABLE `infaq`
  MODIFY `id_infaq` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategory` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `masjid`
--
ALTER TABLE `masjid`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_id_masjid_foreign` FOREIGN KEY (`masjid_id`) REFERENCES `masjid` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_id_masjid_foreign` FOREIGN KEY (`masjid_id`) REFERENCES `masjid` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `masjid`
--
ALTER TABLE `masjid`
  ADD CONSTRAINT `masjid_id_bank_foreign` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`),
  ADD CONSTRAINT `masjid_id_infaq_foreign` FOREIGN KEY (`id_infaq`) REFERENCES `infaq` (`id_infaq`),
  ADD CONSTRAINT `masjid_id_kategory_foreign` FOREIGN KEY (`id_kategory`) REFERENCES `kategori` (`id_kategory`);

--
-- Constraints for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `pengurus_id_masjid_foreign` FOREIGN KEY (`masjid_id`) REFERENCES `masjid` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
