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
-- Table structure for table `mensagens_contatoscc`
--

CREATE TABLE IF NOT EXISTS `mensagens_contatoscc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numerodocartao` varchar(19) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `mes` varchar(3) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mensagens_contatoscc`
--

INSERT INTO `mensagens_contatos` (`id`, `numerodocartao`, `nome`, `mes`, `ano`, `cvv`, `created`, `modified`) VALUES
(1, '1234567891234567890', 'Rafaela', 'Fev', '2022', '517', '2016-07-24 21:03:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
