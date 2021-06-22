-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22-Jun-2021 às 19:17
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
(25, '1N3', 'Aluno 1', '11.111.111-11', 'teste@teste.com', '2001-01-01', '11 11111-1111', '11111-111', '1', '1', '1', 'Escola Dom Pedro I', 1, 13),
(50, '1R', 'Aluno H', '22.222.222-22', 'teste@teste.com', '2002-02-02', '22 22222-2222', '22222-222', '2', '2', '2', 'Dirce', 2, 15);

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
(4, '2021-06-04 02:29:17'),
(1, '2021-06-04 02:32:48'),
(1, '2021-06-04 02:34:08'),
(1, '2021-06-04 02:35:01'),
(1, '2021-06-04 02:35:23'),
(1, '2021-06-04 02:36:26'),
(5, '2021-06-04 02:36:47'),
(1, '2021-06-04 02:37:41'),
(5, '2021-06-04 02:38:00'),
(5, '2021-06-04 02:38:02'),
(1, '2021-06-04 02:38:44'),
(1, '2021-06-04 02:39:15'),
(1, '2021-06-04 02:39:15'),
(1, '2021-06-04 02:39:41'),
(1, '2021-06-04 02:39:42'),
(1, '2021-06-04 02:39:43'),
(1, '2021-06-04 02:39:58'),
(1, '2021-06-04 02:40:08'),
(1, '2021-06-04 02:40:09'),
(1, '2021-06-04 02:40:22'),
(1, '2021-06-05 00:34:29'),
(1, '2021-06-05 00:47:22'),
(1, '2021-06-05 00:48:23'),
(1, '2021-06-05 00:55:34'),
(1, '2021-06-05 00:55:49'),
(1, '2021-06-05 00:56:25'),
(9, '2021-06-05 02:23:02'),
(9, '2021-06-05 02:23:54'),
(9, '2021-06-05 02:23:57'),
(9, '2021-06-05 02:24:19'),
(9, '2021-06-05 02:24:37'),
(1, '2021-06-05 02:26:56'),
(8, '2021-06-05 02:27:32'),
(8, '2021-06-07 01:10:41'),
(8, '2021-06-07 01:37:35'),
(8, '2021-06-07 01:38:05'),
(13, '2021-06-07 01:38:41'),
(13, '2021-06-07 01:38:49'),
(13, '2021-06-07 01:39:10'),
(15, '2021-06-07 01:42:19'),
(124, '2021-06-07 02:51:13'),
(124, '2021-06-07 02:51:47'),
(118, '2021-06-07 22:53:45'),
(51, '2021-06-09 03:28:42'),
(118, '2021-06-09 03:29:00'),
(118, '2021-06-11 03:12:33'),
(51, '2021-06-11 03:13:00'),
(118, '2021-06-11 03:54:51'),
(119, '2021-06-17 23:31:00'),
(119, '2021-06-17 23:31:38'),
(118, '2021-06-20 22:47:48');

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
(51, 50, 1, 'Artes', '5', '9', '5', '4', 7),
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
(85, 50, 1, 'Artes', '5', '9', '5', '4', 7),
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
(118, 25, 1, 'Artes', '8', '1', '3', '1', 1),
(119, 25, 2, 'Artes', '1', '1', '1', '1', 6),
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
(1, '21.312.90/8401-928', 'Escola Dom Pedro I', '12292-948', 'Guarujá', 'Av. XXSS'),
(2, '44.4242.4232/42324-23', 'Dirce', '22452-582', 'Guarujá', 'Av. Dom Pedro I'),
(4, '00.000.00/0000-000', 'Escola de teste 0', '00000-000', 'teste 0', 'teste 0'),
(5, '00.000.00/0000-001', 'Escola de teste 1', '00000-001', 'teste 1', 'teste 1'),
(6, '00.000.00/0000-002', 'Escola de teste 2', '00000-002', 'teste 2', 'teste 2'),
(7, '00.000.00/0000-003', 'Escola de teste 3', '00000-003', 'teste 3', 'teste 3'),
(8, '00.000.00/0000-004', 'Escola de teste 4', '00000-004', 'teste 4', 'teste 4'),
(9, '00.000.00/0000-005', 'Escola de teste 5', '00000-005', 'teste 5', 'teste 5'),
(10, '00.000.00/0000-006', 'Escola de teste 6', '00000-006', 'são andre', 'teste 6'),
(11, '00.000.00/0000-007', 'Escola de teste 7', '00000-007', 'teste 7', 'teste 7'),
(12, '00.000.00/0000-008', 'Escola de teste 8', '00000-008', 'teste 8', 'teste 8'),
(13, '00.000.00/0000-009', 'Escola de teste 9', '00000-009', 'teste 9', 'teste 9'),
(14, '00.000.00/0000-010', 'Escola de teste 10', '00000-010', 'teste 10', 'teste 10'),
(15, '99.999.99/9999-999', 'ESCOLA ABC', '09120-391', 'São Paulo', 'abc'),
(16, '33.333.33/3333-333', '333', '33', '33', '33');

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
  `Prof_Telefone` varchar(255) NOT NULL,
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

