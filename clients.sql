-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 08:08 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
  `file_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `file_name` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `file_address` text COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='For retrieving the files of the users.';

--
-- Dumping data for table `files_of_clients`
--

INSERT INTO `files_of_clients` (`file_id`, `user_id`, `file_name`, `file_address`) VALUES
(1, 3, '0023.jpg', 'uploads/5df8e4f60025d3.77570096.jpg'),
(2, 3, '20.jpg', 'uploads/5df8e5c3d47b54.19501679.jpg'),
(3, 3, '00014.jpg', 'uploads/5df8e8a531df62.83505538.jpg'),
(4, 3, '00007.jpg', 'uploads/5df8eb52d08f41.15480169.jpg'),
(5, 3, '00040.jpg', 'uploads/5df8ec8abc28e3.81953666.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `about` text COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`user_id`, `firstname`, `lastname`, `username`, `password`, `email`, `about`) VALUES
(1, 'Jane', 'Austin', 'Jane2580', '123456', 'Jane2580@users.com', 'Senior Java Programmer'),
(2, 'Susan', 'Watson', 'Susan63', '74123', 'Susan63@users.com', 'Big Data Researcher'),
(3, 'Ali', 'Ahmadi', 'Ali23', '15689', 'ali23@users.com', 'I love data science'),
(4, 'Drake', 'Johnson', 'drake23', '165689', 'drake23@users.com', 'I love engineering'),
(5, 'Jim', 'Ronan', 'Ronan12', '45612', 'Ronan12@users.com', 'I love Science'),
(6, 'Jennifer', 'Brenden', 'Brenden11', '1246g2', 'Brenden11@users.com', 'I am assistant professor'),
(7, 'Adam', 'Dean', 'Dean1100', '113fd2', 'Dean1100@users.com', 'I am associate professor'),
(8, 'Kane', 'Solomon', 'Solomon1412', 'f51hj23', 'Solomon1412@users.com', 'I am junior researcher'),
(9, 'John', 'Norman', 'Norman5642', '189635', 'Norman5642@users.com', 'I am senior researcher'),
(10, 'Marry', 'Watson', 'marry98', '1235dg2', 'marry98@users.com', 'phd student'),
(11, 'Mohammad', 'Bakhshi', 'Bakhshi23', '13dfg56', 'Bakhshi23@users.com', 'working in Google'),
(12, 'Hamid', 'Fatemi', 'Hamidf12', '89dg521', 'Hamidf12@users.com', 'working in Amazon'),
(13, 'Reza', 'Roshan', 'reza56', 'dg24hjy45', 'reza56@users.com', 'working in Microsoft'),
(14, 'Hossein', 'Poorreza', 'hossein4506', '123489', 'hossein4506@users.com', 'I am a MSc student in NYU.'),
(15, 'Zahra', 'Ribandi', 'zahra006', 'hello123', 'zahra006@users.net', 'I am a MSc student in NYU.'),
(16, 'Ali', 'Banan', 'banan52', 'asd123', 'banan52@users.com', 'NLP programmer'),
(17, 'Saghar', 'Banihashemi', 'saghar896', 'zxcv', 'saghar896@users.net', 'Senior developer'),
(18, 'Jim', 'Carter', 'Jim55', 'qaz', 'Jim55@users.com', 'Senior Python developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  ADD PRIMARY KEY (`file_id`),
  ADD UNIQUE KEY `file_id` (`file_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
