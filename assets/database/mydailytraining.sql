-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 08-Dez-2017 às 16:06
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `mydailytraining`
--
CREATE DATABASE IF NOT EXISTS `mydailytraining` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydailytraining`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `academias`
--

CREATE TABLE IF NOT EXISTS `academias` (
  `idAcademia` int(11) NOT NULL AUTO_INCREMENT,
  `idPlano` int(11) NOT NULL,
  `idPacote` int(11) NOT NULL,
  `nomeAcademia` varchar(50) NOT NULL,
  `cnpjAcademia` varchar(20) NOT NULL,
  `enderecoAcademia` varchar(100) NOT NULL,
  `estadoAcademia` varchar(50) NOT NULL,
  `cidadeAcademia` varchar(50) NOT NULL,
  `bairroAcademia` varchar(50) NOT NULL,
  `cepAcademia` varchar(10) NOT NULL,
  `telefoneAcademia` varchar(15) NOT NULL,
  `nomeResponsavel` varchar(200) NOT NULL,
  `emailAcademia` varchar(50) NOT NULL,
  `mensalidadeAcademia` double NOT NULL,
  `statusAcademia` tinyint(1) NOT NULL,
  `qtdTotalLicencas` int(11) NOT NULL,
  `qtdLicencasUsadas` int(11) NOT NULL,
  `valorTotal` double NOT NULL,
  `valorPago` double NOT NULL,
  `qtdParcelas` int(11) NOT NULL,
  `diaPagamentoAcademia` date NOT NULL,
  PRIMARY KEY (`idAcademia`),
  KEY `idPlano` (`idPlano`,`idPacote`),
  KEY `idPacote` (`idPacote`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `idAluno` int(11) NOT NULL AUTO_INCREMENT,
  `idAcademia` int(11) NOT NULL,
  `nomeAluno` varchar(200) NOT NULL,
  `dataNascimentoAluno` date NOT NULL,
  `idadeAluno` int(2) NOT NULL,
  `cpfAluno` varchar(15) NOT NULL,
  `rgAluno` varchar(15) NOT NULL,
  `emailAluno` varchar(50) NOT NULL,
  `sexoAluno` varchar(10) NOT NULL,
  `senhaAluno` varchar(50) NOT NULL,
  `telefoneAluno` varchar(15) NOT NULL,
  `enderecoAluno` varchar(100) NOT NULL,
  `estadoAluno` varchar(50) NOT NULL,
  `cidadeAluno` varchar(50) NOT NULL,
  `bairroAluno` varchar(50) NOT NULL,
  `cepAluno` varchar(10) NOT NULL,
  `objetivoAluno` varchar(1) NOT NULL,
  `dataValidadeExame` date NOT NULL,
  `nomeResponsavelAluno` varchar(200) NOT NULL,
  `telefoneResponsavelAluno` varchar(15) NOT NULL,
  `statusAluno` tinyint(1) NOT NULL,
  `cirurgias` varchar(200) NOT NULL,
  `medicamentos` varchar(200) NOT NULL,
  `doencasFamiliaresAluno` varchar(200) NOT NULL,
  `diaPagamentoAluno` int(2) NOT NULL,
  PRIMARY KEY (`idAluno`),
  KEY `idAcademia` (`idAcademia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoesfisicas`
--

CREATE TABLE IF NOT EXISTS `avaliacoesfisicas` (
  `idAvaliacaoFisica` int(11) NOT NULL AUTO_INCREMENT,
  `idAluno` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dataAvaliacaoFisica` date NOT NULL,
  `alturaAluno` double NOT NULL,
  `imcAluno` double NOT NULL,
  `pescocoAluno` double NOT NULL,
  `ombroAluno` double NOT NULL,
  `bracoRelaxadoEsqAluno` double NOT NULL,
  `bracoRelaxadoDirAluno` double NOT NULL,
  `bracoContraidoEsqAluno` double NOT NULL,
  `bracoContraidoDirAluno` double NOT NULL,
  `antebracoEsqAluno` double NOT NULL,
  `antebracoDirAluno` double NOT NULL,
  `toraxRelaxadoAluno` double NOT NULL,
  `toraxInspiradoAluno` double NOT NULL,
  `cinturaAluno` double NOT NULL,
  `abdomenAluno` double NOT NULL,
  `quadrilAluno` double NOT NULL,
  `coxaEsqAluno` double NOT NULL,
  `coxaDirAluno` double NOT NULL,
  `panturrilhaEsqAluno` double NOT NULL,
  `panturrilhaDirAluno` double NOT NULL,
  `relacaoCintQaudrilAluno` double NOT NULL,
  `qtdFlexaoBracoAluno` int(3) NOT NULL,
  `qtdAbdominalAluno` int(3) NOT NULL,
  `observacoes` varchar(200) NOT NULL,
  PRIMARY KEY (`idAvaliacaoFisica`),
  KEY `idAluno` (`idAluno`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idUsuario_2` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE IF NOT EXISTS `chamados` (
  `idChamado` int(11) NOT NULL AUTO_INCREMENT,
  `idAluno` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idAcademia` int(11) NOT NULL,
  `dataChamado` date NOT NULL,
  `horarioChamado` time NOT NULL,
  PRIMARY KEY (`idChamado`),
  KEY `idAluno` (`idAluno`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idAcademia` (`idAcademia`),
  KEY `idAluno_2` (`idAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicios`
--

CREATE TABLE IF NOT EXISTS `exercicios` (
  `idExercicio` int(11) NOT NULL AUTO_INCREMENT,
  `nomeExercicio` varchar(50) NOT NULL,
  `grupoMuscular` varchar(10) NOT NULL,
  PRIMARY KEY (`idExercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exerciciostreinoaluno`
--

CREATE TABLE IF NOT EXISTS `exerciciostreinoaluno` (
  `idExerciciosTreinoAluno` int(11) NOT NULL AUTO_INCREMENT,
  `idExercicio` int(11) NOT NULL,
  `serieExercicio` int(11) NOT NULL,
  `repeticoesExercicio` int(11) NOT NULL,
  `cargaExercicio` int(11) NOT NULL,
  PRIMARY KEY (`idExerciciosTreinoAluno`),
  KEY `idExercicio` (`idExercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotes`
--

CREATE TABLE IF NOT EXISTS `pacotes` (
  `idPacote` int(11) NOT NULL AUTO_INCREMENT,
  `valorPacote` double NOT NULL,
  `qtdLicencas` int(3) NOT NULL,
  PRIMARY KEY (`idPacote`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE IF NOT EXISTS `planos` (
  `idPlano` int(11) NOT NULL AUTO_INCREMENT,
  `nomePlano` varchar(30) NOT NULL,
  `valorPacote` double NOT NULL,
  `qtdLicencas` int(3) NOT NULL,
  PRIMARY KEY (`idPlano`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinos`
--

CREATE TABLE IF NOT EXISTS `treinos` (
  `idTreino` int(11) NOT NULL AUTO_INCREMENT,
  `idAcademia` int(11) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idExerciciosTreinoAluno` int(11) NOT NULL,
  `dataInicioTreino` date NOT NULL,
  `dataFimTreino` date NOT NULL,
  `objetivoTreino` int(1) NOT NULL,
  `diasTreino` varchar(20) NOT NULL,
  `observacoesTreino` varchar(200) NOT NULL,
  PRIMARY KEY (`idTreino`),
  KEY `idAcademia` (`idAcademia`,`idAluno`,`idUsuario`,`idExerciciosTreinoAluno`),
  KEY `idAluno` (`idAluno`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idExerciciosTreinoAluno` (`idExerciciosTreinoAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `idAcademia` int(11) NOT NULL,
  `nomeUsuario` varchar(200) NOT NULL,
  `loginUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `cpfUsuario` varchar(15) NOT NULL,
  `rgUsuario` varchar(15) NOT NULL,
  `crefUsuario` varchar(20) NOT NULL,
  `sexoUsuario` varchar(10) NOT NULL,
  `dataNascimentoUsuario` date NOT NULL,
  `idadeUsuario` int(2) NOT NULL,
  `enderecoUsuario` varchar(100) NOT NULL,
  `estadoUsuario` varchar(20) NOT NULL,
  `cidadeUsuario` varchar(50) NOT NULL,
  `bairroUsuario` varchar(50) NOT NULL,
  `cepUsuario` varchar(50) NOT NULL,
  `telefoneUsuario` varchar(15) NOT NULL,
  `tipoConta` int(11) NOT NULL,
  `statusConta` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idAcademia` (`idAcademia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `academias`
--
ALTER TABLE `academias`
  ADD CONSTRAINT `academias_ibfk_1` FOREIGN KEY (`idPlano`) REFERENCES `planos` (`idPlano`),
  ADD CONSTRAINT `academias_ibfk_2` FOREIGN KEY (`idPacote`) REFERENCES `pacotes` (`idPacote`);

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`idAcademia`) REFERENCES `academias` (`idAcademia`);

--
-- Limitadores para a tabela `avaliacoesfisicas`
--
ALTER TABLE `avaliacoesfisicas`
  ADD CONSTRAINT `avaliacoesfisicas_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`idAluno`),
  ADD CONSTRAINT `avaliacoesfisicas_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Limitadores para a tabela `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`idAluno`),
  ADD CONSTRAINT `chamados_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `chamados_ibfk_3` FOREIGN KEY (`idAcademia`) REFERENCES `academias` (`idAcademia`);

--
-- Limitadores para a tabela `exerciciostreinoaluno`
--
ALTER TABLE `exerciciostreinoaluno`
  ADD CONSTRAINT `idExercicio` FOREIGN KEY (`idExercicio`) REFERENCES `exercicios` (`idExercicio`);

--
-- Limitadores para a tabela `treinos`
--
ALTER TABLE `treinos`
  ADD CONSTRAINT `treinos_ibfk_1` FOREIGN KEY (`idAcademia`) REFERENCES `academias` (`idAcademia`),
  ADD CONSTRAINT `treinos_ibfk_2` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`idAluno`),
  ADD CONSTRAINT `treinos_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `treinos_ibfk_4` FOREIGN KEY (`idExerciciosTreinoAluno`) REFERENCES `exerciciostreinoaluno` (`idExerciciosTreinoAluno`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idAcademia`) REFERENCES `academias` (`idAcademia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
