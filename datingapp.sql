-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2023 at 02:41 AM
-- Server version: 8.0.33-0ubuntu0.22.04.4
-- PHP Version: 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$.ynsmsqVQlKn36gadZ2Y6OP.NA/dLY23X5z9CzIAfWID0yZuc5cN2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int NOT NULL,
  `photos` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photos`, `created_at`, `updated_at`) VALUES
(1, 'https://xmakelove.com/public/website/assets/images/banner/photo_2023-08-22_10-44-22.jpg', '2023-08-27 15:18:33', '2023-08-27 15:18:33'),
(2, 'https://xmakelove.com/public/website/assets/images/banner/photo_2023-08-22_10-44-31.jpg', '2023-08-27 15:19:43', '2023-08-27 15:19:43'),
(3, 'https://xmakelove.com/public/website/assets/images/banner/photo_2023-08-22_10-44-35.jpg', '2023-08-27 15:19:43', '2023-08-27 15:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `counter_visits`
--

CREATE TABLE `counter_visits` (
  `id` bigint UNSIGNED NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_id` int DEFAULT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counter_visits`
--

INSERT INTO `counter_visits` (`id`, `ip_address`, `seller_id`, `text`, `created_at`, `updated_at`) VALUES
(1, '116.212.145.43', 9, NULL, '2023-08-30 06:35:28', '2023-08-30 06:35:28'),
(2, '116.212.145.43', 17, NULL, '2023-08-30 06:36:07', '2023-08-30 06:36:07'),
(3, '27.109.114.23', 7, NULL, '2023-08-30 08:20:44', '2023-08-30 08:20:44'),
(4, '27.109.114.23', 14, NULL, '2023-08-30 08:36:29', '2023-08-30 08:36:29'),
(5, '66.249.70.99', 15, NULL, '2023-08-30 17:44:56', '2023-08-30 17:44:56'),
(6, '103.112.243.18', 7, NULL, '2023-08-31 03:44:21', '2023-08-31 03:44:21'),
(7, '116.212.145.16', 14, NULL, '2023-08-31 12:31:58', '2023-08-31 12:31:58'),
(8, '116.212.145.16', 17, NULL, '2023-08-31 12:32:21', '2023-08-31 12:32:21'),
(9, '116.212.145.16', 9, NULL, '2023-08-31 12:32:35', '2023-08-31 12:32:35'),
(10, '27.109.114.138', 7, NULL, '2023-09-01 03:00:36', '2023-09-01 03:00:36'),
(11, '27.109.114.78', 7, NULL, '2023-09-01 03:10:13', '2023-09-01 03:10:13'),
(12, '117.20.116.174', 9, NULL, '2023-09-01 03:13:44', '2023-09-01 03:13:44'),
(13, '117.20.116.174', 10, NULL, '2023-09-01 03:14:53', '2023-09-01 03:14:53'),
(14, '103.112.243.18', 9, NULL, '2023-09-01 03:16:09', '2023-09-01 03:16:09'),
(15, '103.112.243.18', 14, NULL, '2023-09-01 03:17:35', '2023-09-01 03:17:35'),
(16, '116.212.145.16', 18, NULL, '2023-09-01 05:59:11', '2023-09-01 05:59:11'),
(17, '116.212.159.43', 7, NULL, '2023-09-01 06:44:19', '2023-09-01 06:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `seller_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `sender_type` enum('seller','user') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `seller_id`, `user_id`, `sender_type`, `text`, `created_at`, `updated_at`) VALUES
(3, 7, 12, 'user', 'Hiii', '2023-08-12 12:45:33', '2023-08-12 12:45:33'),
(4, 9, 23, 'user', 'Hello', '2023-08-15 10:01:20', '2023-08-15 10:01:20'),
(5, 9, 23, 'user', 'Hello raj', '2023-08-15 10:03:18', '2023-08-15 10:03:18'),
(6, 9, 23, 'user', 'Helllllo', '2023-08-15 10:04:15', '2023-08-15 10:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_15_175836_create_sellers_table', 2),
(6, '2023_07_15_190844_add_role__to_users_table', 3),
(7, '2023_07_16_082908_create_admin_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int NOT NULL,
  `seller_id` bigint UNSIGNED NOT NULL,
  `photo_path` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `seller_id`, `photo_path`, `created_at`, `updated_at`) VALUES
