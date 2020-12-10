-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21-Nov-2020 às 20:51
-- Versão do servidor: 10.3.24-MariaDB-2
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estrutura da tabela `Alunos`
--

CREATE TABLE `Alunos` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Aluno_Ano` varchar(255) NOT NULL,
  `Aluno_Nome` varchar(255) NOT NULL,
  `Aluno_RG` varchar(255) NOT NULL,
  `Aluno_Email` varchar(255) NOT NULL,
  `Aluno_DataDeNascimento` date NOT NULL,
  `Aluno_Telefone` varchar(255) NOT NULL,
  `Aluno_CEP` varchar(255) NOT NULL,
  `Aluno_Cidade` varchar(255) NOT NULL,
  `Aluno_Endereço` varchar(255) NOT NULL,
  `Aluno_Bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Alunos`
--

INSERT INTO `Alunos` (`RM_Aluno`, `Aluno_Ano`, `Aluno_Nome`, `Aluno_RG`, `Aluno_Email`, `Aluno_DataDeNascimento`, `Aluno_Telefone`, `Aluno_CEP`, `Aluno_Cidade`, `Aluno_Endereço`, `Aluno_Bairro`) VALUES
(1000, '1B', 'Guilherme Fonseca', '55.285.582-52', 'guiimar@gmail.com', '2004-12-05', '(11) 9947227523', '11526-582', 'Guarujá ', 'R. M', 'Vila Zilda'),
(1001, '1NB', 'André Fonseca', '82.572.572-52', 'andrewsfor@outlook.com', '2004-09-02', '(11) 988427492', '11526-582', 'Guarujá', 'R. M', 'Vila Zilda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Alunos_Faltas`
--

