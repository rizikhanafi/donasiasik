-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 02:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlycode_donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(11) NOT NULL,
  `nama_donatur` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `jumlah_donasi` varchar(111) NOT NULL,
  `dibuat_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama_donatur`, `email`, `no_telepon`, `jumlah_donasi`, `dibuat_tanggal`, `status`) VALUES
(3, 'Anonymous', 'asdasd@gmail.com', '123456789012', '300000', '2021-05-09 18:50:33', 'Terverifikasi'),
(7, 'Alucard', 'asdasdasd@gmia.com', '123456789012', '100000', '2021-05-07 15:42:50', 'Terverifikasi'),
(11, 'Luka', 'jajaja@mm.com', '123456789012', '34000', '2021-05-07 15:42:27', 'Pending'),
(12, 'Diam itu indah', 'asdsad@gmail.com', '098765432123', '3333', '2021-05-07 15:43:14', 'Pending'),
(13, 'Hamba Allah', 'mama@gmail.com', '123456789012', '100000', '2021-05-07 15:15:38', 'Pending'),
(14, 'Aduy', 'aduy@gmail.com', '123456789012', '100000', '2021-05-07 15:39:06', 'Terverifikasi'),
(15, 'Andikawira', 'andi@gmail.com', '0897627681231', '100000', '2021-05-09 18:33:02', 'Terverifikasi'),
(16, 'Mufti Azis P.', 'mufti@gmail.com', '089766826989', '52000', '2021-05-10 10:30:32', 'Gagal');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `level` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Babang', 'babang@gmail.com', NULL, '$2y$10$S2xU9LKJvqIixCGe9oriSe793yj6tNw4GBLobMWulGSKU0iXes6sS', NULL, '2021-05-01 07:26:26', '2021-05-01 07:26:26', 1),
(3, 'Esse Honey', 'mama@gmail.com', NULL, '$2y$10$SNIXzuQW35oBklWiVA2uF..p8XupXX0F.RG8MMO7He6NgFpTq1RLC', NULL, '2021-05-02 10:49:08', '2021-05-01 07:26:26', 2),
(4, 'Mufti', 'mufti@gmail.com', NULL, '$2y$10$39JJueqZxIqLjU4fw9eMHeeQwCd5v35I5Q3B6NQx3KCGN7z7CArBG', NULL, '2021-05-09 23:18:36', '2021-05-09 23:18:36', 1),
(5, 'Dadangs', 'riska@gmail.com', NULL, '$2y$10$oiH/QCeshPQMjWH4dw.4XukK/dFFASk9vzaA5APKhOWW5NWsfiWOO', NULL, '2021-05-10 02:18:36', '2021-05-10 02:18:36', 1),
(6, 'The Blues', 'chelseafc@gmail.com', NULL, '$2y$10$jX9VX3I0NLVQGQnTvxgGK.sH8u..c35IyJXIDL4e7B839hZiyBM42', NULL, '2021-05-10 09:32:36', '2021-05-10 09:34:59', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
