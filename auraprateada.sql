-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2024 às 13:44
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
-- Banco de dados: `auraprateada`
--
CREATE DATABASE IF NOT EXISTS `auraprateada` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `auraprateada`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id_usuario`, `nome`, `email`, `senha`, `telefone`) VALUES
(1, 'emily', 'emily@hotmail.com', '1234', '981212017'),
(2, 'gabi', 'gabi@hotmail.com', '1234', '981817575'),
(3, 'Vanessa', 'vanessa@gmail.com', '1234', '981213456'),
(4, 'Nelma Freire Rocha', 'nelmafreire99@gmail.com', '$2y$10$O0uPJGEMjbnwDmHS9AlffOCYWEW0Ow4yI7gcLeJRRTVIw//P.NZiO', '61981917574'),
(5, 'cadu', 'cadu@hotmail.com', '$2y$10$HCkvhs2z7sQCyRLWww1nueL0cf0x8U6Kpu0Yo7Ksu/ynSatMtJaMG', '(61)981917574'),
(6, 'Nelma Freire Rocha', 'nelmafreire99@gmail.com', '3367', '61981917574'),
(7, 'nicole', 'nicole@gmail.com', '1234', '981918787'),
(8, 'igor', 'igor@gmail.com', '1234', '(61)981917879'),
(9, 'carlos@gmail.com', 'nelmafreire99@gmail.com', '$2y$10$sEolO3orfeNQYVxN7OTREutQAw3H2tgA.znF7XfTdOrgqIn6v1y8y', '61981917574'),
(10, 'emily', 'emiily@hotmail.com', '123', '981212017'),
(11, 'Nelma Freire Rocha', 'nelmafreire@gmail.com', '123', '61981917574'),
(12, 'Nelma Freire Rocha', 'nelmafreire@gmail.com', '$2y$10$CIO2LvYM7fHlGcjrs872mO.xZ1JXs8/Ch71b.DEw2d3i2GjLKkTXi', '61981917574'),
(13, 'pebinha', 'pebinha@hotmail.com', '$2y$10$5XxFVptRVh/uYmqIuFqNYOyzLGpHAqysD.WuWS7jE3/MXUjGgMMLK', '(61)981917675'),
(14, 'laura', 'laura@gmail.com', '$2y$10$b10jAenekVrAHVA1b.ho4.0dT4IYvivlmz1YC1Zm11A4F8IhWVkO2', '(61)981976787'),
(15, 'laura', 'laura@gmail.com', '123', '(61)981976787'),
(16, 'anderson', 'anderson@gmail.com', '1234', '(61)987654567'),
(17, 'adryan', 'adryan@hotmail.com', 'nicole', '(61)987675432'),
(18, 'Montila', 'motila@gmail.com', '1234', '61995587745'),
(19, 'Montilajj', 'emiilyfreiir2e2@hotmail.com', '1234', '61995587745');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `descricao`, `preco`, `quantidade`, `imagem`, `categoria`) VALUES
(1, 'colar', NULL, 1000.00, 0, 'imagens/produtos/produto_673c7beb714013.28552126.png', NULL),
(2, 'Emily ', NULL, 1.50, 0, 'imagens/produtos/produto_673c878927e911.37492453.jpg', NULL),
(3, 'MARIO ', NULL, 1000.00, 0, 'imagens/produtos/produto_673c879ddf9330.03789391.jpg', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
