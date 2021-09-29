-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2021 pada 08.06
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

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
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agama`
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
-- Struktur dari tabel `anggaran_realisasi`
--

CREATE TABLE `anggaran_realisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `detail_jenis_anggaran_id` bigint(20) UNSIGNED NOT NULL,
  `keterangan_lainnya` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_anggaran` bigint(20) NOT NULL,
  `nilai_realisasi` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggaran_realisasi`
--

INSERT INTO `anggaran_realisasi` (`id`, `tahun`, `detail_jenis_anggaran_id`, `keterangan_lainnya`, `nilai_anggaran`, `nilai_realisasi`, `created_at`, `updated_at`) VALUES
(1, 2021, 412, NULL, 1000000, 1000000, '2021-09-28 05:47:43', '2021-09-28 05:47:43'),
(2, 2021, 423, NULL, 1000000, 500000, '2021-09-28 06:06:22', '2021-09-28 06:07:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `tanggal_publish` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `publish` enum('Ya','Tidak') NOT NULL,
  `writer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_news`
--

CREATE TABLE `category_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `configurations`
--

INSERT INTO `configurations` (`id`, `keywords`, `description`, `email`, `phone`, `facebook`, `instagram`, `twitter`, `youtube`, `whatsapp`, `google_maps`, `created_at`, `updated_at`) VALUES
(1, 'asda', 'asda', 'desa@desa.com', '08972993884', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '08972993884', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31738.083487132375!2d106.43785541809517!3d-6.095580717504263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41fec4d81b6577%3A0x580a78e11bc26049!2sKelebet%2C%20Kemiri%2C%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1632196126690!5m2!1sid!2sid\"\r\nframeborder=\"0\" style=\"border: 0; width: 100%; height: 290px\" allowfullscreen></iframe>', NULL, '2021-09-20 20:49:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `darah`
--

CREATE TABLE `darah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `golongan` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `darah`
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
-- Struktur dari tabel `desa`
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
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `alamat`, `nama_kepala_desa`, `alamat_kepala_desa`, `logo`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'Klebet', 'Kemiri', 'Tangerang', 'Jl. Raya Klebet, Kec. Kemiri, Tangerang - Banten', 'a', 'a', '1631695017-Lambang_Daerah_Kabupaten_Tangerang.png', '<p>coba dulu</p>', NULL, '2021-09-20 21:22:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_dusun`
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
-- Dumping data untuk tabel `detail_dusun`
--

INSERT INTO `detail_dusun` (`id`, `dusun_id`, `rw`, `rt`, `created_at`, `updated_at`) VALUES
(26, 2, '1', '1', '2021-09-15 23:20:35', '2021-09-15 23:20:35'),
(28, 6, '12', '22', '2021-09-17 00:09:25', '2021-09-17 00:09:25'),
(29, 6, '11', '21', '2021-09-17 00:09:30', '2021-09-17 00:09:30'),
(30, 2, '11', '22', '2021-09-17 00:40:03', '2021-09-17 00:40:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jenis_anggaran`
--

CREATE TABLE `detail_jenis_anggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_anggaran_id` bigint(20) UNSIGNED NOT NULL,
  `kelompok_jenis_anggaran_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_jenis_anggaran`
--

INSERT INTO `detail_jenis_anggaran` (`id`, `jenis_anggaran_id`, `kelompok_jenis_anggaran_id`, `nama`, `created_at`, `updated_at`) VALUES
(411, 4, 41, 'Hasil Usaha Desa', '2021-09-23 09:05:46', '2021-09-23 09:05:46'),
(412, 4, 41, 'Hasil Aset Desa', '2021-09-23 09:05:46', '2021-09-23 09:05:46'),
(413, 4, 41, 'Swadaya, Partisipasi dan Gotong Royong', '2021-09-23 09:06:21', '2021-09-23 09:06:21'),
(414, 4, 41, 'Lain-Lain Pendapatan Asli Desa', '2021-09-23 09:06:21', '2021-09-23 09:06:21'),
(421, 4, 42, 'Dana Desa', '2021-09-23 09:06:21', '2021-09-23 09:06:21'),
(422, 4, 42, 'Bagi Hasil Pajak dan Retribusi', '2021-09-23 09:06:46', '2021-09-23 09:06:46'),
(423, 4, 42, 'Alokasi Dana Desa', '2021-09-23 09:06:46', '2021-09-23 09:06:46'),
(424, 4, 42, 'Bantuan Keuangan Provinsi', '2021-09-23 09:06:46', '2021-09-23 09:06:46'),
(425, 4, 42, 'Bantuan Keuangan Kabupaten/Kota', '2021-09-23 09:06:59', '2021-09-23 09:06:59'),
(431, 4, 42, 'Penerimaan dari Hasil Kerjasama Antar Desa', '2021-09-23 09:06:59', '2021-09-23 09:06:59'),
(432, 4, 43, 'Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '2021-09-23 09:06:59', '2021-09-23 09:06:59'),
(433, 4, 43, 'Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '2021-09-23 09:06:59', '2021-09-23 09:06:59'),
(434, 4, 43, 'Hibah dan Sumbangan dari Pihak Ketiga', '2021-09-23 09:07:31', '2021-09-23 09:07:31'),
(435, 4, 43, 'Koreksi Kesalahan Belanja Tahun-tahun Sebelumnya', '2021-09-23 09:07:31', '2021-09-23 09:07:31'),
(436, 4, 43, 'Bunga Bank', '2021-09-23 09:07:31', '2021-09-23 09:07:31'),
(439, 4, 43, 'Lain-lain Pendapatan Desa Yang Sah', '2021-09-23 09:07:31', '2021-09-23 09:07:31'),
(511, 5, 51, NULL, '2021-09-23 09:09:07', '2021-09-23 09:09:07'),
(521, 5, 52, NULL, '2021-09-23 09:09:32', '2021-09-23 09:09:32'),
(531, 5, 53, NULL, '2021-09-23 09:09:32', '2021-09-23 09:09:32'),
(541, 5, 54, NULL, '2021-09-23 09:09:32', '2021-09-23 09:09:32'),
(551, 5, 55, NULL, '2021-09-23 09:09:32', '2021-09-23 09:09:32'),
(611, 6, 61, 'SILPA Tahun Sebelumnya', '2021-09-23 09:09:43', '2021-09-23 09:09:43'),
(612, 6, 61, 'Pencairan Dana Cadangan', '2021-09-23 09:09:43', '2021-09-23 09:09:43'),
(613, 6, 61, 'Hasil Penjualan Kekayaan Desa Yang Dipisahkan', '2021-09-23 09:09:43', '2021-09-23 09:09:43'),
(619, 6, 61, 'Penerimaan Pembiayaan Lainnya', '2021-09-23 09:09:43', '2021-09-23 09:09:43'),
(621, 6, 62, 'Pembentukan Dana Cadangan', '2021-09-23 09:09:43', '2021-09-23 09:09:43'),
(622, 6, 62, 'Penyertaan Modal Desa', '2021-09-23 09:09:43', '2021-09-23 09:09:43'),
(629, 6, 62, 'Pengeluaran Pembiayaan Lainnya', '2021-09-23 09:09:43', '2021-09-23 09:09:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusun`
--

CREATE TABLE `dusun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dusun`
--

INSERT INTO `dusun` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Kayen raya', '2021-09-15 21:28:23', '2021-09-15 23:18:27'),
(6, 'Damai', '2021-09-17 00:09:18', '2021-09-17 00:09:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jenis_anggaran`
--

CREATE TABLE `jenis_anggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_anggaran`
--

INSERT INTO `jenis_anggaran` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(4, 'PENDAPATAN', '2021-09-23 08:37:00', '2021-09-23 08:37:00'),
(5, 'BELANJA', '2021-09-23 08:37:00', '2021-09-23 08:37:00'),
(6, 'PEMBIAYAAN', '2021-09-23 08:37:00', '2021-09-23 08:37:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id` int(11) NOT NULL,
  `kategori_berita` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`id`, `kategori_berita`, `created_at`, `updated_at`) VALUES
(2, 'lama', '2021-09-19 21:10:56', '2021-09-20 02:40:38'),
(3, 'test', '2021-09-28 07:23:42', '2021-09-28 07:23:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_jenis_anggaran`
--

CREATE TABLE `kelompok_jenis_anggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelompok_jenis_anggaran`
--

INSERT INTO `kelompok_jenis_anggaran` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(41, 'Pendapatan Asli Desa', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(42, 'Pendapatan transfer', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(43, 'Pendapatan Lain-lain', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(51, 'BIDANG PENYELENGGARAN PEMERINTAHAN DESA', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(52, 'BIDANG PELAKSANAAN PEMBANGUNAN DESA', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(53, 'BIDANG PEMBINAAN KEMASYARAKATAN', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(54, 'BIDANG PEMBERDAYAAN MASYARAKAT', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(55, 'BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(61, 'Penerimaan Biaya', '2021-09-23 08:42:50', '2021-09-23 08:42:50'),
(62, 'Pengeluaran Biaya', '2021-09-23 08:42:50', '2021-09-23 08:42:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_desas`
--

CREATE TABLE `kepala_desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
(18, '2021_09_15_065213_create_desas_table', 6),
(19, '2021_09_15_033334_create_detail_dusuns_table', 7),
(20, '2021_09_21_020024_create_configurations_table', 8),
(21, '2021_09_22_022512_create_sliders_table', 9),
(22, '2021_09_23_080934_create_jenis_anggarans_table', 10),
(23, '2021_09_23_082406_create_kelompok_jenis_anggarans_table', 10),
(24, '2021_09_23_082514_create_detail_jenis_anggarans_table', 10),
(26, '2021_09_23_082602_create_anggaran_realisasis_table', 11),
(27, '2021_09_28_131623_create_category_news_table', 12),
(28, '2021_09_28_131806_create_news_table', 12),
(29, '2021_09_21_022726_create_strukturs_table', 13),
(30, '2021_09_29_122410_create_kepala_desas_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `moduls`
--

CREATE TABLE `moduls` (
  `id_modul` bigint(20) UNSIGNED NOT NULL,
  `name_modul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `moduls`
--

INSERT INTO `moduls` (`id_modul`, `name_modul`, `link`, `status`) VALUES
(1, 'User', 'user', 'Y'),
(2, 'Role Akses', 'roles', 'Y'),
(3, 'Profile Desa', 'desa', 'Y'),
(4, 'Kelolah Dusun', 'dusun', 'Y'),
(5, 'Penduduk', 'penduduk', 'Y'),
(6, 'Configuration', 'config', 'Y'),
(7, 'Slider', 'slider', 'Y'),
(8, 'Anggaran', 'anggaran', 'Y'),
(9, 'Berita', 'berita', 'Y'),
(10, 'Kategori Berita', 'kategori_berita', 'Y'),
(11, 'Kelolah Struktur Desa', 'struktur', 'Y'),
(12, 'Kelolah Kepala Desa', 'kepala-desa', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_news_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjaan`
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
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikan`
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
-- Struktur dari tabel `penduduk`
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
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `pendidikan_id`, `pekerjaan_id`, `darah_id`, `status_perkawinan_id`, `status_hubungan_dalam_keluarga_id`, `kewarganegaraan`, `nomor_paspor`, `nomor_kitas_atau_kitap`, `nik_ayah`, `nik_ibu`, `nama_ayah`, `nama_ibu`, `alamat`, `detail_dusun_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1234567890123456', '1234567890123451', 'Yudha', 1, 'Wonogiri', '1996-01-02', 1, 8, 7, 1, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, '2021-09-17 01:30:23', '2021-09-22 00:25:49', NULL),
(2, '1234567891011121', '1234567890123456', 'Wulan', 2, 'Palembang', '1997-09-04', 1, 8, 7, 2, 1, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2021-09-17 02:07:53', '2021-09-22 00:25:35', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `name_role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Y', NULL, NULL),
(2, 'Admin', 'Y', '2021-09-13 23:22:52', '2021-09-14 00:52:47'),
(3, 'RT', 'Y', '2021-09-14 00:06:39', '2021-09-14 00:06:39'),
(5, 'Kelurahan', 'N', '2021-09-14 00:36:11', '2021-09-14 00:36:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Desa Terpadu', 'Desan Klebet', '1632289393-amruth-pillai-5jQICMwCcW8-unsplash.jpg', '2021-09-21 20:12:53', '2021-09-21 22:43:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_hubungan_dalam_keluarga`
--

CREATE TABLE `status_hubungan_dalam_keluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_hubungan_dalam_keluarga`
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
-- Struktur dari tabel `status_perkawinan`
--

CREATE TABLE `status_perkawinan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_perkawinan`
--

INSERT INTO `status_perkawinan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Belum Kawin', '2021-09-14 23:20:49', '2021-09-14 23:20:49'),
(2, 'Kawin', '2021-09-14 23:20:49', '2021-09-14 23:20:49'),
(3, 'Cerai', '2021-09-14 23:20:49', '2021-09-14 23:20:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `strukturs`
--

CREATE TABLE `strukturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `nomor_sk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_sk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masa_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `strukturs`
--

INSERT INTO `strukturs` (`id`, `name`, `position`, `niap`, `tanggal_lahir`, `tempat_lahir`, `address`, `agama_id`, `pendidikan_id`, `nomor_sk`, `tanggal_sk`, `masa_jabatan`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, 'fff', 'ffff', NULL, '2021-09-23', 'dd', 'jjjjd', 3, 8, '322', '2021-09-17', '3', '2', '1632210314-photo_2021-09-16 23.22.23.jpeg', '2021-09-21 00:45:14', '2021-09-21 00:45:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `level`, `avatar`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@app.com', '2021-09-13 20:19:28', '$2y$10$e8YCz1Rq31r0KgZONiPxxO06weppeRDeDrlGdtKjCMLtx7u7p030u', 1, 'default.jpg', 'Y', NULL, '2021-09-13 20:19:28', '2021-09-13 20:19:28'),
(3, 'yudha', 'yh2bae', 'yh2bae@app.com', NULL, '$2y$10$T7TXHpxasdRFcny20bMzo.K518eZidrdJUf2JiJIYsC67ZGjStYHi', 2, '1631676115-jihyon.jpg', 'Y', NULL, '2021-09-14 20:21:55', '2021-09-14 20:21:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_moduls`
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
-- Dumping data untuk tabel `user_moduls`
--

INSERT INTO `user_moduls` (`id_umod`, `id_role`, `id_modul`, `view`, `input`, `update`, `delete`, `posting`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL),
(2, 1, 2, 1, 1, 1, 1, 1, NULL, NULL),
(3, 2, 1, 0, 0, 0, 0, 0, NULL, NULL),
(4, 2, 2, 0, 0, 0, 0, 0, NULL, NULL),
(5, 1, 3, 0, 0, 1, 0, 0, NULL, NULL),
(6, 1, 4, 1, 1, 1, 1, 0, NULL, NULL),
(7, 1, 5, 1, 1, 1, 1, 0, NULL, NULL),
(8, 1, 6, 0, 0, 1, 0, 0, NULL, NULL),
(9, 1, 7, 1, 1, 1, 1, 0, NULL, NULL),
(10, 1, 8, 1, 1, 1, 1, 0, NULL, NULL),
(11, 1, 9, 1, 1, 1, 1, 0, NULL, NULL),
(12, 1, 10, 1, 1, 1, 1, 0, NULL, NULL),
(13, 1, 11, 1, 1, 1, 1, 0, NULL, NULL),
(14, 1, 12, 1, 1, 1, 1, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggaran_realisasi`
--
ALTER TABLE `anggaran_realisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggaran_realisasi_detail_jenis_anggaran_id_foreign` (`detail_jenis_anggaran_id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_dusun`
--
ALTER TABLE `detail_dusun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_dusun_dusun_id_foreign` (`dusun_id`);

--
-- Indeks untuk tabel `detail_jenis_anggaran`
--
ALTER TABLE `detail_jenis_anggaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_jenis_anggaran_jenis_anggaran_id_foreign` (`jenis_anggaran_id`),
  ADD KEY `detail_jenis_anggaran_kelompok_jenis_anggaran_id_foreign` (`kelompok_jenis_anggaran_id`);

--
-- Indeks untuk tabel `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jenis_anggaran`
--
ALTER TABLE `jenis_anggaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_anggaran_nama_unique` (`nama`);

--
-- Indeks untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelompok_jenis_anggaran`
--
ALTER TABLE `kelompok_jenis_anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kepala_desas`
--
ALTER TABLE `kepala_desas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `moduls`
--
ALTER TABLE `moduls`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category_news_id_foreign` (`category_news_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_hubungan_dalam_keluarga`
--
ALTER TABLE `status_hubungan_dalam_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `strukturs`
--
ALTER TABLE `strukturs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agama_id` (`agama_id`,`pendidikan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_moduls`
--
ALTER TABLE `user_moduls`
  ADD PRIMARY KEY (`id_umod`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `anggaran_realisasi`
--
ALTER TABLE `anggaran_realisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `darah`
--
ALTER TABLE `darah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_dusun`
--
ALTER TABLE `detail_dusun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `detail_jenis_anggaran`
--
ALTER TABLE `detail_jenis_anggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=630;

--
-- AUTO_INCREMENT untuk tabel `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_anggaran`
--
ALTER TABLE `jenis_anggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelompok_jenis_anggaran`
--
ALTER TABLE `kelompok_jenis_anggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `kepala_desas`
--
ALTER TABLE `kepala_desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `moduls`
--
ALTER TABLE `moduls`
  MODIFY `id_modul` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `status_hubungan_dalam_keluarga`
--
ALTER TABLE `status_hubungan_dalam_keluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `strukturs`
--
ALTER TABLE `strukturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_moduls`
--
ALTER TABLE `user_moduls`
  MODIFY `id_umod` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggaran_realisasi`
--
ALTER TABLE `anggaran_realisasi`
  ADD CONSTRAINT `anggaran_realisasi_detail_jenis_anggaran_id_foreign` FOREIGN KEY (`detail_jenis_anggaran_id`) REFERENCES `detail_jenis_anggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_dusun`
--
ALTER TABLE `detail_dusun`
  ADD CONSTRAINT `detail_dusun_dusun_id_foreign` FOREIGN KEY (`dusun_id`) REFERENCES `dusun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_jenis_anggaran`
--
ALTER TABLE `detail_jenis_anggaran`
  ADD CONSTRAINT `detail_jenis_anggaran_jenis_anggaran_id_foreign` FOREIGN KEY (`jenis_anggaran_id`) REFERENCES `jenis_anggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jenis_anggaran_kelompok_jenis_anggaran_id_foreign` FOREIGN KEY (`kelompok_jenis_anggaran_id`) REFERENCES `kelompok_jenis_anggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_news_id_foreign` FOREIGN KEY (`category_news_id`) REFERENCES `category_news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penduduk`
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
