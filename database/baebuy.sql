-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 09:47 AM
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
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `mobile` varchar(20) DEFAULT NULL,
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
(1, 'Amit Kumar Sahu', 'qwertyui', 'amitsahu27081999@gmail.com', NULL, NULL, '07805953994', NULL, NULL, NULL, NULL, '2021-11-25 12:53:20', '2021-11-25 12:53:20', '2021-11-25 12:53:20'),
(2, 'Amit Kumar Sahu', 'wertyu', 'amitsahu27081999@gmail.com', NULL, NULL, '07805953994', NULL, NULL, NULL, NULL, '2021-11-25 12:53:50', '2021-11-25 12:53:50', '2021-11-25 12:53:50'),
(3, 'Ajeet', 'ajeethumai', 'ajeet1223@gmail.com', NULL, NULL, '9876543456', NULL, NULL, NULL, NULL, '2021-11-25 13:22:49', '2021-11-25 13:22:49', '2021-11-25 13:22:49'),
(4, 'Samar ', 'samar', 'samar@gmail.com', NULL, NULL, '7737373737', NULL, NULL, NULL, NULL, '2021-11-26 05:18:38', '2021-11-26 05:18:38', '2021-11-26 05:18:38'),
(5, 'Samar ', 'asdfghjkjhg', 'samar@gmail.com', NULL, NULL, '7737373737', NULL, NULL, NULL, NULL, '2021-11-26 05:21:02', '2021-11-26 05:21:02', '2021-11-26 05:21:02'),
(6, 'Samar ', 'asdfghjk', 'samar@gmail.com', NULL, NULL, '7737373737', NULL, NULL, NULL, NULL, '2021-11-26 05:22:20', '2021-11-26 05:22:20', '2021-11-26 05:22:20'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 7184, NULL, NULL, NULL, '2021-11-26 05:23:16', '2021-11-26 05:23:16', '2021-11-26 05:23:16'),
(8, 'nadeem', 'nadeempassword', 'nadeem12@gmail.com', NULL, NULL, '2345678965', NULL, NULL, NULL, NULL, '2021-11-26 05:26:33', '2021-11-26 05:26:33', '2021-11-26 05:26:33'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 9694, NULL, NULL, NULL, '2021-11-26 05:26:35', '2021-11-26 05:26:35', '2021-11-26 05:26:35'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, 9171, NULL, NULL, NULL, '2021-11-26 05:43:44', '2021-11-26 05:43:44', '2021-11-26 05:43:44'),
(11, 'Samar ', 'samar123', 'samar@gmail.com', NULL, NULL, '2345678765', NULL, NULL, NULL, NULL, '2021-11-26 06:08:34', '2021-11-26 06:08:34', '2021-11-26 06:08:34'),
(12, 'Amit Kumar Sahu', 'sdfgghjj', 'amitsahu27081999@gmail.com', NULL, NULL, '12345678', 2729, NULL, NULL, NULL, '2021-11-26 06:10:01', '2021-11-26 06:10:01', '2021-11-26 06:10:04'),
(13, 'Amit Kumar Sahu', 'qwertyu', 'samar@gmail.com', 6789, 'true', '2345678876', 7001, 'true', NULL, NULL, NULL, '2021-11-26 07:53:51', '2021-11-26 11:44:40'),
(14, 'G.one', '1234567', 'gone@gmail.com', 7720, 'true', '6578656786', 1269, 'true', NULL, NULL, NULL, '2021-11-26 11:49:00', '2021-11-26 11:49:25'),
(15, 'Ajeet', 'ajeet', 'ajeet1223@gmail.com', 2470, 'true', '9876543214', 5236, 'true', 'true', NULL, NULL, '2021-11-26 11:50:40', '2021-11-26 12:44:04');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_add`
--
ALTER TABLE `users_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
