-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2024 às 01:57
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chaostrial`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idCharacter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `idCharacter`) VALUES
(1, 'guigas', 'guilhermedelgado876@gmail.com', 'passwordç', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `dexterity` int(11) NOT NULL,
  `vitality` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `mind` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `attribute`
--

INSERT INTO `attribute` (`id`, `strength`, `dexterity`, `vitality`, `intelligence`, `mind`) VALUES
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `character`
--

CREATE TABLE `character` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `class` varchar(30) NOT NULL,
  `idAttribute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `character`
--

INSERT INTO `character` (`id`, `name`, `class`, `idAttribute`) VALUES
(1, 'Guigas', '1', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCharacter` (`idCharacter`);

--
-- Índices de tabela `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `character`
--
ALTER TABLE `character`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAttribute` (`idAttribute`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `character`
--
ALTER TABLE `character`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `idCharacter` FOREIGN KEY (`idCharacter`) REFERENCES `character` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `character`
--
ALTER TABLE `character`
  ADD CONSTRAINT `idAttribute` FOREIGN KEY (`idAttribute`) REFERENCES `attribute` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
