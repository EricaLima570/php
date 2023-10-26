-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: database_titans
-- Tempo de geração: 26/10/2023 às 01:45
-- Versão do servidor: 11.1.2-MariaDB-1:11.1.2+maria~ubu2204
-- Versão do PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `titans`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `exercicio17`
--

CREATE TABLE `exercicio17` (
  `id` int(11) NOT NULL COMMENT 'chave',
  `maior` int(11) NOT NULL COMMENT 'maior valor',
  `menor` int(11) NOT NULL COMMENT 'menor valor',
  `numeros_pares` int(11) NOT NULL COMMENT 'quantidade numeros pares',
  `percentual_pares` decimal(10,0) NOT NULL COMMENT 'percentual de num pares',
  `media` decimal(10,0) NOT NULL COMMENT 'media dos valores presentesn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `exercicio17`
--
ALTER TABLE `exercicio17`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `exercicio17`
--
ALTER TABLE `exercicio17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'chave';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