INSERT INTO `professores` (`RM_Prof`, `Prof_Nome`, `Prof_DataDeNascimento`, `Prof_Telefone`, `Prof_Celular`, `Prof_Email`, `Prof_CPF`, `Prof_RG`, `Prof_CEP`, `Prof_Cidade`, `Prof_Endereco`, `Prof_Bairro`) VALUES
(0, 'Professor 00', '0001-01-01', '00 0000-0000', '00 00000-0000', 'teste@teste.com', '000.000.000-00', '00.000.000-00', '00000-000', '0', '0', '0'),
(1, 'Professor 01', '0001-01-01', '11 1111-1111', '11 11111-1111', 'teste@teste.com', '111.111.111-11', '11.111.111-11', '11111-111', '1', '1', '1'),
(2, 'Professor 02', '0002-02-02', '22 2222-2222', '22 22222-2222', 'teste@teste.com', '222.222.222-22', '22.222.222-22', '22222-222', '2', '2', '2'),
(3, 'Professor 03', '0003-03-03', '33 3333-3333', '33 33333-3333', 'teste@teste.com', '333.333.333-33', '33.333.333-33', '33333-333', '3', '3', '3'),
(4, 'Professor 04', '0004-04-04', '44 4444-4444', '44 44444-4444', 'teste@teste.com', '444.444.444-44', '44.444.444-44', '44444-444', '4', '4', '4'),
(5, '2º Professor da E00', '0001-01-01', '00 0000-0000', '00 00000-0000', 'teste@teste.com', '000.000.000-00', '00.000.000-00', '00000-000', '0', '0', '0'),
(92, 'Luis', '2020-11-22', '13 3304-4036', '13 98850-4778', '1921903109@homc.m', '444.444.444-44', '11.111.111-11', '11111-111', 'a', 'a', 'a'),
(298, 'Kurokuro', '2020-11-11', '13 3358-1248', '11 99482-4924', 'risa@gm.com', '09.812.038-10', '92123098123098', '', '08080', '8098098', '09809-809');

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
(50, 20),
(25, 20),
(50, 51),
(0, 99999),
(25, 4000),
(50, 4000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao_profescolas`
--

CREATE TABLE `relacao_profescolas` (
  `RM_Prof` bigint(20) NOT NULL,
  `Escola_Cod` bigint(20) NOT NULL,
  `Matéria` varchar(255) NOT NULL,
  `Prof_Turmas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relacao_profescolas`
--

INSERT INTO `relacao_profescolas` (`RM_Prof`, `Escola_Cod`, `Matéria`, `Prof_Turmas`) VALUES
(1, 5, 'BIO', 29),
(2, 6, 'Ed. FIS', 35),
(3, 7, 'ESP', 36),
(4, 8, 'FIS', 38),
(5, 4, 'PORT', 20),
(0, 6, 'Ed. FIS', 25),
(0, 2, 'MAT', 15),
(1, 1, 'ART', 13),
(298, 1, 'BIO', 13),
(298, 1, 'PORT', 13),
(298, 1, 'HIS', 13),
(298, 1, 'FIS', 13);

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
(4000, 'André', 'andr@gmail.com', '2000-02-01', '99.999.999-99', '999.999.999-99', '99 9999-9999', '99 99999-9999', '19923-912', '', 'A');

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
(9, 1, 'Andree', '1998-11-11', 'jsoidajs@gmail.com', '12 3091-2830', '09 80912-8308', '999.999.999-99', '99.999.999-99', '92309-128', 'A', 'A', 'A'),
(999, 15, 'Funcionario', '1994-02-10', 'rnn@gmai.com', '91 9301-2390', '80 92183-0918', '912.830.182-30', '80.908.123-12', '08012-830', 'AA', 'AA', 'AA'),
(9999, 4, '21093', '2000-01-11', 'saida@gmail.com', '12 0391-230', '11 11111-1111', '809.801.928-30', '98.091.283-09', '80983-120', '80192830192830', '980312830180', '9809898'),
(12300, 2, 'opipaoi', '2021-12-31', '098@gm.com', '01 2093-10', '09 80391-2830', '09i09', '1092380980', '11.432-39', 'Cidade', 'ojojoj', 'VILA SANTO ANTÔNIO');

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
('Escola Dom Pedro I', 'Pedro Sate', 13, '1N3', 1),
('Dirce', 'Pedro Sate', 15, '1R', 2),
('Escola de teste 0', 'Professor 00', 20, 'E00T01', 4),
('Escola de teste 0', 'Professor 00', 21, 'E00T02', 4),
('Escola de teste 1', 'Professor 01', 22, 'E01T01', 5),
('Escola de teste 1', 'Professor 01', 23, 'E01T02', 5),
('Escola de teste 2', 'Professor 02', 24, 'E02T01', 6),
('Escola de teste 2', 'Professor 02', 25, 'E02T02', 6),
('Escola de teste 3', 'Professor 03', 26, 'E03T01', 7),
('Escola de teste 3', 'Professor 03', 27, 'E03T02', 7),
('Escola de teste 4', 'Professor 04', 28, 'E04T01', 8),
('Escola de teste 4', 'Professor 04', 29, 'E04T02', 8);

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
('Escola Dom Pedro I', '1R5', '1', '14', '8 às 9', 'ART', 'Ed. FIS', 'Ed. FIS', 'PORT', 'PORT'),
('Escola Dom Pedro I', '1R5', '1', '14', '9 às 10', 'MAT', 'ING', 'MAT', 'FIS', 'ING'),
('Escola Dom Pedro I', '1R5', '1', '14', '10 às 11', 'HIS', 'GEO\r\n', 'HIS', 'ING', 'ING'),
('Escola Dom Pedro I', '1R5', '1', '14', '11 às 12', 'ING', 'ING', 'HIS', 'ING', 'MAT'),
('Escola Dom Pedro I', '1R5', '1', '14', '13 às 14', 'ING', 'ING', 'ING', 'ING', 'MAT'),
('Escola Dom Pedro I', '1R5', '1', '14', '14 às 15', 'MAT', 'MAT', 'MAT', 'MAT', 'MAT'),
('Escola Dom Pedro I', '1R5', '1', '14', '15 às 16', 'MAT', 'PORT', 'PORT', 'QUI\r\n', 'QUI\r\n'),
('Escola Dom Pedro I', '1R5', '1', '14', '16 às 17', 'QUI\r\n', 'PORT', 'MAT', 'ING', 'HIS'),
('Escola Dom Pedro I', '1R5', '1', '14', '17 às 18', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n'),
('Dirce', '1R', '2', '15', '8 às 9', 'Ed. FIS', '', 'ART', '', ''),
('Dirce', '1R', '2', '15', '9 às 10', '', '', '', '', ''),
('Dirce', '1R', '2', '15', '10 às 11', '', '', 'ART', '', ''),
('Dirce', '1R', '2', '15', '11 às 12', '', '', '', '', ''),
('Dirce', '1R', '2', '15', '13 às 14', '', '', '', '', ''),
('Dirce', '1R', '2', '15', '14 às 15', '', '', '', '', 'ART'),
('Dirce', '1R', '2', '15', '15 às 16', '', '', '', '', ''),
('Dirce', '1R', '2', '15', '16 às 17', 'QUI\r\n', 'PORT', 'MAT', 'ING', 'HIS'),
('Dirce', '1R', '2', '15', '17 às 18', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n'),
('Escola de teste 0', 'E00T00', '4', '20', '8 às 9', 'ART', 'BIO', 'Ed. FIS', 'ESP', 'ESP'),
('Escola de teste 0', 'E00T00', '4', '20', '9 às 10', 'BIO', 'BIO', 'ART', 'ESP', 'HIS'),
('Escola de teste 0', 'E00T00', '4', '20', '10 às 11', 'PORT', 'HIS', 'GEO\r\n', 'MAT', 'QUI\r\n'),
('Escola de teste 0', 'E00T00', '4', '20', '11 às 12', 'ING', 'HIS', 'GEO\r\n', 'FIS', 'PORT'),
('Escola de teste 0', 'E00T00', '4', '20', '13 às 14', 'FIS', 'PORT', 'HIS', 'HIS', 'MAT'),
('Escola de teste 0', 'E00T00', '4', '20', '14 às 15', 'BIO', 'BIO', 'Ed. FIS', 'Ed. FIS', 'FIS'),
('Escola de teste 0', 'E00T00', '4', '20', '15 às 16', 'Ed. FIS', 'FIS', 'GEO\r\n', 'HIS', 'ING'),
('Escola de teste 0', 'E00T00', '4', '20', '16 às 17', 'QUI\r\n', 'PORT', 'MAT', 'ING', 'HIS'),
('Escola de teste 0', 'E00T00', '4', '20', '17 às 18', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n'),
('Escola de teste 0', 'E00T01', '4', '21', '8 às 9', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T01', '4', '21', '9 às 10', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T01', '4', '21', '10 às 11', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T01', '4', '21', '11 às 12', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T01', '4', '21', '13 às 14', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T01', '4', '21', '14 às 15', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T01', '4', '21', '15 às 16', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T01', '4', '21', '16 às 17', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T01', '4', '21', '17 às 18', 'ART', 'ART', 'ART', 'ART', 'ART'),
('Escola de teste 0', 'E00T02', '4', '22', '8 às 9', 'GEO\r\n', 'FIS', 'GEO\r\n', 'FIS', 'GEO\r\n'),
('Escola de teste 0', 'E00T02', '4', '22', '9 às 10', 'HIS', 'HIS', 'HIS', 'HIS', 'HIS'),
('Escola de teste 0', 'E00T02', '4', '22', '10 às 11', 'BIO', 'BIO', 'BIO', 'BIO', 'BIO'),
('Escola de teste 0', 'E00T02', '4', '22', '11 às 12', 'Ed. FIS', 'Ed. FIS', 'Ed. FIS', 'Ed. FIS', 'Ed. FIS'),
('Escola de teste 0', 'E00T02', '4', '22', '13 às 14', 'ESP', 'ESP', 'ESP', 'ESP', 'ESP'),
('Escola de teste 0', 'E00T02', '4', '22', '14 às 15', 'FIS', 'FIS', 'FIS', 'FIS', 'FIS'),
('Escola de teste 0', 'E00T02', '4', '22', '15 às 16', 'MAT', 'MAT', 'MAT', 'MAT', 'MAT'),
('Escola de teste 0', 'E00T02', '4', '22', '16 às 17', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n', 'QUI\r\n'),
('Escola de teste 0', 'E00T02', '4', '22', '17 às 18', 'PORT', 'PORT', 'PORT', 'PORT', 'PORT'),
('Escola de teste 1', 'E01T01', '5', '22', '8 às 9', 'MAT', 'ING', 'ING', 'HIS', 'FIS'),
('Escola de teste 1', 'E01T01', '5', '22', '9 às 10', 'GEO\r\n', 'GEO\r\n', 'FIS', 'FIS', 'FIS'),
('Escola de teste 1', 'E01T01', '5', '22', '10 às 11', 'FIS', 'GEO\r\n', 'HIS', 'ING', 'ESP'),
('Escola de teste 1', 'E01T01', '5', '22', '11 às 12', 'Ed. FIS', 'Ed. FIS', 'Ed. FIS', 'BIO', 'ESP'),
('Escola de teste 1', 'E01T01', '5', '22', '13 às 14', 'ESP', 'Ed. FIS', 'Ed. FIS', 'Ed. FIS', 'FIS'),
('Escola de teste 1', 'E01T01', '5', '22', '14 às 15', 'PORT', 'GEO\r\n', 'ING', 'ING', 'MAT'),
('Escola de teste 1', 'E01T01', '5', '22', '15 às 16', 'HIS', 'ESP', 'MAT', 'ESP', 'ESP'),
('Escola de teste 1', 'E01T01', '5', '22', '16 às 17', 'FIS', 'Ed. FIS', 'BIO', 'HIS', 'ESP'),
('Escola de teste 1', 'E01T01', '5', '22', '17 às 18', 'ESP', 'BIO', 'FIS', 'Ed. FIS', 'BIO'),
('Escola de teste 1', 'E01T02', '5', '23', '8 às 9', 'MAT', 'FIS', 'GEO\r\n', 'ING', 'HIS'),
('Escola de teste 1', 'E01T02', '5', '23', '9 às 10', 'FIS', 'HIS', 'GEO\r\n', 'ING', 'ING'),
('Escola de teste 1', 'E01T02', '5', '23', '10 às 11', 'HIS', 'GEO\r\n', 'MAT', 'MAT', 'HIS'),
('Escola de teste 1', 'E01T02', '5', '23', '11 às 12', 'FIS', 'FIS', 'ESP', 'ESP', 'GEO\r\n'),
('Escola de teste 1', 'E01T02', '5', '23', '13 às 14', 'BIO', 'ESP', 'FIS', 'ESP', 'ESP'),
('Escola de teste 1', 'E01T02', '5', '23', '14 às 15', 'Ed. FIS', 'Ed. FIS', 'ESP', 'ESP', 'Ed. FIS'),
('Escola de teste 1', 'E01T02', '5', '23', '15 às 16', 'ART', 'Ed. FIS', 'BIO', 'Ed. FIS', 'ESP'),
('Escola de teste 1', 'E01T02', '5', '23', '16 às 17', 'PORT', 'HIS', 'ING', 'ING', 'MAT'),
('Escola de teste 1', 'E01T02', '5', '23', '17 às 18', 'ING', 'HIS', 'GEO\r\n', 'FIS', 'ESP'),
('Escola de teste 2', 'E02T01', '6', '24', '8 às 9', 'PORT', 'MAT', 'ING', 'HIS', 'MAT'),
('Escola de teste 2', 'E02T01', '6', '24', '9 às 10', 'ING', 'HIS', 'HIS', 'HIS', 'MAT'),
('Escola de teste 2', 'E02T01', '6', '24', '10 às 11', 'HIS', 'ESP', 'ESP', 'MAT', 'PORT'),
('Escola de teste 2', 'E02T01', '6', '24', '11 às 12', 'Ed. FIS', 'FIS', 'FIS', 'BIO', 'GEO\r\n'),
('Escola de teste 2', 'E02T01', '6', '24', '13 às 14', 'BIO', 'BIO', 'BIO', 'Ed. FIS', 'Ed. FIS'),
('Escola de teste 2', 'E02T01', '6', '24', '14 às 15', 'MAT', 'ING', 'HIS', 'ESP', 'ESP'),
('Escola de teste 2', 'E02T01', '6', '24', '15 às 16', 'PORT', 'PORT', 'Ed. FIS', 'GEO\r\n', 'BIO'),
('Escola de teste 2', 'E02T01', '6', '24', '16 às 17', 'PORT', 'QUI\r\n', 'QUI\r\n', 'MAT', 'HIS'),
('Escola de teste 2', 'E02T01', '6', '24', '17 às 18', 'ING', 'FIS', 'FIS', 'MAT', 'Ed. FIS'),
('Escola de teste 2', 'E02T02', '6', '25', '8 às 9', 'ING', 'Ed. FIS', 'HIS', 'FIS', 'BIO'),
('Escola de teste 2', 'E02T02', '6', '25', '9 às 10', 'FIS', 'BIO', 'GEO\r\n', 'FIS', 'ESP'),
('Escola de teste 2', 'E02T02', '6', '25', '10 às 11', 'GEO\r\n', 'MAT', 'MAT', 'QUI\r\n', 'PORT'),
('Escola de teste 2', 'E02T02', '6', '25', '11 às 12', 'ING', 'MAT', 'PORT', 'QUI\r\n', 'Ed. FIS'),
('Escola de teste 2', 'E02T02', '6', '25', '13 às 14', 'HIS', 'HIS', 'FIS', 'BIO', 'Ed. FIS'),
('Escola de teste 2', 'E02T02', '6', '25', '14 às 15', 'FIS', 'FIS', 'HIS', 'GEO\r\n', 'GEO\r\n'),
('Escola de teste 2', 'E02T02', '6', '25', '15 às 16', 'ESP', 'BIO', 'FIS', 'Ed. FIS', 'Ed. FIS'),
('Escola de teste 2', 'E02T02', '6', '25', '16 às 17', 'ING', 'ING', 'HIS', 'GEO\r\n', 'MAT'),
('Escola de teste 2', 'E02T02', '6', '25', '17 às 18', 'MAT', 'HIS', 'GEO\r\n', 'GEO\r\n', 'MAT');

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
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`RM_Prof`);

--
-- Índices para tabela `responsáveis`
--
ALTER TABLE `responsáveis`
  ADD PRIMARY KEY (`RM_Responsável`);

--
-- Índices para tabela `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`RM_Secretaria`);

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
  MODIFY `Escola_Codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `ID_Ano` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
