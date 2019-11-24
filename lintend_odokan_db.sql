-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2019 at 03:08 PM
-- Server version: 10.2.22-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lintend_odokan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Odokan Admin', 'admin@gmail.com', '$2y$10$bUJj7ZbYdByGmUEAFELL6e/muN8leAyJCDYwZ2442L8Q07Mw12X5C', 'yku3tivwIIHv7qYtLc99Zmv7ijH5VXUnTy8iBbFcBa4sHP3l4zwXdLBiUygK', '2019-02-19 23:00:00', '2019-02-20 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, '77157715.jpg', NULL, NULL),
(2, '96313869.jpg', NULL, NULL),
(3, '78979738.jpg', NULL, NULL),
(4, '14172431.jpg', NULL, NULL),
(5, '71141544.jpg', NULL, NULL),
(6, '41177793.jpg', NULL, NULL),
(7, '63335601.jpg', NULL, NULL),
(8, '67530031.jpg', NULL, NULL),
(9, '57987343.jpg', NULL, NULL),
(10, '97320769.jpg', NULL, NULL),
(11, '50283808.jpg', NULL, NULL),
(12, '94124342.jpg', NULL, NULL),
(13, '88842898.jpg', NULL, NULL),
(14, '65439122.jpg', NULL, NULL),
(15, '86111678.jpg', NULL, NULL),
(16, '17539580.jpg', NULL, NULL),
(17, '74014757.jpg', NULL, NULL),
(18, '7450045.jpg', NULL, NULL),
(19, '62711677.jpg', NULL, NULL),
(20, '1152195.jpg', NULL, NULL),
(21, '5999021.jpg', NULL, NULL),
(22, '85159102.jpg', NULL, NULL),
(23, '9202054.jpg', NULL, NULL),
(24, '88376697.jpg', NULL, NULL),
(25, '67493532.jpg', NULL, NULL),
(26, '17884942.jpeg', NULL, NULL),
(27, '80062072.jpg', NULL, NULL),
(28, '27331497.jpg', NULL, NULL),
(29, '36915154.jpg', NULL, NULL),
(30, '50303727.jpg', NULL, NULL),
(31, '99688185.jpg', NULL, NULL),
(32, '99333581.jpg', NULL, NULL),
(33, '74412111.jpg', NULL, NULL),
(34, '68598025.jpg', NULL, NULL),
(35, '2367699.jpg', NULL, NULL),
(36, '78706511.jpg', NULL, NULL),
(37, '23034158.jpg', NULL, NULL),
(38, '93444579.jpg', NULL, NULL),
(39, '74972810.jpg', NULL, NULL),
(40, '4699115.jpg', NULL, NULL),
(41, '52002948.jpg', NULL, NULL),
(42, '66382049.jpg', NULL, NULL),
(43, '41974233.jpg', NULL, NULL),
(44, '14337708.jpg', NULL, NULL),
(45, '20556771.jpg', NULL, NULL),
(46, '82988747.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cart_product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cart_product_sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_product_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cart_product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cart_product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cart_product_quantity` bigint(20) NOT NULL,
  `cart_product_price` double(8,2) NOT NULL,
  `cart_status` tinyint(1) NOT NULL,
  `track_code` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `cart_product_id`, `cart_product_sku`, `cart_product_country`, `cart_product_size`, `cart_product_color`, `cart_product_quantity`, `cart_product_price`, `cart_status`, `track_code`, `created_at`, `updated_at`) VALUES
