-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 01:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `Customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_customer` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Customer_name`, `email`, `password`, `Customer_location`, `is_customer`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hritika Mathur', 'mathurhritika@gmail.com', '$2y$10$UI3pFH7D/SnB3am5cGljAu2wupg8Yr1n36w7t2Qfr9uqpnXXZAYPa', '', 0, NULL, '2021-03-30 06:08:41', '2021-03-30 06:08:41'),
(2, 'Customer1', 'customer1@gmail.com', '$2y$10$e5uJGDHGMzgFORdAmT1YwupdWOrGdzfTSvuOC9T8D25a5X6QthbQO', 'rgfdhf', 0, NULL, '2021-03-30 06:59:13', '2021-03-30 06:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `food_type` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `restaurant_name`, `item_name`, `item_price`, `food_type`, `item_description`, `created_at`, `updated_at`) VALUES
(3, 'Restro 2', 'pasta', '300', 'veg', 'b thgng', '2021-03-29 12:15:48', '2021-03-29 12:15:48'),
(4, 'Restro 2', 'Samosa', '20', 'veg', 'gvdfgbfgh', '2021-03-29 12:16:41', '2021-03-29 12:16:41'),
(6, 'Restro 2', 'Kebab\'s', '100', 'veg', 'tyuhjkgh', '2021-03-30 18:07:49', '2021-03-30 18:07:49'),
(7, 'Restaurant 1', 'Pizzaaa', '235', 'veg', 'jhgfhrtsh', '2021-03-30 19:04:08', '2021-03-30 19:04:08'),
(9, 'Restaurant 1', 'Chicken Pizza', '355', 'non_veg', 'gdfgdfgsd', '2021-03-30 19:06:53', '2021-03-30 19:06:53'),
(10, 'Restro 2', 'Pani Puri', '50', 'veg', 'gnhfgnfg', '2021-03-30 19:10:29', '2021-03-30 19:10:29'),
(11, 'Restaurant 1', 'Pani Puri', '55', 'veg', 'errgregrd', '2021-03-30 19:10:48', '2021-03-30 19:10:48'),
(12, 'Restaurant 1', 'Shakes', '500', 'veg', 'thfghfgbgbfgfbhg', '2021-03-31 08:02:59', '2021-03-31 08:02:59');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_03_30_081627_create_restaurants_table', 1),
(4, '2021_03_30_081653_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `restro_name` varchar(255) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `restro_name`, `customer_id`, `customer_name`, `menu_id`, `item_name`, `created_at`) VALUES
(1, 'Restaurant 1', 1, 'Hritika Mathur', 12, 'Shakes', '2021-03-31 11:10:46'),
(2, 'Restro 2', 1, 'Hritika Mathur', 6, 'Kebab\'s', '2021-03-31 11:11:53'),
(3, 'Restaurant 1', 1, 'Hritika Mathur', 9, 'Chicken Pizza', '2021-03-31 11:11:58'),
(4, 'Restaurant 1', 2, 'Customer 1', 9, 'Chicken Pizza', '2021-03-31 11:23:30'),
(5, 'Restro 2', 2, 'Customer 1', 3, 'pasta', '2021-03-31 11:23:34'),
(6, 'Restro 2', 2, 'Customer 1', 10, 'Pani Puri', '2021-03-31 11:23:57'),
(7, 'Restaurant 1', 1, 'Hritika Mathur', 11, 'Pani Puri', '2021-03-31 11:29:29'),
(8, 'Restro 2', 1, 'Hritika Mathur', 3, 'pasta', '2021-03-31 11:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `Restro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Restro_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_restaurant` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `Restro_name`, `email`, `password`, `Restro_location`, `is_restaurant`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Restaurant 1', 'restro1@gmail.com', '$2y$10$3h5Ryq6.gsnfO590Jq9Ll.bK4jBjMrV/Yc7U1cRw0wXmfRXZqxFJq', 'Jaipur', 0, NULL, '2021-03-30 05:40:54', '2021-03-30 05:40:54'),
(2, 'Restro 2', 'restro2@gmail.com', '$2y$10$ZQf295YNUPFEgef8.WmkZ.hkQJAtKS591PgdzM8uIBIjKIidn.vl.', 'rhfgbfdgdfg', 0, NULL, '2021-03-30 06:50:24', '2021-03-30 06:50:24');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_customer_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_menu_id` (`menu_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `restaurants_restro_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
