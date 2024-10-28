-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2024 at 04:59 PM
-- Server version: 8.0.39-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `migration-stories`
--
CREATE DATABASE IF NOT EXISTS `migration-stories` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `migration-stories`;

-- --------------------------------------------------------

--
-- Table structure for table `nav-register`
--

CREATE TABLE `nav-register` (
  `id` int DEFAULT NULL,
  `session` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qr-unique`
--

CREATE TABLE `qr-unique` (
  `session` varchar(255) NOT NULL,
  `used` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int NOT NULL,
  `Story_Number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_of_ppt` text COLLATE utf8mb4_unicode_ci,
  `Contact_details` text COLLATE utf8mb4_unicode_ci,
  `Date_of_story` text COLLATE utf8mb4_unicode_ci,
  `Story_Format` text COLLATE utf8mb4_unicode_ci,
  `Migration_Category` text COLLATE utf8mb4_unicode_ci,
  `Migration_Sub-Category` text COLLATE utf8mb4_unicode_ci,
  `Migration_Sub-Category1` text COLLATE utf8mb4_unicode_ci,
  `Migration_Sub-Category2` text COLLATE utf8mb4_unicode_ci,
  `Country` text COLLATE utf8mb4_unicode_ci,
  `Exhibition` text COLLATE utf8mb4_unicode_ci,
  `Disc_Type` text COLLATE utf8mb4_unicode_ci,
  `Other_Interactive_Format` text COLLATE utf8mb4_unicode_ci,
  `Story` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Keywords` text COLLATE utf8mb4_unicode_ci,
  `AI_Keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Link_to_transcript_file` text COLLATE utf8mb4_unicode_ci,
  `Link_to_raw_data_audio_video_image` text COLLATE utf8mb4_unicode_ci,
  `Completed_by` text COLLATE utf8mb4_unicode_ci,
  `Notes` text COLLATE utf8mb4_unicode_ci,
  `reviewed` int DEFAULT NULL,
  `votes` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user` text COLLATE utf8mb4_general_ci NOT NULL,
  `pass` text COLLATE utf8mb4_general_ci NOT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
