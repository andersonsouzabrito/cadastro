-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Out-2019 às 23:37
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` varchar(25) NOT NULL,
  `segmento` varchar(25) NOT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_emp`, `nomeEmpresa`, `segmento`) VALUES
(1, 'server', 'ti'),
(5, 'eletrofrigor', 'refrigeracao'),
(7, 'poupa tempo', 'ti');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `cpf` int(11) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nome`, `cpf`) VALUES
(1, 'andeson', 2147483647),
(2, 'anderson', 2147483647),
(10, 'quezia', 2147483647),
(13, 'quezia', 2147483647),
(14, 'anderson', 2147483647),
(15, 'andeson', 2147483647),
(16, 'andeson', 2147483647),
(17, 'ruan', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_empresa`
--

CREATE TABLE IF NOT EXISTS `usuario_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuCadastrado` varchar(25) NOT NULL,
  `empCadastrada` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuario_empresa`
--

INSERT INTO `usuario_empresa` (`id`, `usuCadastrado`, `empCadastrada`) VALUES
(1, 'anderson', 'server'),
(3, 'anderson', 'poupa tempo'),
(5, 'quezia', 'poupa tempo'),
(7, 'anderson', 'eletrofrigor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
