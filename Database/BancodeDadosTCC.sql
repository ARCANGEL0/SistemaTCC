-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2020 at 04:27 PM
-- Server version: 10.3.24-MariaDB-2
-- PHP Version: 7.4.9
Create DATABASE TCC;
Use TCC;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TCC`
--

-- --------------------------------------------------------

--
-- Table structure for table `Alunos`
--

CREATE TABLE `Alunos` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Aluno_Ano` varchar(255) NOT NULL,
  `Aluno_Nome` varchar(255) NOT NULL,
  `Aluno_RG` bigint(20) NOT NULL,
  `Aluno_Email` varchar(255) NOT NULL,
  `Aluno_DataDeNascimento` date NOT NULL,
  `Aluno_Telefone` bigint(20) NOT NULL,
  `Aluno_CEP` varchar(255) NOT NULL,
  `Aluno_Cidade` varchar(255) NOT NULL,
  `Aluno_Endereço` varchar(255) NOT NULL,
  `Aluno_Bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Alunos_Faltas`
--

CREATE TABLE `Alunos_Faltas` (
  `ID` bigint(20) NOT NULL,
  `Codigo_Falta` bigint(20) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Alunos_Notas`
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
  `FK_AlunoFaltas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Disciplinas`
--

CREATE TABLE `Disciplinas` (
  `ID_Materia` bigint(20) NOT NULL,
  `Materia_Nome` varchar(255) NOT NULL,
  `Materia_Descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Escolas`
--

CREATE TABLE `Escolas` (
  `Escola_Codigo` bigint(20) NOT NULL,
  `Escola_CNPJ` varchar(255) NOT NULL,
  `Escola_Nome` varchar(255) NOT NULL,
  `Escola_CEP` varchar(255) NOT NULL,
  `Escola_Munincipio` varchar(255) NOT NULL,
  `Escola_Endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Login_ADMIN`
--

CREATE TABLE `Login_ADMIN` (
  `ID` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Login_Aluno`
--

CREATE TABLE `Login_Aluno` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Login_Prof`
--

CREATE TABLE `Login_Prof` (
  `RM_Prof` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Login_Resp`
--

CREATE TABLE `Login_Resp` (
  `RM_Resp` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Login_Secretaria`
--

CREATE TABLE `Login_Secretaria` (
  `RM_Secretaria` bigint(20) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Professores`
--

CREATE TABLE `Professores` (
  `RM_Prof` bigint(20) NOT NULL,
  `Prof_IDEscola` varchar(255) NOT NULL,
  `Prof_Nome` varchar(255) NOT NULL,
  `Prof_DataDeNascimento` DATE NOT NULL,
  `Prof_Email` varchar(255) NOT NULL,
  `Prof_CPF` varchar(255) NOT NULL,
  `Prof_RG` varchar(255) NOT NULL,
  `Prof_CEP` varchar(255) NOT NULL,
  `Prof_Cidade` varchar(255) NOT NULL,
  `Prof_Endereço` varchar(255) NOT NULL,
  `Prof_Bairro` varchar(255) NOT NULL,
  `Prof_Disciplinas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Relacao_AlunosEscolas`
--

CREATE TABLE `Relacao_AlunosEscolas` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Escola_Codigo` bigint(20) NOT NULL,
  `Ano` bigint(20) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `DataDeMatricula` date NOT NULL,
  `DataFim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Relacao_AlunosResponsaveis`
--

CREATE TABLE `Relacao_AlunosResponsaveis` (
  `RM_Aluno` bigint(20) NOT NULL,
  `Responsavel_Filhos` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Relacao_ProfessorDisciplina`
--

CREATE TABLE `Relacao_ProfessorDisciplina` (
  `Prof_Disciplina` bigint(20) NOT NULL,
  `ID_Disciplina` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Relacao_ProfessorEscola`
--

CREATE TABLE `Relacao_ProfessorEscola` (
  `ID` int(11) NOT NULL,
  `Escola_Cod` bigint(20) NOT NULL,
  `Prof_Escola` varchar(255) NOT NULL,
  `Prof_Turmas` bigint(20) NOT NULL,
  `Prof_Disciplinas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Relacao_ProfessorTurma`
--

CREATE TABLE `Relacao_ProfessorTurma` (
  `Prof_Turma` bigint(20) NOT NULL,
  `ID_Turma` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Responsáveis`
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

-- --------------------------------------------------------

--
-- Table structure for table `Secretaria`
--

CREATE TABLE `Secretaria` (
  `RM_Secretaria` bigint(20) NOT NULL,
  `Sec_Escola` bigint(20) NOT NULL,
  `Sec_Nome` bigint(20) NOT NULL,
  `Sec_DataDeNascimento` bigint(20) NOT NULL,
  `Sec_Email` varchar(255) NOT NULL,
  `Sec_CPF` varchar(255) NOT NULL,
  `Sec_RG` varchar(255) NOT NULL,
  `Sec_CEP` varchar(255) NOT NULL,
  `Sec_Cidade` varchar(255) NOT NULL,
  `Sec_Endereço` varchar(255) NOT NULL,
  `Sec_Bairro` varchar(255) NOT NULL,
  `Sec_Disciplinas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Turmas`
--

CREATE TABLE `Turmas` (
  `ID_Ano` bigint(20) NOT NULL,
  `Turma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Turma_Horario`
--

CREATE TABLE `Turma_Horario` (
  `ID` bigint(20) NOT NULL,
  `Turma_Ano` varchar(255) NOT NULL,
  `Turma_Horario` varchar(255) NOT NULL,
  `Horario_Segunda` varchar(255) NOT NULL,
  `Horario_Terça` varchar(255) NOT NULL,
  `Horario_Quarta` varchar(255) NOT NULL,
  `Horario_Quinta` varchar(255) NOT NULL,
  `Horario_Sexta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Alunos`
--
ALTER TABLE `Alunos`
  ADD PRIMARY KEY (`RM_Aluno`),
  ADD KEY `Aluno_Ano` (`Aluno_Ano`);

--
-- Indexes for table `Alunos_Faltas`
--
ALTER TABLE `Alunos_Faltas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_AlunoFaltas` (`Codigo_Falta`);

--
-- Indexes for table `Alunos_Notas`
--
ALTER TABLE `Alunos_Notas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RM_Aluno` (`RM_Aluno`,`FK_AlunoFaltas`),
  ADD KEY `FK_AlunoFaltas` (`FK_AlunoFaltas`);

--
-- Indexes for table `Disciplinas`
--
ALTER TABLE `Disciplinas`
  ADD PRIMARY KEY (`ID_Materia`);

--
-- Indexes for table `Escolas`
--
ALTER TABLE `Escolas`
  ADD PRIMARY KEY (`Escola_Codigo`),
  ADD UNIQUE KEY `Escola_CNPJ` (`Escola_CNPJ`);

--
-- Indexes for table `Login_ADMIN`
--
ALTER TABLE `Login_ADMIN`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Login_Aluno`
--
ALTER TABLE `Login_Aluno`
  ADD PRIMARY KEY (`RM_Aluno`);

--
-- Indexes for table `Login_Prof`
--
ALTER TABLE `Login_Prof`
  ADD PRIMARY KEY (`RM_Prof`);

--
-- Indexes for table `Login_Resp`
--
ALTER TABLE `Login_Resp`
  ADD PRIMARY KEY (`RM_Resp`);

--
-- Indexes for table `Login_Secretaria`
--
ALTER TABLE `Login_Secretaria`
  ADD PRIMARY KEY (`RM_Secretaria`);

--
-- Indexes for table `Professores`
--
ALTER TABLE `Professores`
  ADD PRIMARY KEY (`RM_Prof`),
  ADD KEY `Prof_Escola` (`Prof_IDEscola`,`Prof_Disciplinas`);

--
-- Indexes for table `Relacao_AlunosEscolas`
--
ALTER TABLE `Relacao_AlunosEscolas`
  ADD KEY `RM_Aluno` (`RM_Aluno`,`Escola_Codigo`),
  ADD KEY `Escola_Codigo` (`Escola_Codigo`);

--
-- Indexes for table `Relacao_AlunosResponsaveis`
--
ALTER TABLE `Relacao_AlunosResponsaveis`
  ADD PRIMARY KEY (`Responsavel_Filhos`),
  ADD KEY `RM_Aluno` (`RM_Aluno`);

--
-- Indexes for table `Relacao_ProfessorDisciplina`
--
ALTER TABLE `Relacao_ProfessorDisciplina`
  ADD KEY `Prof_Disciplina` (`Prof_Disciplina`,`ID_Disciplina`),
  ADD KEY `ID_Disciplina` (`ID_Disciplina`);

--
-- Indexes for table `Relacao_ProfessorEscola`
--
ALTER TABLE `Relacao_ProfessorEscola`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Escola_Cod` (`Escola_Cod`,`Prof_Escola`,`Prof_Turmas`,`Prof_Disciplinas`),
  ADD KEY `Prof_Escola` (`Prof_Escola`),
  ADD KEY `Prof_Turmas` (`Prof_Turmas`),
  ADD KEY `Prof_Disciplinas` (`Prof_Disciplinas`);

--
-- Indexes for table `Relacao_ProfessorTurma`
--
ALTER TABLE `Relacao_ProfessorTurma`
  ADD KEY `Prof_Turma` (`Prof_Turma`,`ID_Turma`),
  ADD KEY `ID_Turma` (`ID_Turma`);

--
-- Indexes for table `Responsáveis`
--
ALTER TABLE `Responsáveis`
  ADD PRIMARY KEY (`RM_Responsável`),
  ADD KEY `Resp_Filhos` (`Resp_Filhos`);

--
-- Indexes for table `Secretaria`
--
ALTER TABLE `Secretaria`
  ADD PRIMARY KEY (`RM_Secretaria`),
  ADD KEY `Sec_Escola` (`Sec_Escola`);

--
-- Indexes for table `Turmas`
--
ALTER TABLE `Turmas`
  ADD PRIMARY KEY (`ID_Ano`),
  ADD KEY `Turma` (`Turma`);

--
-- Indexes for table `Turma_Horario`
--
ALTER TABLE `Turma_Horario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Turma_Ano` (`Turma_Ano`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Alunos_Faltas`
--
ALTER TABLE `Alunos_Faltas`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Alunos_Notas`
--
ALTER TABLE `Alunos_Notas`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Login_ADMIN`
--
ALTER TABLE `Login_ADMIN`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Relacao_ProfessorEscola`
--
ALTER TABLE `Relacao_ProfessorEscola`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Turma_Horario`
--
ALTER TABLE `Turma_Horario`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Alunos`
--
ALTER TABLE `Alunos`
  ADD CONSTRAINT `Alunos_ibfk_1` FOREIGN KEY (`RM_Aluno`) REFERENCES `Login_Aluno` (`RM_Aluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Alunos_ibfk_2` FOREIGN KEY (`RM_Aluno`) REFERENCES `Relacao_AlunosEscolas` (`RM_Aluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Alunos_ibfk_3` FOREIGN KEY (`RM_Aluno`) REFERENCES `Relacao_AlunosResponsaveis` (`RM_Aluno`),
  ADD CONSTRAINT `fk_RM` FOREIGN KEY (`RM_Aluno`) REFERENCES `Alunos_Notas` (`RM_Aluno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Alunos_Notas`
--
ALTER TABLE `Alunos_Notas`
  ADD CONSTRAINT `Alunos_Notas_ibfk_1` FOREIGN KEY (`RM_Aluno`) REFERENCES `Alunos` (`RM_Aluno`),
  ADD CONSTRAINT `Alunos_Notas_ibfk_2` FOREIGN KEY (`FK_AlunoFaltas`) REFERENCES `Alunos_Faltas` (`Codigo_Falta`);

--
-- Constraints for table `Disciplinas`
--
ALTER TABLE `Disciplinas`
  ADD CONSTRAINT `Disciplinas_ibfk_1` FOREIGN KEY (`ID_Materia`) REFERENCES `Relacao_ProfessorDisciplina` (`ID_Disciplina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Escolas`
--
ALTER TABLE `Escolas`
  ADD CONSTRAINT `Escolas_ibfk_1` FOREIGN KEY (`Escola_Codigo`) REFERENCES `Relacao_ProfessorEscola` (`Escola_Cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Login_Resp`
--
ALTER TABLE `Login_Resp`
  ADD CONSTRAINT `Login_Resp_ibfk_1` FOREIGN KEY (`RM_Resp`) REFERENCES `Responsáveis` (`RM_Responsável`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Professores`
--
ALTER TABLE `Professores`
  ADD CONSTRAINT `Escolas_ibfk_2` FOREIGN KEY (`Prof_IDEscola`) REFERENCES `Relacao_ProfessorEscola` (`Prof_Escola`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Professores_ibfk_1` FOREIGN KEY (`RM_Prof`) REFERENCES `Login_Prof` (`RM_Prof`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Relacao_AlunosEscolas`
--
ALTER TABLE `Relacao_AlunosEscolas`
  ADD CONSTRAINT `Relacao_AlunosEscolas_ibfk_1` FOREIGN KEY (`RM_Aluno`) REFERENCES `Alunos` (`RM_Aluno`),
  ADD CONSTRAINT `Relacao_AlunosEscolas_ibfk_2` FOREIGN KEY (`Escola_Codigo`) REFERENCES `Escolas` (`Escola_Codigo`);

--
-- Constraints for table `Relacao_AlunosResponsaveis`
--
ALTER TABLE `Relacao_AlunosResponsaveis`
  ADD CONSTRAINT `Relacao_AlunosResponsaveis_ibfk_1` FOREIGN KEY (`RM_Aluno`) REFERENCES `Alunos` (`RM_Aluno`),
  ADD CONSTRAINT `Relacao_AlunosResponsaveis_ibfk_2` FOREIGN KEY (`Responsavel_Filhos`) REFERENCES `Responsáveis` (`Resp_Filhos`);

--
-- Constraints for table `Relacao_ProfessorDisciplina`
--
ALTER TABLE `Relacao_ProfessorDisciplina`
  ADD CONSTRAINT `Relacao_ProfessorDisciplina_ibfk_1` FOREIGN KEY (`ID_Disciplina`) REFERENCES `Disciplinas` (`ID_Materia`),
  ADD CONSTRAINT `Relacao_ProfessorDisciplina_ibfk_2` FOREIGN KEY (`Prof_Disciplina`) REFERENCES `Relacao_ProfessorEscola` (`Prof_Disciplinas`);

--
-- Constraints for table `Relacao_ProfessorEscola`
--
ALTER TABLE `Relacao_ProfessorEscola`
  ADD CONSTRAINT `Relacao_ProfessorEscola_ibfk_1` FOREIGN KEY (`Prof_Escola`) REFERENCES `Professores` (`Prof_IDEscola`),
  ADD CONSTRAINT `Relacao_ProfessorEscola_ibfk_2` FOREIGN KEY (`Escola_Cod`) REFERENCES `Escolas` (`Escola_Codigo`),
  ADD CONSTRAINT `Relacao_ProfessorEscola_ibfk_3` FOREIGN KEY (`Prof_Turmas`) REFERENCES `Relacao_ProfessorTurma` (`Prof_Turma`),
  ADD CONSTRAINT `Relacao_ProfessorEscola_ibfk_4` FOREIGN KEY (`Prof_Disciplinas`) REFERENCES `Relacao_ProfessorDisciplina` (`Prof_Disciplina`);

--
-- Constraints for table `Relacao_ProfessorTurma`
--
ALTER TABLE `Relacao_ProfessorTurma`
  ADD CONSTRAINT `Relacao_ProfessorTurma_ibfk_1` FOREIGN KEY (`Prof_Turma`) REFERENCES `Relacao_ProfessorEscola` (`Prof_Turmas`),
  ADD CONSTRAINT `Relacao_ProfessorTurma_ibfk_2` FOREIGN KEY (`ID_Turma`) REFERENCES `Turmas` (`ID_Ano`);

--
-- Constraints for table `Responsáveis`
--
ALTER TABLE `Responsáveis`
  ADD CONSTRAINT `Responsáveis_ibfk_1` FOREIGN KEY (`RM_Responsável`) REFERENCES `Login_Resp` (`RM_Resp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Responsáveis_ibfk_2` FOREIGN KEY (`Resp_Filhos`) REFERENCES `Relacao_AlunosResponsaveis` (`Responsavel_Filhos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Secretaria`
--
ALTER TABLE `Secretaria`
  ADD CONSTRAINT `Secretaria_ibfk_1` FOREIGN KEY (`RM_Secretaria`) REFERENCES `Login_Secretaria` (`RM_Secretaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Turmas`
--
ALTER TABLE `Turmas`
  ADD CONSTRAINT `Turmas_ibfk_1` FOREIGN KEY (`Turma`) REFERENCES `Turma_Horario` (`Turma_Ano`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Turmas_ibfk_2` FOREIGN KEY (`ID_Ano`) REFERENCES `Relacao_ProfessorTurma` (`ID_Turma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
