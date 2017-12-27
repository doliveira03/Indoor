-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2016 at 04:16 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_completo`, `usuario`, `senha`, `email`, `telefone`, `admin`) VALUES
(5, 'Administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '0000000', 'sim');

-- --------------------------------------------------------

--
-- Table structure for table `vsitantes`
--

CREATE TABLE `vsitantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cpf` varchar(250) NOT NULL,
  `rg` varchar(250) NOT NULL,
  `autorizado` varchar(250) NOT NULL,
  `data` varchar(250) NOT NULL,
  `destino` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `cracha` varchar(250) NOT NULL,
  `empresa` varchar(250) NOT NULL,
  `observacao` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vsitantes`
--

INSERT INTO `vsitantes` (`id`, `nome`, `cpf`, `rg`, `autorizado`, `data`, `destino`, `telefone`, `cracha`, `empresa`, `observacao`, `foto`) VALUES
(1, 'Feliphe Maia', '1000000000', '1000000000', 'Fernanda', '2016/08/09 07:50', 'Apartamento 15', '94784088', '41391239', 'Teste', 'TesteTesteTesteTeste', 'images/32283806Administrator-icon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vsitantes`
--
ALTER TABLE `vsitantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vsitantes`
--
ALTER TABLE `vsitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
