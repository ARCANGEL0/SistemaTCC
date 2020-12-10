<?php
include('../../../Database/Connection.php');
session_start();

$escola = $_POST['nomeEscola'];
$coordenador = $_POST['nomeCoord'];
$turma = $_POST['nomeTurma'];


if(isset($_POST['registrar'])){

	$query = "INSERT INTO Turmas (Escola,Prof_Coordenador,Turma)
	VALUES ('$escola','$coordenador','$turma')";
	if(mysqli_query($conn,$query)){
    $_SESSION['turma_registrada'] = true;
      header("Location: ../../../../Pages/Admin/turmas.php");
    	exit();


	}
	else {

    $_SESSION['registro_erro'] = true;

      header("Location: ../../../../Pages/Admin/turmas.php");

      exit();


	}mysqli_close($conn);
}



?>
