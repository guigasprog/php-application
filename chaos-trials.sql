-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 07:33 PM
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
-- Database: `chaos-trials`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`) VALUES
(8, 'GuigaReiDela', '4guigamers@gmail.com', 'c71a3bc6adaef3f2c3e8d55dd9fd7fe0'),
(9, 'GuigaReiDela', 'uryeljo13@gmail.com', 'c71a3bc6adaef3f2c3e8d55dd9fd7fe0');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `dexterity` int(11) NOT NULL,
  `vitality` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `mind` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `pontos`, `strength`, `dexterity`, `vitality`, `intelligence`, `mind`) VALUES
(25, 0, 1, 4, -3, 4, 4),
(38, 2, 9, 4, 1, 39, 38);

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `class` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `xp` decimal(10,2) NOT NULL,
  `idAccount` int(11) NOT NULL,
  `idAttribute` int(11) NOT NULL,
  `xp_necessario` decimal(10,2) NOT NULL,
  `vida` int(11) NOT NULL,
  `vida_atual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `class`, `level`, `xp`, `idAccount`, `idAttribute`, `xp_necessario`, `vida`, `vida_atual`) VALUES
(25, 'bARNABE', 'Arqueiro', 1, 0.00, 9, 25, 100.00, 85, 70),
(38, 'Lola Muscolo o Clerigo', 'Arqueiro', 1, 0.00, 8, 38, 225.00, 105, 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAttribute` (`idAttribute`),
  ADD KEY `idAccount` (`idAccount`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `idAccount` FOREIGN KEY (`idAccount`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `idAttribute` FOREIGN KEY (`idAttribute`) REFERENCES `attribute` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
