<?php
include('../../../Database/Connection.php');
session_start();

$escolaID = $_POST['nomeEscola'];
$coordenador = $_POST['nomeCoord'];
$turma = $_POST['nomeTurma'];


if(isset($_POST['registrar'])){

	$queryBuscaNomeEscola = "SELECT * FROM escolas WHERE Escola_Codigo='$escolaID'";

	
$rsQuery = mysqli_query($conn, $queryBuscaNomeEscola) or die(mysqli_error($conn));
$rowQuery = mysqli_fetch_assoc($rsQuery);

$escola = $rowQuery['Escola_Nome']; // esses queries de cima buscam o nome da Escola com base no codigo





// Aqui é para evitar turmas já existentes

$check = "SELECT * FROM turmas WHERE Turma ='$turma'";
$queryCheck = mysqli_query($conn,$check);
$rowCheck = mysqli_fetch_array($queryCheck);



	$query = "INSERT INTO turmas (ID_Escola,Escola,Prof_Coordenador,Turma)
	VALUES ('$escolaID','$escola','$coordenador','$turma')";

if(! $rowCheck) {
	if(mysqli_query($conn,$query)){
    $_SESSION['turma_registrada'] = true;
      header("Location: ../../../../Pages/Admin/turmas.php");
    	exit();


	}
	else {

    $_SESSION['registro_erro'] = true;

      header("Location: ../../../../Pages/Admin/turmas.php");

      exit();

// echo mysqli_error($conn) ;

	}

}

else {
  $_SESSION['registro_existente'] = true;

    header("Location: ../../../../Pages/Admin/turmas.php");

    exit();

}
  mysqli_close($conn);

}



?>
