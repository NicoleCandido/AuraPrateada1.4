-- PHPMyAdmin SQL Dump
-- Host: 127.0.0.1
-- Database: auraprateada
-- Generated on: 19/11/2024

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
SET NAMES utf8mb4;

-- Criando o banco de dados se não existir
CREATE DATABASE IF NOT EXISTS `auraprateada` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `auraprateada`;
-- drop database auraprateada;

-- Tabela cadastro
CREATE TABLE `cadastro` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

select * from cadastro;
-- Inserção de dados na tabela cadastro
INSERT INTO `cadastro` (`nome`, `email`, `senha`, `telefone`) VALUES
('emily', 'emily@hotmail.com', '1234', '981212017'),
('gabi', 'gabi@hotmail.com', '1234', '981817575'),
('Vanessa', 'vanessa@gmail.com', '1234', '981213456'),
('Nelma Freire Rocha', 'nelmafreire99@gmail.com', '$2y$10$O0uPJGEMjbnwDmHS9AlffOCYWEW0Ow4yI7gcLeJRRTVIw//P.NZiO', '61981917574'),
('cadu', 'cadu@hotmail.com', '$2y$10$HCkvhs2z7sQCyRLWww1nueL0cf0x8U6Kpu0Yo7Ksu/ynSatMtJaMG', '(61)981917574'),
('Nelma Freire Rocha', 'nelmafreire99@gmail.com', '3367', '61981917574'),
('nicole', 'nicole@gmail.com', '1234', '981918787'),
('igor', 'igor@gmail.com', '1234', '(61)981917879'),
('carlos@gmail.com', 'nelmafreire99@gmail.com', '$2y$10$sEolO3orfeNQYVxN7OTREutQAw3H2tgA.znF7XfTdOrgqIn6v1y8y', '61981917574'),
('emily', 'emiily@hotmail.com', '123', '981212017'),
('Nelma Freire Rocha', 'nelmafreire@gmail.com', '123', '61981917574'),
('Nelma Freire Rocha', 'nelmafreire@gmail.com', '$2y$10$CIO2LvYM7fHlGcjrs872mO.xZ1JXs8/Ch71b.DEw2d3i2GjLKkTXi', '61981917574'),
('pebinha', 'pebinha@hotmail.com', '$2y$10$5XxFVptRVh/uYmqIuFqNYOyzLGpHAqysD.WuWS7jE3/MXUjGgMMLK', '(61)981917675'),
('laura', 'laura@gmail.com', '$2y$10$b10jAenekVrAHVA1b.ho4.0dT4IYvivlmz1YC1Zm11A4F8IhWVkO2', '(61)981976787'),
('laura', 'laura@gmail.com', '123', '(61)981976787'),
('anderson', 'anderson@gmail.com', '1234', '(61)987654567'),
('adryan', 'adryan@hotmail.com', 'nicole', '(61)987675432'),
('Montila', 'motila@gmail.com', '1234', '61995587745'),
('Montilajj', 'emiilyfreiir2e2@hotmail.com', '1234', '61995587745');

-- Tabela produto
CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Inserção de dados na tabela produto
INSERT INTO `produto` (`nome`, `descricao`, `preco`, `quantidade`, `imagem`, `categoria`) VALUES
('colar', NULL, 1000.00, 0, 'imagens/produtos/produto_673c7beb714013.28552126.png', NULL),
('Emily ', NULL, 1.50, 0, 'imagens/produtos/produto_673c878927e911.37492453.jpg', NULL),
('MARIO ', NULL, 1000.00, 0, 'imagens/produtos/produto_673c879ddf9330.03789391.jpg', NULL);

-- Finalizando transação
COMMIT;
