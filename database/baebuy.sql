-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 08:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baebuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `prod_id` int(10) DEFAULT NULL,
  `prod_name` varchar(50) DEFAULT NULL,
  `prod_company` varchar(50) DEFAULT NULL,
  `prod_price` int(10) DEFAULT NULL,
  `prod_size` int(10) DEFAULT NULL,
  `prod_gender` varchar(20) DEFAULT NULL,
  `prod_category` varchar(20) DEFAULT NULL,
  `prod_color` varchar(20) DEFAULT NULL,
  `cust_id` int(10) DEFAULT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `cust_add` varchar(200) DEFAULT NULL,
  `cust_email` varchar(50) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `product_id` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `brand`, `price`, `gender`, `category`, `created_on`, `updated_on`) VALUES
(1, 'Shoe adidas', 'adidas rockstar', 'adidas', 40000, 'male', 'sneakers', '2021-12-03 17:04:53', '2021-12-03 17:04:53'),
(4, 'shoe nike', 'nike sports', 'nike', 10000, 'male', 'sports', '2021-12-04 06:58:44', '2021-12-04 06:58:44'),
(5, 'nike produc', 'nike name', 'nike', 12121, 'male', 'sports shoes', '2021-12-04 06:59:18', '2021-12-04 06:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` int(11) NOT NULL,
  `attribute_id` varchar(255) DEFAULT NULL,
  `attribute_name` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `attribute_id`, `attribute_name`, `created_on`, `updated_on`) VALUES
