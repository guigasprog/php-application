-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 01:47 PM
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
(10, 'Uryel Jó de Lucca Araujo de Oliveira', 'uryeljodelucca18@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(11, 'lucasdo69', 'lucas@gmail.com', '7c8609ffaff78d0eb8bb0353894dc628'),
(14, 'celinhoAldeao', 'adoadoado@gmail.com', 'c04bc4a74c8b5081f59a389a125814d1'),
(15, 'zorojuro', 'franciscodemeloj23@gmail.com', '9e129422d00eb0fe20de9a1c1ec9b81b'),
(16, 'Indigo', 'indigo.ziroldo@gmail.com', '1359e39dc07ed5768adfe1b1209b8e55'),
(17, 'gvcunha', 'gabiviana.cunha@gmail.com', '68bb044c0cc98d78bb4e543565347b48'),
(18, 'gabrielk', 'gabriel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'vivi', 'vitoria.nardotto@gmail.com', '01c6b32388a7d729dd60ee2c4949cc12'),
(20, 'glmmm', 'glmmm@gmail.com', '16b38d53e37c792ac7e7f60bb6263b82');

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
(53, 7, 39, 13, 21, 91, 9),
(54, 3, 9, 4, 1, 28, 4),
(55, 0, -5, -5, -5, 15, 10),
(59, 0, 5, 5, 0, 5, -5),
(62, 5, 9, -3, 8, 42, 26),
(64, 0, 1, 4, -3, 4, 4),
(65, 2, 27, 15, 16, 24, 11),
(68, 8, 9, 11, 10, 146, 28);

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
  `vida_atual` int(11) NOT NULL,
  `historico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `class`, `level`, `xp`, `idAccount`, `idAttribute`, `xp_necessario`, `vida`, `vida_atual`, `historico`) VALUES
(53, 'Francisco', 'Assassino', 8, 990.32, 10, 53, 1708.61, 205, 203, ';Estudou e recebeu 94 de xp/conhecimento e se curou 14;Estudou e recebeu 178 de xp/conhecimento e se curou 5;Estudou e recebeu 87 de xp/conhecimento e se curou 8;Estudou e recebeu 160 de xp/conhecimento e se curou 11;Estudou e recebeu 160 de xp/conhecimento e se curou 6;Estudou e recebeu 167 de xp/conhecimento e se curou 11;Estudou e recebeu 65 de xp/conhecimento e se curou 14;Estudou e recebeu 63 de xp/conhecimento e se curou 12;Estudou e recebeu 95 de xp/conhecimento e se curou 6;Estudou e recebeu 140 de xp/conhecimento e se curou 15;Estudou e recebeu 117 de xp/conhecimento e se curou 10;Estudou e recebeu 160 de xp/conhecimento e se curou 9;Estudou e recebeu 169 de xp/conhecimento e se curou 13;Estudou e recebeu 132 de xp/conhecimento e se curou 8;Estudou e recebeu 173 de xp/conhecimento e se curou 11;Estudou e recebeu 97 de xp/conhecimento e se curou 12;Estudou e recebeu 156 de xp/conhecimento e se curou 10;Golpeou uma arvore e recebeu 15, mas ganhou 28 de xp;Golpeou uma arvore e recebeu 24, mas ganhou 30 de xp;Meditou e recebeu 33 de cura e tambem ganhou 6 de xp;Meditou e recebeu 11 de cura e tambem ganhou 36 de xp;Meditou e recebeu 14 de cura e tambem ganhou 37 de xp;Golpeou uma arvore e recebeu 29, mas ganhou 26 de xp;Golpeou uma arvore e recebeu 21, mas ganhou 60 de xp;Correu ate cansar e recebeu 3 de cura e tambem ganhou 18 de xp;Correu ate cansar e recebeu 10 de cura e tambem ganhou 24 de xp;Correu ate cansar e recebeu 6 de cura e tambem ganhou 22 de xp;Estudou e recebeu 179 de xp/conhecimento e se curou 10;Estudou e recebeu 61 de xp/conhecimento e se curou 7;Estudou e recebeu 99 de xp/conhecimento e se curou 13;Estudou e recebeu 179 de xp/conhecimento e se curou 7;Estudou e recebeu 143 de xp/conhecimento e se curou 8;Estudou e recebeu 156 de xp/conhecimento e se curou 9;Estudou e recebeu 82 de xp/conhecimento e se curou 11;Estudou e recebeu 72 de xp/conhecimento e se curou 13;Estudou e recebeu 93 de xp/conhecimento e se curou 14;Golpeou uma arvore e recebeu 18, mas ganhou 36 de xp;Meditou e recebeu 24 de cura e tambem ganhou 8 de xp;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Golpeou uma arvore e recebeu 22, mas ganhou 10.5 de xp;Golpeou uma arvore e recebeu 16, mas ganhou 24 de xp;Golpeou uma arvore e recebeu 30, mas ganhou 24 de xp;Golpeou uma arvore e recebeu 26, mas ganhou 12 de xp;Golpeou uma arvore e recebeu 13, mas ganhou 19.5 de xp;Golpeou uma arvore e recebeu 12, mas ganhou 25 de xp;Golpeou uma arvore e recebeu 17, mas ganhou 21.5 de xp;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Golpeou uma arvore e recebeu 22, mas ganhou 19 de xp;Meditou e recebeu 30 de cura e tambem ganhou 10.333333333333 de xp;Meditou e recebeu 15 de cura e tambem ganhou 4.6666666666667 de xp;Meditou e recebeu 44 de cura e tambem ganhou 10.666666666667 de xp;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Golpeou uma arvore e recebeu 26, mas ganhou 6.875 de xp;Golpeou uma arvore e recebeu 29, mas ganhou 4.875 de xp;Golpeou uma arvore e recebeu 11, mas ganhou 2.5 de xp;Golpeou uma arvore e recebeu 15, mas ganhou 3.25 de xp;Estudou e recebeu 16.875 de xp/conhecimento e se curou 7;Estudou e recebeu 7.625 de xp/conhecimento e se curou 8;Estudou e recebeu 22.5 de xp/conhecimento e se curou 13;Estudou e recebeu 11.625 de xp/conhecimento e se curou 14;Estudou e recebeu 10.625 de xp/conhecimento e se curou 7;Estudou e recebeu 18.875 de xp/conhecimento e se curou 8;Estudou e recebeu 18.375 de xp/conhecimento e se curou 7;Estudou e recebeu 14.5 de xp/conhecimento e se curou 5;Estudou e recebeu 9.125 de xp/conhecimento e se curou 9;Estudou e recebeu 15.375 de xp/conhecimento e se curou 13;Estudou e recebeu 19.125 de xp/conhecimento e se curou 6;Estudou e recebeu 15 de xp/conhecimento e se curou 11;Estudou e recebeu 8.5 de xp/conhecimento e se curou 11;Estudou e recebeu 14.25 de xp/conhecimento e se curou 7;Estudou e recebeu 19.25 de xp/conhecimento e se curou 5;Estudou e recebeu 10.375 de xp/conhecimento e se curou 5;Estudou e recebeu 18.375 de xp/conhecimento e se curou 9;Estudou e recebeu 22.125 de xp/conhecimento e se curou 6;Estudou e recebeu 13.125 de xp/conhecimento e se curou 9;Estudou e recebeu 22.375 de xp/conhecimento e se curou 9;Estudou e recebeu 11.25 de xp/conhecimento e se curou 13;Estudou e recebeu 15.625 de xp/conhecimento e se curou 12;Estudou e recebeu 9.875 de xp/conhecimento e se curou 9;Estudou e recebeu 10.5 de xp/conhecimento e se curou 14;Estudou e recebeu 19.125 de xp/conhecimento e se curou 13;Estudou e recebeu 11.875 de xp/conhecimento e se curou 12;Correu ate cansar e recebeu 9 de cura e tambem ganhou 3 de xp;Estudou e recebeu 11.5 de xp/conhecimento e se curou 12'),
(54, 'xX-NovinDoGrau-Xx', 'Arqueiro', 4, 414.66, 11, 54, 337.50, 105, 105, ';Estudou e recebeu 78 de xp/conhecimento e se curou 5;Estudou e recebeu 126 de xp/conhecimento e se curou 12;Estudou e recebeu 130 de xp/conhecimento e se curou 7;Estudou e recebeu 138 de xp/conhecimento e se curou 5;Estudou e recebeu 102 de xp/conhecimento e se curou 12;Estudou e recebeu 87 de xp/conhecimento e se curou 9;Estudou e recebeu 100 de xp/conhecimento e se curou 6;Estudou e recebeu 87 de xp/conhecimento e se curou 9;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Golpeou uma arvore e recebeu 19, mas ganhou 10 de xp;Golpeou uma arvore e recebeu 25, mas ganhou 11.333333333333 de xp;Golpeou uma arvore e recebeu 11, mas ganhou 7 de xp;Golpeou uma arvore e recebeu 11, mas ganhou 13.333333333333 de xp;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre'),
(55, 'Uryel Jó de Lucca Araujo de Oliveira', 'Mago', 1, 0.00, 10, 55, 100.00, 75, 75, ''),
(59, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Assassino', 1, 0.00, 10, 59, 100.00, 100, 100, ''),
(62, 'Airyuo', 'Clerigo', 6, 156.92, 16, 62, 759.38, 140, 140, ';Golpeou uma arvore e recebeu 16, mas ganhou 54 de xp;Meditou e recebeu 46 de cura e tambem ganhou 14 de xp;Estudou e recebeu 73 de xp/conhecimento e se curou 15;Estudou e recebeu 100 de xp/conhecimento e se curou 6;Estudou e recebeu 156 de xp/conhecimento e se curou 11;Estudou e recebeu 159 de xp/conhecimento e se curou 7;Correu ate cansar e recebeu 6 de cura e tambem ganhou 28 de xp;Meditou e recebeu 18 de cura e tambem ganhou 16 de xp;Golpeou uma arvore e recebeu 23, mas ganhou 27 de xp;Meditou e recebeu 46 de cura e tambem ganhou 34 de xp;Meditou e recebeu 50 de cura e tambem ganhou 13 de xp;Meditou e recebeu 23 de cura e tambem ganhou 31 de xp;Meditou e recebeu 19 de cura e tambem ganhou 6 de xp;Estudou e recebeu 134 de xp/conhecimento e se curou 8;Golpeou uma arvore e recebeu 16, mas ganhou 29 de xp;Golpeou uma arvore e recebeu 13, mas ganhou 60 de xp;Golpeou uma arvore e recebeu 27, mas ganhou 48 de xp;Golpeou uma arvore e recebeu 22, mas ganhou 35 de xp;Meditou e recebeu 35 de cura e tambem ganhou 20 de xp;Meditou e recebeu 43 de cura e tambem ganhou 19 de xp;Estudou e recebeu 70 de xp/conhecimento e se curou 13;Estudou e recebeu 136 de xp/conhecimento e se curou 14;Estudou e recebeu 173 de xp/conhecimento e se curou 5;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Golpeou uma arvore e recebeu 11, mas ganhou 3.6666666666667 de xp;Estudou e recebeu 17.166666666667 de xp/conhecimento e se curou 8;Estudou e recebeu 19.833333333333 de xp/conhecimento e se curou 10'),
(64, 'Ges', 'Arqueiro', 1, 0.00, 18, 64, 100.00, 85, 85, ''),
(65, 'vivi', 'Assassino', 3, 996.50, 19, 65, 225.00, 180, 180, ';Golpeou uma arvore e recebeu 11, mas ganhou 45 de xp;Meditou e recebeu 11 de cura e tambem ganhou 6 de xp;Golpeou uma arvore e recebeu 14, mas ganhou 21 de xp;Golpeou uma arvore e recebeu 26, mas ganhou 59 de xp;Golpeou uma arvore e recebeu 19, mas ganhou 58 de xp;Meditou e recebeu 19 de cura e tambem ganhou 22 de xp;Meditou e recebeu 13 de cura e tambem ganhou 24 de xp;Meditou e recebeu 23 de cura e tambem ganhou 22 de xp;Meditou e recebeu 18 de cura e tambem ganhou 34 de xp;Correu ate cansar e recebeu 7 de cura e tambem ganhou 18 de xp;Correu ate cansar e recebeu 6 de cura e tambem ganhou 18 de xp;Correu ate cansar e recebeu 5 de cura e tambem ganhou 29 de xp;Correu ate cansar e recebeu 6 de cura e tambem ganhou 17 de xp;Correu ate cansar e recebeu 9 de cura e tambem ganhou 24 de xp;Meditou e recebeu 29 de cura e tambem ganhou 27 de xp;Meditou e recebeu 23 de cura e tambem ganhou 31 de xp;Meditou e recebeu 42 de cura e tambem ganhou 40 de xp;Estudou e recebeu 127 de xp/conhecimento e se curou 5;Estudou e recebeu 175 de xp/conhecimento e se curou 13;Estudou e recebeu 121 de xp/conhecimento e se curou 12;Estudou e recebeu 172 de xp/conhecimento e se curou 6;Golpeou uma arvore e recebeu 18, mas ganhou 28 de xp;Golpeou uma arvore e recebeu 11, mas ganhou 33 de xp;Golpeou uma arvore e recebeu 29, mas ganhou 23 de xp;Golpeou uma arvore e recebeu 23, mas ganhou 24 de xp;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Golpeou uma arvore e recebeu 27, mas ganhou 14 de xp;Golpeou uma arvore e recebeu 26, mas ganhou 16 de xp;Golpeou uma arvore e recebeu 26, mas ganhou 18.5 de xp;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre'),
(68, 'claudio', 'Mago', 9, 951.02, 20, 68, 2562.92, 150, 150, ';Golpeou uma arvore e recebeu 12, mas ganhou 39 de xp;Golpeou uma arvore e recebeu 19, mas ganhou 24 de xp;Golpeou uma arvore e recebeu 17, mas ganhou 20 de xp;Meditou e recebeu 39 de cura e tambem ganhou 22 de xp;Meditou e recebeu 36 de cura e tambem ganhou 14 de xp;Correu ate cansar e recebeu 7 de cura e tambem ganhou 22 de xp;Correu ate cansar e recebeu 7 de cura e tambem ganhou 16 de xp;Correu ate cansar e recebeu 4 de cura e tambem ganhou 23 de xp;Correu ate cansar e recebeu 5 de cura e tambem ganhou 22 de xp;Golpeou uma arvore e recebeu 25, mas ganhou 27 de xp;Meditou e recebeu 48 de cura e tambem ganhou 34 de xp;Meditou e recebeu 24 de cura e tambem ganhou 29 de xp;Estudou e recebeu 109 de xp/conhecimento e se curou 13;Estudou e recebeu 173 de xp/conhecimento e se curou 15;Estudou e recebeu 136 de xp/conhecimento e se curou 14;Estudou e recebeu 103 de xp/conhecimento e se curou 14;Estudou e recebeu 139 de xp/conhecimento e se curou 13;Estudou e recebeu 94 de xp/conhecimento e se curou 14;Estudou e recebeu 166 de xp/conhecimento e se curou 14;Estudou e recebeu 83 de xp/conhecimento e se curou 9;Estudou e recebeu 166 de xp/conhecimento e se curou 15;Estudou e recebeu 142 de xp/conhecimento e se curou 10;Estudou e recebeu 115 de xp/conhecimento e se curou 6;Estudou e recebeu 117 de xp/conhecimento e se curou 9;Estudou e recebeu 60 de xp/conhecimento e se curou 14;Estudou e recebeu 136 de xp/conhecimento e se curou 8;Estudou e recebeu 84 de xp/conhecimento e se curou 7;Estudou e recebeu 75 de xp/conhecimento e se curou 9;Estudou e recebeu 139 de xp/conhecimento e se curou 12;Estudou e recebeu 136 de xp/conhecimento e se curou 14;Estudou e recebeu 97 de xp/conhecimento e se curou 12;Estudou e recebeu 175 de xp/conhecimento e se curou 11;Estudou e recebeu 102 de xp/conhecimento e se curou 9;Estudou e recebeu 98 de xp/conhecimento e se curou 7;Estudou e recebeu 108 de xp/conhecimento e se curou 6;Estudou e recebeu 85 de xp/conhecimento e se curou 5;Estudou e recebeu 151 de xp/conhecimento e se curou 7;Estudou e recebeu 119 de xp/conhecimento e se curou 15;Estudou e recebeu 97 de xp/conhecimento e se curou 8;Estudou e recebeu 74 de xp/conhecimento e se curou 6;Estudou e recebeu 153 de xp/conhecimento e se curou 10;Estudou e recebeu 169 de xp/conhecimento e se curou 7;Estudou e recebeu 138 de xp/conhecimento e se curou 6;Estudou e recebeu 79 de xp/conhecimento e se curou 6;Estudou e recebeu 113 de xp/conhecimento e se curou 10;Estudou e recebeu 65 de xp/conhecimento e se curou 14;Estudou e recebeu 61 de xp/conhecimento e se curou 14;Estudou e recebeu 174 de xp/conhecimento e se curou 8;Estudou e recebeu 116 de xp/conhecimento e se curou 14;Estudou e recebeu 151 de xp/conhecimento e se curou 15;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Estudou e recebeu 22 de xp/conhecimento e se curou 15;Estudou e recebeu 12.25 de xp/conhecimento e se curou 13;Estudou e recebeu 7.625 de xp/conhecimento e se curou 13;Estudou e recebeu 11.125 de xp/conhecimento e se curou 11;Estudou e recebeu 17 de xp/conhecimento e se curou 13;Estudou e recebeu 14.625 de xp/conhecimento e se curou 15;Estudou e recebeu 13.5 de xp/conhecimento e se curou 5;Estudou e recebeu 19.875 de xp/conhecimento e se curou 12;Estudou e recebeu 17.5 de xp/conhecimento e se curou 5;Estudou e recebeu 18.25 de xp/conhecimento e se curou 8;Estudou e recebeu 7.75 de xp/conhecimento e se curou 8;Estudou e recebeu 15.375 de xp/conhecimento e se curou 10;Estudou e recebeu 19.25 de xp/conhecimento e se curou 13;Estudou e recebeu 13.375 de xp/conhecimento e se curou 12;Estudou e recebeu 20 de xp/conhecimento e se curou 7;Correu ate cansar e recebeu 10 de cura e tambem ganhou 3.25 de xp;Correu ate cansar e recebeu 10 de cura e tambem ganhou 2.125 de xp;Correu ate cansar e recebeu 7 de cura e tambem ganhou 2.625 de xp;Correu ate cansar e recebeu 5 de cura e tambem ganhou 2.5 de xp;Estudou e recebeu 17.75 de xp/conhecimento e se curou 8;Estudou e recebeu 16.625 de xp/conhecimento e se curou 15;Estudou e recebeu 19.125 de xp/conhecimento e se curou 5;Estudou e recebeu 13.5 de xp/conhecimento e se curou 11;Estudou e recebeu 15.25 de xp/conhecimento e se curou 7;Estudou e recebeu 17.25 de xp/conhecimento e se curou 14;Estudou e recebeu 7.875 de xp/conhecimento e se curou 10;Estudou e recebeu 16 de xp/conhecimento e se curou 11;Estudou e recebeu 17.125 de xp/conhecimento e se curou 7;Estudou e recebeu 17.875 de xp/conhecimento e se curou 13;Estudou e recebeu 16.875 de xp/conhecimento e se curou 11;Estudou e recebeu 15.625 de xp/conhecimento e se curou 6;Estudou e recebeu 15.375 de xp/conhecimento e se curou 14;Estudou e recebeu 17.5 de xp/conhecimento e se curou 11;Estudou e recebeu 20 de xp/conhecimento e se curou 10;Estudou e recebeu 13.5 de xp/conhecimento e se curou 8;Estudou e recebeu 21 de xp/conhecimento e se curou 8;Estudou e recebeu 10.5 de xp/conhecimento e se curou 11;Estudou e recebeu 16.875 de xp/conhecimento e se curou 15;Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre;Golpeou uma arvore e recebeu 21, mas ganhou 5.6666666666667 de xp;Golpeou uma arvore e recebeu 13, mas ganhou 4.5555555555556 de xp;Golpeou uma arvore e recebeu 30, mas ganhou 3 de xp;Meditou e recebeu 23 de cura e tambem ganhou 0.88888888888889 de xp;Meditou e recebeu 11 de cura e tambem ganhou 4.1111111111111 de xp;Meditou e recebeu 50 de cura e tambem ganhou 3.1111111111111 de xp;Meditou e recebeu 31 de cura e tambem ganhou 4.4444444444444 de xp;Meditou e recebeu 13 de cura e tambem ganhou 2.3333333333333 de xp;Estudou e recebeu 7.7777777777778 de xp/conhecimento e se curou 8;Estudou e recebeu 7.3333333333333 de xp/conhecimento e se curou 15;Estudou e recebeu 10 de xp/conhecimento e se curou 13;Estudou e recebeu 11.222222222222 de xp/conhecimento e se curou 13;Estudou e recebeu 19.555555555556 de xp/conhecimento e se curou 13;Estudou e recebeu 12.111111111111 de xp/conhecimento e se curou 15;Estudou e recebeu 16.333333333333 de xp/conhecimento e se curou 15;Estudou e recebeu 12.888888888889 de xp/conhecimento e se curou 7;Estudou e recebeu 18.666666666667 de xp/conhecimento e se curou 8;Estudou e recebeu 12.777777777778 de xp/conhecimento e se curou 15;Estudou e recebeu 16.555555555556 de xp/conhecimento e se curou 14;Estudou e recebeu 8.1111111111111 de xp/conhecimento e se curou 11;Estudou e recebeu 17.555555555556 de xp/conhecimento e se curou 13;Estudou e recebeu 9.4444444444444 de xp/conhecimento e se curou 14;Estudou e recebeu 14.111111111111 de xp/conhecimento e se curou 7;Estudou e recebeu 16.333333333333 de xp/conhecimento e se curou 9;Estudou e recebeu 12.444444444444 de xp/conhecimento e se curou 12;Estudou e recebeu 12.777777777778 de xp/conhecimento e se curou 9;Estudou e recebeu 17.222222222222 de xp/conhecimento e se curou 11;Estudou e recebeu 15 de xp/conhecimento e se curou 8;Estudou e recebeu 16.777777777778 de xp/conhecimento e se curou 15;Estudou e recebeu 11.888888888889 de xp/conhecimento e se curou 12;Estudou e recebeu 10.333333333333 de xp/conhecimento e se curou 12;Estudou e recebeu 12.111111111111 de xp/conhecimento e se curou 12;Estudou e recebeu 18.777777777778 de xp/conhecimento e se curou 11;Estudou e recebeu 14.555555555556 de xp/conhecimento e se curou 6;Estudou e recebeu 15.555555555556 de xp/conhecimento e se curou 10;Estudou e recebeu 14 de xp/conhecimento e se curou 7;Estudou e recebeu 7.7777777777778 de xp/conhecimento e se curou 5;Estudou e recebeu 14.111111111111 de xp/conhecimento e se curou 8;Estudou e recebeu 16.555555555556 de xp/conhecimento e se curou 5;Estudou e recebeu 15 de xp/conhecimento e se curou 13;Estudou e recebeu 14.444444444444 de xp/conhecimento e se curou 12;Estudou e recebeu 15.555555555556 de xp/conhecimento e se curou 12;Estudou e recebeu 19.333333333333 de xp/conhecimento e se curou 5;Estudou e recebeu 8.7777777777778 de xp/conhecimento e se curou 7;Estudou e recebeu 19.222222222222 de xp/conhecimento e se curou 8');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

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
