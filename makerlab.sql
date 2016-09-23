-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Set-2016 às 00:31
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makerlab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `funcao` int(2) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` int(20) NOT NULL,
  `estado` int(10) NOT NULL,
  `cep` int(8) NOT NULL,
  `sobre` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `email`, `nome`, `sobrenome`, `funcao`, `endereco`, `cidade`, `estado`, `cep`, `sobre`, `avatar`) VALUES
(4, 'Leonardo', 'leo_ps.12@hotmail.com', 'Leonardo', 'Silva', 1, 'Alice Mende de Souza, 126', 1, 1, 18706716, '', NULL),
(2, 'Dakota Rice', 'carolyn.wilson@example.com', 'Dakota', NULL, 1, 'Rua dos anjos, 5897', 1, 1, 18706716, NULL, NULL),
(3, 'MinervaEver', 'viivi.pollari@example.com', 'Minervas', 'Ever', 1, 'Rua vinte e nove', 1, 1, 47896523, '', NULL),
(5, 'Jhon', 'jhon@email', 'jhon', '', 1, 'Rua Arminda', 1, 1, 18706756, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
