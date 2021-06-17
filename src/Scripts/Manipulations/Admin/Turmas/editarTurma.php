<?php
include('../../../Database/Connection.php');
session_start();

$id = $_POST['idEdit'];
$escolaid = $_POST['editEscola'];
$coordenador = $_POST['editCoord'];
$turma = $_POST['editTurma'];
echo $_GET['salvar'];

if(isset($_POST['salvar'])){

	$escolasql = "SELECT * from escolas WHERE Escola_Codigo = '$escolaid';";
	$escolaquery = mysqli_query($conn, $escolasql);
	$escolarow = mysqli_fetch_array($escolaquery);
	$escola = $escolarow['Escola_Nome'];



$query = "UPDATE `turmas` SET `Escola` = '$escola',`Prof_Coordenador` = '$coordenador', `Turma` = '$turma' WHERE `turmas`.`ID_Ano` = $id;";
$query .= "UPDATE `turma_horario` SET `Turma_Ano` = '$turma' WHERE  Turma_ID = $id; ";
$query .= "UPDATE `alunos` SET `Aluno_Ano` = '$turma', `Aluno_Escola` = '$escola', `ID_Escola` = '$escolaid' WHERE `alunos`.`ID_Turma` = $id; ";
$query .= "UPDATE `relacao_profescolas` SET `Escola_Cod` = '$escolaid' WHERE `relacao_profescolas`.`Prof_Turmas` = '$id';";



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
