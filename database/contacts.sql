-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 05:20 PM
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
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Martinez', 'john@test.com', '01584479625', 'New York', '2024-08-15 14:43:56', '2024-08-16 04:52:17'),
(2, 'Jack', 'jack@test.com', '4578123967', 'Detroit', '2024-08-15 14:44:35', '2024-08-16 03:15:39'),
(3, 'Jane', 'jane@test.com', '4458621873', 'London', '2024-08-13 14:45:23', '2024-08-16 03:15:09'),
(4, 'Tommy', 'tommy@test.com', '01684795284', 'Michigan', '2024-08-14 14:46:55', '2024-08-15 22:19:07'),
(5, 'Jason Momoa', 'jason@test.com', '01789695289', 'California', '2024-08-15 14:48:02', '2024-08-16 04:43:39'),
(6, 'Raul', 'raul@ea.com', '98754821687', 'Madrid', '2024-08-15 23:04:32', '2024-08-15 23:04:32'),
(8, 'Paul', 'walker@gmail.com', '01475896245', 'Manchester', '2024-08-15 23:15:07', '2024-08-15 23:15:07'),
(13, 'Michael', 'michael@yahoo.com', '8596742698', 'Los Santos', '2024-08-16 06:28:48', '2024-08-16 06:28:48'),
(14, 'Alice', 'alice@yahoo.com', '98576248963', 'Toronto', '2024-08-16 07:44:16', '2024-08-16 07:44:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
