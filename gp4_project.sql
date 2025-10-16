-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2025 at 06:30 AM
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
-- Database: `gp4_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `username`, `email`, `password`) VALUES
(4, 'Kaung Kaung', 'kaung@gmail.com', 'Kaung1234@@'),
(5, 'Kaung Htet Swe', 'kaunghtetswe781@gmail.com', 'Kaung2003@@');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `option` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `option`) VALUES
(1, 'kaunghtetswe', 'K1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ph_no` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `email`, `ph_no`, `message`) VALUES
(4, 'Kaung Htet Swe', 'kaunghtetswe781@gmail.com', '09446718808', 'well done!'),
(5, 'Kaung Htet Swe', 'kaunghtetswe781@gmail.com', '09446718808', 'well done');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `file` longblob NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `file`, `type`) VALUES
(5, 'PHP for Absolute Beginners by Jason Lengstorf', 0x50485020666f72204162736f6c75746520426567696e6e657273206279204a61736f6e204c656e6773746f72662e706466, 'phpbasic'),
(7, 'php Basic', 0x706870286e6f33292e706466, 'phpbasic'),
(8, 'php_intermediate', 0x7068705f696e7465726d6564696174652e706466, 'phpintermediate'),
(9, 'php-5-classes-and-objects', 0x7068702d352d636c61737365732d616e642d6f626a656374732e706466, 'phpadvance'),
(10, 'phalcon-php-framework-documentation', 0x7068616c636f6e2d7068702d6672616d65776f726b2d646f63756d656e746174696f6e2e706466, 'phpadvance'),
(11, 'JavaScriptNotesForProfessionals', 0x4a6176615363726970744e6f746573466f7250726f66657373696f6e616c732e706466, 'jsadvance'),
(12, 'javascript-web-app', 0x6a6176617363726970742d7765622d6170702e706466, 'jsadvance'),
(13, 'PHP For Beginner', 0x706870286e6f35292e706466, 'phpbasic'),
(14, 'PHP Learning', 0x6c6561726e696e672d7068702e706466, 'phpbasic'),
(15, 'PHP for Intermediate', 0x7068705f7475746f7269616c2e706466, 'phpintermediate'),
(16, 'JavaScript for Beginner', 0x6a735f6c6563747572652e706466, 'jsbasic'),
(17, 'JS for Beginner', 0x6a6176617363726970742d646f63756d656e746174696f6e2e706466, 'jsbasic'),
(18, 'JavaScript ', 0x657373656e7469616c2d6a6176617363726970742e706466, 'jsintermediate'),
(19, 'JS by Kaung Htet Swe', 0x6a6176617363726970742d7765622d6170702e706466, 'jsadvance'),
(20, 'JavaScript for Intermediate', 0x657373656e7469616c2d6a6176617363726970742e706466, 'jsintermediate'),
(21, 'HTML & CSS Basic', 0x48544d4c5f42534149432e706466, 'htmlbasic'),
(22, 'html-elements-quick-reference', 0x68746d6c2d656c656d656e74732d717569636b2d7265666572656e63652e706466, 'htmlbasic'),
(23, 'html-language-course-tutorial', 0x68746d6c2d6c616e67756167652d636f757273652d7475746f7269616c2e706466, 'htmlbasic'),
(24, 'css-cascading-style-sheets', 0x6373732d636173636164696e672d7374796c652d7368656574732e706466, 'htmlintermediate'),
(25, 'html-css', 0x68746d6c2d6373732e706466, 'htmladvance'),
(26, 'Html & Css for begineers', 0x68746d6c2d6c616e67756167652d636f757273652d7475746f7269616c2e706466, 'htmlbasic');

-- --------------------------------------------------------

--
-- Table structure for table `permitreview`
--

CREATE TABLE `permitreview` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permitreview`
--

INSERT INTO `permitreview` (`id`, `username`, `comment`) VALUES
(1, 'Kaung Htet Swe', 'good job'),
(4, 'Kaung Htet Swe', 'well done!'),
(5, 'Kaung Htet Swe', 'Good'),
(6, 'Kaung Htet Swe', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `phpbasic`
--

CREATE TABLE `phpbasic` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `username`, `comment`) VALUES
(1, 'Kaung Htet Swe', 'good job'),
(3, 'Kaung Htet Swe', 'well done!'),
(4, 'Kaung Htet Swe', 'Good'),
(5, 'Kaung Htet Swe', 'Monday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permitreview`
--
ALTER TABLE `permitreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpbasic`
--
ALTER TABLE `phpbasic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `permitreview`
--
ALTER TABLE `permitreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phpbasic`
--
ALTER TABLE `phpbasic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