(1, 4, '9', '004C', 'UK', 'XL', '#000000', 4, 1540.00, 1, 491904037, '2019-02-03 09:32:20', '2019-02-03 09:32:20'),
(2, 4, '7', '001o', 'UK', 'M', '#0000a0', 21, 222.00, 1, 491904037, '2019-02-03 09:39:52', '2019-02-03 09:39:52'),
(3, 4, '9', '004C', 'UK', 'XL', '#000000', 1, 1540.00, 1, 491915536, '2019-02-03 09:54:45', '2019-02-03 09:54:45'),
(4, 4, '1', 'Small co11', 'UK', 'M', '#2125de', 5, 1425.00, 1, 491915536, '2019-02-03 09:54:45', '2019-02-03 09:54:45'),
(5, 4, '9', '004C', 'UK', 'XL', '#000000', 3, 1540.00, 1, 491915536, '2019-02-03 09:56:31', '2019-02-03 09:56:31'),
(6, 4, '1', 'Small co11', 'UK', 'M', '#2125de', 1, 1425.00, 1, 491915536, '2019-02-03 09:56:31', '2019-02-03 09:56:31'),
(7, 4, '1', 'Small co11', 'UK', 'M', '#2125de', 1, 1425.00, 1, 491915536, '2019-02-03 09:58:18', '2019-02-03 09:58:18'),
(8, 5, '12', 'X111', 'USA', 'M', '#0000ff', 1, 1235.00, 1, 491916990, '2019-02-03 10:00:19', '2019-02-03 10:00:19'),
(9, 2, 'i-1', 'i-sofaX23', NULL, NULL, NULL, 1, 43650.00, 1, 491927472, '2019-02-03 10:00:57', '2019-02-03 10:00:57'),
(10, 2, 'i-3', 'i-sX23', NULL, NULL, NULL, 1, 46559.03, 1, 491927472, '2019-02-03 10:06:24', '2019-02-03 10:06:24'),
(11, 3, '10', 'X11S-S', 'UK', 'M', '#000000', 1, 2500.00, 1, 491923221, '2019-02-03 10:09:03', '2019-02-03 10:09:03'),
(12, 3, '12', 'X111', 'USA', 'M', '#0000ff', 1, 1235.00, 1, 491923221, '2019-02-03 10:09:03', '2019-02-03 10:09:03'),
(13, 3, '10', 'X11S-S', 'UK', 'M', '#000000', 1, 2500.00, 1, 491923221, '2019-02-03 10:09:17', '2019-02-03 10:09:17'),
(14, 3, '12', 'X111', 'USA', 'M', '#0000ff', 1, 1235.00, 1, 491923221, '2019-02-03 10:09:17', '2019-02-03 10:09:17'),
(15, 3, '10', 'X11S-S', 'UK', 'M', '#000000', 1, 2500.00, 1, 491923221, '2019-02-03 10:11:24', '2019-02-03 10:11:24'),
(16, 4, '13', '001B', 'USA', 'XL', '#000000', 2, 200.00, 1, 491924566, '2019-02-03 10:12:48', '2019-02-03 10:12:48'),
(17, 4, '5', '001D', 'UK', 'L', '#000000', 8, 1760.00, 1, 491926923, '2019-02-03 10:17:25', '2019-02-03 10:17:25'),
(18, 2, '10', 'X11S-S', 'UK', 'M', '#000000', 1, 2500.00, 1, 491927472, '2019-02-03 10:17:27', '2019-02-03 10:17:27'),
(25, 1, '22', '5454f-uk-m-b', 'UK', 'M', '#80ffff', 3, 1600.00, 0, 492873138, '2019-02-04 12:33:44', '2019-02-04 12:33:44'),
(20, 6, '11', 'X122q-s', 'UK', 'M', '#000000', 1, 2500.00, 1, 491990379, '2019-02-03 12:03:45', '2019-02-03 12:03:45'),
(21, 2, '11', 'X122q-s', 'UK', 'M', '#000000', 1, 2500.00, 1, 492632487, '2019-02-04 05:53:32', '2019-02-04 05:53:32'),
(22, 2, '11', 'X122q-s', 'UK', 'M', '#000000', 1, 2500.00, 0, 493507493, '2019-02-04 06:06:38', '2019-02-04 06:06:38'),
(23, 1, '21', '5454f-uk-s-r', 'UK', 'S', '#ff8080', 1, 1600.00, 0, 492873138, '2019-02-04 11:36:05', '2019-02-04 11:36:05'),
(24, 1, '21', '5454f-uk-s-r', 'UK', 'S', '#ff8080', 1, 1600.00, 0, 492873138, '2019-02-04 11:37:41', '2019-02-04 11:37:41'),
(26, 8, '10', 'X11S-S', 'UK', 'M', '#000000', 1, 2500.00, 1, 500782466, '2019-02-05 04:56:52', '2019-02-05 04:56:52'),
(27, 2, '1', 'Small co11', 'UK', 'M', '#2125de', 1, 1425.00, 0, 493507493, '2019-02-05 06:11:09', '2019-02-05 06:11:09'),
(28, 4, '13', '001B', 'USA', 'XL', '#000000', 32, 200.00, 0, 493552519, '2019-02-05 07:19:31', '2019-02-05 07:19:31'),
(29, 4, '13', '001B', 'USA', 'XL', '#000000', 32, 200.00, 0, 493552519, '2019-02-05 07:19:33', '2019-02-05 07:19:33'),
(30, 4, '23', '5454f-uk-l-g', 'UK', 'L', '#00ff40', 1, 1600.00, 0, 493552519, '2019-02-05 07:22:48', '2019-02-05 07:22:48'),
(31, 4, '11', 'X122q-s', 'UK', 'M', '#000000', 21, 2500.00, 0, 493552519, '2019-02-05 07:26:02', '2019-02-05 07:26:02'),
(32, 9, 'i-1', 'i-sofaX23', NULL, NULL, NULL, 1, 43650.00, 0, 507330174, '2019-02-06 10:05:55', '2019-02-06 10:05:55'),
(33, 8, '9', 'X11S-S', 'UK', 'XL', '#000000', 1, 412.72, 1, 500782466, '2019-02-13 16:16:16', '2019-02-13 16:16:16'),
(34, 9, '9', 'X11S-S', 'UK', 'XL', '#000000', 1, 412.72, 0, 507330174, '2019-02-16 03:08:27', '2019-02-16 03:08:27'),
(35, 9, '9', 'X11S-S', 'UK', 'XL', '#000000', 1, 412.72, 0, 507330174, '2019-02-16 03:08:45', '2019-02-16 03:08:45'),
(36, 9, '17', 'xx11', 'UK', 'XL', '#5570ec', 1, 5000.00, 0, 507330174, '2019-02-21 01:42:42', '2019-02-21 01:42:42'),
(37, 8, '10', 'X11S-S', 'UK', 'M', '#000000', 2, 2500.00, 0, 512527810, '2019-02-21 05:51:43', '2019-02-21 05:51:43'),
(38, 12, '18', 'sfds-s', 'UK', 'S', '#800080', 1, 389.00, 0, 507325457, '2019-02-21 06:01:33', '2019-02-21 06:01:33'),
(39, 9, '9', 'X11S-S', 'UK', 'XL', '#000000', 1, 412.72, 0, 507330174, '2019-02-21 06:09:48', '2019-02-21 06:09:48'),
(40, 13, 'i-3', 'i-sX23', NULL, NULL, NULL, 9, 46559.03, 1, 507346648, '2019-02-21 06:31:48', '2019-02-21 06:31:48'),
(41, 13, '24', '5454f-usa-s-bl', 'USA', 'S', '#0080ff', 4, 1600.00, 1, 507346648, '2019-02-21 06:37:26', '2019-02-21 06:37:26'),
(42, 8, '9', 'X11S-S', 'UK', 'XL', '#000000', 1, 412.72, 0, 512527810, '2019-02-21 10:29:59', '2019-02-21 10:29:59'),
(43, 8, '10', 'X11S-S', 'UK', 'M', '#000000', 1, 2500.00, 0, 512527810, '2019-02-21 10:29:59', '2019-02-21 10:29:59'),
(44, 8, '6', '001X', 'UK', 'S', '#ff8000', 1, 401.28, 0, 512527810, '2019-02-21 10:29:59', '2019-02-21 10:29:59'),
(45, 8, '18', 'sfds-s', 'UK', 'S', '#800080', 1, 389.00, 0, 512527810, '2019-02-21 10:29:59', '2019-02-21 10:29:59'),
(46, 8, '18', 'sfds-s', 'UK', 'S', '#800080', 1, 389.00, 0, 512527810, '2019-02-21 10:31:58', '2019-02-21 10:31:58'),
(47, 15, '18', 'sfds-s', 'UK', 'S', '#800080', 1, 389.00, 1, 507494006, '2019-02-21 10:42:16', '2019-02-21 10:42:16'),
(48, 8, '10', 'X11S-S', 'UK', 'M', '#000000', 1, 2500.00, 0, 512527810, '2019-02-27 06:31:59', '2019-02-27 06:31:59'),
(49, 8, '17', 'xx11', 'UK', 'XL', '#5570ec', 1, 5000.00, 0, 512527810, '2019-02-27 06:31:59', '2019-02-27 06:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `desiredbrands`
--

CREATE TABLE `desiredbrands` (
  `id` int(10) UNSIGNED NOT NULL,
  `desired_brands_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desiredbrands`
--

INSERT INTO `desiredbrands` (`id`, `desired_brands_image`, `created_at`, `updated_at`) VALUES
(1, '9465576.png', NULL, NULL),
(2, '15313662.jpg', NULL, NULL),
(3, '42365796.jpg', NULL, NULL),
(4, '22204411.jpg', NULL, NULL),
(5, '23031454.jpg', NULL, NULL),
(6, '77385643.jpg', NULL, NULL),
(7, '68942432.jpg', NULL, NULL),
(8, '98017730.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(10) UNSIGNED NOT NULL,
  `donation_user_id` bigint(20) NOT NULL,
  `donation_track_code` bigint(20) NOT NULL,
  `donated_amount` double(8,2) NOT NULL,
  `total_final_amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `donation_user_id`, `donation_track_code`, `donated_amount`, `total_final_amount`, `created_at`, `updated_at`) VALUES
(1, 4, 491900277, 0.00, 6160.00, '2019-02-03 09:36:22', '2019-02-03 09:36:22'),
(2, 4, 491904037, 0.00, 10822.00, '2019-02-03 09:40:07', '2019-02-03 09:40:07'),
(3, 4, 491915536, 0.00, 16135.00, '2019-02-03 09:58:30', '2019-02-03 09:58:30'),
(4, 5, 491916990, 0.00, 1235.00, '2019-02-03 10:01:16', '2019-02-03 10:01:16'),
(5, 3, 491923221, 0.00, 9970.00, '2019-02-03 10:11:47', '2019-02-03 10:11:47'),
(6, 4, 491924566, 0.00, 400.00, '2019-02-03 10:13:00', '2019-02-03 10:13:00'),
(7, 2, 491927472, 0.00, 92709.03, '2019-02-03 10:17:41', '2019-02-03 10:17:41'),
(8, 4, 491926923, 234.00, 14314.00, '2019-02-03 10:17:45', '2019-02-03 10:17:45'),
(9, 6, 491990379, 40.00, 2540.00, '2019-02-03 12:04:27', '2019-02-03 12:04:27'),
(10, 2, 492632487, 0.00, 2500.00, '2019-02-04 05:53:48', '2019-02-04 05:53:48'),
(11, 2, 492640573, 0.00, 2500.00, '2019-02-04 06:06:57', '2019-02-04 06:06:57'),
(12, 1, 492837751, 2.00, 1602.00, '2019-02-04 11:36:29', '2019-02-04 11:36:29'),
(13, 1, 492838928, 10.00, 3210.00, '2019-02-04 11:38:38', '2019-02-04 11:38:38'),
(14, 1, 492873138, 2.00, 8002.00, '2019-02-04 12:34:04', '2019-02-04 12:34:04'),
(15, 8, 493462207, 50.00, 2550.00, '2019-02-05 04:57:29', '2019-02-05 04:57:29'),
(16, 2, 493507493, 0.00, 3925.00, '2019-02-05 06:11:39', '2019-02-05 06:11:39'),
(17, 4, 493548056, 0.00, 12800.00, '2019-02-05 07:19:52', '2019-02-05 07:19:52'),
(18, 4, 493548056, 0.00, 12800.00, '2019-02-05 07:20:53', '2019-02-05 07:20:53'),
(19, 4, 493550674, 42.00, 14442.00, '2019-02-05 07:23:30', '2019-02-05 07:23:30'),
(20, 4, 493552519, 800.00, 67700.00, '2019-02-05 07:26:28', '2019-02-05 07:26:28'),
(21, 8, 500782466, 0.00, 2912.72, '2019-02-13 16:17:16', '2019-02-13 16:17:16'),
(22, 8, 500782466, 0.00, 2912.72, '2019-02-13 16:18:45', '2019-02-13 16:18:45'),
(23, 9, 502902258, 0.00, 44475.44, '2019-02-16 03:08:56', '2019-02-16 03:08:56'),
(24, 9, 502902258, 0.00, 44475.44, '2019-02-16 03:13:17', '2019-02-16 03:13:17'),
(25, 9, 507170300, 0.00, 49475.44, '2019-02-21 01:43:50', '2019-02-21 01:43:50'),
(26, 8, 507319049, 50.00, 5050.00, '2019-02-21 05:52:40', '2019-02-21 05:52:40'),
(27, 12, 507325457, 200.00, 589.00, '2019-02-21 06:02:19', '2019-02-21 06:02:19'),
(28, 13, 507346648, 0.00, 425431.27, '2019-02-21 06:37:35', '2019-02-21 06:37:35'),
(29, 15, 507494006, 2.00, 391.00, '2019-02-21 10:42:54', '2019-02-21 10:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `interiordesign`
--

CREATE TABLE `interiordesign` (
  `id` int(10) UNSIGNED NOT NULL,
  `interior_design_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interiordesign`
--

INSERT INTO `interiordesign` (`id`, `interior_design_image`, `created_at`, `updated_at`) VALUES
(1, '51423167.png', NULL, NULL),
(2, '72171647.jpg', NULL, NULL),
(3, '94013272.jpg', NULL, NULL),
(4, '39037823.jpg', NULL, NULL),
(5, '22329904.jpg', NULL, NULL),
(6, '61915288.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interior_designs`
--

CREATE TABLE `interior_designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `interior_design_parent_categoryid` bigint(20) NOT NULL,
  `interior_design_category_id` bigint(20) NOT NULL,
  `interior_design_product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_design_product_brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_design_product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_design_product_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_design_product_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_design_product_price` double(8,2) NOT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_design_discount_percentage` double(8,2) NOT NULL,
  `interior_design_product_stock` bigint(20) NOT NULL,
  `interior_design_product_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_design_product_featured` tinyint(1) NOT NULL,
  `interior_design_product_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interior_designs`
--

INSERT INTO `interior_designs` (`id`, `interior_design_parent_categoryid`, `interior_design_category_id`, `interior_design_product_code`, `interior_design_product_brand`, `interior_design_product_name`, `interior_design_product_description`, `interior_design_product_details`, `interior_design_product_price`, `youtube_link`, `interior_design_discount_percentage`, `interior_design_product_stock`, `interior_design_product_keywords`, `interior_design_product_featured`, `interior_design_product_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'i-sofaX23', 'NE', 'Combo sofa', '<p>Test Test test</p>', 'Big and Small', 45000.00, NULL, 3.00, 19, 'z11', 1, 1, '2019-02-03 07:12:13', '2019-02-03 07:12:13'),
(2, 1, 1, 'i-sofaX23', 'NE', 'Combo sofa', '<p>Test Test test</p>', 'Big and Small', 45000.00, NULL, 3.00, 19, 'z11', 1, 0, '2019-02-03 07:12:34', '2019-02-03 07:13:11'),
(3, 2, 2, 'i-sX23', 'NE', 'Combo show case', '<p>show case</p>', 'Book rack', 47999.00, NULL, 3.00, 14, 'z11w', 1, 1, '2019-02-03 07:44:00', '2019-02-03 07:44:00'),
(4, 2, 2, 'i-001a', 'Oyster', 'Hotel Designing', '<p>Let your Restaurant Breathe , Witness the divine beauty of design.</p>', 'Home and Decoration', 50000.00, 'https://www.youtube.com/watch?v=FzwiufSPTMA&list=RDFzwiufSPTMA&start_radio=1', 0.00, 40, 'interior, furnishing', 1, 1, '2019-02-03 08:18:30', '2019-02-03 08:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `interior_design_category`
--

CREATE TABLE `interior_design_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `interior_design_parent_category_id` bigint(20) NOT NULL,
  `interior_design_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interior_design_category`
--

INSERT INTO `interior_design_category` (`id`, `interior_design_parent_category_id`, `interior_design_category`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sofa', NULL, NULL),
(2, 1, 'Show case', NULL, NULL),
(3, 3, 'Cutting table', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interior_design_image`
--

CREATE TABLE `interior_design_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `interior_design_product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_design_product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interior_design_image`
--

INSERT INTO `interior_design_image` (`id`, `interior_design_product_id`, `interior_design_product_image`, `created_at`, `updated_at`) VALUES
(1, '1', '51880299.jpg', NULL, NULL),
(2, '2', '57787740.jpg', NULL, NULL),
(3, '3', '64342432.jpg', NULL, NULL),
(4, '4', '34873428.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interior_design_parent_category`
--

CREATE TABLE `interior_design_parent_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `interior_design_parent_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interior_design_parent_category`
--

INSERT INTO `interior_design_parent_category` (`id`, `interior_design_parent_category`, `created_at`, `updated_at`) VALUES
(1, 'Office', NULL, NULL),
(2, 'Home', NULL, NULL),
(3, 'Kitchen', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ladies_wear`
--

CREATE TABLE `ladies_wear` (
  `id` int(10) UNSIGNED NOT NULL,
  `ladies_wear_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ladies_wear`
--

INSERT INTO `ladies_wear` (`id`, `ladies_wear_image`, `created_at`, `updated_at`) VALUES
(1, '79858482.png', NULL, NULL),
(2, '47904170.jpg', NULL, NULL),
(3, '10347642.jpg', NULL, NULL),
(4, '72922903.jpg', NULL, NULL),
(5, '20314919.jpg', NULL, NULL),
(6, '80570945.jpg', NULL, NULL),
(7, '41397716.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mens_wear`
--

CREATE TABLE `mens_wear` (
  `id` int(10) UNSIGNED NOT NULL,
  `mens_wear_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mens_wear`
--

INSERT INTO `mens_wear` (`id`, `mens_wear_image`, `created_at`, `updated_at`) VALUES
(1, '8961971.png', NULL, NULL),
(2, '79461248.jpg', NULL, NULL),
(3, '46790134.jpg', NULL, NULL),
(4, '15144957.jpg', NULL, NULL),
(5, '63906898.jpeg', NULL, NULL),
(6, '15201422.jpg', NULL, NULL),
(7, '99778290.jpg', NULL, NULL),
(8, '14742869.jpg', NULL, NULL),
(9, '58231475.jpg', NULL, NULL),
(10, '21295667.jpg', NULL, NULL),
(11, '26912413.jpg', NULL, NULL),
(12, '35566.jpg', NULL, NULL),
(13, '91393705.jpg', NULL, NULL),
(14, '1276029.jpg', NULL, NULL),
(15, '22082207.jpg', NULL, NULL),
(16, '19488057.jpeg', NULL, NULL),
(17, '29019995.jpeg', NULL, NULL),
(18, '21173889.jpg', NULL, NULL),
(19, '71699125.jpg', NULL, NULL),
(20, '82832406.jpg', NULL, NULL),
(21, '10245968.jpg', NULL, NULL),
(22, '85893189.jpg', NULL, NULL),
(23, '44436724.jpg', NULL, NULL),
(24, '63909953.jpg', NULL, NULL),
(25, '37260250.jpg', NULL, NULL),
(26, '6782922.jpg', NULL, NULL),
(27, '33253723.jpg', NULL, NULL),
(28, '43821953.jpg', NULL, NULL),
(29, '26704933.jpg', NULL, NULL),
(30, '52718745.jpg', NULL, NULL),
(31, '96824266.jpg', NULL, NULL),
(32, '65316297.jpg', NULL, NULL),
(33, '18881005.jpg', NULL, NULL),
(34, '23960125.jpg', NULL, NULL),
(35, '17891768.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(158, '2014_10_12_000000_create_users_table', 1),
(159, '2014_10_12_100000_create_password_resets_table', 1),
(160, '2018_11_25_090320_create_products_table', 1),
(161, '2018_11_25_090626_create_product_sizes_table', 1),
(162, '2018_11_25_090740_create_product_colors_table', 1),
(163, '2018_11_25_090832_create_product_infos_table', 1),
(164, '2018_11_25_091707_create_product_categories_table', 1),
(165, '2018_12_06_080618_create_product_images_table', 1),
(166, '2018_12_07_212350_create_product_parent_categories_table', 1),
(167, '2018_12_20_040621_create_admins_table', 1),
(168, '2018_12_31_033138_create_banners_table', 1),
(169, '2019_01_01_061228_create_subbanners_table', 1),
(170, '2019_01_01_092411_create_mens_wear_table', 1),
(171, '2019_01_01_094137_create_ladies_wear_table', 1),
(172, '2019_01_01_094241_create_tshirts_table', 1),
(173, '2019_01_01_094525_create_desiredbrands_table', 1),
(174, '2019_01_01_111911_create_interiordesign_table', 1),
(175, '2019_01_07_042427_create_cart_table', 1),
(176, '2019_01_09_061305_create_mobilead_table', 1),
(177, '2019_01_15_110425_create_interior_designs_table', 1),
(178, '2019_01_15_111417_create_interior_design_category_table', 1),
(179, '2019_01_15_111449_create_interior_design_image_table', 1),
(180, '2019_01_16_133039_create_interior_design_parent_category_table', 1),
(181, '2019_01_24_092002_create_shipping_address_table', 1),
(182, '2019_01_28_091143_create_track_orders_table', 1),
(183, '2019_01_29_134516_create_wishlist_table', 1),
(184, '2019_02_01_062018_create_donation_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobilead`
--

CREATE TABLE `mobilead` (
  `id` int(10) UNSIGNED NOT NULL,
  `mobile_ad_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_ad_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobilead`
--

INSERT INTO `mobilead` (`id`, `mobile_ad_company`, `mobile_ad_image`, `created_at`, `updated_at`) VALUES
(5, 'test banner2', '87371410.jpg', NULL, NULL),
(4, 'Test banner1', '40451038.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dipesh@gmail.com', '$2y$10$WD7LPj2A3KmaZgwq6b8AyedH53SJ.FdMFy/LcJyEAWZX2WMFj/Lny', '2019-02-07 14:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `parentcategory_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_gender` int(11) NOT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_percentage` double(8,2) NOT NULL,
  `product_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_featured` tinyint(1) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `parentcategory_id`, `category_id`, `product_code`, `product_brand`, `product_name`, `product_description`, `product_details`, `category_gender`, `youtube_link`, `discount_percentage`, `product_keywords`, `product_featured`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '001', '001', 'Test1', '<p>Test Image</p>', 'best jacket for mens', 0, NULL, 0.00, 'jacket, shirt', 1, 1, '2019-02-03 06:40:59', '2019-02-03 06:40:59'),
(2, 3, 7, '001', '001', 'Test2', '<p>test image</p>', 'best jacket for mens', 0, NULL, 12.00, 'jacket, shirt', 0, 1, '2019-02-03 06:42:33', '2019-02-03 06:42:33'),
(3, 2, 3, '001', '001', 'Test3', '<p>Test Image</p>', 'best jacket for mens', 0, NULL, 12.00, 'pant, jeans', 0, 1, '2019-02-03 06:43:42', '2019-02-03 06:43:42'),
(4, 1, 3, 'X111', 'Nike', 'Navi Jeans', '<p>This is a branded pant found out of the world.</p>', 'Donot bleach', 0, NULL, 5.00, 'Jean pant', 1, 1, '2019-02-03 06:50:02', '2019-02-03 06:50:02'),
(5, 2, 2, '001', '001', 'Test4', '<p>TEST CASE&nbsp;</p>', 'TEST CASE 2', 1, NULL, 123.00, 'jacket, shirt, TOP', 0, 1, '2019-02-03 06:52:35', '2019-02-03 06:52:35'),
(6, 1, 2, 'X122', 'puma', 'Girls  Ware', '<p>Summer Clothes</p>', 'Summer', 1, NULL, 5.00, 'Girl2342', 1, 1, '2019-02-03 07:16:53', '2019-02-03 07:16:53'),
(7, 4, 9, '004', '001', 'Test1', '<p>test test test</p>', 'best jacket for mens', 0, NULL, 23.00, 'jacket, shirt , kurtha, mufflers', 1, 1, '2019-02-03 07:50:59', '2019-02-03 07:50:59'),
(8, 4, 8, 'X122q', 'puma', 'Girls  Wear', '<p>cap for summer</p>', 'Do not bleach', 1, NULL, 0.00, 'Girl2342cap', 1, 1, '2019-02-03 08:04:01', '2019-02-03 08:04:01'),
(9, 2, 1, 'X111S', 'puma', 'Girls  Wear', '<p>Test- &quot;it&nbsp;is&nbsp;called&nbsp;the&nbsp;A-line&nbsp;because&nbsp;the&nbsp;effect&nbsp;resembles&nbsp;the&nbsp;capital&nbsp;letter&nbsp;A</p>', 'Girls Ware', 1, NULL, 0.00, 'Girl2342S', 0, 1, '2019-02-03 08:09:51', '2019-02-03 08:09:51'),
(10, 4, 7, '001', '001', 'Test1', '<p>test testtest</p>', 'best jacket for mens', 0, NULL, 90.00, 'jacket, shirt , kurtha, mufflers', 0, 1, '2019-02-03 10:09:36', '2019-02-03 10:09:36'),
(11, 2, 1, 'sfds', 'trfgubhj', 'yguhbjk', '<p>tdfyguhjk</p>', 'szdfxgchv', 0, NULL, 0.00, 'sant', 0, 1, '2019-02-03 10:43:10', '2019-02-03 10:43:10'),
(12, 3, 8, 'Xs-34', 'Denim', 'Summer Wear-Caps', '<p>The new Student Gate Access System is a security and information system that uses RFID cards. &nbsp;Upon entry and exit of personnels and students, a text&nbsp;</p>', 'The new Arousing Details of summer wear collection -Caps.', 0, 'https://www.youtube.com/watch?v=FzwiufSPTMA&list=RDFzwiufSPTMA&start_radio=1', 0.00, 'cap,summerwear', 1, 1, '2019-02-04 09:38:18', '2019-02-04 09:38:18'),
(13, 3, 18, '5454f', 'Oppo', 'Black Shoes', '<p>This is pure leather black shoes.</p>', 'You can wear this shoes in any condition in any season. It is wearable in rainy ,summer ,dirt.cold, party, everywhere you want.', 0, 'https://www.youtube.com/watch?v=GUV6BJ5MGqE&list=RDGUV6BJ5MGqE&start_radio=1', 20.00, 'leather,shoe,black', 1, 1, '2019-02-04 10:09:22', '2019-02-04 10:09:22'),
(14, 1, 2, '1212bgb', 'eerer', 'test one', '<p>fdsghjk</p>', 'asdt', 1, NULL, 0.00, 'female', 0, 1, '2019-03-10 09:50:59', '2019-03-10 09:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `child_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_category_for_child` bigint(20) NOT NULL,
  `product_category_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `child_category`, `parent_category_for_child`, `product_category_gender`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 1, 'Male', '2019-02-03 06:34:48', '2019-02-03 06:34:48'),
(2, 'Shirt', 1, 'Female', '2019-02-03 06:35:28', '2019-02-03 06:35:28'),
(3, 'Pant', 2, 'Male', '2019-02-03 06:36:36', '2019-02-03 06:36:36'),
(8, 'Cap', 3, 'Female', '2019-02-03 06:37:57', '2019-02-03 06:37:57'),
(7, 'Shirt', 2, 'Female', '2019-02-03 06:37:34', '2019-02-03 06:37:34'),
(9, 'Kurtha', 4, 'Male', '2019-02-03 07:06:30', '2019-02-03 07:06:30'),
(11, 'JACKET', 3, 'Male', '2019-02-04 09:21:54', '2019-02-04 09:21:54'),
(18, 'Male Shoes', 3, 'Male', '2019-02-04 09:42:41', '2019-02-04 09:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_index` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_image`, `product_image_index`, `created_at`, `updated_at`) VALUES
(1, 1, '59959889.jpeg', 1, '2019-02-03 06:40:59', '2019-02-03 06:40:59'),
(2, 2, '10532648.jpg', 1, '2019-02-03 06:42:34', '2019-02-03 06:42:34'),
(3, 3, '46894725.jpg', 1, '2019-02-03 06:43:42', '2019-02-03 06:43:42'),
(4, 4, '43906947.png', 1, '2019-02-03 06:50:02', '2019-02-03 06:50:02'),
(5, 5, '30002067.jpg', 1, '2019-02-03 06:52:35', '2019-02-03 06:52:35'),
(6, 6, '66158200.jpg', 1, '2019-02-03 07:16:53', '2019-02-03 07:16:53'),
(7, 7, '31415557.jpeg', 1, '2019-02-03 07:50:59', '2019-02-03 07:50:59'),
(8, 8, '31794662.jpg', 1, '2019-02-03 08:04:01', '2019-02-03 08:04:01'),
(9, 9, '65932651.jpg', 1, '2019-02-03 08:09:51', '2019-02-03 08:09:51'),
(10, 10, '26681290.jpg', 1, '2019-02-03 10:09:36', '2019-02-03 10:09:36'),
(11, 11, '62980140.jpg', 1, '2019-02-03 10:43:11', '2019-02-03 10:43:11'),
(12, 12, '93476704.jpg', 1, '2019-02-04 09:38:18', '2019-02-04 09:38:18'),
(13, 12, '41846379.jpg', 1, '2019-02-04 09:38:18', '2019-02-04 09:38:18'),
(14, 13, '82926729.jpg', 1, '2019-02-04 10:09:22', '2019-02-04 10:09:22'),
(15, 13, '78708110.jpg', 1, '2019-02-04 10:09:22', '2019-02-04 10:09:22'),
(16, 13, '45690847.png', 1, '2019-02-04 10:09:22', '2019-02-04 10:09:22'),
(17, 14, '61905905.jpg', 1, '2019-03-10 09:50:59', '2019-03-10 09:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_infos`
--

CREATE TABLE `product_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mixed_color` tinyint(1) NOT NULL,
  `product_stock` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_infos`
--

INSERT INTO `product_infos` (`id`, `product_id`, `product_sku`, `product_country`, `product_size`, `product_price`, `product_color`, `mixed_color`, `product_stock`, `created_at`, `updated_at`) VALUES
(1, 4, 'Small co11', 'UK', 'M', 1500.00, '#2125de', 0, '-3', '2019-02-03 06:52:47', '2019-02-03 06:52:47'),
(2, 5, '001A', 'USA', 'L', 1239.00, '#696969', 1, '3', '2019-02-03 06:54:33', '2019-02-03 06:54:33'),
(3, 5, '001Q', 'USA', 'XL', 12.00, '#000000', 1, '12', '2019-02-03 06:54:33', '2019-02-03 10:27:49'),
(4, 2, '001C', 'USA', 'M', 2000.00, '#000000', 1, '8', '2019-02-03 06:56:26', '2019-02-03 06:56:26'),
(5, 2, '001D', 'UK', 'L', 2000.00, '#000000', 1, '0', '2019-02-03 06:56:26', '2019-02-03 06:56:26'),
(6, 3, '001X', 'UK', 'S', 456.00, '#ff8000', 1, '20', '2019-02-03 07:06:06', '2019-02-03 07:06:06'),
(7, 1, '001o', 'UK', 'M', 222.00, '#0000a0', 1, '0', '2019-02-03 07:06:40', '2019-02-03 07:06:40'),
(8, 6, '001XY', 'USA', 'XL', 1399.00, '#000000', 1, '213', '2019-02-03 07:17:41', '2019-02-03 07:17:41'),
(9, 7, 'X11S-S', 'UK', 'XL', 536.00, '#000000', 1, '15', '2019-02-03 07:51:31', '2019-02-04 09:10:30'),
(10, 9, 'X11S-S', 'UK', 'M', 2500.00, '#000000', 0, '15', '2019-02-03 08:50:29', '2019-02-03 08:50:29'),
(11, 8, 'X122q-s', 'UK', 'M', 2500.00, '#000000', 0, '0', '2019-02-03 08:51:25', '2019-02-03 08:51:25'),
(12, 4, 'X111', 'USA', 'M', 1300.00, '#0000ff', 0, '5', '2019-02-03 09:49:23', '2019-02-03 09:49:23'),
(13, 10, '001B', 'USA', 'XL', 2000.00, '#000000', 1, '32', '2019-02-03 10:12:07', '2019-02-03 10:12:07'),
(14, 3, 'pant pantt', 'UK', 'L', 900.00, '#f9869d', 1, '100', '2019-02-03 10:23:46', '2019-02-03 10:23:46'),
(15, 3, '004C', 'USA', 'M', 2000.00, '#e20777', 1, '12', '2019-02-03 10:26:38', '2019-02-03 10:26:38'),
(16, 3, '001C', 'UK', 'XL', 20002.00, '#26ce1f', 1, '21', '2019-02-03 10:26:38', '2019-02-03 10:26:38'),
(17, 9, 'xx11', 'UK', 'XL', 5000.00, '#5570ec', 1, '0', '2019-02-04 09:04:55', '2019-02-04 09:04:55'),
(18, 11, 'sfds-s', 'UK', 'S', 389.00, '#800080', 0, '4770', '2019-02-04 09:12:14', '2019-02-04 09:12:14'),
(19, 11, 'sfds-m', 'USA', 'M', 373.00, '#ff80c0', 0, '876', '2019-02-04 09:12:14', '2019-02-04 09:12:14'),
(20, 11, 'sfds-l', 'UK', 'L', 423.00, '#400080', 0, '565', '2019-02-04 09:13:30', '2019-02-04 09:13:30'),
(21, 13, '5454f-uk-s-r', 'UK', 'S', 2000.00, '#ff8080', 0, '0', '2019-02-04 10:24:34', '2019-02-04 10:24:34'),
(22, 13, '5454f-uk-m-b', 'UK', 'M', 2000.00, '#80ffff', 0, '0', '2019-02-04 10:24:34', '2019-02-04 10:24:34'),
(23, 13, '5454f-uk-l-g', 'UK', 'L', 2000.00, '#00ff40', 0, '0', '2019-02-04 10:24:34', '2019-02-04 10:24:34'),
(24, 13, '5454f-usa-s-bl', 'USA', 'S', 2000.00, '#0080ff', 0, '0', '2019-02-04 10:24:34', '2019-02-04 10:24:34'),
(25, 13, '5454f-usa-m-bk', 'USA', 'M', 2000.00, '#000000', 0, '1', '2019-02-04 10:24:34', '2019-02-04 10:24:34'),
(26, 13, '5454f-usa-l-bk', 'USA', 'L', 2000.00, '#000000', 0, '4', '2019-02-04 10:24:34', '2019-02-04 10:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_parent_categories`
--

CREATE TABLE `product_parent_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_parent_categories`
--

INSERT INTO `product_parent_categories` (`id`, `parent_category`, `created_at`, `updated_at`) VALUES
(1, 'Nepali Wear', '2019-02-03 06:33:41', '2019-02-03 06:33:41'),
(2, 'Indian Wear', '2019-02-03 06:33:51', '2019-02-03 06:33:51'),
(3, 'Western Wear', '2019-02-03 06:34:03', '2019-02-03 06:34:03'),
(4, 'International Wear', '2019-02-03 07:06:01', '2019-02-03 07:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `track_code` bigint(20) NOT NULL,
  `tolename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `housenumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`id`, `user_id`, `track_code`, `tolename`, `placename`, `housenumber`, `mobilenumber`, `created_at`, `updated_at`) VALUES
(1, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:32:29', '2019-02-21 06:11:24'),
(2, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:39:59', '2019-02-21 06:11:24'),
(3, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:39:59', '2019-02-21 06:11:24'),
(4, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:56:43', '2019-02-21 06:11:24'),
(5, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:56:43', '2019-02-21 06:11:24'),
(6, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:56:43', '2019-02-21 06:11:24'),
(7, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:56:43', '2019-02-21 06:11:24'),
(8, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:56:43', '2019-02-21 06:11:24'),
(9, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:56:43', '2019-02-21 06:11:24'),
(10, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:58:27', '2019-02-21 06:11:24'),
(11, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:58:27', '2019-02-21 06:11:24'),
(12, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:58:27', '2019-02-21 06:11:24'),
(13, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:58:27', '2019-02-21 06:11:24'),
(14, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:58:27', '2019-02-21 06:11:24'),
(15, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:58:27', '2019-02-21 06:11:24'),
(16, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 09:58:27', '2019-02-21 06:11:24'),
(17, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:00:53', '2019-02-21 06:11:24'),
(18, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:01:31', '2019-02-21 06:11:24'),
(19, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:05:42', '2019-02-21 06:11:24'),
(20, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:06:36', '2019-02-21 06:11:24'),
(21, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:06:36', '2019-02-21 06:11:24'),
(22, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:07:12', '2019-02-21 06:11:24'),
(23, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:07:12', '2019-02-21 06:11:24'),
(24, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:09:24', '2019-02-21 06:11:24'),
(25, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:09:24', '2019-02-21 06:11:24'),
(26, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:09:24', '2019-02-21 06:11:24'),
(27, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:09:24', '2019-02-21 06:11:24'),
(28, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:11:32', '2019-02-21 06:11:24'),
(29, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:11:32', '2019-02-21 06:11:24'),
(30, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:11:32', '2019-02-21 06:11:24'),
(31, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:11:32', '2019-02-21 06:11:24'),
(32, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:11:32', '2019-02-21 06:11:24'),
(33, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:12:55', '2019-02-21 06:11:24'),
(34, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:12:55', '2019-02-21 06:11:24'),
(35, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:12:55', '2019-02-21 06:11:24'),
(36, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:12:55', '2019-02-21 06:11:24'),
(37, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:12:55', '2019-02-21 06:11:24'),
(38, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:12:55', '2019-02-21 06:11:24'),
(39, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:12:55', '2019-02-21 06:11:24'),
(40, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:12:55', '2019-02-21 06:11:24'),
(41, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:32', '2019-02-21 06:11:24'),
(42, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:32', '2019-02-21 06:11:24'),
(43, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:32', '2019-02-21 06:11:24'),
(44, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(45, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(46, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(47, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(48, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(49, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(50, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(51, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(52, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:17:33', '2019-02-21 06:11:24'),
(53, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:56:15', '2019-02-21 06:11:24'),
(54, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:56:15', '2019-02-21 06:11:24'),
(55, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:56:15', '2019-02-21 06:11:24'),
(56, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:56:15', '2019-02-21 06:11:24'),
(57, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:56:15', '2019-02-21 06:11:24'),
(58, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 10:56:15', '2019-02-21 06:11:24'),
(59, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-03 12:04:13', '2019-02-21 06:11:24'),
(60, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 05:53:37', '2019-02-21 06:11:24'),
(61, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 05:53:37', '2019-02-21 06:11:24'),
(62, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 05:53:37', '2019-02-21 06:11:24'),
(63, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 05:53:37', '2019-02-21 06:11:24'),
(64, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 06:06:46', '2019-02-21 06:11:24'),
(65, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 06:06:46', '2019-02-21 06:11:24'),
(66, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 06:06:46', '2019-02-21 06:11:24'),
(67, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 06:06:46', '2019-02-21 06:11:24'),
(68, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 06:06:46', '2019-02-21 06:11:24'),
(69, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 11:36:19', '2019-02-21 06:11:24'),
(70, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 11:37:49', '2019-02-21 06:11:24'),
(71, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 11:37:49', '2019-02-21 06:11:24'),
(72, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 12:33:55', '2019-02-21 06:11:24'),
(73, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 12:33:55', '2019-02-21 06:11:24'),
(74, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-04 12:33:55', '2019-02-21 06:11:24'),
(75, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 04:57:04', '2019-02-21 06:11:24'),
(76, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 06:11:34', '2019-02-21 06:11:24'),
(77, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 06:11:34', '2019-02-21 06:11:24'),
(78, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 06:11:34', '2019-02-21 06:11:24'),
(79, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 06:11:34', '2019-02-21 06:11:24'),
(80, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 06:11:34', '2019-02-21 06:11:24'),
(81, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 06:11:34', '2019-02-21 06:11:24'),
(82, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(83, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(84, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(85, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(86, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(87, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(88, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(89, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(90, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:24', '2019-02-21 06:11:24'),
(91, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(92, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(93, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(94, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(95, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(96, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(97, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(98, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(99, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:35', '2019-02-21 06:11:24'),
(100, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(101, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(102, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(103, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(104, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(105, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(106, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(107, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(108, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:18:52', '2019-02-21 06:11:24'),
(109, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(110, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(111, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(112, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(113, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(114, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(115, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(116, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(117, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(118, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(119, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:19:46', '2019-02-21 06:11:24'),
(120, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(121, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(122, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(123, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(124, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(125, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(126, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(127, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(128, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(129, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(130, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(131, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:22:56', '2019-02-21 06:11:24'),
(132, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(133, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(134, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(135, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(136, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(137, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(138, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(139, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(140, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(141, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(142, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(143, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(144, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-05 07:26:13', '2019-02-21 06:11:24'),
(145, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-06 10:06:19', '2019-02-21 06:11:24'),
(146, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-06 10:07:01', '2019-02-21 06:11:24'),
(147, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-06 12:17:49', '2019-02-21 06:11:24'),
(148, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-06 12:17:49', '2019-02-21 06:11:24'),
(149, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-06 12:17:49', '2019-02-21 06:11:24'),
(150, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-13 16:16:37', '2019-02-21 06:11:24'),
(151, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-13 16:16:37', '2019-02-21 06:11:24'),
(152, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-16 03:08:52', '2019-02-21 06:11:24'),
(153, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-16 03:08:52', '2019-02-21 06:11:24'),
(154, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-16 03:08:52', '2019-02-21 06:11:24'),
(155, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-16 03:13:01', '2019-02-21 06:11:24'),
(156, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-16 03:13:01', '2019-02-21 06:11:24'),
(157, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-16 03:13:01', '2019-02-21 06:11:24'),
(158, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 01:42:47', '2019-02-21 06:11:24'),
(159, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 01:42:47', '2019-02-21 06:11:24'),
(160, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 01:42:47', '2019-02-21 06:11:24'),
(161, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 01:42:47', '2019-02-21 06:11:24'),
(162, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 05:51:54', '2019-02-21 06:11:24'),
(163, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 05:51:54', '2019-02-21 06:11:24'),
(164, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 05:51:54', '2019-02-21 06:11:24'),
(165, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 06:01:57', '2019-02-21 06:11:24'),
(166, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 06:09:57', '2019-02-21 06:11:24'),
(167, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 06:09:57', '2019-02-21 06:11:24'),
(168, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 06:09:57', '2019-02-21 06:11:24'),
(169, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 06:09:57', '2019-02-21 06:11:24'),
(170, 9, 494512320, 'imadol,lalitpur', 'kathmandu', 'imadol,lalitpur', '9847010007', '2019-02-21 06:09:57', '2019-02-21 06:11:24'),
(171, 13, 507343734, 'anish', 'anish', '123', '123', '2019-02-21 06:32:03', '2019-02-21 06:32:03'),
(172, 13, 507343734, 'anish', 'anish', '123', '123', '2019-02-21 06:32:44', '2019-02-21 06:32:44'),
(173, 13, 507343734, 'anish', 'anish', '123', '123', '2019-02-21 06:32:58', '2019-02-21 06:32:58'),
(174, 13, 507343734, 'anish', 'anish', '123', '123', '2019-02-21 06:33:34', '2019-02-21 06:33:34'),
(175, 13, 507343734, 'anish', 'anish', '123', '123', '2019-02-21 06:33:51', '2019-02-21 06:33:51'),
(176, 13, 507346648, 'anish', 'anish', '123', '123', '2019-02-21 06:37:32', '2019-02-21 06:37:32'),
(177, 13, 507346648, 'anish', 'anish', '123', '123', '2019-02-21 06:37:32', '2019-02-21 06:37:32'),
(178, 8, 507486671, 'Sundarijal', 'Kathmandu', '3321', '1231231231', '2019-02-21 10:30:09', '2019-02-21 10:30:09'),
(179, 8, 507486671, 'Sundarijal', 'Kathmandu', '3321', '1231231231', '2019-02-21 10:30:09', '2019-02-21 10:30:09'),
(180, 8, 507486671, 'Sundarijal', 'Kathmandu', '3321', '1231231231', '2019-02-21 10:30:09', '2019-02-21 10:30:09'),
(181, 8, 507486671, 'Sundarijal', 'Kathmandu', '3321', '1231231231', '2019-02-21 10:30:09', '2019-02-21 10:30:09'),
(182, 8, 507486671, 'Sundarijal', 'Kathmandu', '3321', '1231231231', '2019-02-21 10:30:09', '2019-02-21 10:30:09'),
(183, 8, 500782466, 'Sundarijal', 'Kathmandu', '3321', '1231231231', '2019-02-21 10:30:09', '2019-02-21 10:30:09'),
(184, 8, 500782466, 'Sundarijal', 'Kathmandu', '3321', '1231231231', '2019-02-21 10:30:09', '2019-02-21 10:30:09'),
(185, 15, 507494006, 'Sundarijal', 'Kathmandu', '3321', '1231231231', '2019-02-21 10:42:26', '2019-02-21 10:42:26'),
(186, 8, 512527810, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(187, 8, 512527810, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(188, 8, 512527810, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(189, 8, 512527810, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(190, 8, 512527810, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(191, 8, 512527810, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(192, 8, 512527810, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(193, 8, 512527810, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(194, 8, 500782466, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08'),
(195, 8, 500782466, '2qwretdfhg', 'sfdd', '123451234567', '765432', '2019-02-27 06:32:08', '2019-02-27 06:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `subbanners`
--

CREATE TABLE `subbanners` (
  `id` int(10) UNSIGNED NOT NULL,
  `subbanner_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subbanner_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subbanner_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subbanners`
--

INSERT INTO `subbanners` (`id`, `subbanner_title`, `subbanner_subtitle`, `subbanner_image`, `created_at`, `updated_at`) VALUES
(1, 'sub banner title', 'sub banner sub title', '96737135.png', NULL, NULL),
(2, 'test1', 'test1test', '42736350.jpg', NULL, NULL),
(3, 'test2', 'test2test', '84969096.jpeg', NULL, NULL),
(4, 'test1', 'test1test', '38323326.jpg', NULL, NULL),
(5, 'test1', 'test1test', '10796957.jpg', NULL, NULL),
(6, 'Get 50% discount', 'Grab opportunity', '34861142.jpg', NULL, NULL),
(7, 'test', 'test', '37072909.jpg', NULL, NULL),
(8, 'test1', 'test1test', '8675274.jpg', NULL, NULL),
(9, 'test', 'tejdsakbfjgsajbfjdsaf', '48054775.jpeg', NULL, NULL),
(10, 'test1', 'test1test', '92053138.jpg', NULL, NULL),
(11, 'Get 50% OFF', 'This Festive Season Get 50% Off On any items for limited time.', '83278589.jpg', NULL, NULL),
(12, 'MEGA Sale !!! Happening On Feb 14', 'The grand sale of the year happening now on Civil Mall.', '15291421.png', NULL, NULL),
(13, 'Mega Sale!!', 'Hurry Up, Grab your product now.', '32385233.jpg', NULL, NULL),
(14, 'MEGA Sale !!! Happening On Feb 14', 'The grand sale of the year happening now on Civil Mall.', '51013351.jpg', NULL, NULL),
(15, 'MEGA Sale !!! Happening On Feb 14', 'The grand sale of the year happening now on Civil Mall.', '18859782.jpg', NULL, NULL),
(16, 'Mega Sale!!', 'Hurry Up, Grab your product now.', '39033069.jpg', NULL, NULL),
(17, 'Mega Sale!!', 'Hurry Up, Grab your product now.', '59860000.jpg', NULL, NULL),
(18, 'Mega Sale!!', 'Hurry Up, Grab your product now.', '42134738.jpg', NULL, NULL),
(19, 'Mega Sale!!', 'Hurry Up, Grab your product now.', '55263563.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `track_orders`
--

CREATE TABLE `track_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `tracking_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_boy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `track_orders`
--

INSERT INTO `track_orders` (`id`, `user_id`, `tracking_code`, `status`, `total_quantity`, `delivery_boy`, `price`, `created_at`, `updated_at`) VALUES
(1, 4, '491904037', 'Your item has been delivered', '25', 'list', 10822.00, '2019-02-03 09:41:31', '2019-02-03 09:41:31'),
(2, 4, '491904037', 'Your item has been delivered', '25', 'list', 10822.00, '2019-02-03 09:47:03', '2019-02-03 09:47:03'),
(3, 5, '491916990', 'Your item has been delivered', '1', 'list', 1235.00, '2019-02-03 10:03:43', '2019-02-03 10:03:43'),
(4, 4, '491915536', 'Your item has been delivered', '11', 'list', 16135.00, '2019-02-03 10:04:26', '2019-02-03 10:04:26'),
(5, 4, '491924566', 'On the Way', '2', 'list', 400.00, '2019-02-03 10:13:22', '2019-02-03 10:13:22'),
(6, 4, '491924566', 'Your item is being ordered', '2', 'anish', 400.00, '2019-02-03 10:14:12', '2019-02-03 10:14:12'),
(7, 3, '491923221', 'Your item is being ordered', '5', 'anish', 9970.00, '2019-02-03 10:14:45', '2019-02-03 10:14:45'),
(8, 4, '491926923', 'On the Way', '8', 'nemi', 14080.00, '2019-02-03 10:18:26', '2019-02-03 10:18:26'),
(9, 2, '491927472', 'On the Way', '3', 'nemi', 92709.03, '2019-02-03 10:19:27', '2019-02-03 10:19:27'),
(10, 6, '491990379', 'Your item is being ordered', '1', 'BHUWAN', 2500.00, '2019-02-03 12:18:29', '2019-02-03 12:18:29'),
(11, 2, '492632487', 'Ready to Deliver', '1', 'anish', 2500.00, '2019-02-04 05:56:39', '2019-02-04 05:56:39'),
(12, 2, '492640573', 'On the Way', '1', 'anish', 2500.00, '2019-02-04 06:32:19', '2019-02-04 06:32:19'),
(13, 1, '492838928', 'Your item is being ordered', '2', 'Anish Maharjan', 3200.00, '2019-02-04 11:41:19', '2019-02-04 11:41:19'),
(14, 8, '500782466', 'Your item is being ordered', '2', 'Sashi', 2912.72, '2019-02-13 16:22:40', '2019-02-13 16:22:40'),
(15, 13, '507346648', 'Your item is being ordered', '13', 'bhuwan', 425431.27, '2019-02-21 10:40:27', '2019-02-21 10:40:27'),
(16, 15, '507494006', 'Ready to Deliver', '1', 'susan', 389.00, '2019-02-21 10:44:59', '2019-02-21 10:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `tshirts`
--

CREATE TABLE `tshirts` (
  `id` int(10) UNSIGNED NOT NULL,
  `tshirts_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tshirts`
--

INSERT INTO `tshirts` (`id`, `tshirts_image`, `created_at`, `updated_at`) VALUES
(1, '2706443.jpg', NULL, NULL),
(2, '64723190.jpg', NULL, NULL),
(3, '90891741.jpg', NULL, NULL),
(4, '38442474.jpg', NULL, NULL),
(5, '89395375.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dipesh Gyawali', 'dipesh@gmail.com', '$2y$10$XU58qoydmejq2IGX.ZdSDOugpPg/NXkB35iwEDAipdVA9ao5LEwTC', 'Male', 'HJPovlmHmEUG7KcUzEgioDPDjP606Wgk9LZDlXvvTAJPBwYS8cy3KBFlumTH', '2019-02-03 08:32:23', '2019-02-03 08:32:23'),
(2, 'Popular Koju', 'webpk144@gmail.com', '$2y$10$Tmi9V6rNbVPoDSK/UrupcuI8v9NJ0sQ//dhwNjmbkT2nZD2p3AAQS', 'Male', 'aWQkPmV3T4qCwVJdWlLhWFGYa06fFna7VR1uAlLdyXDUpnibnOjjXd7Iq4s3', '2019-02-03 08:32:46', '2019-02-03 08:32:46'),
(3, 'Bhupendra Ojha', 'bhu1.oja@gmail.com', '$2y$10$R01lQ/PLdiusQebS6iGkD.qRLLbVLvSeD.duI0VgmnFUBYoLkhUgO', 'Male', 'K6cA5Go1du7wD6I5dUshjpyizR773ClYvBeddaHt5S9BLX3mZj6DEqnsbe5A', '2019-02-03 08:32:47', '2019-02-03 08:32:47'),
(4, 'sdsvfbxzz', 'zxcvczxcvcxzxc@gmail.com', '$2y$10$O0UobdTH2Z.aKPe4mbMmlOCXiLz/MmDrqT2omtXu7CH8nKocFJzOG', 'Male', 'MPi5c7lYRfEQe1wdP3kAh1999SFo0foSBabuXgFrM9DtHj1LpQT6VcsMAXDj', '2019-02-03 09:30:59', '2019-02-03 09:30:59'),
(5, 'Sandesh Shrestha', 'sandesh.gnemi@gmail.com', '$2y$10$lOWiJcMWhXUkLP3Sj3Ktxuj43NpKYTC.mCY9xZL.zsDHbaNl7oZRm', 'Male', 'W9wiqJnAWSS8WRK5TNnMOGF0I7xtawnqSRSyS9FkwBx8CMXdazPoxbowskAp', '2019-02-03 09:33:11', '2019-02-03 09:33:11'),
(6, 'sauhardh', 'shawardhthapa@gmail.com', '$2y$10$Us4CsehNsJ47OsHbUUA8NeVo2do/alU/UMW3unY7StaWE7xh7mJIa', 'Male', NULL, '2019-02-03 11:56:50', '2019-02-03 11:56:50'),
(7, 'Popular Koju', 'krzpopular@gmail.com', '$2y$10$GhJu5ba7lzWXTpMN3k6hEuLlwuHfuDQaM0RvQZSmdjpJ.uZATxlPm', 'Male', 'VAS8brimGDwDTmgFz26J3IdFtCq77TG4ZqFvEEutIiWdlNeMZM1bziWHue57', '2019-02-04 05:22:34', '2019-02-04 05:22:34'),
(8, 'Sauhardh Thapa', 'sauhardh@gmail.com', '$2y$10$sixl/TtXKEpx0rjirKU6y.qNd9M/wWst/7gGcer8hN9JuKajfK7A2', 'Male', 'OcukfzArmMjt8RAlQPpov5Un5iiV4QKTiyXWuMdkVQrqZ5tHNLZYFCluCt37', '2019-02-05 04:55:21', '2019-02-05 04:55:21'),
(9, 'susan adhikari', 'adhikarisusan89@gmail.com', '$2y$10$oOpAq.7ZCxntkEgthuylguaAeJqQingb061kt8e5MkTnnRGa2pC.W', 'Male', NULL, '2019-02-06 10:05:37', '2019-02-06 10:05:37'),
(10, 'Hari Prasad Chaudhary', 'hpc.hari@gmail.com', '$2y$10$AyMFlPzGMUPKmX4VDifKK.3zm/kppi4KE4xwyLKiYqJ7YRM7NxGrC', 'Male', NULL, '2019-02-13 10:33:29', '2019-02-13 10:33:29'),
(11, 'Rishikesh Sharma', 'Rishi32@live.com', '$2y$10$h8PabISzFKcSq/6utiyNEOcjbKamnv6HHWRuhI0IanFwU23VKkQvi', 'Male', NULL, '2019-02-15 11:34:31', '2019-02-15 11:34:31'),
(12, 'Ribesh Basnet', 'ribeshbasnet19.rb@gmail.com', '$2y$10$ZjxBNKaK/S8wp/NsIa.TfeBPmcqE2yyOPD9XlQQoo93HfT4XxrNEW', 'Male', 'bLDR4PFIJ3dO21NTgOaXRu944mi18bg754YeCnPkimWaIfRKpUyfdus3SIGc', '2019-02-21 05:59:17', '2019-02-21 05:59:17'),
(13, 'asdasdadad1', 'asdalksdasd@gmail.com', '$2y$10$H3MQWUGjorw25KPgO1eYJOmLqz.ITs6Q/UgM0R.GNDSd.xX3XOtIe', 'Male', NULL, '2019-02-21 06:30:09', '2019-02-21 06:30:09'),
(14, 'asdasdasd', 'a@g.c', '$2y$10$DvUilIW.q58AEtKaF2FWMONT6vTCFQ4It1O6UzMOuXY34C3gluqi2', 'Male', '6drcC3pf06rlULvN9Yt5k7cdRIovhA9NBjmhi7bSWOskqkdJnnBow4x6Ob6H', '2019-02-21 08:57:25', '2019-02-21 08:57:25'),
(15, 'shawardh thapa', 'footballadda@gmail.com', '$2y$10$pCOjsAVmJd3DROZsSmoQ1uKxvZjLi/J1WtlpEnfyLv7FZLBwTCyjC', 'Male', 'JhABE7wAj3BmLrzyn0tKuiHIz9Xngmi1PipzHZ3CKkAellhiULMqRONGg66k', '2019-02-21 10:39:00', '2019-02-21 10:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `valentine`
--

CREATE TABLE `valentine` (
  `valentine_id` int(11) NOT NULL,
  `quotes` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `jpeg` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `gif` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `gift` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `valentine`
--

INSERT INTO `valentine` (`valentine_id`, `quotes`, `jpeg`, `gif`, `gift`) VALUES
(40, 'Lovers don\'t finally meet somewhere. They\'re in each other all along.', 'http://odokan.com/valentine/valentineimage/img1 (9).jpg', 'http://odokan.com/valentine/valentineimage/gi (2).gif', 'http://odokan.com/valentine/gift/img1 (2).jpg'),
(41, 'Love is like the wind, you can\'t see it but you can feel it.', 'http://odokan.com/valentine/valentineimage/jpeg1.jpg', 'http://odokan.com/valentine/valentineimage/gi (1).gif', 'http://odokan.com/valentine/gift/img1 (1).jpg'),
(42, 'One is loved because one is loved. No reason is needed for loving.', 'http://odokan.com/valentine/valentineimage/jpegg3 (1).jpeg', 'http://odokan.com/valentine/valentineimage/gi (3).gif', 'http://odokan.com/valentine/gift/img1 (4).jpg'),
(43, 'Each time you love, love as deeply as if it were forever.', 'http://odokan.com/valentine/valentineimage/jpegg3 (3).jpg', 'http://odokan.com/valentine/valentineimage/gi (4).gif', 'http://odokan.com/valentine/gift/img1 (5).jpg'),
(44, 'Loving is not just looking at each other, itâ€™s looking in the same direction.', 'http://odokan.com/valentine/valentineimage/jpegg3 (4).jpg', 'http://odokan.com/valentine/valentineimage/gi (7).gif', 'http://odokan.com/valentine/gift/img1 (11).jpg'),
(45, 'You always gain by giving love.', 'http://odokan.com/valentine/valentineimage/jpegg3 (1).jpg', 'http://odokan.com/valentine/valentineimage/gi (9).gif', 'http://odokan.com/valentine/gift/img1 (11).jpg'),
(46, 'Lovers don\'t finally meet somewhere. They\'re in each other all along.', 'http://odokan.com/valentine/valentineimage/jpegg3 (14).jpg', 'http://odokan.com/valentine/valentineimage/gi (12).gif', 'http://odokan.com/valentine/gift/img1 (14).jpg'),
(47, 'A flower cannot blossom without sunshine, and man cannot live without love.', 'http://odokan.com/valentine/valentineimage/jpegg3 (8).jpg', 'http://odokan.com/valentine/valentineimage/gi (17).gif', 'http://odokan.com/valentine/gift/img1 (17).jpg'),
(48, 'The best thing to hold onto in life is each other.', 'http://odokan.com/valentine/valentineimage/inspirational-love-quotes-sayings-29.jpg', 'http://odokan.com/valentine/valentineimage/giphy.gif', 'http://odokan.com/valentine/gift/SoftToys.jpg'),
(49, 'Iâ€™d rather spend one moment holding you than a lifetime knowing I never could.', 'http://odokan.com/valentine/valentineimage/2.jpg', 'http://odokan.com/valentine/valentineimage/giphy.gif', 'http://odokan.com/valentine/gift/download.jpg'),
(50, 'If I had a flower for every time I thought of you, I could walk in my garden forever.', 'http://odokan.com/valentine/valentineimage/4.jpg', 'http://odokan.com/valentine/valentineimage/tenor.gif', 'http://odokan.com/valentine/gift/ff335296d1e6eb14ac0e9d048b145f85.jpg'),
(51, 'The first thing I imagined when I saw the word â€˜loveâ€™ is you.', 'http://odokan.com/valentine/valentineimage/5.jpg', 'http://odokan.com/valentine/valentineimage/tenori.gif', 'http://odokan.com/valentine/gift/downloadn.jpg'),
(52, 'Your Lips? I kiss that. Your body? I hug that. My smile? You cause that. Your heart? I want that.', 'http://odokan.com/valentine/valentineimage/9.jpg', 'http://odokan.com/valentine/valentineimage/ii.gif', 'http://odokan.com/valentine/gift/images.jpg'),
(53, 'A flower cannot blossom without sunshine, and man cannot live without love.', 'http://odokan.com/valentine/valentineimage/img1 (4).jpg', 'http://odokan.com/valentine/valentineimage/img1 (10).jpg', 'http://odokan.com/valentine/gift/img1 (8).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `wishlist_user_id` bigint(20) NOT NULL,
  `wishlist_product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `wishlist_user_id`, `wishlist_product_id`, `created_at`, `updated_at`) VALUES
(1, 3, 7, '2019-02-03 08:35:12', '2019-02-03 08:35:12'),
(2, 3, 5, '2019-02-03 08:35:21', '2019-02-03 08:35:21'),
(3, 3, 8, '2019-02-03 08:35:37', '2019-02-03 08:35:37'),
(4, 3, 1, '2019-02-03 09:35:03', '2019-02-03 09:35:03'),
(5, 3, 5, '2019-02-03 09:35:10', '2019-02-03 09:35:10'),
(6, 4, 7, '2019-02-03 09:36:52', '2019-02-03 09:36:52'),
(7, 4, 7, '2019-02-03 09:36:56', '2019-02-03 09:36:56'),
(8, 4, 7, '2019-02-03 09:36:59', '2019-02-03 09:36:59'),
(9, 4, 1, '2019-02-03 09:38:48', '2019-02-03 09:38:48'),
(10, 5, 7, '2019-02-03 09:39:19', '2019-02-03 09:39:19'),
(11, 5, 7, '2019-02-03 09:39:46', '2019-02-03 09:39:46'),
(12, 4, 3, '2019-02-03 09:51:47', '2019-02-03 09:51:47'),
(13, 5, 4, '2019-02-03 09:52:56', '2019-02-03 09:52:56'),
(14, 5, 4, '2019-02-03 09:53:09', '2019-02-03 09:53:09'),
(15, 4, 7, '2019-02-03 09:53:17', '2019-02-03 09:53:17'),
(16, 3, 4, '2019-02-03 09:53:43', '2019-02-03 09:53:43'),
(17, 3, 4, '2019-02-03 09:53:46', '2019-02-03 09:53:46'),
(18, 3, 8, '2019-02-03 09:54:01', '2019-02-03 09:54:01'),
(19, 3, 8, '2019-02-03 09:54:04', '2019-02-03 09:54:04'),
(20, 3, 8, '2019-02-03 09:54:07', '2019-02-03 09:54:07'),
(21, 3, 8, '2019-02-03 09:54:09', '2019-02-03 09:54:09'),
(22, 3, 8, '2019-02-03 09:54:11', '2019-02-03 09:54:11'),
(23, 3, 8, '2019-02-03 09:54:13', '2019-02-03 09:54:13'),
(24, 3, 8, '2019-02-03 09:54:15', '2019-02-03 09:54:15'),
(25, 3, 8, '2019-02-03 09:54:16', '2019-02-03 09:54:16'),
(26, 3, 8, '2019-02-03 09:55:46', '2019-02-03 09:55:46'),
(27, 3, 8, '2019-02-03 09:55:46', '2019-02-03 09:55:46'),
(28, 3, 8, '2019-02-03 09:55:46', '2019-02-03 09:55:46'),
(29, 3, 8, '2019-02-03 09:55:46', '2019-02-03 09:55:46'),
(30, 3, 8, '2019-02-03 09:55:47', '2019-02-03 09:55:47'),
(31, 3, 8, '2019-02-03 09:55:47', '2019-02-03 09:55:47'),
(32, 3, 8, '2019-02-03 09:55:47', '2019-02-03 09:55:47'),
(33, 3, 8, '2019-02-03 09:55:47', '2019-02-03 09:55:47'),
(34, 3, 8, '2019-02-03 09:55:47', '2019-02-03 09:55:47'),
(35, 3, 8, '2019-02-03 09:55:48', '2019-02-03 09:55:48'),
(36, 3, 8, '2019-02-03 09:55:48', '2019-02-03 09:55:48'),
(37, 3, 8, '2019-02-03 09:55:48', '2019-02-03 09:55:48'),
(38, 3, 8, '2019-02-03 09:55:48', '2019-02-03 09:55:48'),
(39, 3, 8, '2019-02-03 09:55:48', '2019-02-03 09:55:48'),
(40, 3, 8, '2019-02-03 09:55:48', '2019-02-03 09:55:48'),
(41, 3, 8, '2019-02-03 09:55:49', '2019-02-03 09:55:49'),
(42, 3, 8, '2019-02-03 09:55:49', '2019-02-03 09:55:49'),
(43, 3, 8, '2019-02-03 09:55:49', '2019-02-03 09:55:49'),
(44, 3, 8, '2019-02-03 09:55:49', '2019-02-03 09:55:49'),
(45, 3, 8, '2019-02-03 09:55:50', '2019-02-03 09:55:50'),
(46, 3, 8, '2019-02-03 09:55:53', '2019-02-03 09:55:53'),
(47, 3, 8, '2019-02-03 09:55:54', '2019-02-03 09:55:54'),
(48, 3, 8, '2019-02-03 09:55:57', '2019-02-03 09:55:57'),
(49, 3, 8, '2019-02-03 09:55:58', '2019-02-03 09:55:58'),
(50, 3, 8, '2019-02-03 09:56:00', '2019-02-03 09:56:00'),
(51, 6, 8, '2019-02-03 12:00:54', '2019-02-03 12:00:54'),
(52, 6, 6, '2019-02-03 12:15:36', '2019-02-03 12:15:36'),
(53, 6, 6, '2019-02-03 12:15:50', '2019-02-03 12:15:50'),
(54, 6, 6, '2019-02-03 12:15:55', '2019-02-03 12:15:55'),
(55, 6, 4, '2019-02-03 12:43:21', '2019-02-03 12:43:21'),
(56, 6, 3, '2019-02-03 14:03:40', '2019-02-03 14:03:40'),
(57, 6, 1, '2019-02-03 14:30:06', '2019-02-03 14:30:06'),
(58, 6, 7, '2019-02-03 15:26:51', '2019-02-03 15:26:51'),
(59, 4, 1, '2019-02-05 07:29:09', '2019-02-05 07:29:09'),
(60, 5, 7, '2019-02-06 09:30:14', '2019-02-06 09:30:14'),
(61, 5, 7, '2019-02-06 09:30:18', '2019-02-06 09:30:18'),
(80, 8, 6, '2019-02-27 06:33:20', '2019-02-27 06:33:20'),
(77, 12, 13, '2019-02-21 06:00:29', '2019-02-21 06:00:29'),
(64, 1, 10, '2019-02-06 10:27:44', '2019-02-06 10:27:44'),
(65, 1, 11, '2019-02-06 10:28:53', '2019-02-06 10:28:53'),
(69, 1, 13, '2019-02-06 12:17:57', '2019-02-06 12:17:57'),
(70, 10, 3, '2019-02-13 11:32:23', '2019-02-13 11:32:23'),
(71, 10, 9, '2019-02-13 11:42:10', '2019-02-13 11:42:10'),
(76, 8, 12, '2019-02-21 05:45:42', '2019-02-21 05:45:42'),
(81, 8, 9, '2019-02-27 06:33:31', '2019-02-27 06:33:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desiredbrands`
--
ALTER TABLE `desiredbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interiordesign`
--
ALTER TABLE `interiordesign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_designs`
--
ALTER TABLE `interior_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_design_category`
--
ALTER TABLE `interior_design_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_design_image`
--
ALTER TABLE `interior_design_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_design_parent_category`
--
ALTER TABLE `interior_design_parent_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ladies_wear`
--
ALTER TABLE `ladies_wear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mens_wear`
--
ALTER TABLE `mens_wear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobilead`
--
ALTER TABLE `mobilead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_infos`
--
ALTER TABLE `product_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_parent_categories`
--
ALTER TABLE `product_parent_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subbanners`
--
ALTER TABLE `subbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track_orders`
--
ALTER TABLE `track_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tshirts`
--
ALTER TABLE `tshirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `valentine`
--
ALTER TABLE `valentine`
  ADD PRIMARY KEY (`valentine_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `desiredbrands`
--
ALTER TABLE `desiredbrands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `interiordesign`
--
ALTER TABLE `interiordesign`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `interior_designs`
--
ALTER TABLE `interior_designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interior_design_category`
--
ALTER TABLE `interior_design_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interior_design_image`
--
ALTER TABLE `interior_design_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interior_design_parent_category`
--
ALTER TABLE `interior_design_parent_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ladies_wear`
--
ALTER TABLE `ladies_wear`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mens_wear`
--
ALTER TABLE `mens_wear`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `mobilead`
--
ALTER TABLE `mobilead`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_infos`
--
ALTER TABLE `product_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_parent_categories`
--
ALTER TABLE `product_parent_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `subbanners`
--
ALTER TABLE `subbanners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `track_orders`
--
ALTER TABLE `track_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tshirts`
--
ALTER TABLE `tshirts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `valentine`
--
ALTER TABLE `valentine`
  MODIFY `valentine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
