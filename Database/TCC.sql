-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 08-Jun-2021 às 19:06
-- Versão do servidor: 10.3.24-MariaDB-2
-- versão do PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `TCC`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Aluno_Ano` varchar(255) NOT NULL,
  `Aluno_Nome` varchar(255) NOT NULL,
  `Aluno_RG` varchar(255) NOT NULL,
  `Aluno_Email` varchar(255) NOT NULL,
  `Aluno_DataDeNascimento` date NOT NULL,
  `Aluno_Telefone` varchar(255) NOT NULL,
  `Aluno_CEP` varchar(255) NOT NULL,
  `Aluno_Cidade` varchar(255) NOT NULL,
  `Aluno_Endereco` varchar(255) NOT NULL,
  `Aluno_Bairro` varchar(255) NOT NULL,
  `Aluno_Escola` varchar(255) NOT NULL,
  `ID_Escola` bigint(20) NOT NULL,
  `ID_Turma` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`RM_Aluno`, `Aluno_Ano`, `Aluno_Nome`, `Aluno_RG`, `Aluno_Email`, `Aluno_DataDeNascimento`, `Aluno_Telefone`, `Aluno_CEP`, `Aluno_Cidade`, `Aluno_Endereco`, `Aluno_Bairro`, `Aluno_Escola`, `ID_Escola`, `ID_Turma`) VALUES
(25, '1RT', 'Lucas', '1092380980', '098@gm.com', '2021-12-11', '909', '11.432-39', 'Cidade X', 'ojojoj', 'VILA SANTO ANTÔNIO', 'Dirce', 2, 15),
(50, '1N3', 'Andre', '09.128.301-28', 'andre@gmail.coom', '2004-02-01', '19 20831-0928', '09812-039', 'X', 'X', 'X', 'Escola Pedro Junior', 1, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_faltas`
--

