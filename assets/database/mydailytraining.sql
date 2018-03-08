-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 08-Mar-2018 às 04:32
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
  `nomeResponsavelAcademia` varchar(200) NOT NULL,
  `emailAcademia` varchar(50) NOT NULL,
  `mensalidadeAcademia` double NOT NULL,
  `statusAcademia` tinyint(1) NOT NULL,
  `qtdTotalLicencas` int(11) NOT NULL,
  `qtdLicencasUsadas` int(11) NOT NULL,
  `valorTotal` double NOT NULL,
  `valorPago` double NOT NULL,
  `qtdParcelas` int(11) NOT NULL,
  `diaPagamentoAcademia` int(11) NOT NULL,
  PRIMARY KEY (`idAcademia`),
  KEY `idPlano` (`idPlano`,`idPacote`),
  KEY `idPacote` (`idPacote`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Extraindo dados da tabela `academias`
--

INSERT INTO `academias` (`idAcademia`, `idPlano`, `idPacote`, `nomeAcademia`, `cnpjAcademia`, `enderecoAcademia`, `estadoAcademia`, `cidadeAcademia`, `bairroAcademia`, `cepAcademia`, `telefoneAcademia`, `nomeResponsavelAcademia`, `emailAcademia`, `mensalidadeAcademia`, `statusAcademia`, `qtdTotalLicencas`, `qtdLicencasUsadas`, `valorTotal`, `valorPago`, `qtdParcelas`, `diaPagamentoAcademia`) VALUES
(58, 1, 5, 'Academia +Ativa', '22.587.707/0001-89', 'Teste', 'Alagoas', 'Crato', 'Centro', '63132015', '7777777777', 'Academia Teste', 'renatapaulo@gmail.com', 62, 1, 150, 0, 600, 0, 12, 5),
(65, 1, 5, 'Academia Maluco Beleza', '86.843.811/0001-70', 'Rua dos Bobos, nº 0', 'Acre', 'Lugar Nenhum', 'Fim de Mundo', '00000000', '(00) 00000-0000', 'Raul Seixas', 'totaraul@tocaraul.com', 70, 1, 150, 0, 600, 0, 12, 8),
(66, 2, 2, 'Academia Vamos Ver Se Dar Certo Agora', '18.472.704/0001-22', 'Rua dos Bobos, nº 0', 'Ceará', 'Crato', 'Centro', '63100-005', '(00) 0000-0000', 'Clice Bezerra Brito Romão', 'clice.bbr@hotmail.com', 65, 1, 400, 401, 857, 0, 12, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `idAluno` int(11) NOT NULL AUTO_INCREMENT,
  `idAcademia` int(11) NOT NULL,
  `idTreino` int(11) DEFAULT NULL,
  `nomeAluno` varchar(200) DEFAULT NULL,
  `dataNascimentoAluno` date DEFAULT NULL,
  `idadeAluno` int(2) DEFAULT NULL,
  `cpfAluno` varchar(15) DEFAULT NULL,
  `rgAluno` varchar(15) DEFAULT NULL,
  `emailAluno` varchar(50) DEFAULT NULL,
  `sexoAluno` varchar(10) DEFAULT NULL,
  `loginAluno` varchar(50) NOT NULL,
  `senhaAluno` varchar(50) DEFAULT NULL,
  `telefoneAluno` varchar(15) DEFAULT NULL,
  `enderecoAluno` varchar(100) DEFAULT NULL,
  `estadoAluno` varchar(50) DEFAULT NULL,
  `cidadeAluno` varchar(50) DEFAULT NULL,
  `bairroAluno` varchar(50) DEFAULT NULL,
  `cepAluno` varchar(10) DEFAULT NULL,
  `objetivoAluno` varchar(20) DEFAULT NULL,
  `diaValidadeExame` int(11) DEFAULT NULL,
  `diasTreinoAluno` varchar(60) DEFAULT NULL,
  `nomeResponsavelAluno` varchar(200) DEFAULT NULL,
  `telefoneResponsavelAluno` varchar(15) DEFAULT NULL,
  `statusAluno` tinyint(1) DEFAULT NULL,
  `cirurgias` varchar(200) DEFAULT NULL,
  `medicamentos` varchar(200) DEFAULT NULL,
  `doencasFamiliaresAluno` varchar(200) DEFAULT NULL,
  `diaPagamentoAluno` int(2) DEFAULT NULL,
  PRIMARY KEY (`idAluno`),
  KEY `idAcademia` (`idAcademia`),
  KEY `idAcademia_2` (`idAcademia`),
  KEY `idAcademia_3` (`idAcademia`),
  KEY `alunos_ibfk_2` (`idTreino`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`idAluno`, `idAcademia`, `idTreino`, `nomeAluno`, `dataNascimentoAluno`, `idadeAluno`, `cpfAluno`, `rgAluno`, `emailAluno`, `sexoAluno`, `loginAluno`, `senhaAluno`, `telefoneAluno`, `enderecoAluno`, `estadoAluno`, `cidadeAluno`, `bairroAluno`, `cepAluno`, `objetivoAluno`, `diaValidadeExame`, `diasTreinoAluno`, `nomeResponsavelAluno`, `telefoneResponsavelAluno`, `statusAluno`, `cirurgias`, `medicamentos`, `doencasFamiliaresAluno`, `diaPagamentoAluno`) VALUES
(14, 58, NULL, 'Academia Teste', '1985-04-24', 32, '222.222.222-22', '222222222222222', 'renatapaulo@gmail.com', 'Feminino', 'MjIyMjIyMjIyMjI=', 'MjIyMjIyMjIyMjI=', '7777777777', 'Teste', 'Mato Grosso do Sul', 'Crato', 'jygku,yfc', '63132015', 'Força', 10, NULL, 'Mãe', '(33) 33333-3333', 1, 'Cirurgias', 'Medicamentos', 'Doenças Familiares', 15),
(15, 66, NULL, 'Clice Bezerra Romão', '1994-06-27', 23, '041.522.931-60', '2006034076093', 'clice.bbr@hotmail.com', 'Feminino', 'Vm0wd2QyUXlVWGxWV0d4V1YwZDRWMVl3WkRSWFJteFZVbTVrVl', 'Vm0wd2QyUXlVWGxWV0d4V1YwZDRWMVl3WkRSWFJteFZVbTVrVl', '(88) 98126-6732', 'Rua Dom Pedro II, 248', 'Ceará', 'Crato', 'Centro', '63100-005', 'Força', 10, 'Segunda|Terça|Quarta|Quinta|Sexta', '', '', 1, 'Não', 'Não', 'Não', 5),
(16, 66, NULL, 'Academia Teste', '1994-06-27', 23, '093.071.000-20', '222222222222222', 'renatapaulo@gmail.com', 'Feminino', 'MDkzMDcxMDAwMjA=', 'MDkzMDcxMDAwMjA=', '7777777777', 'Teste', 'Amazonas', 'Crato', 'dfgthuji', '63132015', 'Força', 10, 'Segunda|Quarta', 'fghjukl', '7777777777', 1, '', '', '', 10),
(17, 66, NULL, 'Academia Teste', '1994-06-27', 23, '392.947.310-06', '222222222222222', 'renatapaulo@gmail.com', 'Feminino', 'MzkyOTQ3MzEwMDY=', 'MzkyOTQ3MzEwMDY=', '7777777777', 'Teste', 'Amapá', 'Crato', 'dfcghj', '63132015', 'Força', 15, 'Segunda|Terça|Quinta|Sexta', 'fcghbjnk', '7777777777', 1, '', '', '', 10),
(18, 66, NULL, 'Academia Teste', '1994-06-27', 23, '107.222.210-88', '222222222222222', 'renatapaulo@gmail.com', 'Feminino', 'MTA3MjIyMjEwODg=', 'MTA3MjIyMjEwODg=', '7777777777', 'Teste', 'Amapá', 'Crato', 'dfcghj', '63132015', 'Força', 15, 'Segunda|Terça|Quinta|Sexta', 'fcghbjnk', '7777777777', 1, '', '', '', 10),
(19, 66, NULL, 'Academia Teste', '1994-06-27', 23, '515.073.040-80', '222222222222222', 'renatapaulo@gmail.com', 'Feminino', 'NTE1MDczMDQwODA=', 'NTE1MDczMDQwODA=', '7777777777', 'Teste', 'Amapá', 'Crato', 'dfcghj', '63132015', 'Força', 15, 'Segunda|Terça|Quinta|Sexta', 'fcghbjnk', '7777777777', 1, '', '', '', 10),
(20, 66, NULL, 'Academia Teste', '1994-06-27', 23, '455.381.380-70', '222222222222222', 'renatapaulo@gmail.com', 'Feminino', 'NDU1MzgxMzgwNzA=', 'NDU1MzgxMzgwNzA=', '7777777777', 'Teste', 'Amapá', 'Crato', 'dfcghj', '63132015', 'Força', 15, 'Segunda|Terça|Quinta|Sexta', 'fcghbjnk', '7777777777', 1, '', '', '', 10),
(21, 66, NULL, 'Academia Teste', '1994-06-27', 23, '351.569.980-54', '444444444444444', 'renatapaulo@gmail.com', 'Feminino', 'MzUxNTY5OTgwNTQ=', 'MzUxNTY5OTgwNTQ=', '7777777777', 'Teste', 'Maranhão', 'Crato', 'fgvhbjn', '63132015', 'Emagrecimento', 10, 'Terça|Quarta', 'fgvhbjnkm', '(77) 77777-7779', 1, '', '', '', 15);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`idChamado`, `idAluno`, `idUsuario`, `idAcademia`, `dataChamado`, `horarioChamado`) VALUES
(1, 21, 66, 66, '2018-03-04', '01:32:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicios`
--

CREATE TABLE IF NOT EXISTS `exercicios` (
  `idExercicio` int(11) NOT NULL AUTO_INCREMENT,
  `nomeExercicio` varchar(50) NOT NULL,
  `grupoMuscular` varchar(30) NOT NULL,
  `tipoExercicio` tinyint(1) NOT NULL,
  PRIMARY KEY (`idExercicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Extraindo dados da tabela `exercicios`
--

INSERT INTO `exercicios` (`idExercicio`, `nomeExercicio`, `grupoMuscular`, `tipoExercicio`) VALUES
(1, 'Cadeira Extensora', 'Coxa Anterior', 1),
(2, 'Leg 45º', 'Coxa Anterior', 1),
(3, 'Hack Machine', 'Coxa Anterior', 1),
(4, 'Agachamento', 'Coxa Anterior', 1),
(5, 'Leg Horizontal', 'Coxa Anterior', 0),
(6, 'Avanço', 'Coxa Anterior', 0),
(7, 'Cadeira Adutora', 'Coxa Anterior', 0),
(8, 'Flexora Vertical', 'Coxa Posterior', 0),
(9, 'Mesa Flexora', 'Coxa Posterior', 1),
(10, 'Stiff', 'Coxa Posterior', 1),
(11, 'Cadeira Flexora', 'Coxa Posterior', 0),
(12, 'Cadeira Abdutora', 'Glúteos', 0),
(13, 'Extensão de Quadril', 'Glúteos', 1),
(14, 'Quatro Apoio', 'Glúteos', 0),
(15, 'Caixote', 'Glúteos', 0),
(16, 'Graviton', 'Glúteos', 0),
(17, 'Apolete', 'Glúteos', 0),
(18, 'Supino Reto', 'Peitoral', 1),
(19, 'Supino Inclinado', 'Peitoral', 1),
(20, 'Supino Declinado', 'Peitoral', 0),
(21, 'Cross Over', 'Peitoral', 0),
(22, 'Peck Deck Peitoral', 'Peitoral', 1),
(23, 'Pullover', 'Peitoral', 0),
(24, 'Crucifixo', 'Peitoral', 0),
(25, 'Abdominal Supra', 'Abdômen', 1),
(26, 'Abdominal Infra', 'Abdômen', 1),
(27, 'Abdominal Oblíquo', 'Abdômen', 0),
(28, 'Extensão Lombar', 'Abdômen', 0),
(29, 'Puxador Vertical', 'Costas', 1),
(30, 'Remada', 'Costas', 1),
(31, 'Peck Deck Dorsal', 'Costas', 1),
(32, 'Remada Curvada', 'Costas', 0),
(33, 'Pull Down', 'Costas', 0),
(34, 'Barra Fixa', 'Costas', 0),
(35, 'Remada Unilateral', 'Costas', 0),
(36, 'Desenvolvimento', 'Ombro/Trapézio', 1),
(37, 'Elevação Lateral', 'Ombro/Trapézio', 1),
(38, 'Elevação Frontal', 'Ombro/Trapézio', 1),
(39, 'Remada Alta', 'Ombro/Trapézio', 0),
(40, 'Encolhimento', 'Ombro/Trapézio', 0),
(41, 'Tríceps no Pulley', 'Tríceps', 1),
(42, 'Tríceps Testa', 'Tríceps', 0),
(43, 'Tríceps Mergulho', 'Tríceps', 1),
(44, 'Tríceps Patada', 'Tríceps', 0),
(45, 'Tríceps Francês', 'Tríceps', 0),
(46, 'Rosca Direta', 'Bíceps', 1),
(47, 'Rosca Scott', 'Bíceps', 0),
(48, 'Rosca Alternada', 'Bíceps', 1),
(49, 'Rosca Inversa', 'Bíceps', 1),
(50, 'Rosca Concentrada', 'Bíceps', 0),
(51, 'Flexão Plantar no Leg', 'Panturrilha', 0),
(52, 'Flexão Plantar Vertical', 'Panturrilha', 1),
(53, 'Panturrilha', 'Panturrilha', 0),
(54, 'Flexão Plantar Unilateral', 'Panturrilha', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exerciciostreino`
--

CREATE TABLE IF NOT EXISTS `exerciciostreino` (
  `idExercicioTreino` int(11) NOT NULL AUTO_INCREMENT,
  `idExercicio` int(11) NOT NULL,
  `idTreino` int(11) NOT NULL,
  `serieExercicioTreino` int(11) DEFAULT NULL,
  `cargaExercicioTreino` int(11) DEFAULT NULL,
  `tempoExercicioTreino` int(11) DEFAULT NULL,
  `descansoExercicioTreino` int(11) DEFAULT NULL,
  `repeticoesExercicioTreino` int(11) DEFAULT NULL,
  `velocidadeExercicioTreino` int(11) DEFAULT NULL,
  PRIMARY KEY (`idExercicioTreino`),
  KEY `idExercicio` (`idExercicio`),
  KEY `idTreino` (`idTreino`),
  KEY `idExercicio_2` (`idExercicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Extraindo dados da tabela `exerciciostreino`
--

INSERT INTO `exerciciostreino` (`idExercicioTreino`, `idExercicio`, `idTreino`, `serieExercicioTreino`, `cargaExercicioTreino`, `tempoExercicioTreino`, `descansoExercicioTreino`, `repeticoesExercicioTreino`, `velocidadeExercicioTreino`) VALUES
(17, 1, 39, 3, 6, 0, 30, 15, 0),
(18, 2, 39, 3, 2, 0, 30, 15, 0),
(20, 4, 39, 3, 2, 0, 0, 15, 0),
(22, 29, 39, 3, 2, 0, 0, 15, 0),
(23, 31, 39, 3, 3, 0, 0, 15, 0),
(25, 30, 39, 3, 2, 0, 30, 15, 0),
(26, 46, 39, 3, 2, 0, 30, 15, 0),
(27, 48, 39, 3, 2, 0, 0, 15, 0),
(28, 9, 40, 3, 0, 0, 0, 15, 0),
(30, 10, 40, 3, 0, 0, 0, 15, 0),
(31, 13, 40, 3, 0, 0, 0, 15, 0),
(32, 36, 40, 3, 0, 0, 0, 15, 0),
(33, 37, 40, 3, 0, 0, 0, 15, 0),
(34, 52, 40, 3, 0, 0, 0, 15, 0),
(35, 38, 40, 3, 0, 0, 0, 15, 0),
(36, 18, 41, 3, 0, 0, 0, 15, 0),
(37, 19, 41, 3, 0, 0, 0, 15, 0),
(38, 22, 41, 3, 0, 0, 0, 15, 0),
(39, 22, 41, 3, 0, 0, 0, 15, 0),
(40, 25, 41, 3, 0, 0, 0, 15, 0),
(41, 26, 41, 3, 0, 0, 0, 15, 0),
(42, 41, 41, 3, 0, 0, 0, 15, 0),
(43, 43, 41, 3, 0, 0, 0, 15, 0),
(44, 27, 42, 0, 2, 30, 0, 0, 7),
(45, 26, 42, 3, 6, 0, 30, 15, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotes`
--

CREATE TABLE IF NOT EXISTS `pacotes` (
  `idPacote` int(11) NOT NULL AUTO_INCREMENT,
  `nomePacote` varchar(10) NOT NULL,
  `valorPacote` double NOT NULL,
  `qtdLicencas` int(3) NOT NULL,
  PRIMARY KEY (`idPacote`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `pacotes`
--

INSERT INTO `pacotes` (`idPacote`, `nomePacote`, `valorPacote`, `qtdLicencas`) VALUES
(1, 'Pacote A', 10, 50),
(2, 'Pacote B', 17, 100),
(3, 'Pacote C', 25, 150),
(4, 'Pacote D', 30, 200),
(5, 'Nenhum', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE IF NOT EXISTS `planos` (
  `idPlano` int(11) NOT NULL AUTO_INCREMENT,
  `nomePlano` varchar(30) NOT NULL,
  `valorPacoteTotal` double NOT NULL,
  `valorPacote12x` double NOT NULL,
  `qtdLicencas` int(3) NOT NULL,
  PRIMARY KEY (`idPlano`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`idPlano`, `nomePlano`, `valorPacoteTotal`, `valorPacote12x`, `qtdLicencas`) VALUES
(1, 'Simples', 600, 50, 150),
(2, 'Médio', 840, 70, 300),
(3, 'Pro', 1080, 90, 600);

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinos`
--

CREATE TABLE IF NOT EXISTS `treinos` (
  `idTreino` int(11) NOT NULL AUTO_INCREMENT,
  `idAcademia` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nomeTreino` varchar(100) NOT NULL,
  `objetivoTreino` int(1) NOT NULL,
  `dataTreino` date NOT NULL,
  `horaTreino` time NOT NULL,
  `observacoesTreino` varchar(200) NOT NULL,
  `statusTreino` tinyint(1) NOT NULL,
  PRIMARY KEY (`idTreino`),
  KEY `idAcademia` (`idAcademia`,`idUsuario`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idUsuario_2` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Extraindo dados da tabela `treinos`
--

INSERT INTO `treinos` (`idTreino`, `idAcademia`, `idUsuario`, `nomeTreino`, `objetivoTreino`, `dataTreino`, `horaTreino`, `observacoesTreino`, `statusTreino`) VALUES
(39, 66, 66, 'Treino A Básico Hipertrofia', 0, '2018-03-04', '15:51:19', '', 1),
(40, 66, 66, 'Treino B Básico Hipertrofia', 0, '2018-03-04', '15:56:28', '', 1),
(41, 66, 66, 'Treino C Básico Hipertrofia', 0, '2018-03-04', '16:01:23', '', 1),
(42, 66, 66, 'Treino A Qualidade de Vida', 0, '2018-03-06', '16:49:04', 'Treino para aumentar a qualidade de vida.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinosaluno`
--

CREATE TABLE IF NOT EXISTS `treinosaluno` (
  `idTreinoAluno` int(11) NOT NULL AUTO_INCREMENT,
  `idTreino` varchar(30) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `diasTreinoAluno` varchar(50) NOT NULL,
  `statusTreinoAluno` tinyint(1) NOT NULL,
  PRIMARY KEY (`idTreinoAluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `treinosaluno`
--

INSERT INTO `treinosaluno` (`idTreinoAluno`, `idTreino`, `idAluno`, `diasTreinoAluno`, `statusTreinoAluno`) VALUES
(22, '39', 15, 'Segunda|Quinta', 0),
(23, '40', 15, 'Terça|Sexta', 0),
(24, '39', 15, 'Terça|Quarta', 0),
(25, '39', 15, 'Segunda|Quarta', 0),
(26, '41', 15, 'Segunda|Quinta', 0),
(27, '39', 15, 'Quarta', 0),
(28, '40', 15, 'Quarta|Quinta', 0),
(29, '40', 15, 'Terça', 0),
(30, '40', 15, 'Quarta', 0),
(31, '40', 15, 'Quinta', 0),
(32, '41', 15, 'Quarta', 0),
(33, '40', 15, 'Sexta', 0),
(34, '40', 15, 'Terça', 0),
(35, '40', 15, 'Terça', 0),
(36, '40', 15, 'Quarta', 0),
(37, '40', 15, 'Segunda', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `idAcademia` int(11) DEFAULT NULL,
  `nomeUsuario` varchar(200) NOT NULL,
  `loginUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `cpfUsuario` varchar(15) NOT NULL,
  `rgUsuario` varchar(15) NOT NULL,
  `crefUsuario` varchar(20) DEFAULT NULL,
  `sexoUsuario` varchar(10) NOT NULL,
  `dataNascimentoUsuario` date NOT NULL,
  `idadeUsuario` int(2) DEFAULT NULL,
  `enderecoUsuario` varchar(100) NOT NULL,
  `estadoUsuario` varchar(20) NOT NULL,
  `cidadeUsuario` varchar(50) NOT NULL,
  `bairroUsuario` varchar(50) NOT NULL,
  `cepUsuario` varchar(50) NOT NULL,
  `telefoneUsuario` varchar(15) NOT NULL,
  `tipoConta` int(11) NOT NULL,
  `statusConta` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idAcademia` (`idAcademia`),
  KEY `idAcademia_2` (`idAcademia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `idAcademia`, `nomeUsuario`, `loginUsuario`, `senhaUsuario`, `emailUsuario`, `cpfUsuario`, `rgUsuario`, `crefUsuario`, `sexoUsuario`, `dataNascimentoUsuario`, `idadeUsuario`, `enderecoUsuario`, `estadoUsuario`, `cidadeUsuario`, `bairroUsuario`, `cepUsuario`, `telefoneUsuario`, `tipoConta`, `statusConta`) VALUES
(19, 58, 'Academia Teste', 'Academia10', 'MTExMTEx', 'renatapaulo@gmail.com', '896.114.650-50', '6516116', NULL, 'Feminino', '1997-03-06', 2017, 'Teste', 'Maranhão', 'Crato', 'tfvghbjnkm', '63132015', '7777777777', 4, 1),
(41, 58, 'Jiji Santos', 'amlqaQ==', 'MTExMTEx', 'renatapaulo@gmail.com', '589.393.430-00', '2222222222222', '', 'Feminino', '1994-06-27', 23, 'Teste', 'Minas Gerais', 'Crato', 'estfgyuhi', '63132015', '7777777777', 2, 1),
(42, 66, 'Lucas Costa Gille', 'bHVraW5oYXM=', 'MTExMTEx', 'lucasgille@hotmail.com', '405.393.550-46', '233564812682645', '', 'Masculino', '1997-03-06', 20, 'Rua David Grangeiro', 'Ceará', 'Grangeiro', 'Centro', '632300000', '(88) 3333-3333', 2, 1),
(43, 58, 'Clice', 'Y2xpY2UxMjM=', 'MjIyMjIy', 'renatapaulo@gmail.com', '234.141.180-09', '222222222222222', '22222222222', 'Feminino', '1994-06-27', 23, 'Teste', 'Distrito Federal', 'Crato', 'Muriti', '63132015', '7777777777', 4, 1),
(50, 58, 'Fulano', 'Y2xpY2U2', 'MTExMTExMQ==', 'renatapaulo@gmail.com', '999.999.999-99', '999999999999999', '', 'Outros', '1982-10-30', 35, 'Teste', 'Amapá', 'Crato', 'Muriti', '63132015', '7777777777', 3, 1),
(51, 58, 'Academia Teste', 'cmVzdGF1cmFudGU=', 'MTExMTEx', 'renatapaulo@gmail.com', '888.888.888-88', '888888888888888', '888888-8/88', 'Masculino', '1963-06-26', 54, 'Teste', 'Bahia', 'Crato', 'Muriti', '63132015', '7777777777', 4, 1),
(52, 58, 'Fabiana Maria dos Santos Sampaio ', 'ZmFiaV9saW5kYQ==', 'OTk5OTk5', 'fabi_linda@gmail.com', '777.777.777-77', '777777777777777', '', 'Feminino', '1992-04-20', 25, 'Rua Legal, nº 100', 'Bahia', 'Porto Seguro', 'Centro', '63100005', '(77) 77777-7777', 3, 0),
(61, 66, 'Lucas Instrutor', 'bHVjYXNJbnN0cnV0b3I=', 'MTIzNDU2', 'elliglucas@hotmail.com', '437.567.886-01', '123123123', '112311-A/DS', 'Masculino', '1992-12-12', 25, 'Rua David Granjeiro', 'Ceará', 'Granjeiro', 'Centro', '63230-000', '88992606546', 4, 1),
(65, 66, 'Hana', 'aGFuYQ==', 'MTExMTEx', 'hanabarros@hotmail.com', '544.147.873-00', '00000000000000', '', 'Feminino', '1993-12-25', 24, 'fghjkl', 'Distrito Federal', 'Brasília', 'Vicente Pires', '633333333', '(32) 16584-9431', 3, 1),
(66, 66, 'Hana', 'aGFuYTEyMw==', 'MTExMTEx', 'hanabarros@hotmail.com', '748.671.329-26', '222222222222222', '000080-G/MA', 'Feminino', '1993-12-25', 24, 'ftgyhbjnk', 'Distrito Federal', 'Vicente Pires', 'Centro', '63000000', '(87) 65184-9465', 4, 1),
(68, 66, 'McDonalds', 'cmVuYXRhMTIz', 'MTExMTEx', 'renata@gmail.com', '905.371.860-50', '111111111111111', '', 'Feminino', '1984-11-29', 33, 'ftghbjkml', 'Amapá', 'Juazeiro do Norte', 'dfgcvhbjnkm', '232222222', '(51) 56555-5555', 3, 0),
(69, 0, 'Clice Bezerra', 'Y2xpY2U=', 'MTExMTEx', 'clice.brito@gmail.com', '041.522.931-60', '2006034076093', '', 'Feminino', '1994-06-27', 23, 'Rua Dom Pedro II, 248', 'Ceará', 'Crato', 'Centro', '63100-005', '(88) 98126-6732', 1, 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `academias`
--
ALTER TABLE `academias`
  ADD CONSTRAINT `academias_ibfk_1` FOREIGN KEY (`idPlano`) REFERENCES `planos` (`idPlano`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `academias_ibfk_2` FOREIGN KEY (`idPacote`) REFERENCES `pacotes` (`idPacote`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`idAcademia`) REFERENCES `academias` (`idAcademia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alunos_ibfk_2` FOREIGN KEY (`idTreino`) REFERENCES `treinos` (`idTreino`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `avaliacoesfisicas`
--
ALTER TABLE `avaliacoesfisicas`
  ADD CONSTRAINT `avaliacoesfisicas_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`idAluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `avaliacoesfisicas_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`idAluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chamados_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chamados_ibfk_3` FOREIGN KEY (`idAcademia`) REFERENCES `academias` (`idAcademia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `exerciciostreino`
--
ALTER TABLE `exerciciostreino`
  ADD CONSTRAINT `exerciciostreino_ibfk_2` FOREIGN KEY (`idTreino`) REFERENCES `treinos` (`idTreino`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exerciciostreino_ibfk_3` FOREIGN KEY (`idExercicio`) REFERENCES `exercicios` (`idExercicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `treinos`
--
ALTER TABLE `treinos`
  ADD CONSTRAINT `treinos_ibfk_1` FOREIGN KEY (`idAcademia`) REFERENCES `academias` (`idAcademia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `treinos_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
