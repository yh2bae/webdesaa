-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 12:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2021-09-14 22:48:17', '2021-09-14 22:48:17'),
(2, 'Kristen', '2021-09-14 22:48:17', '2021-09-14 22:48:17'),
(3, 'Katholik', '2021-09-14 22:48:17', '2021-09-14 22:48:17'),
(4, 'Hindu', '2021-09-14 22:48:17', '2021-09-14 22:48:17'),
(5, 'Budha', '2021-09-14 22:48:17', '2021-09-14 22:48:17'),
(6, 'Khonghucu', '2021-09-14 22:48:17', '2021-09-14 22:48:17'),
(7, 'Lainnya', '2021-09-14 22:48:17', '2021-09-14 22:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `darah`
--

CREATE TABLE `darah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `golongan` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `darah`
--

INSERT INTO `darah` (`id`, `golongan`, `created_at`, `updated_at`) VALUES
(1, 'A', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(2, 'A+', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(3, 'A-', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(4, 'B', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(5, 'B+', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(6, 'B-', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(7, 'O', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(8, 'O+', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(9, 'O-', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(10, 'AB', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(11, 'AB+', '2021-09-14 22:52:52', '2021-09-14 22:52:52'),
(12, 'AB-', '2021-09-14 22:52:52', '2021-09-14 22:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kecamatan` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kabupaten` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kepala_desa` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kepala_desa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `alamat`, `nama_kepala_desa`, `alamat_kepala_desa`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Klebet', 'Kemiri', 'Tangerang', 'Jl. Raya Klebet, Kec. Kemiri, Tangerang - Banten', 'a', 'a', '1631695017-Lambang_Daerah_Kabupaten_Tangerang.png', NULL, '2021-09-15 01:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `detail_dusun`
--

CREATE TABLE `detail_dusun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dusun_id` bigint(20) UNSIGNED NOT NULL,
  `rw` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_dusun`
--

INSERT INTO `detail_dusun` (`id`, `dusun_id`, `rw`, `rt`, `created_at`, `updated_at`) VALUES
(26, 2, '1', '1', '2021-09-15 23:20:35', '2021-09-15 23:20:35'),
(28, 6, '12', '22', '2021-09-17 00:09:25', '2021-09-17 00:09:25'),
(29, 6, '11', '21', '2021-09-17 00:09:30', '2021-09-17 00:09:30'),
(30, 2, '11', '22', '2021-09-17 00:40:03', '2021-09-17 00:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Kayen raya', '2021-09-15 21:28:23', '2021-09-15 23:18:27'),
(6, 'Damai', '2021-09-17 00:09:18', '2021-09-17 00:09:18');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_13_171909_create_roles_table', 1),
(6, '2021_09_13_172219_create_user_moduls_table', 1),
(7, '2021_09_13_173126_create_moduls_table', 1),
(8, '2021_09_15_033021_create_dusuns_table', 2),
(10, '2021_09_15_035147_create_agamas_table', 4),
(11, '2021_09_15_035530_create_status_hubungan_dalam_keluargas_table', 4),
(12, '2021_09_15_035631_create_status_perkawinans_table', 4),
(13, '2021_09_15_040012_create_darahs_table', 4),
(14, '2021_09_15_040055_create_pekerjaans_table', 4),
(15, '2021_09_15_040137_create_pendidikans_table', 4),
(17, '2021_09_15_040223_create_penduduks_table', 5),
(18, '2021_09_15_065213_create_desas_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `moduls`
--

CREATE TABLE `moduls` (
  `id_modul` bigint(20) UNSIGNED NOT NULL,
  `name_modul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moduls`
--

INSERT INTO `moduls` (`id_modul`, `name_modul`, `link`, `status`) VALUES
(1, 'User', 'user', 'Y'),
(2, 'Role Akses', 'roles', 'Y'),
(3, 'Profile Desa', 'desa', 'Y'),
(4, 'Kelolah Dusun', 'dusun', 'Y'),
(5, 'Penduduk', 'penduduk', 'Y');

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
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'BELUM/TIDAK BEKERJA', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(2, 'PELAJAR/MAHASISWA', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(3, 'PEGAWAI NEGERI SIPIL (PNS)', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(4, 'TENTARA NASIONAL INDONESIA (TNI)', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(5, 'KEPOLISIAN RI (POLRI)', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(6, 'PEGAWAIN BUMN/D', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(7, 'PEGAWAI SWASTA', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(8, 'WIRASWASTA', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(9, 'PENSIUNAN', '2021-09-14 23:05:41', '2021-09-14 23:05:41'),
(10, 'LAINNYA', '2021-09-17 05:50:43', '2021-09-17 05:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'TIDAK / BELUM SEKOLAH', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(2, 'BELUM TAMAT SD/SEDERAJAT', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(3, 'TAMAT SD / SEDERAJAT', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(4, 'SLTP/SEDERAJAT', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(5, 'SLTA / SEDERAJAT', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(6, 'DIPLOMA I / II', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(7, 'AKADEMI/ DIPLOMA III/S. MUDA', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(8, 'DIPLOMA IV/ STRATA I', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(9, 'STRATA II', '2021-09-14 23:14:07', '2021-09-14 23:14:07'),
(10, 'STRATA III', '2021-09-14 23:14:07', '2021-09-14 23:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL COMMENT '1: Laki-laki, 2: Perempuan',
  `tempat_lahir` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama_id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pekerjaan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `darah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_perkawinan_id` bigint(20) UNSIGNED NOT NULL,
  `status_hubungan_dalam_keluarga_id` bigint(20) UNSIGNED NOT NULL,
  `kewarganegaraan` tinyint(4) NOT NULL,
  `nomor_paspor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_kitas_atau_kitap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ayah` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ibu` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_dusun_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `pendidikan_id`, `pekerjaan_id`, `darah_id`, `status_perkawinan_id`, `status_hubungan_dalam_keluarga_id`, `kewarganegaraan`, `nomor_paspor`, `nomor_kitas_atau_kitap`, `nik_ayah`, `nik_ibu`, `nama_ayah`, `nama_ibu`, `alamat`, `detail_dusun_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1234567890123456', '1234567890123451', 'Yudha', 1, 'Wonogiri', '2021-09-02', 1, 8, 7, 1, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, '2021-09-17 01:30:23', '2021-09-17 03:23:39', NULL),
(2, '1234567891011121', '1234567890123456', 'Wulan', 2, 'Palembang', '2021-09-16', 1, 8, 7, 2, 1, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2021-09-17 02:07:53', '2021-09-17 03:15:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `name_role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Y', NULL, NULL),
(2, 'Admin', 'Y', '2021-09-13 23:22:52', '2021-09-14 00:52:47'),
(3, 'RT', 'Y', '2021-09-14 00:06:39', '2021-09-14 00:06:39'),
(5, 'Kelurahan', 'N', '2021-09-14 00:36:11', '2021-09-14 00:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `status_hubungan_dalam_keluarga`
--

CREATE TABLE `status_hubungan_dalam_keluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_hubungan_dalam_keluarga`
--

INSERT INTO `status_hubungan_dalam_keluarga` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'SUAMI', '2021-09-14 23:18:03', '2021-09-14 23:18:03'),
(3, 'ISTRI', '2021-09-14 23:18:03', '2021-09-14 23:18:03'),
(4, 'ANAK', '2021-09-14 23:18:03', '2021-09-14 23:18:03'),
(5, 'MENANTU', '2021-09-14 23:18:03', '2021-09-14 23:18:03'),
(6, 'CUCU', '2021-09-14 23:18:03', '2021-09-14 23:18:03'),
(7, 'ORANGTUA', '2021-09-14 23:18:03', '2021-09-14 23:18:03'),
(8, 'MERTUA', '2021-09-14 23:18:03', '2021-09-14 23:18:03'),
(9, 'KELUARGA', '2021-09-14 23:18:03', '2021-09-14 23:18:03'),
(10, 'LAINNYA', '2021-09-14 23:18:03', '2021-09-14 23:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `status_perkawinan`
--

CREATE TABLE `status_perkawinan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_perkawinan`
--

INSERT INTO `status_perkawinan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Belum Kawin', '2021-09-14 23:20:49', '2021-09-14 23:20:49'),
(2, 'Kawin', '2021-09-14 23:20:49', '2021-09-14 23:20:49'),
(3, 'Cerai', '2021-09-14 23:20:49', '2021-09-14 23:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `level`, `avatar`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@app.com', '2021-09-13 20:19:28', '$2y$10$e8YCz1Rq31r0KgZONiPxxO06weppeRDeDrlGdtKjCMLtx7u7p030u', 1, 'default.jpg', 'Y', NULL, '2021-09-13 20:19:28', '2021-09-13 20:19:28'),
(3, 'yudha', 'yh2bae', 'yh2bae@app.com', NULL, '$2y$10$T7TXHpxasdRFcny20bMzo.K518eZidrdJUf2JiJIYsC67ZGjStYHi', 2, '1631676115-jihyon.jpg', 'Y', NULL, '2021-09-14 20:21:55', '2021-09-14 20:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_moduls`
--

CREATE TABLE `user_moduls` (
  `id_umod` bigint(20) UNSIGNED NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `input` int(11) NOT NULL,
  `update` int(11) NOT NULL,
  `delete` int(11) NOT NULL,
  `posting` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_moduls`
--

INSERT INTO `user_moduls` (`id_umod`, `id_role`, `id_modul`, `view`, `input`, `update`, `delete`, `posting`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL),
(2, 1, 2, 1, 1, 1, 1, 1, NULL, NULL),
(3, 2, 1, 0, 0, 0, 0, 0, NULL, NULL),
(4, 2, 2, 0, 0, 0, 0, 0, NULL, NULL),
(5, 1, 3, 0, 0, 1, 0, 0, NULL, NULL),
(6, 1, 4, 1, 1, 1, 1, 0, NULL, NULL),
(7, 1, 5, 1, 1, 1, 1, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_dusun`
--
ALTER TABLE `detail_dusun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_dusun_dusun_id_foreign` (`dusun_id`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moduls`
--
ALTER TABLE `moduls`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penduduk_nik_unique` (`nik`),
  ADD KEY `penduduk_agama_id_foreign` (`agama_id`),
  ADD KEY `penduduk_pendidikan_id_foreign` (`pendidikan_id`),
  ADD KEY `penduduk_pekerjaan_id_foreign` (`pekerjaan_id`),
  ADD KEY `penduduk_darah_id_foreign` (`darah_id`),
  ADD KEY `penduduk_status_perkawinan_id_foreign` (`status_perkawinan_id`),
  ADD KEY `penduduk_status_hubungan_dalam_keluarga_id_foreign` (`status_hubungan_dalam_keluarga_id`),
  ADD KEY `penduduk_detail_dusun_id_foreign` (`detail_dusun_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `status_hubungan_dalam_keluarga`
--
ALTER TABLE `status_hubungan_dalam_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_moduls`
--
ALTER TABLE `user_moduls`
  ADD PRIMARY KEY (`id_umod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `darah`
--
ALTER TABLE `darah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_dusun`
--
ALTER TABLE `detail_dusun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `moduls`
--
ALTER TABLE `moduls`
  MODIFY `id_modul` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_hubungan_dalam_keluarga`
--
ALTER TABLE `status_hubungan_dalam_keluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_moduls`
--
ALTER TABLE `user_moduls`
  MODIFY `id_umod` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_dusun`
--
ALTER TABLE `detail_dusun`
  ADD CONSTRAINT `detail_dusun_dusun_id_foreign` FOREIGN KEY (`dusun_id`) REFERENCES `dusun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_agama_id_foreign` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_darah_id_foreign` FOREIGN KEY (`darah_id`) REFERENCES `darah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_detail_dusun_id_foreign` FOREIGN KEY (`detail_dusun_id`) REFERENCES `detail_dusun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_pendidikan_id_foreign` FOREIGN KEY (`pendidikan_id`) REFERENCES `pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_status_hubungan_dalam_keluarga_id_foreign` FOREIGN KEY (`status_hubungan_dalam_keluarga_id`) REFERENCES `status_hubungan_dalam_keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_status_perkawinan_id_foreign` FOREIGN KEY (`status_perkawinan_id`) REFERENCES `status_perkawinan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
