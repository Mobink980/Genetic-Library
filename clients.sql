-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 12:01 AM
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
  `a_group` varchar(256) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `a_author` varchar(256) NOT NULL,
  `a_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `a_group`, `a_title`, `a_text`, `a_author`, `a_date`) VALUES
(1, 'SI', '50 great summer recipes', 'There are many recipes you can create for the summer which \r\ninvolves grilling, boiling frying,  and toasting.', 'Admin', '2017-11-25 12:23:11'),
(2, 'AIS', 'A series of computer software', 'In this article, you will learn aboutsome of the \r\nsoftware used on computers. This involves basic softwares used in computers and more advanced softwares used by \r\ndevelopers.', 'Daniel Nielsen', '2017-11-25 12:23:11'),
(3, 'FS', 'How to Find String Length in PHP', 'How to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHPHow to Find String Length in PHP.', 'Mahdi Shadrooy', '2020-01-20 23:05:54'),
(4, 'AIS', 'Is there a way to print a Dataframe including texts that are not in English', 'You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.You can write your essay in the field of Artificial Immune Systems in the following field.', 'Maher Raslan', '2020-01-20 23:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `comment_sender_name` varchar(255) NOT NULL,
  `comment_sender_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `parent_comment_id`, `section`, `comment`, `comment_sender_name`, `comment_sender_id`, `date`) VALUES
