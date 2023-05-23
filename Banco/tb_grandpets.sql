-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2023 às 12:53
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
-- Banco de dados: `tb_grandpets`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `Nome` varchar(150) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL,
  `Nome` varchar(30) DEFAULT NULL,
  `Idade` int(5) DEFAULT NULL,
  `Telefone` int(15) DEFAULT NULL,
  `Cpf` int(20) DEFAULT NULL,
  `Localidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `Email`, `Senha`, `Nome`, `Idade`, `Telefone`, `Cpf`, `Localidade`) VALUES
(1, 'pedrokaue@gmail.com', '123456', 'Pedro kaue', 17, 2147483647, 1154246, '[mestre neco'),
(10, 'torugo@gmail.com', '123456', 'torugo', 65, 2147483647, 2147483647, 'baixa dÂ´egua'),
(11, 'laysla@gmail.com', '123456', 'laysa', 2, 135468, 2147483647, 'baixa dÂ´egua'),
(12, 'sergio@gmail.com', '123', 'sergio', 30, 2147483647, 333323214, 'aurora'),
(13, 'raissa@gmail.com', '123', 'raissa ', 17, 99655555, 2147483647, 'baixa dÂ´egua'),
(14, 'lucas@gmail.com', '123', 'lucas', 17, 9999999, 33333333, 'aurora');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(255) NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `comentarios` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_usuario`, `comentarios`) VALUES
(1, 0, 'opa'),
(2, 0, 'opa bom dia'),
(3, 0, 'hvyuvyuvyuvy'),
(4, 0, 'llllll');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
