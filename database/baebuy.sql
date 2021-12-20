-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 12:30 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `prod_id` int(10) DEFAULT NULL,
  `cust_id` int(10) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `gender`, `category`, `created_on`, `updated_on`) VALUES
(1, 'Nike Zoom Fly 4', 'Nike', 'Unisex', 'Sneakers', '2021-12-15 06:37:35', '2021-12-16 16:00:43'),
(8, '3 lines', 'Adidas', 'Unisex', 'Sneakers', '2021-12-17 07:41:58', '2021-12-17 07:42:10'),
(9, 'Whisk', 'Puma', 'Male', 'Sneakers', '2021-12-17 10:04:28', '2021-12-17 10:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `products_category`
--

CREATE TABLE `products_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_category`
--

INSERT INTO `products_category` (`id`, `category`, `created_on`, `updated_on`) VALUES
(1, 'Sneakers', '2021-12-07 13:15:49', '2021-12-07 13:41:46'),
(2, 'Sports', '2021-12-07 13:16:02', '2021-12-07 13:41:53'),
(3, 'Boot', '2021-12-07 13:16:16', '2021-12-13 06:57:54'),
(4, 'Flip Flops', '2021-12-13 06:57:43', '2021-12-13 06:57:43'),
(5, 'Sandals', '2021-12-15 07:06:01', '2021-12-15 07:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `varient_id` int(11) DEFAULT NULL,
  `image` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `varient_id`, `image`, `created_on`, `updated_on`) VALUES
(1, 1, 'zoom-fly-4-1-1.jpg', '2021-12-16 08:12:59', '2021-12-20 06:46:54'),
(5, 1, 'zoom-fly-4-1-2.jpg', '2021-12-17 06:37:21', '2021-12-20 06:47:05'),
(6, 1, 'zoom-fly-4-1-3.jpg', '2021-12-17 06:39:02', '2021-12-20 06:47:19'),
(8, 2, 'zoom-fly-4-2-1.jpg', '2021-12-17 06:40:26', '2021-12-20 06:47:56'),
(9, 2, 'zoom-fly-4-2-2.jpg', '2021-12-17 06:40:26', '2021-12-20 06:48:07'),
(10, 2, 'zoom-fly-4-2-3.jpg', '2021-12-17 06:40:26', '2021-12-20 06:48:16'),
(11, 3, 'zoom-fly-4-3-1.jpg', '2021-12-17 06:41:28', '2021-12-20 06:48:37'),
(12, 3, 'zoom-fly-4-3-2.jpg', '2021-12-17 06:41:29', '2021-12-20 06:48:46'),
(13, 3, 'zoom-fly-4-3-3.jpg', '2021-12-17 06:41:29', '2021-12-20 06:48:56'),
(14, 17, 'Run_Falcon_2.0_Shoes_White_G58098_01_standard.jpg', '2021-12-17 07:44:29', '2021-12-17 07:44:29'),
(15, 17, 'Run_Falcon_2.0_Shoes_White_G58098_06_standard.jpg', '2021-12-17 07:44:29', '2021-12-17 07:44:29'),
(16, 17, 'Run_Falcon_2.0_Shoes_White_G58098_02_standard_hover.jpg', '2021-12-17 07:44:29', '2021-12-17 07:44:29'),
(17, 18, 'Run_Falcon_2.0_Shoes_Grey_GZ8078_01_standard.jpg', '2021-12-17 07:51:40', '2021-12-17 07:51:40'),
(18, 18, 'Run_Falcon_2.0_Shoes_Grey_GZ8078_06_standard.jpg', '2021-12-17 07:51:41', '2021-12-17 07:51:41'),
(27, 18, 'Run_Falcon_2.0_Shoes_Grey_GZ8078_02_standard_hover.jpg', '2021-12-17 08:32:55', '2021-12-17 08:32:55'),
(28, 19, 'Run_Falcon_2.0_Shoes_Black_H04539_01_standard.jpg', '2021-12-17 08:34:16', '2021-12-17 08:34:16'),
(29, 19, 'Run_Falcon_2.0_Shoes_Black_H04539_06_standard.jpg', '2021-12-17 08:34:16', '2021-12-17 08:34:16'),
(30, 19, 'Run_Falcon_2.0_Shoes_Black_H04539_02_standard_hover.jpg', '2021-12-17 08:34:16', '2021-12-17 08:34:16'),
(31, 22, 'Whisk-Men\'s-Running-Shoes (1).jfif', '2021-12-17 10:07:02', '2021-12-17 10:07:02'),
(32, 22, 'Whisk-Men\'s-Running-Shoes.jfif', '2021-12-17 10:07:03', '2021-12-17 10:07:03'),
(33, 22, 'Whisk-Men\'s-Running-Shoes (2).jfif', '2021-12-17 10:07:03', '2021-12-17 10:07:03'),
(34, 20, 'Whisk-Men\'s-Running-Shoes (1).jfif', '2021-12-17 10:14:12', '2021-12-17 10:14:12'),
(35, 20, 'Whisk-Men\'s-Running-Shoes.jfif', '2021-12-17 10:14:12', '2021-12-17 10:14:12'),
(36, 20, 'Whisk-Men\'s-Running-Shoes (2).jfif', '2021-12-17 10:14:12', '2021-12-17 10:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `products_varients`
--

CREATE TABLE `products_varients` (
  `id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `size` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `sdec` text DEFAULT NULL,
  `fdec` text DEFAULT NULL,
  `manu` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_varients`
--

INSERT INTO `products_varients` (`id`, `product_id`, `size`, `color`, `price`, `stock`, `sdec`, `fdec`, `manu`, `created_on`, `updated_on`) VALUES
(1, 1, '[\"7\",\"8\",\"10\"]', 'Lime-Orange', 14999, 0, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus praesentium assumenda nostrum voluptates odit eius ut magnam.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus praesentium assumenda nostrum voluptates odit eius ut magnam. Quae fugiat fugit cum numquam, quo sit quia quas dolor delectus itaque alias corrupti, vel pariatur error dignissimos architecto illum assumenda enim quaerat maiores laudantium? Fugiat quidem repellat omnis itaque beatae vitae aliquam.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus praesentium assumenda nostrum voluptates odit eius ut magnam. Quae fugiat fugit cum numquam, quo sit quia quas dolor delectus itaque alias corrupti, vel pariatur error dignissimos architecto illum assumenda enim quaerat maiores laudantium? Fugiat quidem repellat omnis itaque beatae vitae aliquam.', '2021-12-15 06:43:15', '2021-12-18 08:11:11'),
(2, 1, '[\"7\",\"8\",\"10\"]', 'White', 3458, 45, NULL, NULL, NULL, '2021-12-15 06:43:15', '2021-12-18 07:00:45'),
(3, 1, '[\"6\",\"8\",\"10\"]', 'Black', 8999, 54, NULL, NULL, NULL, '2021-12-15 06:43:15', '2021-12-18 07:01:01'),
(17, 8, '8', 'White', 3999, 56, NULL, NULL, NULL, '2021-12-17 07:43:37', '2021-12-17 07:43:37'),
(18, 8, '8', 'Grey', 3999, 56, NULL, NULL, NULL, '2021-12-17 07:43:38', '2021-12-17 07:43:38'),
(19, 8, '8', 'Black', 3999, 56, NULL, NULL, NULL, '2021-12-17 07:43:38', '2021-12-17 07:43:38'),
(20, 9, '8', 'Black-White', 4500, 45, NULL, NULL, NULL, '2021-12-17 10:06:14', '2021-12-17 10:06:14'),
(21, 9, '8', 'Black-orange', 4501, 33, NULL, NULL, NULL, '2021-12-17 10:06:15', '2021-12-17 10:06:15'),
(22, 9, '8', 'Grey-white', 4499, 78, NULL, NULL, NULL, '2021-12-17 10:06:16', '2021-12-17 10:06:16');

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
  `customer_id` int(10) DEFAULT NULL,
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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products_category`
--
ALTER TABLE `products_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_varient_id_images` (`varient_id`);

--
-- Indexes for table `products_varients`
--
ALTER TABLE `products_varients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_id_varients` (`product_id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products_category`
--
ALTER TABLE `products_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products_varients`
--
ALTER TABLE `products_varients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products_images`
--
ALTER TABLE `products_images`
  ADD CONSTRAINT `fk_varient_id_images` FOREIGN KEY (`varient_id`) REFERENCES `products_varients` (`id`);

--
-- Constraints for table `products_varients`
--
ALTER TABLE `products_varients`
  ADD CONSTRAINT `fk_product_id_varients` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
