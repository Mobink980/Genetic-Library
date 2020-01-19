-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 06:51 PM
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
(2, 'Genetic Operators', 'Selection Recombination Mutation Parent selection replacement strategy offspring \r\ncombination Asexual Sexual\r\nMulti-recombination\r\nPopulation size    \r\nMutation rate\r\nCrossover rate\r\nstop\r\nGap\r\nElitism\r\nConservative ', 'typesOfOperators.php', 0),
(3, 'Chromosome Representation', 'chromosome binary floating-point TSP\r\nTwo-dimensional', 'chromosomeRepresentation.php', 0),
(4, 'Random Selection', 'probability Random', 'randomSelection.php', 0),
(5, 'Truncation Selection', 'Truncation', 'truncationSelection.php', 0),
(6, 'Tournament Selection', ' Tournament', 'tournamentSelection.php', 0),
(7, 'Stochastic Universal Sampling Selection', '', 'stochasticUniversalSamplingSelection.php', 0),
(8, 'Roulette Wheel Selection', '', 'rouletteWheelSelection.php', 0),
(9, 'Linear Ranking Selection', '', 'linearRankingSelection.php', 0),
(10, 'Exponential Ranking Selection', '', 'exponentialRankingSelection.php', 0),
(11, 'Self-Adaptive Tournament Selection', '', 'selfAdaptiveTournamentSelection.php', 0),
(12, 'Proportional Selection', '', 'proportionalSelection.php', 0),
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
(35, 'Modified Partially Mapped Crossover', 'MPMX randomly  shuffle', 'modifiedPartiallyMappedCrossover.php', 0),
(36, 'Order Based Crossover', 'OBX', 'orderBasedCrossover.php', 0),
(37, 'Position Based Crossover', 'POS', 'positionBasedCrossover.php', 0),
(38, 'Voting Recombination Crossover', 'VR', 'votingRecombinationCrossover.php', 0),
(39, 'Maximal Preservation Crossover', 'MPX', 'maximalPreservationCrossover.php', 0),
(40, 'Position Crossover', 'PX', 'positionCrossover.php', 0),
(41, 'Homologous Crossover', 'HX', 'homologousCrossover.php', 0),
(42, 'Complete Subtour Exchange Crossover', 'CSEX', 'completeSubtourExchangeCrossover.php', 0),
(43, 'Edge Recombination Crossover', 'ER', 'edgeRecombinationCrossover.php', 0),
(44, 'Alternate Edges Crossover', 'AEX', 'alternateEdgesCrossover.php', 0),
(45, 'Heuristic Uniform Crossover', 'HUX', 'heuristicUniformCrossover.php', 0),
(46, 'Blend Crossover', 'BLX', 'blendCrossover.php', 0),
(47, 'Linear Recombination Crossover', '', 'linearRecombinationCrossover.php', 0),
(48, 'Directional Heuristic Crossover', '', 'directionalHeuristicCrossover.php', 0),
(49, 'Geometrical Crossover', '', 'geometricalCrossover.php', 0),
(50, 'Simulated Binary Crossover', 'SBX', 'simulatedBinaryCrossover.php', 0),
(51, 'Hillclimbing Crossover', '', 'hillclimbingCrossover.php', 0),
(52, 'Arithmetic Crossover', '', 'arithmeticCrossover.php', 0),
(53, 'Bit Flip Mutation', '', 'bitFlipMutation.php', 0),
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
(64, 'Displaced Inversion Mutation', '', 'displacedInversionMutation.php', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
