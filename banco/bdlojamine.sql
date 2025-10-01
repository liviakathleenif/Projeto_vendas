-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/09/2025 às 03:30
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlojamine`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `cod_prod` int(11) NOT NULL,
  `nome_prod` varchar(90) DEFAULT NULL,
  `valor_prod` decimal(6,2) DEFAULT NULL,
  `desc_prod` varchar(120) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `postado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbproduto`
--

INSERT INTO `tbproduto` (`cod_prod`, `nome_prod`, `valor_prod`, `desc_prod`, `foto`, `qtde`, `postado`) VALUES
(4, 'netherite', 12.00, 'netherite para vilareijos solteros', 'ce9c1435e9305a0ce3d5ab0d37f5448b.jpg', 500, 0),
(5, 'cock', 107.00, 'lindo gostoso', '12934200c90bd318b7bd193ebcd1ef09.png', 1, 1),
(6, 'homer penis', 69.00, 'makitaaaaaaaaaaaaaaaaaaaaaaa', 'aac01f890aefe0bb60afb8e5e5c04429.jpg', 2147483647, 1),
(7, 'bee movie', 200.00, 'alanzoka, ator de bee movie o filme, esta se apresentNDO COMO VESGO', 'f1ed67e0da5602437a21690af80ee31b.jpg', 3, NULL),
(9, 'thiago', 9999.99, 'bomba', '262137bbefb7aa585eacb7eed615aa01.jpg', 999, 1),
(10, 'jack ', 1200.00, 'me come seu dlç', '8e25907c3146c817bbb5b249e7cf5112.jpg', 7, NULL),
(11, 'Mayuri ', 9999.99, 'sol', 'f0e57e92a1ee5c9648785216c3cf151a.jpg', 45, NULL),
(12, 'mikasa linda', 255.00, 'linda gostosa', '801477a9c2398b3032ffd3cd2cac1eeb.jpg', 1, 0),
(13, 'Snake', 240.00, 'naruto', '86eacdbbc7c72315cb95e77d0a4abc5e.png', 30, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbvendedor`
--

CREATE TABLE `tbvendedor` (
  `id` int(11) NOT NULL,
  `nome_vend` varchar(90) DEFAULT NULL,
  `telefone_vend` varchar(11) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `senha` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbvendedor`
--

INSERT INTO `tbvendedor` (`id`, `nome_vend`, `telefone_vend`, `email`, `senha`) VALUES
(1, 'Rodolfo', '11blablabla', 'golfinholindogostoso@gmail.com', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Índices de tabela `tbvendedor`
--
ALTER TABLE `tbvendedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `cod_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbvendedor`
--
ALTER TABLE `tbvendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
