-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 06:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dating_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
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
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mobile` varchar(256) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(255) NOT NULL DEFAULT 1,
  `role` text DEFAULT 'seller',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `gender`, `mobile`, `birthday`, `price`, `city`, `image`, `password`, `status`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Sushil Kumar Gupta', 'repair856@admin.com', 'men', '6598325555', '2003-01-16', '100', NULL, 'http://localhost/datingapp/public/website/assets/images/member/home2/01.jpg', '$2y$10$1v3B4YqqMK7JrGoncLSiqujho0u1SYIx5r14U7uIN5.n6EdE6Rdli', 1, 'seller', '2023-07-15 13:18:00', '2023-07-15 13:18:00'),
(2, 'Sushil Kumar Gupta', 'repair23654@admin.com', 'men', '6394032155', '1961-05-16', '100', NULL, 'http://localhost/datingapp/public/website/assets/images/member/home2/01.jpg', '$2y$10$lEaRHECQGovx0wOpwTVMWOcHep0P5qQl9hNE.ElZQXllv/D2hXH4a', 0, 'seller', '2023-07-15 13:25:42', '2023-07-15 13:25:42'),
(3, 'Sushil Kumar Gupta', 'abhisheksaini62351228@gmail.com', 'men', '5656565565', '1959-01-16', '100', 'VILL PACHRUKHIYA , POST SHANKAR  , KUSHINAGAR', 'http://localhost/datingapp/public/website/assets/images/member/home2/01.jpg', '$2y$10$G6yn7kQMJlm3x9ogwmvPa.qCMRppa0C5QY1BCw6E1cQBTmfFyqMqu', 1, 'seller', '2023-07-15 14:26:44', '2023-07-15 14:26:44'),
(4, 'Sushil Kumar Gupta', 'repair123@admin.com', 'men', '9129035089', '2001-01-16', '100', 'VILL PACHRUKHIYA , POST SHANKAR  , KUSHINAGAR', 'http://localhost/datingapp/public/website/assets/images/member/home2/01.jpg', '$2y$10$n6lilCxUA2LLerKx8ztOUu90SymsnFI6MtczdovtW0hYkcskq4Nnu', 1, 'seller', '2023-07-15 14:29:05', '2023-07-15 14:29:05'),
(5, 'Sushil Gupta', 'adibaeepic@gmail.com', 'men', '6388419131', '1999-12-11', '1700', '#48 Russian Federation Boulevard', 'http://localhost/datingapp/public/website/assets/images/member/home2/01.jpg', '$2y$10$.ynsmsqVQlKn36gadZ2Y6OP.NA/dLY23X5z9CzIAfWID0yZuc5cN2', 1, 'seller', '2023-08-05 02:02:06', '2023-08-05 02:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` mediumtext DEFAULT NULL,
  `birthday` mediumtext DEFAULT NULL,
  `matrital_status` mediumtext DEFAULT NULL,
  `gender` mediumtext DEFAULT NULL,
  `lookingfor` mediumtext DEFAULT NULL,
  `city` mediumtext DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 0,
  `role` mediumtext DEFAULT 'user',
  `pricing_table` enum('Free','Month','Year') NOT NULL DEFAULT 'Free',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `birthday`, `matrital_status`, `gender`, `lookingfor`, `city`, `email_verified_at`, `password`, `status`, `role`, `pricing_table`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'dilip Kumar Gupta', 'repair12@admin.com', '2332656565', NULL, 'Single', 'women', 'women', 'KUSHI NAGAR', NULL, '$2y$10$FHDt9gaOMQGrtCowFnctd.0aAZzUJoxnfHRqaaiFvmTjtnU/D8SyC', 1, 'user', 'Free', NULL, '2023-07-15 06:08:25', '2023-07-16 13:33:01'),
(3, 'Km Gupta', 'surajsaini62358@gmail.com', '2332656565', NULL, 'Single', 'men', 'men', 'Maharajganj', NULL, '$2y$10$PRneEM0vHN6DxqFeC0MiwOc5fF1mbge/DWs2YmqZ/G1sI6HQb1gPy', 1, 'user', 'Free', NULL, '2023-07-15 06:10:42', '2023-07-16 13:39:36'),
(5, 'sAMPLE Kumar Gupta ji', 'sample@admin.com', '2332656565', NULL, 'Married', 'women', 'women', 'KUSHI NAGAR', NULL, '$2y$10$SgJeRHXUUvWRXp1FWvBj..VUtgah/Tc7TpiC5DTkxys4UzmU9N29y', 1, 'user', 'Free', NULL, '2023-07-15 06:13:30', '2023-07-16 13:31:42'),
(7, 'Listing Kumar Gupta', 'sample12@admin.com', '2332656565', NULL, 'Single', 'men', 'women', 'KUSHI NAGAR', NULL, '$2y$10$tOvZ2Aaw8I5c9rtYmkLP5O2zzKjnyLtefEIBKTg2AW.uiia5XBZeq', 1, 'user', 'Free', NULL, '2023-07-15 06:14:24', '2023-07-16 13:43:56'),
(10, 'Bekar Kumar Gupta', 'repairnmm21212@admin.com', '4545454554', '1980-05-21', 'Married', 'men', 'men', 'KUSHI NAGAR', NULL, '$2y$10$4VD2fi9OIVnpAltgvIkMLey6X.MCPrN792BmboNbwr0XyPw.n8O4i', 1, 'user', 'Free', NULL, '2023-07-15 06:41:20', '2023-07-16 13:43:33'),
(11, 'Sushil Kumar Gupta fghfg ggggggggggg', 'sushil62358@gmail.com', '6394032144', '2004-05-15', 'Single', 'women', 'women', 'KUSHI NAGAR vcnfgnghv', NULL, '$2y$10$oy6k2R9CPGUze.PT7n8oxe/dVz2tf0qnTifpxAK1UtuLR0zBhjaEW', 1, 'user', 'Free', NULL, '2023-07-15 07:16:33', '2023-07-23 06:43:28'),
(12, 'GOVIND GUPTA', 'sg3613340@gmail.com', '0968509332', '1999-02-11', 'Single', 'men', 'women', 'Phnom Phen', NULL, '$2y$10$E8PQVxaB9Gch/fLycftQre1z/d8lGn7AYzYLJQiqTG0JX0FWrSYc2', 1, 'user', 'Month', NULL, '2023-08-06 04:32:47', '2023-08-06 04:32:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