(1, 0, 'AIS', 'salam!', 'mahdiSh', 11, '2020-01-14 21:17:54'),
(2, 0, 'AIS', 'BYe', 'mahdiSh', 11, '2020-01-14 21:24:10'),
(3, 0, 'EC', 'dasda', 'Mahdi', 3, '2020-01-16 09:28:35'),
(4, 0, 'ANN', 'hello!!', 'Mahdi', 3, '2020-01-16 09:28:46'),
(5, 4, 'FS', 'this is weird!!', 'Mahdi', 3, '2020-01-16 09:29:05'),
(6, 2, 'EC', 'sdadas', 'Mahdi', 3, '2020-01-16 09:29:22'),
(7, 0, 'EC', 'This iisd', 'Mahdi', 3, '2020-01-17 07:36:00'),
(8, 0, 'AIS', 'asda', 'Mahdi', 3, '2020-01-17 07:39:55'),
(9, 0, 'ANN', 'asdsa', 'Mahdi', 3, '2020-01-17 07:45:52'),
(10, 0, 'FS', 'asdada', 'Mahdi', 3, '2020-01-17 08:23:16'),
(11, 10, 'ANN', 'rtyr', 'Mahdi', 3, '2020-01-17 08:32:53'),
(12, 0, 'EC', 'rh', 'Mahdi', 3, '2020-01-17 08:37:45'),
(13, 0, 'SI', 'assdsad', 'Mahdi', 3, '2020-01-17 09:09:29'),
(14, 0, 'SI', 'Ali', 'Mahdi', 3, '2020-01-17 09:09:35'),
(15, 4, 'FS', 'this is weird!!', 'Mahdi', 3, '2020-01-16 09:29:05'),
(16, 0, 'FS', 'asdada', 'Mahdi', 3, '2020-01-17 08:23:16'),
(17, 0, 'AIS', 'What is Artificial Immune Systems?!', 'Mahdi', 3, '2020-01-17 09:21:00'),
(18, 0, 'AIS', 'This is Awsome!!!', 'Mahdi', 3, '2020-01-17 09:24:00'),
(19, 0, 'SI', 'What is Swarm Intelligence?!', 'Mahdi', 3, '2020-01-17 09:34:31'),
(20, 0, 'FS', 'What are Fuzzy Systems?!', 'Mahdi', 3, '2020-01-17 09:40:25'),
(21, 0, 'EC', 'What are Evolutionary Computations?!', 'Mahdi', 3, '2020-01-17 09:45:28'),
(22, 0, 'ANN', 'What are Artificial Neural Networks?!\r\n', 'Mahdi', 3, '2020-01-17 09:50:02'),
(23, 20, 'FS', 'Fuzzy Systems are systems that map real values to some domains and return the result! ', 'Mahdi', 3, '2020-01-17 09:55:09'),
(24, 0, 'AIS', 'My name is Hamid!', 'Hamid', 12, '2020-01-17 10:11:06'),
(25, 0, 'SI', 'Ha Ha Ha!!!', 'Hamid', 12, '2020-01-17 10:12:43'),
(26, 0, 'SI', 'Hi!!!', 'Akram', 12, '2020-01-17 21:47:23'),
(27, 0, 'ANN', 'adasd', 'Akram', 12, '2020-01-20 21:46:21'),
(28, 0, 'EC', 'yes', 'Akram', 12, '2020-01-20 22:36:43'),
(29, 21, 'EC', 'you gotta know about it', 'Akram', 12, '2020-01-20 22:37:02');

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
(5, 3, '00040.jpg', 'uploads/5df8ec8abc28e3.81953666.jpg'),
(6, 3, 'knight.jpg', 'uploads/5e21dc5c797fc8.14478292.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `idUsers` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profileimg`
--

INSERT INTO `profileimg` (`id`, `idUsers`, `status`) VALUES
(1, 1, 0),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 0),
(11, 11, 0),
(12, 12, 0),
(13, 13, 0),
(14, 14, 0);

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
(1, 'Evolutionary Computation', 'Evolutionary Lamark Darwin Genotype Phenotype Fitness Selection pressure competitive', 'index.php', 2),
(2, 'Genetic Operators', 'Selection Recombination Mutation Parent selection replacement strategy offspring \r\ncombination Asexual Sexual\r\nMulti-recombination\r\nPopulation size    \r\nMutation rate\r\nCrossover rate\r\nstop\r\nGap\r\nElitism\r\nConservative ', 'typesOfOperators.php', 1),
(3, 'Chromosome Representation', 'chromosome binary floating-point TSP\r\nTwo-dimensional', 'chromosomeRepresentation.php', 0),
(4, 'Random Selection', 'probability Random', 'randomSelection.php', 0),
(5, 'Truncation Selection', 'Truncation', 'truncationSelection.php', 0),
(6, 'Tournament Selection', ' Tournament', 'tournamentSelection.php', 0),
(7, 'Stochastic Universal Sampling Selection', '', 'stochasticUniversalSamplingSelection.php', 0),
(8, 'Roulette Wheel Selection', '', 'rouletteWheelSelection.php', 0),
(9, 'Linear Ranking Selection', '', 'linearRankingSelection.php', 0),
(10, 'Exponential Ranking Selection', '', 'exponentialRankingSelection.php', 0),
(11, 'Self-Adaptive Tournament Selection', '', 'selfAdaptiveTournamentSelection.php', 0),
(12, 'Proportional Selection', '', 'proportionalSelection.php', 1),
(13, 'Linear Rank-Based Selection', '', 'linearRankBasedSelection.php', 0),
(14, 'Non-linear Rank-Based Selection', '', 'nonlinearRankBasedSelection.php', 0),
(15, 'Boltzmann Selection', '', 'BoltzmannSelection.php', 0),
(16, 'One-point Crossover', 'crossover one-point chromosomes  offspring  child Crossover', 'onePointCrossover.php', 0),
(17, 'Multi-point Crossover', 'chromosomes children Crossover', 'multiPointCrossover.php', 0),
(18, 'Uniform Crossover', 'random gene', 'uniformCrossover.php', 0),
(19, 'Multi-parent Crossover', 'several  Offspring  chromosomes', 'multiParentCrossover.php', 0),
(20, 'Order Crossover', 'points  ox', 'orderCrossover.php', 0),
(21, 'Partially Mapped Crossover ', 'pmx points', 'partiallyMappedCrossover.php', 0),
(22, 'Cycle Crossover', 'subset  cx', 'cycleCrossover.php', 0),
(23, 'Heuristic Crossover(HC) or Intermediate Crossover(IC)', '', 'heuristicCrossover.php', 0),
(24, 'Shuffle Crossover', 'SX unshuffle', 'shuffleCrossover.php', 0),
(25, 'Reduce Surrogate Crossover', 'RSX', 'reduceSurrogateCrossover.php', 0),
(26, 'Average Crossover', 'AX', 'averageCrossover.php', 0),
(27, 'Discrete Crossover', 'DC', 'discreteCrossover.php', 0),
(28, 'Flat Crossover', 'FC', 'flatCrossover.php', 0),
(29, 'Multivariate Crossover', '', 'multivariateCrossover.php', 0),
(30, 'Count Preserving Crossover', 'CPC', 'countPreservingCrossover.php', 0),
(31, 'Modified Order Crossover', 'MOC random', 'modifiedOrderCrossover.php', 0),
(32, 'Random Respectful Crossover', 'RRC vector', 'randomRespectfulCrossover.php', 0),
(33, 'Masked Crossover', '', 'maskedCrossover.php', 0),
(34, '1-bit Adaptive Crossover', 'uniform  two-point 1BX', 'oneBitAdaptiveCrossover.php', 0),
(35, 'Modified Partially Mapped Crossover', 'MPMX randomly  shuffle', 'modifiedPartiallyMappedCrossover.php', 2),
(36, 'Order Based Crossover', 'OBX', 'orderBasedCrossover.php', 0),
(37, 'Position Based Crossover', 'POS', 'positionBasedCrossover.php', 0),
(38, 'Voting Recombination Crossover', 'VR', 'votingRecombinationCrossover.php', 0),
(39, 'Maximal Preservation Crossover', 'MPX', 'maximalPreservationCrossover.php', 1),
(40, 'Position Crossover', 'PX', 'positionCrossover.php', 0),
(41, 'Homologous Crossover', 'HX', 'homologousCrossover.php', 0),
(42, 'Complete Subtour Exchange Crossover', 'CSEX', 'completeSubtourExchangeCrossover.php', 0),
(43, 'Edge Recombination Crossover', 'ER', 'edgeRecombinationCrossover.php', 0),
(44, 'Alternate Edges Crossover', 'AEX', 'alternateEdgesCrossover.php', 1),
(45, 'Heuristic Uniform Crossover', 'HUX', 'heuristicUniformCrossover.php', 0),
(46, 'Blend Crossover', 'BLX', 'blendCrossover.php', 0),
(47, 'Linear Recombination Crossover', '', 'linearRecombinationCrossover.php', 0),
(48, 'Directional Heuristic Crossover', '', 'directionalHeuristicCrossover.php', 0),
(49, 'Geometrical Crossover', '', 'geometricalCrossover.php', 0),
(50, 'Simulated Binary Crossover', 'SBX', 'simulatedBinaryCrossover.php', 0),
(51, 'Hillclimbing Crossover', '', 'hillclimbingCrossover.php', 0),
(52, 'Arithmetic Crossover', '', 'arithmeticCrossover.php', 0),
(53, 'Bit Flip Mutation', '', 'bitFlipMutation.php', 1),
(54, 'Random Resetting Mutation', '', 'randomResettingMutation.php', 0),
(55, 'Swap Mutation', '', 'swapMutation.php', 0),
(56, 'Scramble Mutation or Partial Shuffle Mutation', 'PSM', 'scrambleMutation.php', 0),
(57, 'Inversion Mutation or Reverse Sequence Mutation', 'RSM', 'inversionMutation.php', 0),
(58, 'Inorder Mutation', '', 'inorderMutation.php', 0),
(59, 'Center Inversion Mutation', 'CIM', 'centerinversionMutation.php', 0),
(60, 'Throas Mutation', '', 'throasMutation.php', 0),
(61, 'Distance Based Mutation', 'DMO', 'distanceBasedMutation.php', 0),
(62, 'Displacement Mutation', '', 'displacementMutation.php', 0),
(63, 'Insertion Mutation', '', 'insertionMutation.php', 0),
(64, 'Displaced Inversion Mutation', '', 'displacedInversionMutation.php', 0),
(65, 'One bit adaptive crossover ', 'One bit adaptive crossover ', 'oneBitAdaptiveCrossover.php', 0),
(66, 'One bit adaptive crossover ', 'One bit adaptive crossover ', 'oneBitAdaptiveCrossover.php', 0),
(67, 'Thrors Mutation', 'Thrors Mutation', 'throrsMutation.php', 0);

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
(6, 'mahdi8767', 'mahr@gmail.com', '$2y$10$Pof2.T3ttAbsgvor2hsJy.ZzMAVUAewQ.XJ6.lxBYuILu3TKlNKIi'),
(7, 'mahdi876756', 'mahyui@gmail.com', '$2y$10$dgO7CSdjxRRhn.UmkOm1ieYikJ..XhXIDEYo38CftPQWB42caFE86'),
(8, 'ghanbar12', 'ghanbar12@live.com', '$2y$10$i2fxqXt1oUt//U87JBwk.OeTRzLxsS0wF4NNGD1oFQKaOlSZptrSm'),
(9, 'mahdiSh', 'mahdi97@gmail.com', '$2y$10$zGDtm.95iLcEH4i3RyEtu.OrDPU/6dRRqEYT495oKLhpD1tYl52jC'),
(10, 'Hamid', 'hamid98@gmail.com', '$2y$10$N0VIcLH67g4DK16esbPic.lYImQbCuAsZBOI15eLSusApg4a7vLZ.'),
(11, 'Amir', 'amir24@gmail.com', '$2y$10$2dFRylAfPl6LckKBn7ZRleVHn0.mCOUqKiFN.qB8v1M7qfusX9xX2'),
(12, 'Akram', 'akram@gmail.com', '$2y$10$xVVL5Blu2Ad8EpY8H2qOVuxTxhEkMfSGH8FP/6chM1kIkgkVvXx0q'),
(13, 'Maher', 'maher@gmail.com', '$2y$10$ugwvNNpGj7QkSnoKY5QIWemz56iyPs2.Lx.Vi.GjgnrEMiqnHDEv2'),
(14, 'Asghar', 'asghar@live.com', '$2y$10$Ls.7jy3NvosLOu5.y8P.nuK20KLBS2sxlj2TyVcznpBCWT5kaxcNC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

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
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `files_of_clients`
--
ALTER TABLE `files_of_clients`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
