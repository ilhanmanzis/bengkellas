-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2025 at 08:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `las`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'banner/01JZ31BZS6DZ3HNB10SPBY02Z9.jpeg', '2025-07-01 06:03:39', '2025-07-01 06:03:39'),
(3, 'banner/01JZ31D912DMVKJKS05NXGR50M.jpeg', '2025-07-01 06:04:22', '2025-07-01 06:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'galeri/01JZ2XD5X3JK9S49N5G713HJTD.jpeg', '2025-07-01 04:54:24', '2025-07-01 04:54:24'),
(2, 'galeri/01JZ558WG0SGJKT34GJ7FD07DH.jpeg', '2025-07-02 01:50:21', '2025-07-02 01:50:21'),
(3, 'galeri/01JZ559HE69Q5Y0VWRW4G9GEBX.jpeg', '2025-07-02 01:50:42', '2025-07-02 01:50:42'),
(4, 'galeri/01JZ55AHDC8FBK3T6Q4G2XSC9A.jpg', '2025-07-02 01:51:15', '2025-07-02 01:51:15'),
(5, 'galeri/01JZ55C21SMNJTV4E25QD4W4XD.png', '2025-07-02 01:52:05', '2025-07-02 01:52:05'),
(6, 'galeri/01JZ55CXV539Z52Q01Y2S9ARP8.jpg', '2025-07-02 01:52:33', '2025-07-02 01:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `name`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Kanopi', 'Kami siap mengerjakan dan memasang kanopi sesuai dengan kebutuhan dan desain yang Anda inginkan. Kami membuat dan memasang kanopi stainless steel yang tahan lama dan mampu melindungi Anda dari cuaca.', 'layanan/01JZ4VMBPSMPWVD66R7XXQCZ39.jpeg', '2025-07-01 05:31:48', '2025-07-01 23:01:51'),
(3, 'Baja Berat', 'Menyediakan layanan pembuatan dan pemasangan rangka atap baja ringan berkualitas cocok untuk segala bangunan rumah atau toko.\n\nDengan material yang kuat namun ringan, rangka atap ini menjadi pilihan ideal untuk rumah, toko, atau bangunan lainnya yang membutuhkan solusi atap yang efisien dan tahan lama.', 'layanan/01JZ4XC9WYKXEEX0050HD79WDD.jpeg', '2025-07-01 23:32:24', '2025-07-02 00:37:27'),
(4, 'Pembuatan Kubah Masjid', 'Menyediakan layanan pembuatan dan pemasangan kubah masjid berkualitas tinggi, dirancang khusus untuk menambah keindahan serta identitas arsitektur masjid Anda.\n\nDengan material pilihan seperti galvalum, enamel, GRC, hingga stainless, kubah yang kami produksi tidak hanya kuat dan tahan lama, tetapi juga memiliki tampilan estetik yang elegan dan berkelas. Cocok untuk segala ukuran masjid, baik skala kecil maupun besar.\n\nDidukung oleh tenaga profesional dan proses manufaktur yang presisi, kami hadir untuk memberikan solusi kubah masjid yang kokoh, tahan cuaca, dan menawan dalam jangka panjang.', 'layanan/01JZ4XQTYXJQMK8ZJ94BXNTW5K.jpeg', '2025-07-01 23:38:42', '2025-07-01 23:38:42'),
(5, 'Panggilan Las Untuk Alat Berat', 'Menyediakan layanan panggilan las untuk alat berat seperti excavator, bulldozer, dan dump truck langsung ke lokasi Anda. Kami menangani berbagai kebutuhan pengelasan seperti perbaikan rangka, penguatan sambungan, hingga perbaikan retakan pada bagian-bagian penting alat berat. Dengan dukungan teknisi berpengalaman dan peralatan las portabel yang lengkap, kami memastikan hasil pengelasan yang kuat, rapi, dan tahan lama. Layanan ini sangat cocok untuk proyek konstruksi, pertambangan, atau perkebunan yang membutuhkan perbaikan cepat tanpa harus memindahkan unit ke bengkel.', 'layanan/01JZ4YDPF1EEXM8QZ1AP6AQRKE.webp', '2025-07-01 23:45:33', '2025-07-01 23:50:38'),
(6, 'Ralling Tangga', 'Pembuatan railing tangga berkualitas tinggi menggunakan bahan stainless steel dan besi yang kokoh, desain yang modern.\nKami menyediakan berbagai pilihan desain railing tangga, mulai dari minimalis hingga klasik. Anda juga dapat memesan desain sesuai dengan keinginan agar sesuai dengan gaya interior atau eksterior bangunan Anda.', 'layanan/01JZ4YAYD1N32C2W4SWDB5T1Z6.png', '2025-07-01 23:49:08', '2025-07-01 23:49:08'),
(7, 'Pintu Pagar Otomatis', 'Layanan pembuatan dan pemasangan pintu pagar otomatis memberikan kepraktisan bagi rumah atau bangunan Anda.\nPintu pagar otomatis kami dilengkapi dengan teknologi motor listrik canggih yang memudahkan Anda membuka dan menutup pagar hanya dengan satu tombol, remote atau sensor.', 'layanan/01JZ4Z4G4885JKA74G9MQMGV0J.jpg', '2025-07-02 00:03:06', '2025-07-02 00:03:51'),
(8, 'Pintu Pagar Manual', 'Pembuatan Pagar dengan desain custom yang dapat disesuaikan. Tetap fungsional dan estetis untuk rumah atau bangunan Anda.\nKami menggunakan material stainless steel dan besi berkualitas tinggi untuk memastikan pintu pagar yang kuat, tahan lama, dan sesuai dengan kebutuhan Anda.', 'layanan/01JZ4Z7D2GJFDBJG9K3JDF15D9.jpg', '2025-07-02 00:04:41', '2025-07-02 00:04:41'),
(9, 'Balkon', 'Layanan pembuatan dan pemasangan berbagai desain railing balkon, mulai dari minimalis modern hingga klasik elegan.\nDibuat dengan stainless steel anti karat atau besi solid, memastikan kekuatan railing sekaligus tahan terhadap cuaca ekstrem.', 'layanan/01JZ4Z8VN02EWJVHWC3KR9E847.jpg', '2025-07-02 00:05:28', '2025-07-02 00:05:28'),
(10, 'Baja Ringan', 'Menyediakan layanan pembuatan dan pemasangan rangka atap baja ringan berkualitas cocok untuk segala bangunan rumah atau toko.\nDengan material yang kuat namun ringan, rangka atap ini menjadi pilihan ideal untuk rumah, toko, atau bangunan lainnya yang membutuhkan solusi atap yang efisien dan tahan lama.', 'layanan/01JZ5170JRENXWT0AJ7S5KX5D3.jpg', '2025-07-02 00:39:25', '2025-07-02 00:39:25'),
(11, 'Pintu Radiasi', 'Pintu khusus yang dirancang untuk melindungi area rumah sakit dari paparan radiasi, dengan material stainless steel.\nPintu radiasi kami dibuat dari material khusus yang mampu menahan dan menghalangi radiasi, seperti lapisan timbal (lead lining), serta rangka kuat dari stainless steel atau besi.', 'layanan/01JZ51C6H2DJPCGETMYRPYE82H.jpg', '2025-07-02 00:42:15', '2025-07-02 00:42:15'),
(12, 'Kntruksi Besi', 'Menyediakan layanan konstruksi besi untuk berbagai kebutuhan bangunan, mulai dari pembuatan rangka bangunan, kanopi, pagar, gudang, hingga struktur baja untuk proyek skala kecil maupun besar. Kami menggunakan material besi pilihan yang kuat dan tahan lama, serta dikerjakan oleh tenaga profesional berpengalaman untuk memastikan hasil yang kokoh dan presisi. Layanan ini cocok untuk rumah tinggal, ruko, pabrik, hingga proyek industri yang membutuhkan struktur besi yang andal dan aman dalam jangka panjang.', 'layanan/01JZ51KVSSQZ1P1WPCBADV99R4.jpg', '2025-07-02 00:46:26', '2025-07-02 00:46:26'),
(13, 'Pembuatan Alat Pa', 'Melayani pembuatan, perbaikan, dan modifikasi berbagai jenis alat pabrik sesuai kebutuhan industri Anda. Kami menangani peralatan seperti conveyor, hopper, mesin produksi, rangka dudukan mesin, hingga tangki dan komponen berbahan besi lainnya. Dengan dukungan tenaga ahli dan peralatan kerja yang lengkap, kami memastikan setiap proses dikerjakan dengan presisi tinggi, kuat, dan tahan lama. Cocok untuk pabrik skala kecil hingga besar yang membutuhkan solusi cepat, tepat, dan dapat diandalkan untuk kelancaran operasional produksi.', 'layanan/01JZ51P5D5C5XZWANAVSFWBPYZ.jpg', '2025-07-02 00:47:42', '2025-07-02 00:47:42'),
(14, 'Perbaikan Mesin Pabrik', 'Menyediakan layanan perbaikan mesin pabrik untuk berbagai jenis industri, mulai dari mesin produksi, motor penggerak, gearbox, conveyor, hingga sistem hidrolik dan pneumatik. Kami menangani kerusakan mekanis maupun struktural dengan cepat dan tepat, menggunakan teknisi berpengalaman dan peralatan kerja yang mendukung. Proses perbaikan dilakukan secara menyeluruh untuk memastikan mesin kembali berfungsi optimal dan produksi dapat berjalan lancar tanpa gangguan. Cocok untuk pabrik skala kecil hingga besar yang membutuhkan solusi perbaikan mesin secara efisien dan dapat diandalkan.', 'layanan/01JZ51RWYQXQ2EX08Z5TC6F8FP.jpg', '2025-07-02 00:49:11', '2025-07-02 00:49:11'),
(15, 'Alat Praktek Mahasiswa', 'Melayani pembuatan dan modifikasi alat praktik mahasiswa untuk berbagai jurusan, seperti teknik mesin, elektro, otomotif, hingga teknik industri. Kami merancang alat sesuai kebutuhan pembelajaran di laboratorium atau workshop, mulai dari rangka kerja, panel listrik, modul peraga, hingga sistem mekanik sederhana. Dengan bahan berkualitas dan pengerjaan presisi, alat yang kami produksi dapat mendukung kegiatan praktikum secara aman, fungsional, dan tahan lama. Cocok untuk sekolah vokasi, SMK, maupun perguruan tinggi yang ingin meningkatkan kualitas fasilitas pembelajaran.\n\n', 'layanan/01JZ51XHH4XBJ0NG0S75D0EQB5.jpg', '2025-07-02 00:51:43', '2025-07-02 00:51:43'),
(16, 'Pengerjaan Stainless Steel', 'Menyediakan layanan pengerjaan stainless steel untuk berbagai kebutuhan, mulai dari pembuatan tangki, meja kerja, railing, kanopi, hingga peralatan dapur industri. Kami menggunakan material stainless steel berkualitas tinggi yang tahan karat, kuat, dan memiliki tampilan yang bersih dan elegan. Dikerjakan oleh tenaga profesional dengan hasil rapi dan presisi, cocok untuk kebutuhan rumah tangga, industri makanan, rumah sakit, restoran, hingga bangunan komersial lainnya. Kami juga menerima pesanan custom sesuai desain dan ukuran yang diinginkan.', 'layanan/01JZ51ZSRQ5S9BDWYD932ENKWP.jpg', '2025-07-02 00:52:57', '2025-07-02 00:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_01_110330_create_profile_table', 1),
(5, '2025_07_01_110717_create_banner_table', 1),
(6, '2025_07_01_110946_create_layanan_table', 1),
(7, '2025_07_01_111042_create_portofolio_table', 1),
(8, '2025_07_01_111232_create_galeri_table', 1),
(9, '2025_07_01_111300_create_sosmed_table', 1),
(10, '2025_07_02_053357_add_custom_fields_to_users_table', 2),
(11, '2025_07_02_053358_add_avatar_url_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `name`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Pembuatan Kubah Masjid', '<p>Sebagai penyedia jasa konstruksi spesialis kubah masjid, kami bangga telah menyelesaikan berbagai proyek pembuatan dan pemasangan kubah masjid di berbagai daerah. Salah satu proyek terbaru kami adalah pembuatan<strong> kubah masjid dengan material enamel</strong> yang mengutamakan kekuatan, keindahan, dan ketahanan terhadap cuaca ekstrem.&nbsp;</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.43.59.jpeg&quot;,&quot;filesize&quot;:1366680,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/6g3U90Uv8CT3NpsuOz5oWy7pztchR1xbobALlUuF.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/6g3U90Uv8CT3NpsuOz5oWy7pztchR1xbobALlUuF.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/6g3U90Uv8CT3NpsuOz5oWy7pztchR1xbobALlUuF.jpg\"><img src=\"http://localhost:8000/storage/6g3U90Uv8CT3NpsuOz5oWy7pztchR1xbobALlUuF.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.43.59.jpeg</span> <span class=\"attachment__size\">1.3 MB</span></figcaption></a></figure></p><p><br></p><h3><strong>Desain &amp; Material</strong></h3><p>Pada proyek ini, kami menggunakan <strong>material baja ringan sebagai rangka</strong> utama kubah, dipadukan dengan <strong>penutup enamel berkualitas tinggi</strong>. Material enamel dipilih karena selain tahan karat dan cuaca, juga memiliki warna yang tajam dan mengilap, memberikan kesan megah dan sakral pada masjid. Kubah dirancang dengan model setengah bola, mengikuti gaya arsitektur Timur Tengah yang elegan namun tetap relevan dengan desain masjid modern saat ini.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.43.56.jpeg&quot;,&quot;filesize&quot;:1156762,&quot;height&quot;:3000,&quot;href&quot;:&quot;http://localhost:8000/storage/Y2zcENpPLJiUuNVrLBvJ0S5jz1xyZitV8SljdR5q.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/Y2zcENpPLJiUuNVrLBvJ0S5jz1xyZitV8SljdR5q.jpg&quot;,&quot;width&quot;:4000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/Y2zcENpPLJiUuNVrLBvJ0S5jz1xyZitV8SljdR5q.jpg\"><img src=\"http://localhost:8000/storage/Y2zcENpPLJiUuNVrLBvJ0S5jz1xyZitV8SljdR5q.jpg\" width=\"4000\" height=\"3000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.43.56.jpeg</span> <span class=\"attachment__size\">1.1 MB</span></figcaption></a></figure></p><p><br></p><p><br></p><h3><strong>Proses Produksi</strong></h3><p>Semua proses pembuatan kubah dilakukan secara presisi, mulai dari pemotongan rangka, perakitan struktur, pengecatan, hingga pelapisan enamel. Kami menggunakan teknik pengelasan dan fabrikasi terbaik untuk memastikan kubah yang kokoh dan presisi. Tim kami juga memastikan setiap detail, baik bentuk maupun motif ornamen, sesuai dengan permintaan klien dan nilai estetika masjid itu sendiri.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.43.58 (1).jpeg&quot;,&quot;filesize&quot;:1247769,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/zJA3dNWkOvPWPLMRrsSPEbIU7gkVklodgJiJ5fdX.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/zJA3dNWkOvPWPLMRrsSPEbIU7gkVklodgJiJ5fdX.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/zJA3dNWkOvPWPLMRrsSPEbIU7gkVklodgJiJ5fdX.jpg\"><img src=\"http://localhost:8000/storage/zJA3dNWkOvPWPLMRrsSPEbIU7gkVklodgJiJ5fdX.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.43.58 (1).jpeg</span> <span class=\"attachment__size\">1.19 MB</span></figcaption></a></figure></p><p><br></p><p><br></p><h3><strong>Pemasangan di Lokasi</strong></h3><p>Proses pemasangan dilakukan oleh tim teknisi berpengalaman yang memperhatikan keamanan struktur serta estetika visual. Waktu pengerjaan disesuaikan dengan jadwal pembangunan masjid, dan seluruh tahap pemasangan dilakukan dengan pengawasan ketat untuk memastikan hasil yang maksimal.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.43.53.jpeg&quot;,&quot;filesize&quot;:935310,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/I8rW8nQr1shMDIuDfrYamuZEDuD9xiLg3Y2oiM2U.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/I8rW8nQr1shMDIuDfrYamuZEDuD9xiLg3Y2oiM2U.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/I8rW8nQr1shMDIuDfrYamuZEDuD9xiLg3Y2oiM2U.jpg\"><img src=\"http://localhost:8000/storage/I8rW8nQr1shMDIuDfrYamuZEDuD9xiLg3Y2oiM2U.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.43.53.jpeg</span> <span class=\"attachment__size\">913.39 KB</span></figcaption></a></figure></p><p><br></p><p><br></p><p><br></p><h3><strong>Hasil Akhir</strong></h3><p>Kubah masjid yang telah dipasang memberikan tampilan yang megah dan menjadi pusat perhatian dari bangunan masjid secara keseluruhan. Selain nilai estetika, struktur kubah ini juga dirancang agar tahan lama dan minim perawatan dalam jangka panjang.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.43.55 (1).jpeg&quot;,&quot;filesize&quot;:1044534,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/MV8b6sxBmloTl1aH7u4S6lM1AfgN5AzBbzPS5eF0.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/MV8b6sxBmloTl1aH7u4S6lM1AfgN5AzBbzPS5eF0.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/MV8b6sxBmloTl1aH7u4S6lM1AfgN5AzBbzPS5eF0.jpg\"><img src=\"http://localhost:8000/storage/MV8b6sxBmloTl1aH7u4S6lM1AfgN5AzBbzPS5eF0.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.43.55 (1).jpeg</span> <span class=\"attachment__size\">1020.05 KB</span></figcaption></a></figure></p>', 'portofolio/01JZ52FE7FW5S2AJ6KDD6PY61Q.jpeg', '2025-07-01 05:47:00', '2025-07-02 01:05:12'),
(2, 'Pengerjaan Chimne', '<p>Sebagai bagian dari komitmen kami dalam menghadirkan solusi konstruksi berbahan logam berkualitas tinggi, kami juga melayani <strong>pembuatan dan pemasangan chimney</strong> untuk berbagai kebutuhan industri dan bangunan komersial. Pada proyek kali ini, kami menyelesaikan pengerjaan chimney berbahan <strong>stainless steel</strong> untuk sebuah fasilitas industri yang membutuhkan sistem pembuangan asap yang efisien dan tahan lama.&nbsp;</p><p>Proses pengerjaan dimulai dari tahap pengukuran dan desain, dilanjutkan dengan fabrikasi pipa cerobong, pembuatan dudukan, hingga instalasi di lokasi. Tim kami memastikan setiap sambungan las dilakukan dengan rapi dan kuat agar tahan terhadap tekanan serta temperatur tinggi. Selain itu, chimney dilengkapi dengan bracing penyangga untuk menjaga kestabilan struktur.&nbsp;</p><p><br></p><h2><strong>Dokumentasi Proyek&nbsp;</strong></h2><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.07.jpeg&quot;,&quot;filesize&quot;:1206383,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/kRczUI7XZ1fbvzWCvjyhwOsLhSgtlfJ44mYMGbQy.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/kRczUI7XZ1fbvzWCvjyhwOsLhSgtlfJ44mYMGbQy.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/kRczUI7XZ1fbvzWCvjyhwOsLhSgtlfJ44mYMGbQy.jpg\"><img src=\"http://localhost:8000/storage/kRczUI7XZ1fbvzWCvjyhwOsLhSgtlfJ44mYMGbQy.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.07.jpeg</span> <span class=\"attachment__size\">1.15 MB</span></figcaption></a></figure></p><p><br></p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.06 (1).jpeg&quot;,&quot;filesize&quot;:1090326,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/MpLnWwopCZnN4kOpTMsMm9iJw05f8l16JBWdTcsD.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/MpLnWwopCZnN4kOpTMsMm9iJw05f8l16JBWdTcsD.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/MpLnWwopCZnN4kOpTMsMm9iJw05f8l16JBWdTcsD.jpg\"><img src=\"http://localhost:8000/storage/MpLnWwopCZnN4kOpTMsMm9iJw05f8l16JBWdTcsD.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.06 (1).jpeg</span> <span class=\"attachment__size\">1.04 MB</span></figcaption></a></figure></p><p><br></p>', 'portofolio/01JZ52Y2NQ8FGFRWZ1PEVSJG1X.jpeg', '2025-07-02 01:09:30', '2025-07-02 01:34:45'),
(3, 'Pembuatan Fibre Cyclone', '<p>Sebagai bagian dari layanan kami di bidang manufaktur peralatan industri, kami menerima pesanan <strong>pembuatan dan pemasangan fibre cyclone</strong>, yaitu alat pemisah partikel padat dari aliran udara atau gas pada proses produksi. Fibre cyclone banyak digunakan di industri seperti pengolahan kayu, pakan ternak, penggilingan, dan sistem dust collector.&nbsp;</p><h2>Proses Produksi</h2><p>Pengerjaan dimulai dari pembuatan cetakan cyclone, proses pelapisan resin dan pengeringan, hingga perakitan bagian inlet, outlet, dan cone. Semua proses dilakukan oleh tenaga ahli yang berpengalaman dalam teknik fiber, sehingga hasil akhir memiliki <strong>ketebalan merata</strong>, <strong>presisi bentuk</strong>, serta <strong>kekuatan struktur</strong> yang sesuai standar industri.</p><h2>Hasil Akhir</h2><p>Fibre cyclone telah berhasil dipasang dan berfungsi optimal dalam sistem penyaringan debu di area produksi. Selain ringan dan tahan lama, cyclone ini juga memudahkan proses perawatan dan penggantian bila dibutuhkan.</p><h2>Dokumentasi Proyek</h2><p><br></p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.04.jpeg&quot;,&quot;filesize&quot;:1315754,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/q5hGoDl06Ze2GHh0LjNJ1vejAsmGObM7uCUA1nvN.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/q5hGoDl06Ze2GHh0LjNJ1vejAsmGObM7uCUA1nvN.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/q5hGoDl06Ze2GHh0LjNJ1vejAsmGObM7uCUA1nvN.jpg\"><img src=\"http://localhost:8000/storage/q5hGoDl06Ze2GHh0LjNJ1vejAsmGObM7uCUA1nvN.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.04.jpeg</span> <span class=\"attachment__size\">1.25 MB</span></figcaption></a></figure></p><p><br></p><div class=\"attachment-gallery attachment-gallery--2\"><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.05.jpeg&quot;,&quot;filesize&quot;:1892436,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/wkTTWGR7dLMFsGiywvEmxhlg2qY0SDGfZZGHYBsN.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/wkTTWGR7dLMFsGiywvEmxhlg2qY0SDGfZZGHYBsN.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/wkTTWGR7dLMFsGiywvEmxhlg2qY0SDGfZZGHYBsN.jpg\"><img src=\"http://localhost:8000/storage/wkTTWGR7dLMFsGiywvEmxhlg2qY0SDGfZZGHYBsN.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.05.jpeg</span> <span class=\"attachment__size\">1.8 MB</span></figcaption></a></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.02 (1).jpeg&quot;,&quot;filesize&quot;:611768,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/TlE4Ed7crPvrI5CCIK3GF77jrewljgv9pzlDccEf.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/TlE4Ed7crPvrI5CCIK3GF77jrewljgv9pzlDccEf.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/TlE4Ed7crPvrI5CCIK3GF77jrewljgv9pzlDccEf.jpg\"><img src=\"http://localhost:8000/storage/TlE4Ed7crPvrI5CCIK3GF77jrewljgv9pzlDccEf.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.02 (1).jpeg</span> <span class=\"attachment__size\">597.43 KB</span></figcaption></a></figure></div><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.03.jpeg&quot;,&quot;filesize&quot;:1382020,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/J2XxBNG7beDee9CINPos4tYMXI8mRBUWnWx4Vl1i.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/J2XxBNG7beDee9CINPos4tYMXI8mRBUWnWx4Vl1i.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/J2XxBNG7beDee9CINPos4tYMXI8mRBUWnWx4Vl1i.jpg\"><img src=\"http://localhost:8000/storage/J2XxBNG7beDee9CINPos4tYMXI8mRBUWnWx4Vl1i.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.03.jpeg</span> <span class=\"attachment__size\">1.32 MB</span></figcaption></a></figure></p><p><br></p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.01.jpeg&quot;,&quot;filesize&quot;:495922,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/wgw3hrKUdLSuFlFjroJDJsXg7lyEQL5nJwfdk6ra.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/wgw3hrKUdLSuFlFjroJDJsXg7lyEQL5nJwfdk6ra.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/wgw3hrKUdLSuFlFjroJDJsXg7lyEQL5nJwfdk6ra.jpg\"><img src=\"http://localhost:8000/storage/wgw3hrKUdLSuFlFjroJDJsXg7lyEQL5nJwfdk6ra.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.01.jpeg</span> <span class=\"attachment__size\">484.3 KB</span></figcaption></a></figure></p><p><br></p><p><br></p>', 'portofolio/01JZ53J088641X3H67RTRD81ZM.jpeg', '2025-07-02 01:20:22', '2025-07-02 01:28:28'),
(4, 'Pengerjaan Menara Pengawas PLTG', '<p>Kami dipercaya untuk mengerjakan <strong>menara pengawas</strong> di area <strong>Pembangkit Listrik Tenaga Gas (PLTG)</strong> sebagai bagian dari infrastruktur pendukung pengawasan dan keamanan operasional. Proyek ini menunjukkan komitmen kami dalam menghadirkan struktur konstruksi logam yang <strong>kokoh, presisi, dan tahan terhadap kondisi lapangan ekstrem.</strong></p><p><br></p><h3><strong>Proses Pengerjaan</strong></h3><p>Pengerjaan dimulai dari tahap perencanaan struktur dan pemotongan material di workshop, dilanjutkan dengan <strong>pengelasan, galvanisasi, dan perakitan rangka</strong> di lokasi proyek. Seluruh proses dilakukan sesuai standar keselamatan kerja proyek energi, dan melalui pengawasan ketat dari tim engineering kami. Pemasangan dilakukan secara bertahap untuk memastikan ketepatan dan kekokohan struktur hingga ke puncak menara.</p><p><br></p><h3><strong>Hasil dan Keunggulan</strong></h3><p>Menara pengawas telah selesai dibangun dan siap digunakan untuk kebutuhan pemantauan operasional harian PLTG. Struktur ini tidak hanya kuat dan tahan lama, tetapi juga dirancang untuk <strong>kemudahan akses dan keamanan pengguna</strong>, sekaligus menunjang fungsi kontrol dan pengawasan di area pembangkit.</p><p><br></p><h3><strong>Dokumentasi Proyek</strong></h3><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.43.52.jpeg&quot;,&quot;filesize&quot;:1065678,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/EECryCymOYzY3tEBrWZ2LlN9Xw1BDbEMqs0cXCuG.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/EECryCymOYzY3tEBrWZ2LlN9Xw1BDbEMqs0cXCuG.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/EECryCymOYzY3tEBrWZ2LlN9Xw1BDbEMqs0cXCuG.jpg\"><img src=\"http://localhost:8000/storage/EECryCymOYzY3tEBrWZ2LlN9Xw1BDbEMqs0cXCuG.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.43.52.jpeg</span> <span class=\"attachment__size\">1.02 MB</span></figcaption></a></figure></p><p><br></p><p><br></p>', 'portofolio/01JZ544Y99FERRN1SA67DC39BR.jpeg', '2025-07-02 01:27:22', '2025-07-02 01:30:43'),
(5, 'Pengerjaan Folding Gate', '<p>Sebagai penyedia jasa fabrikasi dan instalasi pintu besi, kami telah menyelesaikan berbagai proyek pengerjaan folding gate untuk kebutuhan komersial maupun industri. Salah satu proyek terbaru kami adalah pemasangan folding gate pada sebuah ruko di kawasan pusat perdagangan, yang membutuhkan sistem pengamanan pintu yang kokoh, praktis, dan tahan lama.&nbsp;</p><p><br></p><h3><strong>Proses Produksi dan Pemasangan</strong></h3><p>Proses dimulai dari pengukuran lokasi, pembuatan rangka, pemotongan daun pintu, hingga perakitan seluruh komponen folding gate di workshop kami. Setelah itu, tim teknisi melakukan pemasangan di lokasi klien dengan memperhatikan kemiringan lantai, kekuatan dinding, dan keselarasan rel agar pintu dapat berfungsi maksimal.</p><p><br></p><h3><strong>Hasil dan Manfaat</strong></h3><p>Folding gate telah terpasang dengan baik dan berfungsi lancar. Klien merasa puas karena tidak hanya mendapatkan keamanan tambahan, tetapi juga tampilan pintu yang rapi dan profesional. Sistem penguncian tengah dan sisi memberikan keamanan ganda yang handal.</p><p><br></p><h3><strong>Dokumentasi Proyek</strong></h3><p><br></p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.43.44.jpeg&quot;,&quot;filesize&quot;:1007769,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/rgU1rNt662BbSZHV1b8ciRGafAFv0xiFdgqj2rmx.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/rgU1rNt662BbSZHV1b8ciRGafAFv0xiFdgqj2rmx.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/rgU1rNt662BbSZHV1b8ciRGafAFv0xiFdgqj2rmx.jpg\"><img src=\"http://localhost:8000/storage/rgU1rNt662BbSZHV1b8ciRGafAFv0xiFdgqj2rmx.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.43.44.jpeg</span> <span class=\"attachment__size\">984.15 KB</span></figcaption></a></figure></p>', 'portofolio/01JZ54W9EFJA63BK1VSXSVJGMF.jpeg', '2025-07-02 01:43:28', '2025-07-02 01:43:28'),
(6, 'Pengerjaan Kanopi', '<p>Kami telah menyelesaikan berbagai proyek pengerjaan kanopi untuk kebutuhan rumah tinggal, ruko, hingga area industri. Salah satu proyek terbaru kami adalah pemasangan kanopi di halaman depan rumah tinggal, yang berfungsi sebagai pelindung kendaraan dari panas dan hujan, sekaligus menambah kesan estetika pada fasad bangunan.</p><p><br></p><h3><strong>Proses Pengerjaan</strong></h3><p>Tahapan pengerjaan dimulai dari pengukuran lokasi, pembuatan rangka di workshop, hingga pemasangan langsung di lapangan. Proses pengelasan dilakukan dengan rapi, dan seluruh sambungan diperkuat agar tahan terhadap angin kencang maupun beban air hujan. Setelah pemasangan atap, kanopi difinishing dengan cat anti karat berwarna hitam doff, memberikan tampilan yang elegan dan modern.</p><p><br></p><h3><strong>Hasil dan Manfaat</strong></h3><p>Dengan struktur yang kokoh dan desain yang menyesuaikan bentuk bangunan, kanopi ini berhasil memberikan perlindungan maksimal dari cuaca sekaligus menambah nilai estetika properti. Proses pengerjaan selesai dalam waktu 2 hari kerja, tepat waktu dan sesuai permintaan klien.</p><p><br></p><h3><strong>Dokumentasi Proyek</strong></h3><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.10 (1).jpeg&quot;,&quot;filesize&quot;:839452,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/LQjxmZId3x0AqbNrtxFlQWQ2FAun5i1nes0zbdcC.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/LQjxmZId3x0AqbNrtxFlQWQ2FAun5i1nes0zbdcC.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/LQjxmZId3x0AqbNrtxFlQWQ2FAun5i1nes0zbdcC.jpg\"><img src=\"http://localhost:8000/storage/LQjxmZId3x0AqbNrtxFlQWQ2FAun5i1nes0zbdcC.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.10 (1).jpeg</span> <span class=\"attachment__size\">819.78 KB</span></figcaption></a></figure></p><p></p><p><br></p>', 'portofolio/01JZ5510DJ5FZGKTV37Z466T5N.jpeg', '2025-07-02 01:46:03', '2025-07-02 01:46:03'),
(7, 'Pemasangan Rangka dan Atap', '<p>Kami dipercaya untuk mengerjakan pemasangan rangka dan atap pada sebuah bangunan komersial berukuran menengah. Proyek ini menunjukkan komitmen kami dalam memberikan solusi struktur atap yang kuat, efisien, dan tahan lama, menggunakan material berkualitas dan tenaga kerja berpengalaman.&nbsp;</p><p><br></p><h3><strong>Proses Pemasangan</strong></h3><p>Tahap awal dimulai dengan pengukuran dan marking titik-titik pemasangan, dilanjutkan perakitan struktur rangka di lokasi. Rangka disusun dan diikat dengan skrup khusus agar terpasang kuat dan rata. Setelah rangka selesai, pemasangan atap dilakukan secara bertahap hingga seluruh permukaan tertutup sempurna. Seluruh pekerjaan dilakukan dengan mengutamakan keselamatan kerja dan ketepatan struktur.</p><p><br></p><h3><strong>Hasil dan Keunggulan</strong></h3><p>Hasil akhir menunjukkan struktur atap yang kuat, rapi, dan simetris, siap menahan beban angin dan hujan dalam jangka panjang. Pekerjaan selesai tepat waktu sesuai target yang disepakati dengan klien. Kombinasi material dan teknik pemasangan yang tepat membuat struktur atap ini minim perawatan dan sangat cocok untuk bangunan komersial maupun industri.</p><p><br></p><h3><strong>Dokumentasi Proyek</strong></h3><p><br></p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.09.jpeg&quot;,&quot;filesize&quot;:1098372,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/ndSviyMszDwEzqM3KuhwqwslNRO1HNhHeolgLc4a.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/ndSviyMszDwEzqM3KuhwqwslNRO1HNhHeolgLc4a.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/ndSviyMszDwEzqM3KuhwqwslNRO1HNhHeolgLc4a.jpg\"><img src=\"http://localhost:8000/storage/ndSviyMszDwEzqM3KuhwqwslNRO1HNhHeolgLc4a.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.09.jpeg</span> <span class=\"attachment__size\">1.05 MB</span></figcaption></a></figure></p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.08 (2).jpeg&quot;,&quot;filesize&quot;:1142963,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/l50booQmCJsw8abfW0kb9uXhbr9f4LUugfmf1q2D.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/l50booQmCJsw8abfW0kb9uXhbr9f4LUugfmf1q2D.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/l50booQmCJsw8abfW0kb9uXhbr9f4LUugfmf1q2D.jpg\"><img src=\"http://localhost:8000/storage/l50booQmCJsw8abfW0kb9uXhbr9f4LUugfmf1q2D.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.08 (2).jpeg</span> <span class=\"attachment__size\">1.09 MB</span></figcaption></a></figure></p><p><br></p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;WhatsApp Image 2025-06-28 at 12.44.08 (2).jpeg&quot;,&quot;filesize&quot;:1142963,&quot;height&quot;:4000,&quot;href&quot;:&quot;http://localhost:8000/storage/4l2RmZ2ujJOohu5ZxH801a8wPnCMnmKzAbWttl4a.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/4l2RmZ2ujJOohu5ZxH801a8wPnCMnmKzAbWttl4a.jpg&quot;,&quot;width&quot;:3000}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://localhost:8000/storage/4l2RmZ2ujJOohu5ZxH801a8wPnCMnmKzAbWttl4a.jpg\"><img src=\"http://localhost:8000/storage/4l2RmZ2ujJOohu5ZxH801a8wPnCMnmKzAbWttl4a.jpg\" width=\"3000\" height=\"4000\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">WhatsApp Image 2025-06-28 at 12.44.08 (2).jpeg</span> <span class=\"attachment__size\">1.09 MB</span></figcaption></a></figure></p><p><br></p><p></p>', 'portofolio/01JZ555T4D2MNJPN05MVHVJ5HD.jpeg', '2025-07-02 01:48:40', '2025-07-02 01:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekilas_info1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekilas_info2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekilas_info3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekilas_info4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proyek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang_kami` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `name`, `motto1`, `motto2`, `sekilas_info1`, `sekilas_info2`, `sekilas_info3`, `sekilas_info4`, `proyek`, `logo`, `tentang_kami`, `created_at`, `updated_at`) VALUES
(1, 'Bengkel Las Manser', 'Jasa Las Custom dan Fabrikasi Besi atau Stainless Steel', 'Jasa Fabrikasi Las Terbaik', 'Kami melayani pembuatan berbagai jenis konstruksi besi, seperti pagar, kanopi, dan struktur lainnya yang membutuhkan ketahanan dan kekuatan tinggi.', 'Kami menyediakan berbagai layanan pengerjaan stainless steel dan besi berkualitas, termasuk kanopi, railing, pintu pagar otomatis, tangga, dan lainnya.', 'Butuh solusi terbaik untuk kebutuhan kanopi, railing, pagar, atau konstruksi lainnya? Jangan ragu untuk berkonsultasi langsung dengan kami secara gratis!', 'Kami merupakan usaha bengkel las bergerak dibidang pembuatan dan pemasangan kanopi, railing, tangga, pintu pagar otomatis dll.', '1500', 'logo/01JZ315KARYHNYM9R1K99DCGZ0.png', '<p>Bengkel Las Manser adalah penyedia jasa pengerjaan logam berkualitas yang berlokasi di Padang. Kami spesialis dalam pengerjaan stainless steel dan besi untuk berbagai kebutuhan, mulai dari pembuatan kanopi, railing, tangga, hingga pintu pagar otomatis dan manual. Berdiri dengan tujuan memberikan solusi konstruksi yang kokoh, tahan lama, dan estetik, kami selalu mengutamakan kualitas setiap proyek. Dengan pengalaman yang kami miliki, tim ahli kami siap memberikan hasil pengerjaan yang sesuai dengan keinginan anda. Kami menggunakan material stainless steel dan besi terbaik memiliki daya tahan yang luar biasa terhadap cuaca dan korosi. Selain itu, kami juga menawarkan desain yang bisa disesuaikan dengan keinginan pelanggan, baik itu untuk kebutuhan pribadi, komersial, atau proyek konstruksi besar. Dengan cakupan layanan yang luas, kami melayani proyek di seluruh Indonesia, memberikan kemudahan bagi pelanggan yang membutuhkan layanan pengerjaan logam profesional.</p>', NULL, '2025-07-01 07:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Ro4ZcqUUu8aB8k99VEsEwAHricOK9OHjHyKKZYiP', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaGFwbjRvUXZwdWszTWhCTjV1cHNpNVJoUTQxOFZPeEI4MGJwcnZwOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sYXlhbmFuIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEJ5M0RRNkp6clZPaHFidEdSdjJ5dC5FZ3JaZ2wvUWNUaWRPOUF5NlcwaHVRUzdMMXBtcG5pIjt9', 1751446727);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id_sosmed` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_yt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `email`, `alamat`, `wa`, `fb`, `url_fb`, `ig`, `tiktok`, `linkedin`, `url_linkedin`, `yt`, `url_yt`, `created_at`, `updated_at`) VALUES
(1, 'ilhanmanzis1207@gmail.com', 'Jl. Purwodadi Ujung, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28293', '6281282544112', NULL, 'https://web.facebook.com', NULL, NULL, 'ilhanmanzis', 'https://www.linkedin.com/in/ilhanmanzis1207', NULL, NULL, '2025-07-01 05:15:20', '2025-07-01 06:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `custom_fields` json DEFAULT NULL,
  `avatar_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `custom_fields`, `avatar_url`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$By3DQ6JzrVOhqbtGRv2yt.EgrZgl/QcTidO9Ay6W0huQS7L1pmpni', NULL, '2025-07-01 04:47:25', '2025-07-01 04:47:25', NULL, NULL),
(2, 'ilhan', 'ilhanmanzis1207@gmail.com', NULL, '$2y$12$XCGlJAs1zHwcSlLFIYeSZeJEDNkEPWJMl4dLGKKitMEPi1lQO/Yyi', NULL, '2025-07-01 06:06:38', '2025-07-01 06:06:38', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
