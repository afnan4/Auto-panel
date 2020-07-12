-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2020 at 12:55 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Control_Panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Commands`
--

CREATE TABLE `Commands` (
  `id` int(11) NOT NULL,
  `left` varchar(255) COLLATE utf8_bin DEFAULT '0',
  `right` varchar(255) COLLATE utf8_bin DEFAULT '0',
  `Forward` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `backward` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `stop` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Commands`
--

INSERT INTO `Commands` (`id`, `left`, `right`, `Forward`, `backward`, `stop`) VALUES
(10, '0', '0', '1', '0', '0'),
(11, '0', '1', '0', '0', '0'),
(12, '1', '0', '0', '0', '0'),
(13, '0', '0', '0', '0', '1'),
(14, '0', '0', '0', '1', '0'),
(15, '0', '0', '0', '0', '1'),
(16, '0', '0', '1', '0', '0'),
(17, '0', '1', '0', '0', '0'),
(18, '0', '0', '0', '0', '1'),
(19, '0', '0', '1', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Commands`
--
ALTER TABLE `Commands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Commands`
--
ALTER TABLE `Commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
