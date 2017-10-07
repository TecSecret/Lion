-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2015 às 04:43
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
-- Estrutura da tabela `tbadm`
--

CREATE TABLE IF NOT EXISTS `tbadm` (
  `codAdm` int(11) NOT NULL AUTO_INCREMENT,
  `nomeAdm` varchar(100) NOT NULL,
  `emailAdm` varchar(100) NOT NULL,
  `senhaAdm` varchar(50) NOT NULL,
  PRIMARY KEY (`codAdm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tbadm`
--

INSERT INTO `tbadm` (`codAdm`, `nomeAdm`, `emailAdm`, `senhaAdm`) VALUES
(1, 'igor Pastoreli', 'pastoreli.igor@yahoo.com', 'caue10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbchamado`
--

CREATE TABLE IF NOT EXISTS `tbchamado` (
  `codChamado` int(11) NOT NULL AUTO_INCREMENT,
  `descChamado` varchar(300) NOT NULL,
  `dataEntrada` date NOT NULL,
  `statusChamado` varchar(100) NOT NULL,
  `dataSaida` date NOT NULL,
  `codCliente` int(11) NOT NULL,
  `codFuncionario` int(11) NOT NULL,
  `codServico` int(11) NOT NULL,
  `codAdm` int(11) NOT NULL,
  PRIMARY KEY (`codChamado`),
  KEY `codCliente` (`codCliente`),
  KEY `codFuncionario` (`codFuncionario`),
  KEY `codServico` (`codServico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `tbchamado`
--

INSERT INTO `tbchamado` (`codChamado`, `descChamado`, `dataEntrada`, `statusChamado`, `dataSaida`, `codCliente`, `codFuncionario`, `codServico`, `codAdm`) VALUES
(11, 'Tela rachada', '2015-10-17', 'Atendendo', '0000-00-00', 10, 3, 10, 0),
(12, 'Erro do produto', '2015-10-17', 'Atendendo', '0000-00-00', 10, 3, 8, 0),
(13, 'Problema no produto', '2015-10-17', 'Finalizado', '2015-11-25', 10, 0, 8, 0),
(14, 'Erro ao iniciar', '2015-10-17', 'Finalizado', '2015-10-22', 10, 0, 9, 1),
(16, 'Tela rachada', '2015-10-17', 'Atendendo', '0000-00-00', 12, 0, 10, 1),
(18, 'NÃ£o funciona', '2015-10-17', 'Atendendo', '0000-00-00', 8, 0, 8, 1),
(26, 'Meu celular nÃ£o estÃ¡ ligando!', '2015-12-03', 'Atendendo', '0000-00-00', 13, 0, 9, 1);

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
  `emailCliente` varchar(100) NOT NULL,
  `senhaCliente` varchar(50) NOT NULL,
  `fotoCliente` varchar(150) NOT NULL,
  `fotoCapa` varchar(200) NOT NULL,
  PRIMARY KEY (`codCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`codCliente`, `nomeCliente`, `enderecoCliente`, `rgCliente`, `cpfCliente`, `telefoneCliente`, `celularCliente`, `cidadeCliente`, `nasctoCliente`, `emailCliente`, `senhaCliente`, `fotoCliente`, `fotoCapa`) VALUES
(8, 'Joice Souza', 'Itaquera', '25.741.235-8', '457.854.125-74', '2547-8547', '21547-8547', 'SÃ£o Paulo', '1989-04-01', 'joice.souza@gmail.com', 'joice15', 'mac13.jpg', ''),
(10, 'Ana Claudia', 'Guainases', '88.982.909-0', '909.090.999-77', '2998-9090', '98676-6565', 'SÃ£o Paulo', '1981-07-01', 'ana.claudia@gmail.com', 'kaka10', 'paisagem2.jpg', 'paisagem3.jpg'),
(12, 'Enio de Souza', 'Guainases', '54.785.412-5', '547.854.785-41', '5214-5874', '52145-8744', 'SÃ£o Paulo', '1985-12-02', 'pabloenio@gmail.com', 'caue15', 'cidade.jpg', 'paisagem10.jpg'),
(13, 'Micaela Rush', 'Vila Matilde', '47.384.928-9', '849.203.202-93', '2839-0130', '29302-03-2', 'SÃ£o Paulo', '1994-04-08', 'micaela.rush@yahoo.com', 'micaela10', 'pessoa3.jpg', 'paisagem5.jpg'),
(14, 'Ezio Alditore', 'Vila Matilde', '38.392.030-8', '383.392.032-98', '2729-3192', '93828-3282', 'SÃ£o Paulo', '1954-06-08', 'ezio.alditore@gmail.com', 'ezio10', 'paisagem10.jpg', ''),
(15, 'Gustavo Ferreira', 'Guainases', '54.542.458-7', '475.145.214-62', '2145-8745', '95487-8521', 'SÃ£o Paulo', '2001-02-13', 'gugugon.13@gmail.com', 'ovatsug360', 'paisagem3.jpg', ''),
(17, 'Keren Ferreira', 'Guainases', '87.788.887-7', '998.989.239-89', '2674-8484', '98736-7262', 'SÃ£o Paulo', '1995-02-02', 'keren@gmail.com', 'keren10', 'pessoa4.jpg', 'pessoa.jpg');

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
  `emailFunc` varchar(100) NOT NULL,
  `senhaFunc` varchar(50) NOT NULL,
  PRIMARY KEY (`codFunc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`codFunc`, `nomeFunc`, `enderecoFunc`, `raFunc`, `cpfFunc`, `cargoFunc`, `nasctoFunc`, `emailFunc`, `senhaFunc`) VALUES
(3, 'JosÃ© Dias', 'Itaquera', '154789647-15', '125.147.874-54', 'Eletricista', '1955-11-05', 'jose.dias@hotmail.com', 'jose10'),
(4, 'Allen Walker', 'Liberdade', '334434343-43', '763.726.281-78', 'Web Designer', '1998-05-08', 'allen@yahoo.com', 'allen10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmensagem`
--

CREATE TABLE IF NOT EXISTS `tbmensagem` (
  `codMensagem` int(11) NOT NULL AUTO_INCREMENT,
  `dialogo` varchar(500) NOT NULL,
  `condicao` int(11) NOT NULL,
  `codChamado` int(11) NOT NULL,
  `horaMensagem` varchar(10) NOT NULL,
  PRIMARY KEY (`codMensagem`),
  KEY `codChamado` (`codChamado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Extraindo dados da tabela `tbmensagem`
--

INSERT INTO `tbmensagem` (`codMensagem`, `dialogo`, `condicao`, `codChamado`, `horaMensagem`) VALUES
(67, 'adm', 1, 16, '20:15'),
(96, 'Preciso de ajuda', 0, 26, '01:28'),
(97, 'Qual o problema?', 1, 26, '01:28'),
(98, 'Ola sou seu novo atendente.', 1, 26, '01:29'),
(100, 'em oque vocÃª precisa de ajuda?', 1, 26, '01:31'),
(101, 'Com algumas peÃ§as', 0, 26, '01:31'),
(102, 'de computador?', 1, 26, '01:31'),
(103, 'NÃ£o como disse no problema em meu celular', 0, 26, '01:32'),
(104, 'a claro me desculpe', 1, 26, '01:32'),
(105, 'Vou providenciar novas pessas para seu aparelho creio quem em 2 dias seu aparelho esteja Ã  caminha de casa', 1, 26, '01:33'),
(106, 'Ok vou ficar no aguardo muito obrigado!', 0, 26, '01:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservico`
--

CREATE TABLE IF NOT EXISTS `tbservico` (
  `codServico` int(11) NOT NULL AUTO_INCREMENT,
  `codigoServico` varchar(50) NOT NULL,
  `descServico` varchar(200) NOT NULL,
  `valorServico` double NOT NULL,
  `obsServico` varchar(150) NOT NULL,
  `nomeServico` varchar(100) NOT NULL,
  PRIMARY KEY (`codServico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tbservico`
--

INSERT INTO `tbservico` (`codServico`, `codigoServico`, `descServico`, `valorServico`, `obsServico`, `nomeServico`) VALUES
(8, '3245', 'Estrutura para internet.', 200, 'Valor apartir', 'Site'),
(9, '7367', 'Ajustar defeitos, quebras e etc.', 180, 'Valor apartir', 'ManutenÃ§Ã£o'),
(10, '7348', 'SubstituiÃ§Ã£o do visor de aparelhos.', 200, 'Valor apartir', 'Troca de tela'),
(11, '2874', 'Limpeza de partes internas, externas e etc.', 50.69, 'Valor apartir', 'Limpeza'),
(12, '5487', 'RestauraÃ§Ã£o de fios de aparelhos', 30, 'Valor apartir', 'Solda'),
(13, '2541', 'Enviar aparelhos para destinatario', 30, 'Valor apartir', 'Despache'),
(14, '2144', 'Softwares pessoais', 1000, 'Valor apartir', 'Programa');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbchamado`
--
ALTER TABLE `tbchamado`
  ADD CONSTRAINT `relacao_cliente` FOREIGN KEY (`codCliente`) REFERENCES `tbcliente` (`codCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacao_servico` FOREIGN KEY (`codServico`) REFERENCES `tbservico` (`codServico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbmensagem`
--
ALTER TABLE `tbmensagem`
  ADD CONSTRAINT `tbmensagem_ibfk_1` FOREIGN KEY (`codChamado`) REFERENCES `tbchamado` (`codChamado`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
