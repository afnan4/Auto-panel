-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2020 at 12:59 AM
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
(105, '1', '0', '0', '0', '0'),
(106, '0', '0', '89', '0', '0'),
(107, '0', '20', '0', '0', '0'),
(108, '50', '0', '0', '0', '0'),
(109, '0', '0', '89', '0', '0'),
(110, '0', '20', '0', '0', '0'),
(111, '50', '0', '0', '0', '0'),
(112, '0', '20', '89', '0', '0'),
(113, '0', '20', '0', '0', '0'),
(114, '50', '0', '0', '0', '0'),
(115, '0', '20', '89', '0', '0'),
(116, '0', '20', '0', '0', '0'),
(117, '50', '0', '0', '0', '0'),
(118, '50', '20', '89', '0', '0'),
(119, '50', '20', '89', '0', '0'),
(120, '0', '0', '0', '0', '1'),
(121, '0', '0', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Move_Commands`
--

CREATE TABLE `Move_Commands` (
  `id` int(11) NOT NULL,
  `left` int(11) DEFAULT 0,
  `right` int(11) DEFAULT 0,
  `Forward` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Move_Commands`
--

INSERT INTO `Move_Commands` (`id`, `left`, `right`, `Forward`) VALUES
(112, 50, 1, 89),
(113, 50, 200, 5),
(114, 0, 1, 0),
(115, 500, 40, 0),
(116, 50, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Commands`
--
ALTER TABLE `Commands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Move_Commands`
--
ALTER TABLE `Move_Commands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Commands`
--
ALTER TABLE `Commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `Move_Commands`
--
ALTER TABLE `Move_Commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
