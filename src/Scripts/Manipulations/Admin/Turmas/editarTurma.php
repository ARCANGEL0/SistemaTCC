<?php
include('../../../Database/Connection.php');
session_start();

$id = $_POST['idEdit'];
$escola = $_POST['editEscola'];
$coordenador = $_POST['editCoord'];
$turma = $_POST['editTurma'];
echo $_GET['salvar'];

if(isset($_POST['salvar'])){

$query = "UPDATE `turmas` SET `Escola` = '$escola',`Prof_Coordenador` = '$coordenador', `Turma` = '$turma' WHERE `turmas`.`ID_Ano` = $id;";
$query .= "UPDATE `turma_horario` SET `Turma_Ano` = '$turma' WHERE  Turma_ID = $id; ";
$query .= "UPDATE `alunos` SET `Aluno_Ano` = '$turma' WHERE `alunos`.`ID_Turma` = $id; ";



	if(mysqli_multi_query($conn,$query)){
    $_SESSION['turma_atualizada'] = true;
      header("Location: ../../../../Pages/Admin/turmas.php");
    	exit();


	}
	else {

		$_SESSION['turma_atualizacao_erro'] = true;

			header("Location: ../../../../Pages/Admin/turmas.php");

			exit();

	}mysqli_close($conn);
}
 ?>
