-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 09:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(2, 'comments ', 2, 1, NULL, NULL),
(3, 'iuiuoipo;lkjhgfderthyjukl;khjhgg', 2, 2, '2024-08-27 21:06:31', '2024-08-27 21:06:31'),
(4, 'iuiuoipo;lkjhgfderthyjukl;khjhgg', 2, 2, '2024-08-27 21:07:34', '2024-08-27 21:07:34'),
(5, 'iuiuoipo;lkjhgfderthyjukl;khjhgg', 2, 2, '2024-08-27 21:08:26', '2024-08-27 21:08:26'),
(6, 'iuiuoipo;lkjhgfderthyjukl;khjhgg', 2, 2, '2024-08-27 21:09:53', '2024-08-27 21:09:53'),
(7, 'iuiuoipo;lkjhgfderthyjukl;khjhgg', 2, 2, '2024-08-27 21:11:41', '2024-08-27 21:11:41'),
(8, 'iuiuoipo;lkjhgfderthyjukl;khjhgg', 2, 2, '2024-08-27 21:11:59', '2024-08-27 21:11:59'),
(9, 'iuiuoipo;lkjhgfderthyjukl;khjhgg', 2, 2, '2024-08-27 21:15:29', '2024-08-27 21:15:29'),
(10, '3r2rwrwrewgeg', 2, 2, '2024-08-27 21:15:47', '2024-08-27 21:15:47'),
(11, '3r2rwrwrewgeg', 2, 2, '2024-08-27 21:20:03', '2024-08-27 21:20:03'),
(12, '3r2rwrwrewgeg', 2, 2, '2024-08-27 21:23:37', '2024-08-27 21:23:37'),
(13, 'reghtjykltoypo\'ip;iokyhtgfedwq', 2, 2, '2024-08-27 21:24:16', '2024-08-27 21:24:16'),
(14, 'ertyuiop[poiuytre', 2, 2, '2024-08-28 07:51:52', '2024-08-28 07:51:52'),
(15, 'ertyuiop[poiuytre', 2, 2, '2024-08-28 07:52:11', '2024-08-28 07:52:11'),
(16, 'ertyuiop[poiuytre', 2, 2, '2024-08-28 07:52:35', '2024-08-28 07:52:35'),
(17, 'ertyuiop[poiuytre', 2, 2, '2024-08-28 07:53:20', '2024-08-28 07:53:20'),
(18, 'ertyuiop[poiuytre', 2, 2, '2024-08-28 07:53:51', '2024-08-28 07:53:51'),
(19, 'ertyuiop[poiuytre', 2, 2, '2024-08-28 07:54:20', '2024-08-28 07:54:20'),
(20, 'rt5yuiopo[ioiuyjtr', 2, 2, '2024-08-28 07:54:30', '2024-08-28 07:54:30'),
(21, '32rtryuiop[p\';ouyj', 2, 2, '2024-08-28 07:56:09', '2024-08-28 07:56:09'),
(22, '32rtryuiop[p\';ouyj', 2, 2, '2024-08-28 07:56:42', '2024-08-28 07:56:42'),
(23, '32rtryuiop[p\';ouyj', 2, 2, '2024-08-28 07:58:37', '2024-08-28 07:58:37'),
(24, 't54yuiop[ioikyjthrge', 2, 2, '2024-08-28 07:59:33', '2024-08-28 07:59:33');

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
(5, '2024_08_26_213717_create_posts_table', 1),
(6, '2024_08_26_213734_create_comments_table', 1);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'PostmanRuntime/7.41.2', '105ebf59335355b0202c67725c8530a05d0cfd746236eeb0b55da09e4fc4d92c', '[\"*\"]', NULL, NULL, '2024-08-28 14:45:16', '2024-08-28 14:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'news', 'gfevfvdfvdafvcc,bvcckj ljbljbcljbaljc jbjobasljcbljabc bjlagboasgbc', 2, NULL, NULL),
(2, 'post222222222222222', 'post22222222222222222222', 2, '2024-08-27 09:33:39', '2024-08-27 09:33:39'),
(7, 'test sent email', 'test sent email', 2, '2024-08-27 20:39:46', '2024-08-27 20:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'mohamed', 'm@m.com', '$2y$10$.UOwIjcKnyhUwzwkU9xLzOZJDRIynmrmZkGUgo/kyUbSXqiuWYpk2', NULL, '2024-08-26 20:36:18', '2024-08-26 20:36:18'),
(3, 'Ahmed', 'a@a.com', '$2y$10$Zss43.Q8hAp0.Ge/Zfg1juVrBtBwWV5Y8/pWBtaFKnv4/PtgszIRy', NULL, '2024-08-27 03:27:53', '2024-08-27 03:27:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
