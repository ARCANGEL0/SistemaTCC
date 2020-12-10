<?php
include('../../../Database/Connection.php');
session_start();

$id = $_POST['idEdit'];
$escola = $_POST['editEscola'];
$coordenador = $_POST['editCoord'];
$turma = $_POST['editTurma'];

echo $_GET['salvar'];

if(isset($_POST['salvar'])){

$query= "UPDATE `Turmas` SET `Escola` = '$escola',`Prof_Coordenador` = '$coordenador', `Turma` = '$turma' WHERE `Turmas`.`ID_Ano` = $id";

	if(mysqli_query($conn,$query)){
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
