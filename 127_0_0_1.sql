-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2015 às 20:26
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdlion`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE IF NOT EXISTS `tbcliente` (
  `codCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(100) NOT NULL,
  `enderecoCliente` varchar(150) NOT NULL,
  `rgCliente` varchar(12) NOT NULL,
  `cpfCliente` varchar(14) NOT NULL,
  `telefoneCliente` varchar(20) NOT NULL,
  `celularCliente` varchar(20) NOT NULL,
  `cidadeCliente` varchar(100) NOT NULL,
  `nasctoCliente` date NOT NULL,
  PRIMARY KEY (`codCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`codCliente`, `nomeCliente`, `enderecoCliente`, `rgCliente`, `cpfCliente`, `telefoneCliente`, `celularCliente`, `cidadeCliente`, `nasctoCliente`) VALUES
(2, 'Igor Pastoreli', 'Rua JoÃ£o', '45.748.547-4', '124.214.214-87', '2571-0640', '98547-4587', 'SÃ£o Paulo', '1999-08-08'),
(3, 'Rayssa ', 'Jardim Elena', '45.547.5478-', '458.471.222-01', '2547-4785', '98745-5471', 'Acre', '1985-02-01'),
(5, 'Namy Tokemy', 'Rua Manga', '45.217.875-5', '124.547.741.22', '2547-0000', '98874-1110', 'Manaus', '1998-01-01'),
(6, 'JoÃ£o Dawin', 'Rua mercedez', '25.432.567-9', '458.458.458-47', '2574-2147', '98745-2145', 'AmazonÃ¢s', '1935-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE IF NOT EXISTS `tbfuncionario` (
  `codFunc` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFunc` varchar(100) NOT NULL,
  `enderecoFunc` varchar(100) NOT NULL,
  `raFunc` varchar(40) NOT NULL,
  `cpfFunc` varchar(14) NOT NULL,
  `cargoFunc` varchar(100) NOT NULL,
  `nasctoFunc` date NOT NULL,
  PRIMARY KEY (`codFunc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`codFunc`, `nomeFunc`, `enderecoFunc`, `raFunc`, `cpfFunc`, `cargoFunc`, `nasctoFunc`) VALUES
(1, 'JosÃ© Dias', 'Jardim Etelvina Sp', '12547.21458.14725-78', '124.214.587-54', 'Eletricista', '1975-02-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservico`
--

CREATE TABLE IF NOT EXISTS `tbservico` (
  `codServico` int(11) NOT NULL AUTO_INCREMENT,
  `codigoServico` varchar(50) NOT NULL,
  `descServico` varchar(100) NOT NULL,
  `valorServico` double NOT NULL,
  `obsServico` varchar(150) NOT NULL,
  PRIMARY KEY (`codServico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tbservico`
--

INSERT INTO `tbservico` (`codServico`, `codigoServico`, `descServico`, `valorServico`, `obsServico`) VALUES
(1, '1234', 'Troca de tela', 200, 'Sem risco'),
(2, '1875', 'Troca de processador', 300.5, 'Sem risco'),
(3, '00123', 'Site', 500, 'Simples'),
(4, '3423', 'Concerto de tela', 350, 'Sem risco');
--
-- Database: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
