-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 08:19 AM
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
-- Database: `cruise_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(11) NOT NULL,
  `comp_url` varchar(100) DEFAULT NULL,
  `comp_email1` varchar(100) DEFAULT NULL,
  `comp_email2` varchar(100) DEFAULT NULL,
  `comp_delivery_fee` varchar(255) DEFAULT NULL,
  `comp_contact1` varchar(20) DEFAULT NULL,
  `comp_contact2` varchar(20) DEFAULT NULL,
  `comp_address` varchar(300) DEFAULT NULL,
  `comp_map` text DEFAULT NULL,
  `comp_sm1` varchar(300) DEFAULT NULL,
  `comp_sm2` varchar(300) DEFAULT NULL,
  `comp_sm3` varchar(300) DEFAULT NULL,
  `comp_sm4` varchar(300) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `comp_url`, `comp_email1`, `comp_email2`, `comp_delivery_fee`, `comp_contact1`, `comp_contact2`, `comp_address`, `comp_map`, `comp_sm1`, `comp_sm2`, `comp_sm3`, `comp_sm4`, `order_id`) VALUES
(1, NULL, 'info@explorcruise.com', NULL, NULL, '+1-123-456-7890', '+1-123-456-7890', '123 AIHP Horizon Street, Philadelphia, PA 12345', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'e1', 'e1@gm.co', '6486843436', 'uykfguyfjf', '2024-12-28 09:19:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cruise_booking`
--

CREATE TABLE `cruise_booking` (
  `id` int(64) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `cruise_length` varchar(255) NOT NULL,
  `cruise_line` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cruise_booking`
--

INSERT INTO `cruise_booking` (`id`, `destination`, `date`, `cruise_length`, `cruise_line`, `name`, `email`, `phone`, `created_at`) VALUES
(1, 'Costa Rica', '29-12-2024', '3 to 5 Nights', 'Carnival Cruises', 'test1', 't1@gm.co', '5465465464', '2024-12-28 09:17:50'),
(2, 'Central America', '03-01-2025', '10 to 14 Nights', 'American Cruise Lines', 't2', 't2@gm.co', '5466516515', '2024-12-28 09:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(11) NOT NULL,
  `oth_name` varchar(200) DEFAULT NULL,
  `oth_image` varchar(255) DEFAULT NULL,
  `oth_url` varchar(200) DEFAULT NULL,
  `oth_page` mediumtext DEFAULT NULL,
  `oth_head_txt` text DEFAULT NULL,
  `oth_tag_line` text DEFAULT NULL,
  `oth_seo_title` text DEFAULT NULL,
  `oth_seo_keys` text DEFAULT NULL,
  `oth_seo_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `oth_name`, `oth_image`, `oth_url`, `oth_page`, `oth_head_txt`, `oth_tag_line`, `oth_seo_title`, `oth_seo_keys`, `oth_seo_desc`) VALUES
(1, 'Home', NULL, NULL, NULL, NULL, NULL, 'Home | Explor Cruise', NULL, NULL),
(2, 'About Us', NULL, NULL, NULL, NULL, NULL, 'About Us | Explor Cruise', NULL, NULL),
(3, 'Contact Us', NULL, NULL, NULL, NULL, NULL, 'Contact Us | Explor Cruise', NULL, NULL),
(4, 'Cruise ', NULL, NULL, NULL, NULL, NULL, 'Cruise  | Explor Cruise', NULL, NULL),
(6, 'Privacy Policy', NULL, NULL, NULL, NULL, NULL, 'Privacy Policy | Explor Cruise', NULL, NULL),
(7, 'Terms & Condition', NULL, NULL, NULL, NULL, NULL, 'Terms & Condition | Explor Cruise', NULL, NULL),
(8, 'Refund Policy', NULL, NULL, NULL, NULL, NULL, 'Refund Policy | Explor Cruise', NULL, NULL),
(9, 'Disclaimer', NULL, NULL, NULL, NULL, NULL, 'Disclaimer | Explor Cruise', NULL, NULL),
(10, 'Cruise Booking', NULL, NULL, NULL, NULL, NULL, 'Cruise Booking | Explor Cruise', NULL, NULL),
(11, 'Luxury Cruise', NULL, NULL, NULL, NULL, NULL, 'Luxury Cruise | Explor Cruise', NULL, NULL),
(12, 'Adventure Cruise', NULL, NULL, NULL, NULL, NULL, 'Adventure Cruise | Explor Cruise', NULL, NULL),
(13, 'River Cruise', NULL, NULL, NULL, NULL, NULL, 'River Cruise | Explor Cruise', NULL, NULL),
(14, 'Family Cruise', NULL, NULL, NULL, NULL, NULL, 'Family Cruise | Explor Cruise', NULL, NULL),
(15, 'Sailing Cruise', NULL, NULL, NULL, NULL, NULL, 'Sailing Cruise | Explor Cruise', NULL, NULL),
(16, 'World Cruise', NULL, NULL, NULL, NULL, NULL, 'World Cruise | Explor Cruise', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@email.com', NULL, '$2y$10$I1oz01zZvB9gHGgePZ7PIejS43dZbrD0OJWoP7ETNFCT4RNSlT6Tm', '6QP4K7VkZrECpQJ68wxlDJaJ27RpcMt0BfR661LLFHXSobICvMnaWnyBBKEB', '2024-08-27 06:27:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruise_booking`
--
ALTER TABLE `cruise_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
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
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cruise_booking`
--
ALTER TABLE `cruise_booking`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
