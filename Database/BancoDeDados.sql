-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 17-Fev-2021 às 03:21
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11


drop database if exists TCC;
create database TCC;
  use TCC;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";------------------------------------------------

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
(1000, '1N3', 'Guilherme Fonseca', '55.285.582-52', 'guiimar@gmail.com', '2004-12-05', '(11) 9947227523', '11526-582', 'Guarujá', 'Rua ABC', 'Vila Zilda', 'Escola Pedro Al', 1, 13),
(1001, '1N3', 'André Fonseca', '82.572.572-52', 'andrewsfor@outlook.com', '2004-09-02', '(11) 988427492', '11526-582', 'Guarujá', 'R. M', 'Vila Zilda', 'Escola Pedro Al', 1, 13),
(9400, '1B', 'Andre', '19.203.213-09', 'rias@gmail.com', '2001-01-01', 'ijojo12', '09128-310', '9809', '809', '80', 'Escola ID n 4', 4, 23);

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
(2, '2020-11-05 01:45:54'),
(1, '2020-11-05 01:55:30'),
(1, '2020-11-05 01:55:34'),
(1, '2020-11-05 01:55:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_notas`
--

CREATE TABLE `alunos_notas` (
  `ID` bigint(20) NOT NULL,
  `RM_Aluno` bigint(20) NOT NULL,
  `Aluno_Ano` bigint(20) NOT NULL,
  `Aluno_Bimestre` bigint(20) NOT NULL,
  `Aluno_Disciplina` varchar(255) NOT NULL,
  `Aluno_Nota1` decimal(10,0) NOT NULL,
  `Aluno_Nota2` decimal(10,0) NOT NULL,
  `Aluno_Nota3` decimal(10,0) NOT NULL,
  `Aluno_Nota4` decimal(10,0) NOT NULL,
  `Aluno_MencaoFinal` bigint(20) NOT NULL,
  `FK_AlunoFaltas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos_notas`
--

INSERT INTO `alunos_notas` (`ID`, `RM_Aluno`, `Aluno_Ano`, `Aluno_Bimestre`, `Aluno_Disciplina`, `Aluno_Nota1`, `Aluno_Nota2`, `Aluno_Nota3`, `Aluno_Nota4`, `Aluno_MencaoFinal`, `FK_AlunoFaltas`) VALUES
(1, 1000, 1, 1, 'BIO', '4', '8', '7', '9', 9, 'ACEBIO1'),
(2, 1001, 1, 1, 'ESP', '5', '7', '6', '7', 7, 'ACE2ESP');

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
(1, '21.312.90/8401-928', 'Escola Pedro Al', '12292-948', 'Guarujá', 'Av. XXSS'),
(2, '44.4242.4232/42324-23', 'Dirce', '22452-582', 'Guarujá', 'Av. Dom Pedro I'),
(3, '12.931.20/8301-283', 'Escola X', '12312-031', 'teste', 'joi'),
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
(1000, 1000),
(1001, 1000),
(1000, 15420),
(1001, 9000),
(1000, 24020),
(1001, 24020),
(1001, 24020),
(1000, 6000),
(1001, 6000),
(1000, 6000),
(1000, 15000),
(1000, 15000),
(1001, 15000),
(1000, 9990),
(1000, 9990),
(1000, 1000),
(1000, 23040),
(1000, 40992),
(1000, 123129830),
(1000, 15000),
(1001, 9999),
(1000, 21938012938),
(1000, 1000),
(1000, 9400),
(1000, 9400);

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
(1000, 'Claudio Nunes', 'claudnun@gmail.com', '1980-12-11', '55.284.552-52', '495.284.285-39', '(13) 3385-2298', '(13) 9985-28492', '11492-492', 'Arujá', 'Mariano Peixoto, 294'),
(15420, 'Luis', 'rick_arcangelo@Hotmail.com', '2021-12-30', '09.801.928-30', '980.912.830-91', '12 3912-8903', '09 81209-3812', '09128-301', '', '091283019283091283'),
(9400, 'luis', 'fod@gmail.com', '2000-11-11', '09.810.298-30', '019.283.019-83', '12 9380-9128', '01 92830-9128', '80', '', '098098');

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
(112, 2, 'Luiz Almeida', '2000-02-13', 'luizpt@outlook.cm', '13 3395-2842', '11 98824-4825', '229.285.682-36', '52.482.583-3', '28342-274', 'São Vicente', 'Rua Y', 'Bairro'),
(1002, 2, 'Fernando', '2000-02-11', 'saidgmai@c.om', '01 9230-1283', '09 80912-8308', '091.283.019-28', '01.928.301-28', '09019-238', '', 'b', 'C'),
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
('Escola Pedro Al', 'Pedro Sate', 13, '1N3', 1),
('Escola Pedro Al', 'Pedro Sate', 14, '1R5', 1),
('Dirce', 'Pedro Sate', 15, '1RB', 2),
('Escola ID n 4', 'Pedro Sate', 23, '1B', 4);

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

INSERT INTO `turma_horario` (`Turma_Escola`, `Turma_Ano`, `Turma_Horario`, `Horario_Segunda`, `Horario_Terça`, `Horario_Quarta`, `Horario_Quinta`, `Horario_Sexta`) VALUES
('Escola Pedro Al', '1R5', '8 às 9', 'ART', '', '', '', ''),
('Escola Pedro Al', '1R5', '9 às 10', '', '', '', '', ''),
('Escola Pedro Al', '1R5', '10 às 11', '', '', '', '', ''),
('Escola Pedro Al', '1R5', '11 às 12', '', '', '', '', ''),
('Escola Pedro Al', '1R5', '13 às 14', '', '', '', '', ''),
('Escola Pedro Al', '1R5', '14 às 15', '', '', '', '', ''),
('Escola Pedro Al', '1R5', '15 às 16', '', '', '', '', ''),
('Escola Pedro Al', '1R5', '16 às 17', '', '', '', '', ''),
('Escola Pedro Al', '1R5', '17 às 18', 'ART', '', '', '', '');

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
