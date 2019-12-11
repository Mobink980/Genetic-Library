-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 08:11 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `files_of_clients`
--

CREATE TABLE `files_of_clients` (
  `id` int(20) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_address` text NOT NULL,
  `index_in_login` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files_of_clients`
--

INSERT INTO `files_of_clients` (`id`, `file_name`, `file_address`, `index_in_login`) VALUES
(2, 'greedy', 'c//:vnbmvmbnmcvmc/bncmbmn/123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`id`, `name`, `username`, `password`, `email`, `age`) VALUES
(1, 'ali', '', '', 'cv@', '24'),
(2, 'mhd', '', '', 'cv2@', '24'),
(3, 'zcn', '94122681004', '2561', 'yiuuo', '24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  ADD PRIMARY KEY (`index_in_login`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  ADD CONSTRAINT `peper_for_how` FOREIGN KEY (`index_in_login`) REFERENCES `log_in` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
