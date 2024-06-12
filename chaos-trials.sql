-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2024 às 02:07
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chaos-trials`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`) VALUES
(6, 'Michael Jackson', '4guigamers@gmail.com', 'c71a3bc6adaef3f2c3e8d55dd9fd7fe0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `dexterity` int(11) NOT NULL,
  `vitality` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `mind` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `attribute`
--

INSERT INTO `attribute` (`id`, `strength`, `dexterity`, `vitality`, `intelligence`, `mind`) VALUES
(9, 1, 4, -3, 4, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `class` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `xp` decimal(10,2) NOT NULL,
  `idAccount` int(11) NOT NULL,
  `idAttribute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `characters`
--

INSERT INTO `characters` (`id`, `name`, `class`, `level`, `xp`, `idAccount`, `idAttribute`) VALUES
(9, 'A', 'Arqueiro', 1, '0.00', 6, 9);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAttribute` (`idAttribute`),
  ADD KEY `idAccount` (`idAccount`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `idAccount` FOREIGN KEY (`idAccount`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `idAttribute` FOREIGN KEY (`idAttribute`) REFERENCES `attribute` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
