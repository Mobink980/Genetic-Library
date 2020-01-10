-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 09:12 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `a_author` varchar(256) NOT NULL,
  `a_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `a_title`, `a_text`, `a_author`, `a_date`) VALUES
(1, '50 great summer recipes', 'There are many recipes you can create for the summer which involves grilling, boiling frying, and toasting.', 'Admin', '2017-11-25 12:23:11'),
(2, 'A series of computer software', 'In this article, you will learn aboutsome of the software used on computers. This involves basic softwares used in computers and more advanced softwares used by developers.', 'Daniel Nielsen', '2017-11-25 12:23:11');

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
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(3, 'mobink980@gmail.com', '84d6211305b74dc0', '$2y$10$qAV57C.Ag1/Nd5T28s2QSuq0HH4hP2nDh7/1Ix9PE.RMNc25.qBhi', '1578244225');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Alashkar24', 'alashkar24@gmail.com', '$2y$10$VxvNhZPLs1kAdn1D5xTswe5r8DVVaKZTnruhF5qukyBScOkvTbyvS'),
(2, 'Mahdi323', 'mahdi323@outlook.com', '$2y$10$U3WQNJ7yzwGiZkNugZ6BSOoK/ZfJunjlZiO8ogmk4ogRrFnUtuQYu'),
(3, 'Maher45', 'maher45@live.com', '$2y$10$iXmUqSMh0prtvrLuILakr.dTI9cGhA13bJ5D6Nwk0pSfrZAprg8KO'),
(4, 'Saghar123', 'saghar123@yahoo.com', '$2y$10$ZegPXH8UlmocguWnhQjj7OkYzmCbCu1N210T.c.cE4snXFSPmSjmq'),
(5, 'ghanbar23', 'ghanbar23@live.com', '$2y$10$.yY2DV1jGn6qTcE1TO3rXuGhczeSFsBfUWcJ5RNvAuBKlog8p4wbK'),
(6, 'danni94', 'danni94@gmail.com', '$2y$10$hMNbVnRa.lOu/N2TkMH3XuMo4/ZSd4EyHmR1RYxPqiypJti/FYOz6'),
(7, 'asghar45', 'asghar45@outlook.com', '$2y$10$5oNhnmFFu8Q9TWexckO/be4EXx31YIenoz79KYUpZjE5CQp26rxNe'),
(8, 'mahsa523', 'mahsa523@gmail.com', '$2y$10$wnubx9/7UuVDzFW5Kl.EB.Aq13DbQvJRgwve5K0RO8WBDc/R6SpQm'),
(9, 'asd', 'asd@gmail.com', '$2y$10$jDiXNclzxvtASvEZUsq9k.PpMhe2YwkYM474Hila5gDgfvvhhb69i'),
(10, 'iop123', 'iop123@live.com', '$2y$10$OURpQDc.FAoUhrMjuCrFjuufi/F0fvslXiwNiQNLuJaL8PpFFohTu'),
(11, 'Hamid', 'hamid98@gmail.com', '$2y$10$/CFnabqacqbLEHwClJy5jOVDacUtChJ.EgRvsWNXTeLBAT9TxZ3mC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  ADD PRIMARY KEY (`file_id`),
  ADD UNIQUE KEY `file_id` (`file_id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
