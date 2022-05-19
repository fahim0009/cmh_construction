-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 10:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_play_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_appstore_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawkto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twiter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `company_name`, `company_logo`, `fav_icon`, `address`, `phone1`, `phone2`, `email1`, `email2`, `website`, `footer_link`, `google_play_link`, `google_appstore_link`, `tawkto`, `facebook`, `twiter`, `instagram`, `linkedin`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Next Link edit2000', '1652678358934989.jpg', '1652678358262389.jpg', 'London2000', '1234567800', '1234567800', 'shakil200@gmail.com', 'shakil200@gmail.com2', 'test200', 'test200', 'google200', 'google app200', 'tawkto200', 'facebook.com200', 'twitter2.com00', 'instagram2.com00', 'linkedin2.com00', '1', NULL, '2021-05-03 08:36:58', '2022-05-15 23:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact_mails`
--

CREATE TABLE `contact_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_mails`
--

INSERT INTO `contact_mails` (`id`, `name`, `status`, `updated_by`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'kazimuhammadullah@gmail.com', '0', NULL, NULL, NULL, '2022-05-17 08:03:46');

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
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `softcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `softcode`, `hardcode`, `image`, `details`, `sort_details`, `updated_by`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'test hard code editdsfvsdf', '1652678691320394.jpg', '<p>sdfgsdgsdgdsgsddsfgdfg</p>', 'dfgdfgdfgdfgdfg', NULL, '1', NULL, '2022-05-15 23:23:36', '2022-05-15 23:24:51');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_04_29_135902_create_roles_table', 2),
(12, '2014_10_12_000000_create_users_table', 3),
(13, '2021_04_29_133549_create_staff_table', 3),
(14, '2021_05_02_100853_create_softcodes_table', 4),
(15, '2021_05_02_100916_create_masters_table', 4),
(16, '2021_05_03_140808_create_company_details_table', 5),
(17, '2021_05_04_070122_create_sliders_table', 6),
(18, '2021_05_04_094205_create_seo_settings_table', 7),
(19, '2021_06_27_095119_create_quizzes_table', 8),
(20, '2022_05_17_072320_create_properties_table', 9),
(21, '2022_05_17_131000_create_property_images_table', 10),
(22, '2022_05_17_133205_create_contact_mails_table', 11);

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
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `category`, `image`, `description`, `location`, `address`, `view`, `status`, `updated_by`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'Taylor Close', 'Residential', '1652807599233530.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'London', NULL, NULL, '0', NULL, '1', '2022-05-17 02:22:31', '2022-05-17 11:13:19'),
(3, 'Taylor Close', 'Developing', '1652807581663149.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'London', NULL, NULL, '0', NULL, '1', '2022-05-17 02:23:10', '2022-05-17 11:13:01'),
(4, 'Taylor Close', 'New Build', '1652807561189924.jpg', '<p>vvvLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'London', NULL, NULL, '0', NULL, '1', '2022-05-17 02:24:39', '2022-05-17 11:12:41'),
(5, 'Taylor Close', 'New Build', '1652807545905909.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'London', NULL, NULL, '0', NULL, '1', '2022-05-17 02:25:04', '2022-05-17 11:12:25'),
(6, 'Taylor Close', 'Commercial', '1652807521621717.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'London', NULL, NULL, '0', NULL, '1', '2022-05-17 11:11:28', '2022-05-17 11:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `property_id`, `image`, `status`, `updated_by`, `created_by`, `created_at`, `updated_at`) VALUES
(7, 4, '1652814070687427.jpg', '0', NULL, '1', '2022-05-17 13:01:10', '2022-05-17 13:01:10'),
(8, 2, '1652818551861501.jpg', '0', NULL, '1', '2022-05-17 14:15:51', '2022-05-17 14:15:51'),
(9, 2, '1652818565938707.jpg', '0', NULL, '1', '2022-05-17 14:16:05', '2022-05-17 14:16:05'),
(10, 3, '1652818577936928.jpg', '0', NULL, '1', '2022-05-17 14:16:17', '2022-05-17 14:16:17'),
(11, 3, '1652818587216713.jpg', '0', NULL, '1', '2022-05-17 14:16:27', '2022-05-17 14:16:27'),
(12, 3, '1652818595215248.jpg', '0', NULL, '1', '2022-05-17 14:16:35', '2022-05-17 14:16:35'),
(13, 4, '1652818604195964.jpg', '0', NULL, '1', '2022-05-17 14:16:44', '2022-05-17 14:16:44'),
(14, 4, '1652818612337538.jpg', '0', NULL, '1', '2022-05-17 14:16:52', '2022-05-17 14:16:52'),
(15, 4, '1652818620457256.jpg', '0', NULL, '1', '2022-05-17 14:17:00', '2022-05-17 14:17:00'),
(16, 5, '1652818630925142.jpg', '0', NULL, '1', '2022-05-17 14:17:10', '2022-05-17 14:17:10'),
(17, 5, '1652818640559310.jpg', '0', NULL, '1', '2022-05-17 14:17:20', '2022-05-17 14:17:20'),
(18, 5, '1652818648939864.jpg', '0', NULL, '1', '2022-05-17 14:17:28', '2022-05-17 14:17:28'),
(19, 6, '1652818657942187.jpg', '0', NULL, '1', '2022-05-17 14:17:37', '2022-05-17 14:17:37'),
(20, 6, '1652818666595579.jpg', '0', NULL, '1', '2022-05-17 14:17:46', '2022-05-17 14:17:46'),
(21, 6, '1652818680763138.jpg', '0', NULL, '1', '2022-05-17 14:18:00', '2022-05-17 14:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `updated_by`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'shakil', '[\"1\",\"2\",\"3\",\"10\"]', NULL, NULL, '2021-05-01 04:40:21', '2021-05-02 00:59:18'),
(3, 'Admin', '\"2,3,4\"', NULL, NULL, '2021-05-01 04:42:01', '2021-05-01 04:42:01'),
(12, 'F Test', '[\"1\",\"3\"]', NULL, NULL, '2021-05-01 09:55:01', '2021-05-02 00:07:31'),
(13, 'Gaaa 222', '[\"1\",\"3\",\"5\",\"9\",\"10\"]', NULL, NULL, '2021-05-01 14:43:06', '2021-05-01 16:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revisit` int(11) DEFAULT NULL,
  `sitemap_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `keyword`, `author`, `revisit`, `sitemap_link`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Word', 'Author', 23455, 'After', 'After', '1', NULL, '2021-05-04 04:40:28', '2022-05-15 23:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `published`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '1652678733320649.jpg', NULL, '1', '1', NULL, '2022-05-15 23:25:33', '2022-05-15 23:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `softcodes`
--

CREATE TABLE `softcodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `softcodes`
--

INSERT INTO `softcodes` (`id`, `name`, `updated_by`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'shakil', NULL, NULL, NULL, '2021-05-02 07:46:14', '2021-05-02 07:46:14'),
(2, 'Admin', NULL, NULL, NULL, '2021-05-02 07:46:21', '2021-05-02 07:46:21'),
(3, 'test', NULL, NULL, NULL, '2021-05-02 07:46:27', '2021-05-02 07:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `role_id`, `updated_by`, `created_by`, `created_at`, `updated_at`) VALUES
(11, 14, 12, NULL, NULL, '2021-05-02 03:22:57', '2021-05-02 03:22:57'),
(13, 21, 12, NULL, NULL, '2022-05-15 23:21:45', '2022-05-15 23:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_type`, `password`, `address`, `country`, `city`, `postal_code`, `phone`, `photo`, `c_image`, `status`, `about`, `facebook`, `twitter`, `google`, `linkedin`, `updated_by`, `created_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 'admin', '$2y$10$qGK29foOk1c9zk2xGYGI1OCuSBgUmc2YGAKreDoyNvsbxvLcgTVQW', 'test', 'Bangladesh', 'London', '3434', '01676026364', '1652678757931226.jpg', '1621490824.jpg', NULL, 'test2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-02 00:56:40', '2022-05-15 23:27:08'),
(2, 'Agent', 'agent@gmail.com', NULL, 'agent', '$2y$10$oHAs6yhUnvOTl.971Q8mtu47M2kv3hSejv/3JJ/p40vHCJSz/qdTi', NULL, NULL, NULL, NULL, '1234567890', NULL, '1621326334775660.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-02 00:57:51', '2021-05-02 00:57:51'),
(3, 'User', 'user@gmail.com', NULL, 'user', '$2y$10$Y0PvqcaOrG9caaBpz413/OmFJVO7T/qDIz4GJoJ05gmqo6kt.WQo6', NULL, NULL, NULL, NULL, '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-02 00:58:20', '2021-05-02 00:58:20'),
(14, 'shakil', 'shakil@gmail.com', NULL, 'staff', '$2y$10$xyLjY71EyRCn3FzmzDENqO9dTea.tHJD6kCI594nwv7a.TLADjQBi', NULL, NULL, NULL, NULL, NULL, '1619947428648060.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-02 03:22:57', '2021-05-02 03:23:48'),
(15, 'shakil2wwedit', 'shakilwwedit@gmail.com', NULL, 'agent', '$2y$10$701K.ley3iTn9992IeFw9O12YXMjs8ojC4Fbk74RgVP1Bldtd/C5C', NULL, NULL, NULL, NULL, '1234567222', NULL, '1621493334728150.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-18 01:40:43', '2021-05-20 00:48:54'),
(17, 'shakiltestagentwwww', 'shakiltestagenwwwt@gmail.com', NULL, 'agent', '$2y$10$serv4E7RTH8gMbk3kfJHtOHHKUgu2.Q5o2V8TKy3JCK4PZo6egCRS', NULL, NULL, NULL, NULL, '12345673333', NULL, '1621493294774357.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-19 23:19:11', '2021-05-20 00:48:14'),
(18, 'Md. Hasib Uzzaman', 'hasib.9437.hu@gmail.com', NULL, 'staff', '$2y$10$n6IJhE810I9Ze8097Gt8cuDg11IlcuU99X3E3DnzrPicxa5O2xwFy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-03 01:36:49', '2021-06-03 01:36:49'),
(21, 'shakil66', 'admin11@gmail.com', NULL, 'staff', '$2y$10$Gpwd5W.BNFYKZv/09qC0puYbBbe.7nG32u6sa77RPl0s5sAm1.n5a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-15 23:21:45', '2022-05-15 23:21:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_mails`
--
ALTER TABLE `contact_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_images_property_id_foreign` (`property_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softcodes`
--
ALTER TABLE `softcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_user_id_foreign` (`user_id`),
  ADD KEY `staff_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_mails`
--
ALTER TABLE `contact_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `softcodes`
--
ALTER TABLE `softcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
