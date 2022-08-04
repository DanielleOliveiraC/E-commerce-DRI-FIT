-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2016 at 02:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drifit`
--

-- --------------------------------------------------------

--
-- Table structure for table `mensagens_contatos`
--

CREATE TABLE IF NOT EXISTS `mensagens_contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `Dia` varchar(2) NOT NULL,
  `Mes` varchar(3) NOT NULL,
  `Ano` varchar(4) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `CEP` varchar(9) NOT NULL,
  `tipoendereco` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(4) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `sms` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `mensagememail` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mensagens_contatos`
--

INSERT INTO `mensagens_contatos` (`id`, `nome`, `sobrenome`, `sexo`, `Dia`, `Mes`, `Ano`, `CPF`, `CEP`, `tipoendereco`, `endereco`, `numero`, `complemento`, `bairro`, `Estado`, `cidade`, `referencia`, `telefone`, `sms`, `email`, `senha`, `mensagememail`, `created`, `modified`) VALUES
(1, 'Rafaela', 'Nunes', 'feminino', '25', 'Fev', '2002', '517.480.358-86', '07145-100', 'Rua', 'Andromeda', '622', 'Casa', 'Primavera', 'São Paulo', 'Guarulhos', 'Escola', '11 94629-1917', NULL, 'rafaela.ribeiro@hotmail.com', '74709402', NULL, '2016-07-24 21:03:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
