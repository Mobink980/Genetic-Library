-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 03:40 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(255) NOT NULL,
  `comment_sender_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `comment_sender_id`, `date`) VALUES
(1, 0, 'salam!', 'mahdiSh', 11, '2020-01-14 21:17:54'),
(2, 0, 'BYe', 'mahdiSh', 11, '2020-01-14 21:24:10');

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
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`id`, `name`, `username`, `password`, `email`, `age`) VALUES
(1, 'Ali', 'Bagheri', '45639', 'Bagheri@users.com', '24'),
(2, 'Mahdi', 'Mousavi', '85426', 'Mousavi@users.com', '24'),
(3, 'MohammadAli', '94122681004', '2561', 'yiuuo@yahoo.com', '24'),
(4, 'Maher', 'MHPQ', 'sdfsdfs', 'sfdsfsdf@live.com', '25'),
(5, 'Mohammad', 'Yousefi', '49785', 'Yousefi@users.com', '30'),
(6, 'Ahmad', 'Mohammadi', '456789', 'Mohammadi@users.com', '50'),
(7, 'Fatemeh', 'Poorreza', '15896', 'Poorreza@users.com', '45'),
(8, 'Ali', 'Austin', '122', 'ahmad.gmail.com', NULL),
(9, 'jane', 'Austin', '123', 'jane.gmail.com', NULL),
(10, 'Carine', 'Austin', '1232', 'Carine.gmail.com', NULL),
(11, 'Jean', 'Austin', '12452', 'Jean.gmail.com', NULL),
(12, 'Peter', 'Austin', '12162', 'Peter.gmail.com', NULL),
(13, 'Janine', 'Austin', '12142', 'Janine.gmail.com', NULL),
(14, 'Jonas', 'Austin', '124162', 'Jonas.gmail.com', NULL),
(15, 'Susan', 'Watson', '12492', 'Susan.gmail.com', NULL),
(16, 'Roland', 'Watson', '122325', 'Roland.gmail.com', NULL),
(17, 'Julie', 'Watson', '12112', 'Julie.gmail.com', NULL),
(18, 'Diego', 'Watson', '12892', 'Diego.gmail.com', NULL),
(19, 'Mary', 'Watson', '12782', 'Mary.gmail.com', NULL),
(20, 'Eric', 'Holmes', '129642', 'Eric.gmail.com', NULL),
(21, 'Jeff', 'Holmes', '12235', 'Jeff.gmail.com', NULL),
(22, 'Kelvin', 'Holmes', '122145', 'Kelvin.gmail.com', NULL),
(23, 'Wendy', 'Holmes', '122349', 'Wendy.gmail.com', NULL),
(24, '', 'Ramin', '96874', 'Hosseini@gmail.com', ''),
(25, 'Saghar', 'Saghar', '879512', 'saghar@users.com', '20'),
(26, 'Reza', 'Reza98', '123456', 'Reza98@users.com', '43'),
(28, '', 'mobink980', '74123', 'mobink980@outlook.com', ''),
(29, 'asdfghj', 'frtyuui', '2581104554', 'madisdroy@gmail.com', '22'),
(30, 'Ali', 'ghasem', '258', 'mahdishj@gmail.com', '45');

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
(2, 'mobink980@gmail.com', '29ab9c1a58dae4e4', '$2y$10$ihgAth3mZyWw4E6nXk.diODmW8NthgoD6fqRExo3VrmFHO5sWDqIO', '1577379556');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `key_words` text NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`page_id`, `page_title`, `key_words`, `page_url`, `page_like`) VALUES
(1, 'Evolutionary Computation', 'Evolutionary Lamark Darwin Genotype Phenotype Fitness Selection pressure competitive', 'index.php', 0),
(2, 'Genetic Operators', 'Selection\r\n    Recombination\r\n    Mutation\r\n    Parent selection\r\n    replacement strategy\r\n    offspring \r\n    combination \r\n    Asexual\r\n    Sexual\r\n    Multi-recombination\r\n    Population size    \r\n    Mutation rate\r\n    Crossover rate\r\n    stop\r\n    Gap\r\n    Elitism\r\n    Conservative ', 'typesOfOperators.php', 0),
(3, 'Chromosome Representation', 'chromosome \r\n    binary \r\n    floating-point\r\n    TSP\r\n    Two-dimensional', 'chromosomeRepresentation.php', 0);

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
(5, 'Ali1908', 'mah@gmail.com', '$2y$10$AfRvvL9RlwV3U/EY.tec2.j9vACW5JzO1gc3ZqOA.vxzsgqf.G8lW'),
(7, 'mahdi8767', 'mahr@gmail.com', '$2y$10$Pof2.T3ttAbsgvor2hsJy.ZzMAVUAewQ.XJ6.lxBYuILu3TKlNKIi'),
(8, 'mahdi876756', 'mahyui@gmail.com', '$2y$10$dgO7CSdjxRRhn.UmkOm1ieYikJ..XhXIDEYo38CftPQWB42caFE86'),
(10, 'ghanbar12', 'ghanbar12@live.com', '$2y$10$i2fxqXt1oUt//U87JBwk.OeTRzLxsS0wF4NNGD1oFQKaOlSZptrSm'),
(11, 'mahdiSh', 'mahdi97@gmail.com', '$2y$10$zGDtm.95iLcEH4i3RyEtu.OrDPU/6dRRqEYT495oKLhpD1tYl52jC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
