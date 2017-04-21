-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Abr-2017 às 20:06
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cebolinha_lanches`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acessos`
--

CREATE TABLE `nivel_acessos` (
  `id` int(11) NOT NULL,
  `nome_nivel` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`id`, `nome_nivel`, `created`, `modified`) VALUES
(1, 'Administrador', '2017-03-30 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quem_somos`
--

CREATE TABLE `quem_somos` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `nivel_acesso_id`, `created`, `modified`) VALUES
(1, 'Elida', 'elida@gmail.com', 'admin', '123', 1, '2017-03-30 00:00:00', NULL),
(2, 'Di', 'di@gmail.com', 'di', '123', 1, '2017-03-30 00:00:00', NULL),
(4, 'Marcielli', 'ma@gmail.com', 'Marci', '123', 1, '2017-03-30 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quem_somos`
--
ALTER TABLE `quem_somos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quem_somos`
--
ALTER TABLE `quem_somos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
