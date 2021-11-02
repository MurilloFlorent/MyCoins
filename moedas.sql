-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Nov-2021 às 01:00
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moedas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bomber`
--

CREATE TABLE `bomber` (
  `id` int(11) NOT NULL,
  `coletado` float NOT NULL,
  `usdbomber` float NOT NULL,
  `brlbomber` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bomber`
--

INSERT INTO `bomber` (`id`, `coletado`, `usdbomber`, `brlbomber`) VALUES
(2, 100, 3, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `smooth`
--

CREATE TABLE `smooth` (
  `id` int(11) NOT NULL,
  `coletado` int(11) NOT NULL,
  `usdslp` float NOT NULL,
  `brlslp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `smooth`
--

INSERT INTO `smooth` (`id`, `coletado`, `usdslp`, `brlslp`) VALUES
(6, 4000, 0.071887, 0.405268),
(7, 4000, 0.071887, 0.405268);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bomber`
--
ALTER TABLE `bomber`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `smooth`
--
ALTER TABLE `smooth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bomber`
--
ALTER TABLE `bomber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `smooth`
--
ALTER TABLE `smooth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