(1, 5, 'https://xmakelove.com/public/website/assets/photos/photos_20230810B229F1E3-4474-4A9B-9C11-7BB9B4AF805F.jpeg', '2023-08-10 10:48:00', '2023-08-10 10:48:00'),
(2, 5, 'https://xmakelove.com/public/website/assets/photos/photos_20230810D00F32CB-7AFB-41FC-831F-6B222CEDCAB7.jpeg', '2023-08-10 10:48:51', '2023-08-10 10:48:51'),
(3, 5, 'https://xmakelove.com/public/website/assets/photos/photos_202308101536BA67-129E-4DBA-BFF5-79ED78870415.jpeg', '2023-08-10 10:49:10', '2023-08-10 10:49:10'),
(4, 5, 'https://xmakelove.com/public/website/assets/photos/photos_20230810FF8B405C-EBB4-4BFA-B8CB-A045455755F6.jpeg', '2023-08-10 10:49:10', '2023-08-10 10:49:10'),
(7, 9, 'https://xmakelove.com/public/website/assets/photos/photos_20230819D69926BE-690F-4FA2-8C9C-2CBA9A6E50B6.jpeg', '2023-08-19 04:04:00', '2023-08-19 04:04:00'),
(10, 9, 'https://xmakelove.com/public/website/assets/photos/photos_20230819photo_2023-06-28_16-05-56.jpg', '2023-08-19 04:13:23', '2023-08-19 04:13:23'),
(12, 13, 'https://xmakelove.com/public/website/assets/photos/photos_20230822IMG_5698.jpeg', '2023-08-22 14:16:05', '2023-08-22 14:16:05'),
(13, 13, 'https://xmakelove.com/public/website/assets/photos/photos_20230822IMG_5701.jpeg', '2023-08-22 14:16:05', '2023-08-22 14:16:05'),
(14, 13, 'https://xmakelove.com/public/website/assets/photos/photos_20230822IMG_5702.jpeg', '2023-08-22 14:16:05', '2023-08-22 14:16:05'),
(15, 13, 'https://xmakelove.com/public/website/assets/photos/photos_20230822IMG_5699.jpeg', '2023-08-22 14:16:05', '2023-08-22 14:16:05'),
(16, 13, 'https://xmakelove.com/public/website/assets/photos/photos_20230822IMG_5702.jpeg', '2023-08-22 14:16:05', '2023-08-22 14:16:05'),
(17, 13, 'https://xmakelove.com/public/website/assets/photos/photos_20230822IMG_5702.jpeg', '2023-08-22 14:16:05', '2023-08-22 14:16:05'),
(19, 13, 'https://xmakelove.com/public/website/assets/photos/photos_20230822IMG_5705.jpeg', '2023-08-22 14:16:05', '2023-08-22 14:16:05'),
(20, 13, 'https://xmakelove.com/public/website/assets/photos/photos_20230822IMG_5699.jpeg', '2023-08-22 14:16:05', '2023-08-22 14:16:05'),
(21, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5701.jpeg', '2023-09-01 06:00:14', '2023-09-01 06:00:14'),
(22, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5702.jpeg', '2023-09-01 06:00:14', '2023-09-01 06:00:14'),
(23, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5706.jpeg', '2023-09-01 06:00:14', '2023-09-01 06:00:14'),
(24, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5705.jpeg', '2023-09-01 06:00:14', '2023-09-01 06:00:14'),
(25, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5706.jpeg', '2023-09-01 06:00:14', '2023-09-01 06:00:14'),
(26, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5708.jpeg', '2023-09-01 06:00:14', '2023-09-01 06:00:14'),
(27, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5709.jpeg', '2023-09-01 06:00:14', '2023-09-01 06:00:14'),
(28, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5698.jpeg', '2023-09-01 06:00:14', '2023-09-01 06:00:14'),
(29, 18, 'https://xmakelove.com/public/website/assets/photos/photos_20230901IMG_5699.jpeg', '2023-09-01 06:00:15', '2023-09-01 06:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_tables`
--

CREATE TABLE `pricing_tables` (
  `id` int NOT NULL,
  `pricing_type` enum('7days','1month','3month') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pricing` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qr_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing_tables`
--

INSERT INTO `pricing_tables` (`id`, `pricing_type`, `pricing`, `qr_image`, `created_at`, `updated_at`) VALUES
(2, '7days', '100', 'https://xmakelove.com/public/website/photos/profile_20230813qr-code.png', '2023-08-13 09:44:22', '2023-08-13 02:45:07'),
(3, '1month', '500', 'https://xmakelove.com/public/website/photos/profile_20230813qr-code.png', '2023-08-13 09:44:39', '2023-08-13 02:45:13'),
(4, '3month', '1000', 'https://xmakelove.com/public/website/photos/profile_20230813qr-code.png', '2023-08-13 09:44:39', '2023-08-13 02:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` text COLLATE utf8mb4_unicode_ci,
  `cover_photo` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `role` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'seller',
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `view_counts` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `gender`, `mobile`, `birthday`, `price`, `city`, `profile_photo`, `cover_photo`, `password`, `status`, `role`, `show`, `view_counts`, `created_at`, `updated_at`) VALUES
(7, 'nnnn', 'loma12@gmail.com', 'women', '9838241295', '1999-11-11', '300', 'JAGRAM CHAURAHA BEKI ROAD, BSA OFFICE NEW KATARA, PRAYAGRAJ, UTTAR PRADESH', NULL, NULL, '$2y$10$E8PQVxaB9Gch/fLycftQre1z/d8lGn7AYzYLJQiqTG0JX0FWrSYc2', 1, 'seller', 1, 39, '2023-08-07 09:07:27', '2023-08-30 09:05:19'),
(8, 'New Seller name', NULL, 'women', '0125654589', '1999-11-11', '300', 'HL apartment', NULL, NULL, '$2y$10$x2VWH4VJcfrz1LW26/eBbet1aiHAF4ODmH3cztTa7rIdhq28MO1LG', 1, 'seller', 1, 3, '2023-08-08 05:28:39', '2023-08-30 09:05:19'),
(9, 'Raj', NULL, 'women', '6388419131', '1996-11-11', '100', 'raj@gmail.com', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230816IMG_20230816_085912_810.jpg', 'https://xmakelove.com/public/website/assets/profile_pic/profile_2023081616913852270140.jpg', '$2y$10$D82kKeo4Ab7RdBCWh5VNI.vt6fveWA84LeucVOOUKQQBA5W5EdvOW', 1, 'seller', 1, 2, '2023-08-09 07:46:35', '2023-08-30 09:05:19'),
(10, 'Dr smith', NULL, 'women', '06921180809', '1993-08-09', '200', 'Husna Plaza, 3rd Floor, CP-4, Sector 8, Vikas Nagar, Lucknow, Uttar Pradesh 226022', NULL, NULL, '$2y$10$lJkAmYd7LWn8t1B6be6HD.mI31xyRWfsOyKyDmTYj8yBMQ0IUAEEm', 1, 'seller', 1, NULL, '2023-08-09 08:02:47', '2023-08-30 09:05:19'),
(11, 'Eeee', NULL, 'women', '096121314156', '1995-08-18', '200', 'Phnom Penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_2023081893667CBF-1CA2-45D3-9FFF-8625EEE6E2F1.png', NULL, '$2y$10$VSW8s5Gwsqmr9rBzpeKM8Ow.pIuAeaCtDBwrorg9oHOq4aE95Cmg.', 1, 'seller', 1, 2, '2023-08-18 13:39:40', '2023-08-30 09:05:19'),
(12, 'Dari Yas', NULL, 'women', '098258456', '2001-02-07', '25', 'Phnom Penh city', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230818asian-girl-with-flowers-2K-wallpaper.jpg', NULL, '$2y$10$0eGlBwCp/AtbvjktbafXyeLb0ZEuz29Z8Pntu.KCeDLajZ7bRxWem', 1, 'seller', 1, 1, '2023-08-18 13:47:06', '2023-08-30 09:05:19'),
(13, 'Pisey sen', 'teachersova@gmail.com', 'women', '011719819', '1996-08-22', '50', 'Phon penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230822IMG_5706.jpeg', NULL, '$2y$10$D6RNUH7ckH/PhXowOQvfM.kcVnjF9ohA1ZvZoWxL9GujE1YRuYNoC', 1, 'seller', 1, 3, '2023-08-22 08:49:43', '2023-08-30 09:05:19'),
(14, 'Saba', 'minhtainglomatechnology12@gmail.com', 'men', '096121314', '1998-08-24', '150', 'Battambang', 'https://xmakelove.com/public/website/assets/profile_pic/profile_2023082422AB6BBF-57A5-4D9D-B874-DB04CBDE9EFB.jpeg', NULL, '$2y$10$8xynqBN5j6qkjqO3gLaZuuhEHtiQQ0DDvJXX5lGU63Kb2iD4T4OWK', 1, 'seller', 1, 6, '2023-08-24 02:49:11', '2023-08-30 09:05:19'),
(15, 'Mini', 'minhtainglomatechnology02@gmail.com', 'women', '088212223', '2023-08-25', '200', 'Phnom Penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_2023082532F5E6BC-DA7C-4AB8-B213-05892BEA1BB8.png', NULL, '$2y$10$VqRi1xRKNSB60CVWEJXo2O9AQEW1.8wtXi7mwtn0nztwBOvMCnuhK', 1, 'seller', 1, 2, '2023-08-25 04:42:41', '2023-08-30 09:05:19'),
(16, 'Haha', 'minhtainglomatechnology04@gmail.com', 'women', '099212223', '2023-08-23', '200', 'Phnom Penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230825A7E5EA77-10D5-4FFD-8FEC-EB44F19AF6EE.png', NULL, '$2y$10$mtgtvyNScWXk516wpfLTwuPPuRZAJPa9YsyrjG1au5UAs28MvPX2m', 1, 'seller', 1, 3, '2023-08-25 04:53:04', '2023-08-30 09:05:19'),
(17, 'សំណាង', 'minhtaing12345@gmail.com', 'women', '098121314', '2023-08-29', '200', 'Kandal', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230829E2FCD1F9-3C4F-44B8-B1E4-B582A8353610.png', NULL, '$2y$10$q.hmAiKlqMzvcHI9LyE0z.0N4XKeJVjgYqbqQ.oPAdsZ6H7/ec.Xu', 1, 'seller', 1, 1, '2023-08-29 08:18:36', '2023-08-30 09:05:19'),
(18, 'ស្រី ណេ', 'mornsova@gmail.com', 'women', '033666777', '2002-09-01', '60', 'Phnom Penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230901IMG_5705.jpeg', NULL, '$2y$10$.AKrxdrO64YdepL3OL/mAuxPBqk1c0zx9nPT86gvCuJNI/PlnFSgC', 1, 'seller', 0, NULL, '2023-09-01 05:58:58', '2023-09-01 05:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_uploads`
--

CREATE TABLE `subscription_uploads` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `image` text NOT NULL,
  `pricing_table_id` int NOT NULL,
  `join_date` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscription_uploads`
--

INSERT INTO `subscription_uploads` (`id`, `user_id`, `image`, `pricing_table_id`, `join_date`, `expiry_date`, `status`, `show`, `created_at`, `updated_at`) VALUES
(1, 12, 'http://localhost/datingapp/public/website/assets/subscription/profile_20230816photo_2023-06-28_16-05-56.jpg', 3, NULL, NULL, '0', 1, '2023-08-16 03:20:33', '2023-08-30 09:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `birthday` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `matrital_status` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `gender` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lookingfor` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `city` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `profile_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cover_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int DEFAULT '1',
  `role` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `pricing_table` enum('Free','Month','Year') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Free',
  `pricing_create_at` datetime DEFAULT NULL,
  `pricing_expire_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `birthday`, `matrital_status`, `gender`, `lookingfor`, `city`, `profile_photo`, `cover_photo`, `image`, `email_verified_at`, `password`, `status`, `role`, `pricing_table`, `pricing_create_at`, `pricing_expire_at`, `remember_token`, `show`, `created_at`, `updated_at`) VALUES
(2, 'dilip Kumar Gupta', 'repair12@admin.com', '2332656565', NULL, 'Single', 'women', 'women', 'KUSHI NAGAR', '', '', NULL, NULL, '$2y$10$FHDt9gaOMQGrtCowFnctd.0aAZzUJoxnfHRqaaiFvmTjtnU/D8SyC', 1, 'user', 'Free', '2023-08-09 16:40:59', NULL, NULL, 1, '2023-07-15 06:08:25', '2023-08-31 02:46:03'),
(3, 'Km Gupta', 'surajsaini62358@gmail.com', '2332656565', NULL, 'Single', 'men', 'men', 'Maharajganj', '', '', NULL, NULL, '$2y$10$PRneEM0vHN6DxqFeC0MiwOc5fF1mbge/DWs2YmqZ/G1sI6HQb1gPy', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-07-15 06:10:42', '2023-08-31 02:46:03'),
(5, 'sAMPLE Kumar Gupta ji', 'sample@admin.com', '2332656565', NULL, 'Married', 'women', 'women', 'KUSHI NAGAR', '', '', NULL, NULL, '$2y$10$SgJeRHXUUvWRXp1FWvBj..VUtgah/Tc7TpiC5DTkxys4UzmU9N29y', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-07-15 06:13:30', '2023-08-31 02:46:03'),
(7, 'Listing Kumar Gupta', 'sample12@admin.com', '2332656565', NULL, 'Single', 'men', 'women', 'KUSHI NAGAR', '', '', NULL, NULL, '$2y$10$tOvZ2Aaw8I5c9rtYmkLP5O2zzKjnyLtefEIBKTg2AW.uiia5XBZeq', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-07-15 06:14:24', '2023-08-31 02:46:03'),
(10, 'Bekar Kumar Gupta', 'repairnmm21212@admin.com', '4545454554', '1980-05-21', 'Married', 'men', 'men', 'KUSHI NAGAR', '', '', NULL, NULL, '$2y$10$4VD2fi9OIVnpAltgvIkMLey6X.MCPrN792BmboNbwr0XyPw.n8O4i', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-07-15 06:41:20', '2023-08-31 02:46:03'),
(11, 'Sushil Kumar Gupta fghfg ggggggggggg', 'sushil62358@gmail.com', '6394032144', '2004-05-15', 'Single', 'women', 'women', 'KUSHI NAGAR vcnfgnghv', '', '', NULL, NULL, '$2y$10$oy6k2R9CPGUze.PT7n8oxe/dVz2tf0qnTifpxAK1UtuLR0zBhjaEW', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-07-15 07:16:33', '2023-08-31 02:46:03'),
(12, 'GOVIND GUPTA', 'sg3613340@gmail.com', '0968509332', '1999-02-11', 'Single', 'men', 'women', 'Phnom Phen', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230816IMG_20230629_183337_764.jpg', 'https://xmakelove.com/public/website/assets/profile_pic/profile_202308181669083542600.jpg', NULL, NULL, '$2y$10$E8PQVxaB9Gch/fLycftQre1z/d8lGn7AYzYLJQiqTG0JX0FWrSYc2', 1, 'user', 'Month', NULL, NULL, NULL, 1, '2023-08-06 04:32:47', '2023-08-31 02:46:03'),
(13, 'Kea Key', 'teachersova@gmail.com', '11719819', '1994-02-09', 'Single', 'women', 'women', 'Phnom Penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230822portrait-beautiful-japanese-women-with-brunette-lob-hair-leather-moto-jacket-with-silk-cami_825367-4746 [MConverter.eu].png', '', NULL, NULL, '$2y$10$XNP00kkDQ2otE4DSc2XPEOlO8o3Jpdz4szASRctNfL9Vfo/zO3ANq', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-07 09:38:36', '2023-08-31 02:46:03'),
(14, 'Thong', 'thong@gmail.com', '069211808', '1999-11-11', 'Single', 'men', 'women', 'Phnom Phen', '', '', NULL, NULL, '$2y$10$0hbTrJITiPrCN6v44Ku3muyDQmczDZkSM5Sy.0Mkzrit5l.gZLBju', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-07 10:02:19', '2023-08-31 02:46:03'),
(15, 'Mthong', 'sushil@gmail.com', '0968509331', '1999-02-01', 'Single', 'men', 'women', 'Phnom Phen', '', '', NULL, NULL, '$2y$10$dgNdXRastkqPYcRrNUFwquhEApwEvsDW.KCRPITzsywJLf6CMzz0a', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-07 10:11:20', '2023-08-31 02:46:03'),
(16, 'New User', NULL, '7896541236', '1999-11-11', 'Single', 'men', 'women', 'Phnom Phen', '', '', NULL, NULL, '$2y$10$Nkn.kXZPbyeYGBP0fkRDg.2XVlyf3zzpxhnDi6PUtB43D51QBRMb.', 0, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-08 04:26:19', '2023-08-31 02:46:03'),
(17, 'Eric', NULL, '0985456524', '1999-11-11', 'Single', 'men', 'women', 'Phnom Phen', '', '', NULL, NULL, '$2y$10$H1jlGjyAVO8bHfuMIe6gYev.az0E6Fv.xKdu1vfhN5tmm0ufa6dWK', 0, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-08 04:27:53', '2023-08-31 02:46:03'),
(18, 'Eric', NULL, '089515256', '1999-11-11', 'Single', 'men', 'women', 'Phnom Phen', '', '', NULL, NULL, '$2y$10$xSKQEatDYHBcURj5R3./B.5aO0qa.lA0GGjwW84QCyjWyJtAt43Xe', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-08 04:29:27', '2023-08-31 02:46:03'),
(19, 'ghgvfh', NULL, '0128789856', '1994-07-10', 'Single', 'women', 'men', 'Phnom Phen', '', '', NULL, NULL, '$2y$10$Ijtxj9y4qohhTDQubPFlC.NbbfLbuHtilt4c5nh5tEH9Fji9JSfF6', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-08 04:31:20', '2023-08-31 02:46:03'),
(20, 'Taing', NULL, '0987654123', '1995-11-11', 'Single', 'men', 'women', 'Phnom Phen', '', '', NULL, NULL, '$2y$10$vsO0PfKH03tIiWUMWqYbEOhAzOVynSPbDxfd2OLs3qQ5nyXk0QNpO', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-08 04:39:19', '2023-08-31 02:46:03'),
(21, 'Taing', NULL, '0123637389', '1997-04-05', 'Single', 'men', 'women', 'Phnom Phen', '', '', NULL, NULL, '$2y$10$fV4palh4dTijZMWAGDgTZuuovSEXdbhxrEgsFVU1q71EB.VoBYZHG', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-08 04:41:26', '2023-08-31 02:46:03'),
(22, 'Eric', NULL, NULL, '1998-05-09', 'Single', 'men', 'women', 'Phnom Penh', '', '', NULL, NULL, '$2y$10$M/Tqt15rth7uore9Xay86eTwMOTV47LcDebbFUMtF8k27kLHw1TO6', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-09 07:44:54', '2023-08-31 02:46:03'),
(23, 'Eric nam aa', NULL, '0692118089', '1995-10-09', 'Marid', 'men', 'women', 'Phnom Penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230818asian-girl-with-flowers-2K-wallpaper.jpg', '', NULL, NULL, '$2y$10$hiubg/zLlLfXxg9xXaT5dettVAyCloWXfalD9OWTFLLRRvX3Ycn1a', 1, 'user', 'Year', NULL, NULL, NULL, 1, '2023-08-09 07:50:00', '2023-08-31 02:46:03'),
(24, 'Nam', NULL, '096121314157', '1993-08-15', 'Single', 'men', 'women', 'Phnom Penh', '', '', NULL, NULL, '$2y$10$cClMyo2e1RR5iAfaui1izONkNr6InicPuvMuXJeHvVHJBtzIuOMuy', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-15 04:47:32', '2023-08-31 02:46:03'),
(25, 'Zara', 'minhtainglomatechnology12@gmail.com', '096212223', '2023-08-24', 'Single', 'men', 'women', 'Phnom Penh', NULL, NULL, NULL, NULL, '$2y$10$KVNf4FEO7kAZLM8vsfnPd.yOItPCxyjFfGjyPo2S0CCrmu0UYv8le', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-24 08:07:24', '2023-08-31 02:46:03'),
(26, 'Mina', 'minhtainglomatechnology03@gmail.com', '087212223', '2023-08-23', 'Single', 'men', 'women', 'Phnom Penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_202308253BD0D536-112F-49C2-A2AB-6DB8AB06FAA9.png', NULL, NULL, NULL, '$2y$10$usxuIrwQ/rO1e5xh5I/Ki.BxkiFfLXuYpa1Z6ThVAQoGi46iEZFja', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-25 04:48:07', '2023-08-31 02:46:03'),
(27, 'Don Don', 'mornsova@gmail.com', '098719819', '1996-08-28', 'Single', 'men', 'women', 'Phnom Penh', 'https://xmakelove.com/public/website/assets/profile_pic/profile_20230828IMG_6058.png', NULL, NULL, NULL, '$2y$10$Xh.is6eLzCtdfgR2r57Y8OUaHalLDCyRsSbuD13yHvTDJ1.SviLoG', 1, 'user', 'Free', NULL, NULL, NULL, 1, '2023-08-28 15:19:06', '2023-08-31 02:46:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_visits`
--
ALTER TABLE `counter_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_tables`
--
ALTER TABLE `pricing_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Indexes for table `subscription_uploads`
--
ALTER TABLE `subscription_uploads`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `counter_visits`
--
ALTER TABLE `counter_visits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pricing_tables`
--
ALTER TABLE `pricing_tables`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscription_uploads`
--
ALTER TABLE `subscription_uploads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
