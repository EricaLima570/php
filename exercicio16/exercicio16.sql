-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: database_titans
-- Tempo de geração: 21/10/2023 às 01:47
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
-- Estrutura para tabela `exercicio16`
--

CREATE TABLE `exercicio16` (
  `id` int(11) NOT NULL COMMENT 'chave',
  `numero` int(11) NOT NULL COMMENT 'valor a ser inserido',
  `par_ou_impar` varchar(10) NOT NULL COMMENT 'definição do valor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