CREATE TABLE `Alunos_Faltas` (
  `ID` bigint(20) NOT NULL,
  `Codigo_Falta` varchar(255) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Alunos_Faltas`
--

INSERT INTO `Alunos_Faltas` (`ID`, `Codigo_Falta`, `Data`) VALUES
(1, 'ACEBIO1', '2020-11-04 19:45:54'),
(2, 'ACE2ESP', '2020-11-04 19:55:30'),
(3, 'ACE2ESP', '2020-11-04 19:55:34'),
(4, 'ACE2ESP', '2020-11-04 19:55:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Alunos_Notas`
--

CREATE TABLE `Alunos_Notas` (
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
-- Extraindo dados da tabela `Alunos_Notas`
--

INSERT INTO `Alunos_Notas` (`ID`, `RM_Aluno`, `Aluno_Ano`, `Aluno_Bimestre`, `Aluno_Disciplina`, `Aluno_Nota1`, `Aluno_Nota2`, `Aluno_Nota3`, `Aluno_Nota4`, `Aluno_MencaoFinal`, `FK_AlunoFaltas`) VALUES
(1, 1000, 1, 1, 'BIO', '4', '8', '7', '9', 9, 'ACEBIO1'),
(2, 1001, 1, 1, 'ESP', '5', '7', '6', '7', 7, 'ACE2ESP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Disciplinas`
--

CREATE TABLE `Disciplinas` (
  `Materia_Nome` varchar(255) NOT NULL,
  `Materia_Descricao` varchar(255) NOT NULL,
  `Materia_Abrev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Disciplinas`
--

INSERT INTO `Disciplinas` (`Materia_Nome`, `Materia_Descricao`, `Materia_Abrev`) VALUES
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
-- Estrutura da tabela `Escolas`
--

CREATE TABLE `Escolas` (
  `Escola_Codigo` bigint(20) NOT NULL,
  `Escola_CNPJ` varchar(255) NOT NULL,
  `Escola_Nome` varchar(255) NOT NULL,
  `Escola_CEP` varchar(255) NOT NULL,
  `Escola_Munincipio` varchar(255) NOT NULL,
  `Escola_Endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Escolas`
--

INSERT INTO `Escolas` (`Escola_Codigo`, `Escola_CNPJ`, `Escola_Nome`, `Escola_CEP`, `Escola_Munincipio`, `Escola_Endereco`) VALUES
(1, '21.312.90/8401-928', 'EB.I Pedro Almeida', '12292-948', 'Guarujá', 'Av. XXSS'),
(2, '44.4242.4232/42324-23', 'Dirce Valério Gracia', '22452-582', 'Guarujá', 'Av. Dom Pedro I');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Login_ADMIN`
--

CREATE TABLE `Login_ADMIN` (
  `ID` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Login_ADMIN`
--

INSERT INTO `Login_ADMIN` (`ID`, `Usuario`, `Senha`) VALUES
(1, 'admin', 'tccadmin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Login_Aluno`
--

CREATE TABLE `Login_Aluno` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Login_Aluno`
--

INSERT INTO `Login_Aluno` (`RM_Aluno`, `Usuario`, `Senha`) VALUES
(1000, 'guii', 'guiisantos1\r\n'),
(1001, 'frikz', 'frik123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Login_Prof`
--

CREATE TABLE `Login_Prof` (
  `RM_Prof` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Login_Prof`
--

INSERT INTO `Login_Prof` (`RM_Prof`, `Usuario`, `Senha`) VALUES
(1, 'prof1', 'profsenha1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Login_Resp`
--

CREATE TABLE `Login_Resp` (
  `RM_Resp` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Login_Resp`
--

INSERT INTO `Login_Resp` (`RM_Resp`, `Usuario`, `Senha`) VALUES
(1000, 'claudinz', 'claudio1335');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Login_Secretaria`
--

CREATE TABLE `Login_Secretaria` (
  `RM_Secretaria` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Login_Secretaria`
--

INSERT INTO `Login_Secretaria` (`RM_Secretaria`, `Usuario`, `Senha`) VALUES
(112, 'luizmait', 'luizmaia1950');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Professores`
--

CREATE TABLE `Professores` (
  `RM_Prof` bigint(20) NOT NULL,
  `Prof_IDEscola` varchar(255) NOT NULL,
  `Prof_Nome` varchar(255) NOT NULL,
  `Prof_DataDeNascimento` date NOT NULL,
  `Prof_Email` varchar(255) NOT NULL,
  `Prof_CPF` varchar(255) NOT NULL,
  `Prof_RG` varchar(255) NOT NULL,
  `Prof_CEP` varchar(255) NOT NULL,
  `Prof_Cidade` varchar(255) NOT NULL,
  `Prof_Endereço` varchar(255) NOT NULL,
  `Prof_Bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Professores`
--

INSERT INTO `Professores` (`RM_Prof`, `Prof_IDEscola`, `Prof_Nome`, `Prof_DataDeNascimento`, `Prof_Email`, `Prof_CPF`, `Prof_RG`, `Prof_CEP`, `Prof_Cidade`, `Prof_Endereço`, `Prof_Bairro`) VALUES
(1, '0000AA1', 'Pedro Sate', '1998-04-15', 'pedro@gmail.com', '449.228.285-85', '82.582.852-7', '11857-852', 'Santos', 'R. sadfasf ', 'Vila Mathias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Relacao_AlunosEscolas`
--

CREATE TABLE `Relacao_AlunosEscolas` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Escola_Codigo` bigint(20) NOT NULL,
  `Ano` bigint(20) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `DataDeMatricula` date NOT NULL,
  `DataFim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Relacao_AlunosEscolas`
--

INSERT INTO `Relacao_AlunosEscolas` (`RM_Aluno`, `Escola_Codigo`, `Ano`, `Status`, `DataDeMatricula`, `DataFim`) VALUES
(1000, 1, 1, 'Cursando', '2020-02-10', NULL),
(1001, 1, 1, 'Cursando', '2020-02-10', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Relacao_AlunosResponsaveis`
--

CREATE TABLE `Relacao_AlunosResponsaveis` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Responsavel_Filhos` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Relacao_AlunosResponsaveis`
--

INSERT INTO `Relacao_AlunosResponsaveis` (`RM_Aluno`, `Responsavel_Filhos`) VALUES
(1000, 1000),
(1001, 1000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Relacao_ProfessorEscola`
--

CREATE TABLE `Relacao_ProfessorEscola` (
  `ID` int(11) NOT NULL,
  `Escola_Cod` bigint(20) NOT NULL,
  `Prof_Escola` varchar(255) NOT NULL,
  `Prof_Turmas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Relacao_ProfessorEscola`
--

INSERT INTO `Relacao_ProfessorEscola` (`ID`, `Escola_Cod`, `Prof_Escola`, `Prof_Turmas`) VALUES
(1, 1, '0000AA1', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Relacao_ProfessorTurma`
--

CREATE TABLE `Relacao_ProfessorTurma` (
  `Prof_Turma` bigint(20) NOT NULL,
  `Cod_DisTurma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Relacao_ProfessorTurma`
--

INSERT INTO `Relacao_ProfessorTurma` (`Prof_Turma`, `Cod_DisTurma`) VALUES
(11, 'Prof1Cod'),
(11, 'Prof1Codigo2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Relacao_TurmaDisciplina`
--

CREATE TABLE `Relacao_TurmaDisciplina` (
  `Cod_DisciplinaTurma` varchar(255) NOT NULL,
  `Turma` varchar(255) NOT NULL,
  `Matéria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Responsáveis`
--

CREATE TABLE `Responsáveis` (
  `RM_Responsável` bigint(20) NOT NULL,
  `Resp_Filhos` bigint(20) NOT NULL,
  `Resp_Nome` varchar(255) NOT NULL,
  `Resp_Email` varchar(255) NOT NULL,
  `Resp_DataDeNascimento` date NOT NULL,
  `Resp_RG` varchar(255) NOT NULL,
  `Resp_CPF` varchar(255) NOT NULL,
  `Resp_Telefone` varchar(255) NOT NULL,
  `Resp_Celular` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Responsáveis`
--

INSERT INTO `Responsáveis` (`RM_Responsável`, `Resp_Filhos`, `Resp_Nome`, `Resp_Email`, `Resp_DataDeNascimento`, `Resp_RG`, `Resp_CPF`, `Resp_Telefone`, `Resp_Celular`) VALUES
(1000, 1000, 'Claudio Nunes', 'claudnun@gmail.com', '1980-12-11', '55.284.552-52', '495.284.285-39', '(13) 3385-2298', '(13) 9985-28492');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Secretaria`
--

CREATE TABLE `Secretaria` (
  `RM_Secretaria` bigint(20) NOT NULL,
  `Sec_Escola` bigint(20) NOT NULL,
  `Sec_Nome` varchar(255) NOT NULL,
  `Sec_DataDeNascimento` date NOT NULL,
  `Sec_Email` varchar(255) NOT NULL,
  `Sec_CPF` varchar(255) NOT NULL,
  `Sec_RG` varchar(255) NOT NULL,
  `Sec_CEP` varchar(255) NOT NULL,
  `Sec_Cidade` varchar(255) NOT NULL,
  `Sec_Endereço` varchar(255) NOT NULL,
  `Sec_Bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Secretaria`
--

INSERT INTO `Secretaria` (`RM_Secretaria`, `Sec_Escola`, `Sec_Nome`, `Sec_DataDeNascimento`, `Sec_Email`, `Sec_CPF`, `Sec_RG`, `Sec_CEP`, `Sec_Cidade`, `Sec_Endereço`, `Sec_Bairro`) VALUES
(112, 1, 'Luiz Almeida', '1982-02-04', 'luizpt@outlook.cm', '229.285.682-36', '52.482.583-3', '28342-274', 'São Vicente', 'Rua Y', 'Vila P');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Turmas`
--

CREATE TABLE `Turmas` (
  `Escola` varchar(255) NOT NULL,
  `Prof_Coordenador` varchar(255) NOT NULL,
  `ID_Ano` bigint(20) NOT NULL,
  `Turma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Turmas`
--

INSERT INTO `Turmas` (`Escola`, `Prof_Coordenador`, `ID_Ano`, `Turma`) VALUES
('EB.I Pedro Almeida', 'Pedro Sate', 13, '1N1'),
('EB.I Pedro Almeida', 'Pedro Sate', 14, '1R1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Turma_Horario`
--

CREATE TABLE `Turma_Horario` (
  `ID` bigint(20) NOT NULL,
  `Turma_Ano` varchar(255) NOT NULL,
  `Turma_Horario` varchar(255) NOT NULL,
  `Horario_Segunda` varchar(255) DEFAULT NULL,
  `Horario_Terça` varchar(255) DEFAULT NULL,
  `Horario_Quarta` varchar(255) DEFAULT NULL,
  `Horario_Quinta` varchar(255) DEFAULT NULL,
  `Horario_Sexta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Turma_Horario`
--

INSERT INTO `Turma_Horario` (`ID`, `Turma_Ano`, `Turma_Horario`, `Horario_Segunda`, `Horario_Terça`, `Horario_Quarta`, `Horario_Quinta`, `Horario_Sexta`) VALUES
(33, '1B', '8 às 9', 'MAT', 'PORT', NULL, 'HIS', NULL),
(34, '1B', '9 às 10', 'MAT', 'PORT', 'HIS', NULL, NULL),
(35, '1B', '10 às 11', 'GEO\r\n', 'ING', 'ING', 'MAT', 'QUI\r\n'),
(36, '1B', '11 às 12', 'BIO', 'QUI\r\n', 'ING', 'MAT', 'FIS'),
(37, '1B', '13 às 14', 'BIO', 'QUI\r\n', 'FIS', 'ESP', 'HIS'),
(38, '1B', '15 às 16', 'HIS', 'GEO\r\n', 'FIS', 'ESP', 'HIS'),
(39, '1B', '16 às 17', 'HIS', 'Ed. FIS', 'BIO', 'PORT', 'PORT'),
(40, '1B', '17 às 18', 'ESP', 'Ed. FIS', 'BIO', 'PORT', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Alunos`
--
ALTER TABLE `Alunos`
  ADD PRIMARY KEY (`RM_Aluno`),
  ADD KEY `Aluno_Ano` (`Aluno_Ano`);

--
-- Índices para tabela `Alunos_Faltas`
--
ALTER TABLE `Alunos_Faltas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_AlunoFaltas` (`Codigo_Falta`);

--
-- Índices para tabela `Alunos_Notas`
--
ALTER TABLE `Alunos_Notas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RM_Aluno` (`RM_Aluno`,`FK_AlunoFaltas`),
  ADD KEY `FK_AlunoFaltas` (`FK_AlunoFaltas`),
  ADD KEY `Aluno_Disciplina` (`Aluno_Disciplina`);

--
-- Índices para tabela `Disciplinas`
--
ALTER TABLE `Disciplinas`
  ADD PRIMARY KEY (`Materia_Nome`),
  ADD KEY `Materia_Abrev` (`Materia_Abrev`);

--
-- Índices para tabela `Escolas`
--
ALTER TABLE `Escolas`
  ADD PRIMARY KEY (`Escola_Codigo`),
  ADD UNIQUE KEY `Escola_CNPJ` (`Escola_CNPJ`),
  ADD KEY `Escola_Nome` (`Escola_Nome`);

--
-- Índices para tabela `Login_ADMIN`
--
ALTER TABLE `Login_ADMIN`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `Login_Aluno`
--
ALTER TABLE `Login_Aluno`
  ADD PRIMARY KEY (`RM_Aluno`);

--
-- Índices para tabela `Login_Prof`
--
ALTER TABLE `Login_Prof`
  ADD PRIMARY KEY (`RM_Prof`);

--
-- Índices para tabela `Login_Resp`
--
ALTER TABLE `Login_Resp`
  ADD PRIMARY KEY (`RM_Resp`);

--
-- Índices para tabela `Login_Secretaria`
--
ALTER TABLE `Login_Secretaria`
  ADD PRIMARY KEY (`RM_Secretaria`);

--
-- Índices para tabela `Professores`
--
ALTER TABLE `Professores`
  ADD PRIMARY KEY (`RM_Prof`),
  ADD KEY `Prof_Escola` (`Prof_IDEscola`),
  ADD KEY `Prof_Nome` (`Prof_Nome`);

--
-- Índices para tabela `Relacao_AlunosEscolas`
--
ALTER TABLE `Relacao_AlunosEscolas`
  ADD KEY `RM_Aluno` (`RM_Aluno`,`Escola_Codigo`),
  ADD KEY `Escola_Codigo` (`Escola_Codigo`);

--
-- Índices para tabela `Relacao_AlunosResponsaveis`
--
ALTER TABLE `Relacao_AlunosResponsaveis`
  ADD KEY `RM_Aluno` (`RM_Aluno`),
  ADD KEY `Responsavel_Filhos` (`Responsavel_Filhos`);

--
-- Índices para tabela `Relacao_ProfessorEscola`
--
ALTER TABLE `Relacao_ProfessorEscola`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Escola_Cod` (`Escola_Cod`,`Prof_Escola`,`Prof_Turmas`),
  ADD KEY `Prof_Escola` (`Prof_Escola`),
  ADD KEY `Prof_Turmas` (`Prof_Turmas`);

--
-- Índices para tabela `Relacao_ProfessorTurma`
--
ALTER TABLE `Relacao_ProfessorTurma`
  ADD KEY `Prof_Turma` (`Prof_Turma`,`Cod_DisTurma`),
  ADD KEY `ID_Turma` (`Cod_DisTurma`);

--
-- Índices para tabela `Relacao_TurmaDisciplina`
--
ALTER TABLE `Relacao_TurmaDisciplina`
  ADD KEY `Matéria` (`Matéria`),
  ADD KEY `Cod_DisciplinaTurma` (`Cod_DisciplinaTurma`),
  ADD KEY `Turma` (`Turma`);

--
-- Índices para tabela `Responsáveis`
--
ALTER TABLE `Responsáveis`
  ADD PRIMARY KEY (`RM_Responsável`),
  ADD KEY `Resp_Filhos` (`Resp_Filhos`);

--
-- Índices para tabela `Secretaria`
--
ALTER TABLE `Secretaria`
  ADD PRIMARY KEY (`RM_Secretaria`),
  ADD KEY `Sec_Escola` (`Sec_Escola`);

--
-- Índices para tabela `Turmas`
--
ALTER TABLE `Turmas`
  ADD PRIMARY KEY (`ID_Ano`),
  ADD KEY `Turma` (`Turma`),
  ADD KEY `Escola` (`Escola`),
  ADD KEY `Prof_Coordenador` (`Prof_Coordenador`);

--
-- Índices para tabela `Turma_Horario`
--
ALTER TABLE `Turma_Horario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Turma_Ano` (`Turma_Ano`),
  ADD KEY `Horario_Segunda` (`Horario_Segunda`),
  ADD KEY `Horario_Terça` (`Horario_Terça`),
  ADD KEY `Horario_Quarta` (`Horario_Quarta`),
  ADD KEY `Horario_Quinta` (`Horario_Quinta`),
  ADD KEY `Horario_Sexta` (`Horario_Sexta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Alunos_Faltas`
--
ALTER TABLE `Alunos_Faltas`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `Alunos_Notas`
--
ALTER TABLE `Alunos_Notas`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `Escolas`
--
ALTER TABLE `Escolas`
  MODIFY `Escola_Codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `Login_ADMIN`
--
ALTER TABLE `Login_ADMIN`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `Relacao_ProfessorEscola`
--
ALTER TABLE `Relacao_ProfessorEscola`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `Turmas`
--
ALTER TABLE `Turmas`
  MODIFY `ID_Ano` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `Turma_Horario`
--
ALTER TABLE `Turma_Horario`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `Alunos_Faltas`
--
ALTER TABLE `Alunos_Faltas`
  ADD CONSTRAINT `Alunos_Faltas_ibfk_1` FOREIGN KEY (`Codigo_Falta`) REFERENCES `Alunos_Notas` (`FK_AlunoFaltas`);

--
-- Limitadores para a tabela `Alunos_Notas`
--
ALTER TABLE `Alunos_Notas`
  ADD CONSTRAINT `Alunos_Notas_ibfk_1` FOREIGN KEY (`RM_Aluno`) REFERENCES `Alunos` (`RM_Aluno`),
  ADD CONSTRAINT `Alunos_Notas_ibfk_3` FOREIGN KEY (`Aluno_Disciplina`) REFERENCES `Disciplinas` (`Materia_Abrev`);

--
-- Limitadores para a tabela `Login_Aluno`
--
ALTER TABLE `Login_Aluno`
  ADD CONSTRAINT `Login_Aluno_ibfk_1` FOREIGN KEY (`RM_Aluno`) REFERENCES `Alunos` (`RM_Aluno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `Login_Prof`
--
ALTER TABLE `Login_Prof`
  ADD CONSTRAINT `Login_Prof_ibfk_1` FOREIGN KEY (`RM_Prof`) REFERENCES `Professores` (`RM_Prof`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `Login_Resp`
--
ALTER TABLE `Login_Resp`
  ADD CONSTRAINT `Login_Resp_ibfk_1` FOREIGN KEY (`RM_Resp`) REFERENCES `Responsáveis` (`RM_Responsável`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `Login_Secretaria`
--
ALTER TABLE `Login_Secretaria`
  ADD CONSTRAINT `Login_Secretaria_ibfk_1` FOREIGN KEY (`RM_Secretaria`) REFERENCES `Secretaria` (`RM_Secretaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `Relacao_AlunosEscolas`
--
ALTER TABLE `Relacao_AlunosEscolas`
  ADD CONSTRAINT `Relacao_AlunosEscolas_ibfk_1` FOREIGN KEY (`RM_Aluno`) REFERENCES `Alunos` (`RM_Aluno`),
  ADD CONSTRAINT `Relacao_AlunosEscolas_ibfk_2` FOREIGN KEY (`Escola_Codigo`) REFERENCES `Escolas` (`Escola_Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `Relacao_AlunosResponsaveis`
--
ALTER TABLE `Relacao_AlunosResponsaveis`
  ADD CONSTRAINT `Relacao_AlunosResponsaveis_ibfk_1` FOREIGN KEY (`RM_Aluno`) REFERENCES `Alunos` (`RM_Aluno`),
  ADD CONSTRAINT `Relacao_AlunosResponsaveis_ibfk_2` FOREIGN KEY (`Responsavel_Filhos`) REFERENCES `Responsáveis` (`Resp_Filhos`);

--
-- Limitadores para a tabela `Relacao_ProfessorEscola`
--
ALTER TABLE `Relacao_ProfessorEscola`
  ADD CONSTRAINT `Relacao_ProfessorEscola_ibfk_1` FOREIGN KEY (`Prof_Escola`) REFERENCES `Professores` (`Prof_IDEscola`),
  ADD CONSTRAINT `Relacao_ProfessorEscola_ibfk_2` FOREIGN KEY (`Escola_Cod`) REFERENCES `Escolas` (`Escola_Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `Relacao_ProfessorTurma`
--
ALTER TABLE `Relacao_ProfessorTurma`
  ADD CONSTRAINT `Relacao_ProfessorTurma_ibfk_1` FOREIGN KEY (`Prof_Turma`) REFERENCES `Relacao_ProfessorEscola` (`Prof_Turmas`);

--
-- Limitadores para a tabela `Relacao_TurmaDisciplina`
--
ALTER TABLE `Relacao_TurmaDisciplina`
  ADD CONSTRAINT `Relacao_TurmaDisciplina_ibfk_1` FOREIGN KEY (`Turma`) REFERENCES `Turmas` (`Turma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Relacao_TurmaDisciplina_ibfk_3` FOREIGN KEY (`Matéria`) REFERENCES `Disciplinas` (`Materia_Nome`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Relacao_TurmaDisciplina_ibfk_4` FOREIGN KEY (`Cod_DisciplinaTurma`) REFERENCES `Relacao_ProfessorTurma` (`Cod_DisTurma`);

--
-- Limitadores para a tabela `Secretaria`
--
ALTER TABLE `Secretaria`
  ADD CONSTRAINT `Secretaria_ibfk_1` FOREIGN KEY (`Sec_Escola`) REFERENCES `Escolas` (`Escola_Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `Turmas`
--
ALTER TABLE `Turmas`
  ADD CONSTRAINT `Turmas_ibfk_1` FOREIGN KEY (`Prof_Coordenador`) REFERENCES `Professores` (`Prof_Nome`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `Turma_Horario`
--
ALTER TABLE `Turma_Horario`
  ADD CONSTRAINT `Turma_Horario_ibfk_2` FOREIGN KEY (`Horario_Segunda`) REFERENCES `Disciplinas` (`Materia_Abrev`),
  ADD CONSTRAINT `Turma_Horario_ibfk_3` FOREIGN KEY (`Horario_Terça`) REFERENCES `Disciplinas` (`Materia_Abrev`),
  ADD CONSTRAINT `Turma_Horario_ibfk_4` FOREIGN KEY (`Horario_Quarta`) REFERENCES `Disciplinas` (`Materia_Abrev`),
  ADD CONSTRAINT `Turma_Horario_ibfk_5` FOREIGN KEY (`Horario_Quinta`) REFERENCES `Disciplinas` (`Materia_Abrev`),
  ADD CONSTRAINT `Turma_Horario_ibfk_6` FOREIGN KEY (`Horario_Sexta`) REFERENCES `Disciplinas` (`Materia_Abrev`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