CREATE TABLE `alunos_faltas` (
  `ID` bigint(20) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos_faltas`
--

INSERT INTO `alunos_faltas` (`ID`, `Data`) VALUES
(4, '2021-06-03 23:29:17'),
(1, '2021-06-03 23:32:48'),
(1, '2021-06-03 23:34:08'),
(1, '2021-06-03 23:35:01'),
(1, '2021-06-03 23:35:23'),
(1, '2021-06-03 23:36:26'),
(5, '2021-06-03 23:36:47'),
(1, '2021-06-03 23:37:41'),
(5, '2021-06-03 23:38:00'),
(5, '2021-06-03 23:38:02'),
(1, '2021-06-03 23:38:44'),
(1, '2021-06-03 23:39:15'),
(1, '2021-06-03 23:39:15'),
(1, '2021-06-03 23:39:41'),
(1, '2021-06-03 23:39:42'),
(1, '2021-06-03 23:39:43'),
(1, '2021-06-03 23:39:58'),
(1, '2021-06-03 23:40:08'),
(1, '2021-06-03 23:40:09'),
(1, '2021-06-03 23:40:22'),
(1, '2021-06-04 21:34:29'),
(1, '2021-06-04 21:47:22'),
(1, '2021-06-04 21:48:23'),
(1, '2021-06-04 21:55:34'),
(1, '2021-06-04 21:55:49'),
(1, '2021-06-04 21:56:25'),
(9, '2021-06-04 23:23:02'),
(9, '2021-06-04 23:23:54'),
(9, '2021-06-04 23:23:57'),
(9, '2021-06-04 23:24:19'),
(9, '2021-06-04 23:24:37'),
(1, '2021-06-04 23:26:56'),
(8, '2021-06-04 23:27:32'),
(8, '2021-06-06 22:10:41'),
(8, '2021-06-06 22:37:35'),
(8, '2021-06-06 22:38:05'),
(13, '2021-06-06 22:38:41'),
(13, '2021-06-06 22:38:49'),
(13, '2021-06-06 22:39:10'),
(15, '2021-06-06 22:42:19'),
(124, '2021-06-06 23:51:13'),
(124, '2021-06-06 23:51:47'),
(118, '2021-06-07 19:53:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_notas`
--

CREATE TABLE `alunos_notas` (
  `ID` bigint(20) NOT NULL,
  `RM_Aluno` bigint(20) NOT NULL,
  `Aluno_Ano` bigint(20) NOT NULL,
  `Aluno_Disciplina` varchar(255) NOT NULL,
  `Aluno_Nota1` decimal(10,0) DEFAULT NULL,
  `Aluno_Nota2` decimal(10,0) DEFAULT NULL,
  `Aluno_Nota3` decimal(10,0) DEFAULT NULL,
  `Aluno_Nota4` decimal(10,0) DEFAULT NULL,
  `Aluno_MencaoFinal` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos_notas`
--

INSERT INTO `alunos_notas` (`ID`, `RM_Aluno`, `Aluno_Ano`, `Aluno_Disciplina`, `Aluno_Nota1`, `Aluno_Nota2`, `Aluno_Nota3`, `Aluno_Nota4`, `Aluno_MencaoFinal`) VALUES
(17, 1001, 1, 'Artes', '0', '0', '0', '0', 0),
(18, 1001, 2, 'Artes', '0', '0', '0', '0', 0),
(19, 1001, 3, 'Artes', '0', '0', '0', '0', 0),
(20, 1001, 1, 'Biologia', '0', '0', '0', '0', 0),
(21, 1001, 2, 'Biologia', '0', '0', '0', '0', 0),
(22, 1001, 3, 'Biologia', '0', '0', '0', '0', 0),
(23, 1001, 1, 'Educação Física', '0', '0', '0', '0', 0),
(24, 1001, 2, 'Educação Física', '0', '0', '0', '0', 0),
(25, 1001, 3, 'Educação Física', '0', '0', '0', '0', 0),
(26, 1001, 1, 'Espanhol', '0', '0', '0', '0', 0),
(27, 1001, 2, 'Espanhol', '0', '0', '0', '0', 0),
(28, 1001, 3, 'Espanhol', '0', '0', '0', '0', 0),
(29, 1001, 1, 'Física', '0', '0', '0', '0', 0),
(30, 1001, 2, 'Física', '0', '0', '0', '0', 0),
(31, 1001, 3, 'Física', '0', '0', '0', '0', 0),
(32, 1001, 1, 'Geografia', '0', '0', '0', '0', 0),
(33, 1001, 2, 'Geografia', '0', '0', '0', '0', 0),
(34, 1001, 3, 'Geografia', '0', '0', '0', '0', 0),
(35, 1001, 1, 'História', '0', '0', '0', '0', 0),
(36, 1001, 2, 'História', '0', '0', '0', '0', 0),
(37, 1001, 3, 'História', '0', '0', '0', '0', 0),
(38, 1001, 1, 'Inglês', '0', '0', '0', '0', 0),
(39, 1001, 2, 'Inglês', '0', '0', '0', '0', 0),
(40, 1001, 3, 'Inglês', '0', '0', '0', '0', 0),
(41, 1001, 1, 'Matemática', '0', '0', '0', '0', 0),
(42, 1001, 2, 'Matemática', '0', '0', '0', '0', 0),
(43, 1001, 3, 'Matemática', '0', '0', '0', '0', 0),
(44, 1001, 1, 'Português', '0', '0', '0', '0', 0),
(45, 1001, 2, 'Português', '0', '0', '0', '0', 0),
(46, 1001, 3, 'Português', '0', '0', '0', '0', 0),
(47, 1001, 1, 'Química', '0', '0', '0', '0', 0),
(48, 1001, 2, 'Química', '0', '0', '0', '0', 0),
(49, 1001, 3, 'Química', '0', '0', '0', '0', 0),
(50, 1000, 1, 'Artes', '5', '0', '0', '0', 0),
(51, 50, 1, 'Artes', '2', '0', '0', '0', 0),
(52, 50, 2, 'Artes', '0', '0', '0', '0', 0),
(53, 50, 3, 'Artes', '0', '0', '0', '0', 0),
(54, 50, 1, 'Biologia', '10', '0', '0', '0', 0),
(55, 50, 2, 'Biologia', '0', '0', '0', '0', 0),
(56, 50, 3, 'Biologia', '0', '0', '0', '0', 0),
(57, 50, 1, 'Educação Física', '0', '0', '0', '0', 0),
(58, 50, 2, 'Educação Física', '0', '0', '0', '0', 0),
(59, 50, 3, 'Educação Física', '0', '0', '0', '0', 0),
(60, 50, 1, 'Espanhol', '0', '0', '0', '0', 0),
(61, 50, 2, 'Espanhol', '0', '0', '0', '0', 0),
(62, 50, 3, 'Espanhol', '0', '0', '0', '0', 0),
(63, 50, 1, 'Física', '0', '0', '0', '0', 0),
(64, 50, 2, 'Física', '0', '0', '0', '0', 0),
(65, 50, 3, 'Física', '0', '0', '0', '0', 0),
(66, 50, 1, 'Geografia', '0', '0', '0', '0', 0),
(67, 50, 2, 'Geografia', '0', '0', '0', '0', 0),
(68, 50, 3, 'Geografia', '0', '0', '0', '0', 0),
(69, 50, 1, 'História', '0', '0', '0', '0', 0),
(70, 50, 2, 'História', '0', '0', '0', '0', 0),
(71, 50, 3, 'História', '0', '0', '0', '0', 0),
(72, 50, 1, 'Inglês', '0', '0', '0', '0', 0),
(73, 50, 2, 'Inglês', '0', '0', '0', '0', 0),
(74, 50, 3, 'Inglês', '0', '0', '0', '0', 0),
(75, 50, 1, 'Matemática', '0', '0', '0', '0', 0),
(76, 50, 2, 'Matemática', '0', '0', '0', '0', 0),
(77, 50, 3, 'Matemática', '0', '0', '0', '0', 0),
(78, 50, 1, 'Português', '0', '0', '0', '0', 0),
(79, 50, 2, 'Português', '0', '0', '0', '0', 0),
(80, 50, 3, 'Português', '0', '0', '0', '0', 0),
(81, 50, 1, 'Química', '0', '0', '0', '0', 0),
(82, 50, 2, 'Química', '0', '0', '0', '0', 0),
(83, 50, 3, 'Química', '0', '0', '0', '0', 0),
(84, 1000, 1, 'Biologia', '0', '0', '0', '0', 0),
(85, 50, 1, 'Artes', '2', '0', '0', '0', 0),
(86, 50, 2, 'Artes', '0', '0', '0', '0', 0),
(87, 50, 3, 'Artes', '0', '0', '0', '0', 0),
(88, 50, 1, 'Biologia', '0', '0', '0', '0', 0),
(89, 50, 2, 'Biologia', '0', '0', '0', '0', 0),
(90, 50, 3, 'Biologia', '0', '0', '0', '0', 0),
(91, 50, 1, 'Educação Física', '0', '0', '0', '0', 0),
(92, 50, 2, 'Educação Física', '0', '0', '0', '0', 0),
(93, 50, 3, 'Educação Física', '0', '0', '0', '0', 0),
(94, 50, 1, 'Espanhol', '0', '0', '0', '0', 0),
(95, 50, 2, 'Espanhol', '0', '0', '0', '0', 0),
(96, 50, 3, 'Espanhol', '0', '0', '0', '0', 0),
(97, 50, 1, 'Física', '0', '0', '0', '0', 0),
(98, 50, 2, 'Física', '0', '0', '0', '0', 0),
(99, 50, 3, 'Física', '0', '0', '0', '0', 0),
(100, 50, 1, 'Geografia', '0', '0', '0', '0', 0),
(101, 50, 2, 'Geografia', '0', '0', '0', '0', 0),
(102, 50, 3, 'Geografia', '0', '0', '0', '0', 0),
(103, 50, 1, 'História', '0', '0', '0', '0', 0),
(104, 50, 2, 'História', '0', '0', '0', '0', 0),
(105, 50, 3, 'História', '0', '0', '0', '0', 0),
(106, 50, 1, 'Inglês', '0', '0', '0', '0', 0),
(107, 50, 2, 'Inglês', '0', '0', '0', '0', 0),
(108, 50, 3, 'Inglês', '0', '0', '0', '0', 0),
(109, 50, 1, 'Matemática', '0', '0', '0', '0', 0),
(110, 50, 2, 'Matemática', '0', '0', '0', '0', 0),
(111, 50, 3, 'Matemática', '0', '0', '0', '0', 0),
(112, 50, 1, 'Português', '0', '0', '0', '0', 0),
(113, 50, 2, 'Português', '0', '0', '0', '0', 0),
(114, 50, 3, 'Português', '0', '0', '0', '0', 0),
(115, 50, 1, 'Química', '0', '0', '0', '0', 0),
(116, 50, 2, 'Química', '0', '0', '0', '0', 0),
(117, 50, 3, 'Química', '0', '0', '0', '0', 0),
(118, 25, 1, 'Artes', '6', '0', '0', '0', 0),
(119, 25, 2, 'Artes', '0', '0', '0', '0', 0),
(120, 25, 3, 'Artes', '0', '0', '0', '0', 0),
(121, 25, 1, 'Biologia', '0', '0', '0', '0', 0),
(122, 25, 2, 'Biologia', '0', '0', '0', '0', 0),
(123, 25, 3, 'Biologia', '0', '0', '0', '0', 0),
(124, 25, 1, 'Educação Física', '2', '5', '0', '0', 0),
(125, 25, 2, 'Educação Física', '0', '0', '0', '0', 0),
(126, 25, 3, 'Educação Física', '0', '0', '0', '0', 0),
(127, 25, 1, 'Espanhol', '0', '0', '0', '0', 0),
(128, 25, 2, 'Espanhol', '0', '0', '0', '0', 0),
(129, 25, 3, 'Espanhol', '0', '0', '0', '0', 0),
(130, 25, 1, 'Física', '0', '0', '0', '0', 0),
(131, 25, 2, 'Física', '0', '0', '0', '0', 0),
(132, 25, 3, 'Física', '0', '0', '0', '0', 0),
(133, 25, 1, 'Geografia', '0', '0', '0', '0', 0),
(134, 25, 2, 'Geografia', '0', '0', '0', '0', 0),
(135, 25, 3, 'Geografia', '0', '0', '0', '0', 0),
(136, 25, 1, 'História', '0', '0', '0', '0', 0),
(137, 25, 2, 'História', '0', '0', '0', '0', 0),
(138, 25, 3, 'História', '0', '0', '0', '0', 0),
(139, 25, 1, 'Inglês', '0', '0', '0', '0', 0),
(140, 25, 2, 'Inglês', '0', '0', '0', '0', 0),
(141, 25, 3, 'Inglês', '0', '0', '0', '0', 0),
(142, 25, 1, 'Matemática', '0', '0', '0', '0', 0),
(143, 25, 2, 'Matemática', '0', '0', '0', '0', 0),
(144, 25, 3, 'Matemática', '0', '0', '0', '0', 0),
(145, 25, 1, 'Português', '0', '0', '0', '0', 0),
(146, 25, 2, 'Português', '0', '0', '0', '0', 0),
(147, 25, 3, 'Português', '0', '0', '0', '0', 0),
(148, 25, 1, 'Química', '0', '0', '0', '0', 0),
(149, 25, 2, 'Química', '0', '0', '0', '0', 0),
(150, 25, 3, 'Química', '0', '0', '0', '0', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `Materia_Nome` varchar(255) NOT NULL,
  `Materia_Descricao` varchar(255) NOT NULL,
  `Materia_Abrev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`Materia_Nome`, `Materia_Descricao`, `Materia_Abrev`) VALUES
('Artes', '', 'ART'),
('Biologia', '', 'BIO'),
('Educação Física', '', 'Ed. FIS'),
('Espanhol', '', 'ESP'),
('Física', '', 'FIS'),
('Geografia', '', 'GEO\r\n'),
('História', '', 'HIS'),
('Inglês', '', 'ING'),
('Matemática', '', 'MAT'),
('Português', '', 'PORT'),
('Química', '', 'QUI\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `Escola_Codigo` bigint(20) NOT NULL,
  `Escola_CNPJ` varchar(255) NOT NULL,
  `Escola_Nome` varchar(255) NOT NULL,
  `Escola_CEP` varchar(255) NOT NULL,
  `Escola_Munincipio` varchar(255) NOT NULL,
  `Escola_Endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`Escola_Codigo`, `Escola_CNPJ`, `Escola_Nome`, `Escola_CEP`, `Escola_Munincipio`, `Escola_Endereco`) VALUES
(1, '21.312.90/8401-928', 'Escola Pedro Junior', '12292-948', 'Guarujá', 'Av. XXSS'),
(2, '44.4242.4232/42324-23', 'Dirce', '22452-582', 'Guarujá', 'Av. Dom Pedro I'),
(3, '12.931.20/8301-283', 'Escola X', '12312-031', 'fodasei', 'joi'),
(4, '29.393.93/9393-939', 'Escola ID n 4', '12319-203', 'asdsad', 'asdpod');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_admin`
--

CREATE TABLE `login_admin` (
  `ID` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_admin`
--

INSERT INTO `login_admin` (`ID`, `Usuario`, `Senha`) VALUES
(1, 'admin', 'tccadmin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_aluno`
--

CREATE TABLE `login_aluno` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_aluno`
--

INSERT INTO `login_aluno` (`RM_Aluno`, `Email`, `Usuario`, `Senha`) VALUES
(1000, 'ryuusakis@gmail.com', 'guii', '7e74e8'),
(1001, '', 'frikz', 'frik123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_prof`
--

CREATE TABLE `login_prof` (
  `RM_Prof` bigint(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_prof`
--

INSERT INTO `login_prof` (`RM_Prof`, `Email`, `Usuario`, `Senha`) VALUES
(1, '', 'prof1', 'profsenha1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_resp`
--

CREATE TABLE `login_resp` (
  `RM_Resp` bigint(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_resp`
--

INSERT INTO `login_resp` (`RM_Resp`, `Email`, `Usuario`, `Senha`) VALUES
(1000, '', 'claudinz', 'claudio1335');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_secretaria`
--

CREATE TABLE `login_secretaria` (
  `RM_Secretaria` bigint(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_secretaria`
--

INSERT INTO `login_secretaria` (`RM_Secretaria`, `Email`, `Usuario`, `Senha`) VALUES
(112, '', 'luizmait', 'luizmaia1950');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `RM_Prof` bigint(20) NOT NULL,
  `Prof_Nome` varchar(255) NOT NULL,
  `Prof_DataDeNascimento` date NOT NULL,
  `Prof_Celular` varchar(255) NOT NULL,
  `Prof_Email` varchar(255) NOT NULL,
  `Prof_CPF` varchar(255) NOT NULL,
  `Prof_RG` varchar(255) NOT NULL,
  `Prof_CEP` varchar(255) NOT NULL,
  `Prof_Cidade` varchar(255) NOT NULL,
  `Prof_Endereco` varchar(255) NOT NULL,
  `Prof_Bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`RM_Prof`, `Prof_Nome`, `Prof_DataDeNascimento`, `Prof_Celular`, `Prof_Email`, `Prof_CPF`, `Prof_RG`, `Prof_CEP`, `Prof_Cidade`, `Prof_Endereco`, `Prof_Bairro`) VALUES
(1, 'Pedro Sate', '1998-04-15', '13 98840-4024', 'pedro@gmail.com', '449.228.285-85', '82.582.852-7', '11857-852', 'Santos', 'Rua X', 'Vila Mathias'),
(92, 'jioejo', '2020-11-22', '13 99482-4992', '1921903109@homc.m', '91.239.012-83', '1092380980', '98098-09', '980810293801293809', '8081029380192830', '809128309180'),
(298, 'Kurokuro', '2020-11-11', '11 99482-4924', 'risa@gm.com', '09.812.038-10', '92123098123098', '', '08080', '8098098', '09809-809');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao_alunosescolas`
--

CREATE TABLE `relacao_alunosescolas` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Escola_Codigo` bigint(20) NOT NULL,
  `Ano` bigint(20) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `DataDeMatricula` date NOT NULL,
  `DataFim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relacao_alunosescolas`
--

INSERT INTO `relacao_alunosescolas` (`RM_Aluno`, `Escola_Codigo`, `Ano`, `Status`, `DataDeMatricula`, `DataFim`) VALUES
(1000, 1, 1, 'Cursando', '2020-02-10', NULL),
(1001, 1, 1, 'Cursando', '2020-02-10', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao_alunosresponsaveis`
--

CREATE TABLE `relacao_alunosresponsaveis` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Responsavel_Filhos` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relacao_alunosresponsaveis`
--

INSERT INTO `relacao_alunosresponsaveis` (`RM_Aluno`, `Responsavel_Filhos`) VALUES
(1001, 1400),
(1001, 9500),
(1000, 9500),
(50, 10400),
(50, 99999),
(25, 99999),
(50, 99999);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao_professorescola`
--

CREATE TABLE `relacao_professorescola` (
  `ID` int(11) NOT NULL,
  `Escola_Cod` bigint(20) NOT NULL,
  `Prof_Escola` varchar(255) NOT NULL,
  `Prof_Turmas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relacao_professorescola`
--

INSERT INTO `relacao_professorescola` (`ID`, `Escola_Cod`, `Prof_Escola`, `Prof_Turmas`) VALUES
(1, 1, '0000AA1', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao_professorturma`
--

CREATE TABLE `relacao_professorturma` (
  `Prof_Turma` bigint(20) NOT NULL,
  `Cod_DisTurma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relacao_professorturma`
--

INSERT INTO `relacao_professorturma` (`Prof_Turma`, `Cod_DisTurma`) VALUES
(11, 'Prof1Cod'),
(11, 'Prof1Codigo2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao_turmadisciplina`
--

CREATE TABLE `relacao_turmadisciplina` (
  `Cod_DisciplinaTurma` varchar(255) NOT NULL,
  `Turma` varchar(255) NOT NULL,
  `Matéria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsáveis`
--

CREATE TABLE `responsáveis` (
  `RM_Responsável` bigint(20) NOT NULL,
  `Resp_Nome` varchar(255) NOT NULL,
  `Resp_Email` varchar(255) NOT NULL,
  `Resp_DataDeNascimento` date NOT NULL,
  `Resp_RG` varchar(255) NOT NULL,
  `Resp_CPF` varchar(255) NOT NULL,
  `Resp_Telefone` varchar(255) NOT NULL,
  `Resp_Celular` varchar(255) NOT NULL,
  `Resp_CEP` varchar(255) NOT NULL,
  `Resp_Cidade` varchar(255) NOT NULL,
  `Resp_Endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `responsáveis`
--

INSERT INTO `responsáveis` (`RM_Responsável`, `Resp_Nome`, `Resp_Email`, `Resp_DataDeNascimento`, `Resp_RG`, `Resp_CPF`, `Resp_Telefone`, `Resp_Celular`, `Resp_CEP`, `Resp_Cidade`, `Resp_Endereco`) VALUES
(1000, 'asdRogerio', 'claudnun@gmail.com', '1980-12-11', '11.111.111-11', '111.111.111-11', '(13) 3385-2298', '(13) 9985-28492', '11492-492', 'Araquara', 'Mariano Peixoto, 294'),
(15420, 'Claudio ', 'claudnun@gmail.com', '1980-12-11', '', '495.284.285-39', '(13) 3385-2298', '(13) 9985-28492', '11492-492', 'Arujá', 'Mariano Peixoto, 294'),
(9400, 'Claudio ', 'claudnun@gmail.com', '1980-12-11', '', '495.284.285-39', '(13) 3385-2298', '(13) 9985-28492', '11492-492', 'Arujá', 'Mariano Peixoto, 294'),
(1400, 'Ricardo', 'claudnun@gmail.com', '1980-12-11', '', '495.284.285-39', '(13) 3385-2298', '(13) 9985-28492', '11492-492', 'Arujá', 'Mariano Peixoto, 294'),
(9500, 'Claudio ', 'claudnun@gmail.com', '1980-12-11', '', '495.284.285-39', '(13) 3385-2298', '(13) 9985-28492', '11492-492', 'Arujá', 'Mariano Peixoto, 294'),
(10400, 'teste', 'ra@gmail.com', '2021-02-11', '01.029.380-12', '080.123.801-29', '09 1283-098', '08 09283-0918', '80129-830', '', '12312321'),
(99999, 'fodase', '213092@gmci', '2000-02-11', '80.9', '809.80', '93 0918', '09 80912-3809', '80980-80', '', '8009809809');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

CREATE TABLE `secretaria` (
  `RM_Secretaria` bigint(20) NOT NULL,
  `Sec_Escola` bigint(20) NOT NULL,
  `Sec_Nome` varchar(255) NOT NULL,
  `Sec_DataDeNascimento` date NOT NULL,
  `Sec_Email` varchar(255) NOT NULL,
  `Sec_Telefone` varchar(255) NOT NULL,
  `Sec_Celular` varchar(255) NOT NULL,
  `Sec_CPF` varchar(255) NOT NULL,
  `Sec_RG` varchar(255) NOT NULL,
  `Sec_CEP` varchar(255) NOT NULL,
  `Sec_Cidade` varchar(255) NOT NULL,
  `Sec_Endereço` varchar(255) NOT NULL,
  `Sec_Bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `secretaria`
--

INSERT INTO `secretaria` (`RM_Secretaria`, `Sec_Escola`, `Sec_Nome`, `Sec_DataDeNascimento`, `Sec_Email`, `Sec_Telefone`, `Sec_Celular`, `Sec_CPF`, `Sec_RG`, `Sec_CEP`, `Sec_Cidade`, `Sec_Endereço`, `Sec_Bairro`) VALUES
(112, 2, 'Luiz Almeida A', '2000-02-13', 'lui@gmail', '13 3395-2842', '11 98824-4825', '229.285.682-36', '52.482.583-3', '28342-274', 'São Vicente', 'Rua Y', 'Bairro'),
(1002, 3, 'Fernando', '2000-02-11', 'saidgmai@c.om', '01 9230-1283', '09 80912-8308', '091.283.019-28', '01.928.301-28', '09019-238', 'Rua X', 'b', 'C'),
(12300, 2, 'opipaoi', '2021-12-31', '098@gm.com', '01 2093-10', '09 80391-2830', '09i09', '1092380980', '11.432-39', 'Cidade', 'ojojoj', 'VILA SANTO ANTÔNIO'),
(9999, 4, '21093', '2000-01-11', 'saida@gmail.com', '12 0391-230', '11 11111-1111', '809.801.928-30', '98.091.283-09', '80983-120', '80192830192830', '980312830180', '9809898');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `Escola` varchar(255) NOT NULL,
  `Prof_Coordenador` varchar(255) NOT NULL,
  `ID_Ano` bigint(20) NOT NULL,
  `Turma` varchar(255) NOT NULL,
  `ID_Escola` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`Escola`, `Prof_Coordenador`, `ID_Ano`, `Turma`, `ID_Escola`) VALUES
('Escola Pedro Junior', 'Pedro Sate', 13, '1N3', 1),
('Escola Pedro Junior', 'Pedro Sate', 14, '1R5', 1),
('Dirce', 'Pedro Sate', 15, '1RT', 2),
('Escola ID n 4', 'Pedro Sate', 23, '1B5', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_horario`
--

CREATE TABLE `turma_horario` (
  `Turma_Escola` varchar(255) NOT NULL,
  `Turma_Ano` varchar(255) NOT NULL,
  `Escola_ID` varchar(255) NOT NULL,
  `Turma_ID` varchar(255) NOT NULL,
  `Turma_Horario` varchar(255) NOT NULL,
  `Horario_Segunda` varchar(255) DEFAULT NULL,
  `Horario_Terça` varchar(255) DEFAULT NULL,
  `Horario_Quarta` varchar(255) DEFAULT NULL,
  `Horario_Quinta` varchar(255) DEFAULT NULL,
  `Horario_Sexta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma_horario`
--

INSERT INTO `turma_horario` (`Turma_Escola`, `Turma_Ano`, `Escola_ID`, `Turma_ID`, `Turma_Horario`, `Horario_Segunda`, `Horario_Terça`, `Horario_Quarta`, `Horario_Quinta`, `Horario_Sexta`) VALUES
('Escola Pedro Junior', '1R5', '1', '14', '8 às 9', 'ART', '', '', '', ''),
('Escola Pedro Junior', '1R5', '1', '14', '9 às 10', '', '', '', '', ''),
('Escola Pedro Junior', '1R5', '1', '14', '10 às 11', '', '', '', '', ''),
('Escola Pedro Junior', '1R5', '1', '14', '11 às 12', '', '', '', '', ''),
('Escola Pedro Junior', '1R5', '1', '14', '13 às 14', '', '', '', '', ''),
('Escola Pedro Junior', '1R5', '1', '14', '14 às 15', '', '', '', '', ''),
('Escola Pedro Junior', '1R5', '1', '14', '15 às 16', '', '', '', '', ''),
('Escola Pedro Junior', '1R5', '1', '14', '16 às 17', '', '', '', '', ''),
('Escola Pedro Junior', '1R5', '1', '14', '17 às 18', '', '', '', '', ''),
('Dirce', '1RT', '2', '15', '8 às 9', 'Ed. FIS', '', 'ART', '', ''),
('Dirce', '1RT', '2', '15', '9 às 10', '', '', '', '', ''),
('Dirce', '1RT', '2', '15', '10 às 11', '', '', 'ART', '', ''),
('Dirce', '1RT', '2', '15', '11 às 12', '', '', '', '', ''),
('Dirce', '1RT', '2', '15', '13 às 14', '', '', '', '', ''),
('Dirce', '1RT', '2', '15', '14 às 15', '', '', '', '', 'ART'),
('Dirce', '1RT', '2', '15', '15 às 16', '', '', '', '', ''),
('Dirce', '1RT', '2', '15', '16 às 17', '', '', '', '', ''),
('Dirce', '1RT', '2', '15', '17 às 18', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`RM_Aluno`),
  ADD KEY `Aluno_Ano` (`Aluno_Ano`(191)),
  ADD KEY `ID_Escola` (`ID_Escola`),
  ADD KEY `ID_Turma` (`ID_Turma`);

--
-- Índices para tabela `alunos_notas`
--
ALTER TABLE `alunos_notas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Aluno_Disciplina` (`Aluno_Disciplina`(191));

--
-- Índices para tabela `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`Escola_Codigo`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`ID_Ano`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos_notas`
--
ALTER TABLE `alunos_notas`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de tabela `escolas`
--
ALTER TABLE `escolas`
  MODIFY `Escola_Codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `ID_Ano` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `fk_id_ano` FOREIGN KEY (`ID_Turma`) REFERENCES `turmas` (`ID_Ano`),
  ADD CONSTRAINT `fk_id_escola` FOREIGN KEY (`ID_Escola`) REFERENCES `escolas` (`Escola_Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