(1, 'shoe-adidas', 'price', '2021-12-04 07:15:33', '2021-12-04 07:15:33'),
(4, 'shoe-adidas', 'size', '2021-12-04 07:16:23', '2021-12-04 07:16:23'),
(5, 'shoe-adidas', 'color', '2021-12-04 07:16:23', '2021-12-04 07:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes_values`
--

CREATE TABLE `products_attributes_values` (
  `id` int(11) NOT NULL,
  `attribute_id` varchar(255) DEFAULT NULL,
  `attribute_name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_varients`
--

CREATE TABLE `products_varients` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_key` varchar(64) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `description` text DEFAULT NULL,
  `icon-class` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_required` tinyint(1) NOT NULL DEFAULT 0,
  `is_front_visible` tinyint(1) NOT NULL DEFAULT 0,
  `position` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `attribute_key`, `name`, `description`, `icon-class`, `is_active`, `is_required`, `is_front_visible`, `position`, `created_at`, `updated_at`) VALUES
(2, 'no-of-classes', 'Session Count', NULL, NULL, 1, 1, 1, NULL, '2021-06-17 07:19:43', '2021-09-19 10:07:56'),
(4, 'age-group', 'Age group', NULL, NULL, 1, 0, 1, NULL, '2021-06-29 13:08:19', '2021-09-19 10:07:56'),
(5, 'course-mode', 'Course mode', NULL, NULL, 1, 0, 1, NULL, '2021-06-29 13:08:32', '2021-09-19 10:07:56'),
(6, 'session-duration', 'Session duration', NULL, NULL, 1, 0, 1, NULL, '2021-06-29 13:08:51', '2021-09-19 10:07:56'),
(7, 'language', 'Language', NULL, NULL, 1, 0, 1, NULL, '2021-07-27 10:37:13', '2021-09-19 10:07:56'),
(8, 'youtube-gallery-video', 'YouTube Gallery Video', NULL, NULL, 1, 0, 0, NULL, '2021-08-08 17:34:00', '2021-09-19 10:07:56'),
(9, 'master-age-group', 'Master Age Group', NULL, NULL, 1, 0, 0, NULL, '2021-08-17 07:54:44', '2021-09-19 10:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute_values`
--

CREATE TABLE `product_attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `value` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_json` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `result` varchar(20) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `mode` varchar(20) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `email_otp` int(10) DEFAULT NULL,
  `is_email_verified` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `mobile_otp` int(10) DEFAULT NULL,
  `is_mobile_verified` varchar(20) DEFAULT NULL,
  `complete_verified` varchar(20) DEFAULT NULL,
  `is_active` varchar(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `email_otp`, `is_email_verified`, `mobile`, `mobile_otp`, `is_mobile_verified`, `complete_verified`, `is_active`, `deleted_at`, `created_on`, `updated_on`) VALUES
(1, 'Amit Kumar Sahu', 'qwertyui', 'amitsahu27081999@gmail.com', NULL, NULL, '07805953994', 4434, NULL, NULL, NULL, '2021-11-25 12:53:20', '2021-11-25 12:53:20', '2021-12-01 13:17:17'),
(2, 'Amit Kumar Sahu', 'wertyu', 'amitsahu27081999@gmail.com', NULL, NULL, '07805953994', 4434, NULL, NULL, NULL, '2021-11-25 12:53:50', '2021-11-25 12:53:50', '2021-12-01 13:17:17'),
(3, 'Ajeet', 'ajeethumai', 'ajeet1223@gmail.com', NULL, NULL, '9876543456', NULL, NULL, NULL, NULL, '2021-11-25 13:22:49', '2021-11-25 13:22:49', '2021-11-25 13:22:49'),
(4, 'Samar ', 'samar', 'samar@gmail.com', NULL, NULL, '7737373737', 7111, NULL, NULL, NULL, '2021-11-26 05:18:38', '2021-11-26 05:18:38', '2021-12-01 13:31:16'),
(5, 'Samar ', 'asdfghjkjhg', 'samar@gmail.com', NULL, NULL, '7737373737', 7111, NULL, NULL, NULL, '2021-11-26 05:21:02', '2021-11-26 05:21:02', '2021-12-01 13:31:16'),
(6, 'Samar ', 'asdfghjk', 'samar@gmail.com', NULL, NULL, '7737373737', 7111, NULL, NULL, NULL, '2021-11-26 05:22:20', '2021-11-26 05:22:20', '2021-12-01 13:31:16'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 7184, NULL, NULL, NULL, '2021-11-26 05:23:16', '2021-11-26 05:23:16', '2021-11-26 05:23:16'),
(8, 'nadeem', 'nadeempassword', 'nadeem12@gmail.com', NULL, NULL, '2345678965', NULL, NULL, NULL, NULL, '2021-11-26 05:26:33', '2021-11-26 05:26:33', '2021-11-26 05:26:33'),
(11, 'Samar ', 'samar123', 'samar@gmail.com', NULL, NULL, '2345678765', NULL, NULL, NULL, NULL, '2021-11-26 06:08:34', '2021-11-26 06:08:34', '2021-11-26 06:08:34'),
(12, 'Amit Kumar Sahu', 'sdfgghjj', 'amitsahu27081999@gmail.com', NULL, NULL, '12345678', 2729, NULL, NULL, NULL, '2021-11-26 06:10:01', '2021-11-26 06:10:01', '2021-11-26 06:10:04'),
(13, 'Amit Kumar Sahu', 'qwertyu', 'samar@gmail.com', 6789, 'true', '2345678876', 7001, 'true', NULL, NULL, NULL, '2021-11-26 07:53:51', '2021-11-26 11:44:40'),
(14, 'G.one', 'gone', 'gone@gmail.com', 9332, 'true', '6578656786', 1269, 'true', NULL, NULL, NULL, '2021-11-26 11:49:00', '2021-12-02 10:22:39'),
(15, 'Ajeet', 'aj', 'ajeet1223@gmail.com', 2470, 'true', '9876543214', 5606, 'true', 'true', NULL, NULL, '2021-11-26 11:50:40', '2021-12-02 07:46:56'),
(16, 'Ajeet', 'ajeet', 'ajeet@gmail.com', 8453, 'true', '9876543265', 5373, 'true', 'true', NULL, NULL, '2021-11-29 12:33:26', '2021-11-29 12:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `users_add`
--

CREATE TABLE `users_add` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `house` varchar(200) DEFAULT NULL,
  `area` varchar(200) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes_values`
--
ALTER TABLE `products_attributes_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_varients`
--
ALTER TABLE `products_varients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `attribute_key` (`attribute_key`);

--
-- Indexes for table `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_id` (`attribute_id`,`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_add`
--
ALTER TABLE `users_add`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products_attributes_values`
--
ALTER TABLE `products_attributes_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_varients`
--
ALTER TABLE `products_varients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_add`
--
ALTER TABLE `users_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
