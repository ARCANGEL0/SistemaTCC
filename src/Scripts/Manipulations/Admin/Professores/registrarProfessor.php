<?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rm'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$dn = date("Y/m/d", strtotime($_POST['dn']));
$email = $_POST['email'];
$cel = $_POST['celular'];
$tel = $_POST['telefone'];

$rg = $_POST['rg'];
$municipio = $_POST['municipio'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$numEscolas = $_POST['numEscolas'];


if(isset($_POST['registrar'])){


$arrayEscolas = array();
$arrayTurmas = array();
$arrayMateria = array();


 for($x=0;$x<$numEscolas;$x++){


 $arrayEscolas[] = $_POST['registrarProfEscola'.$x];
 $arrayTurmas[] = $_POST['registrarProfTurma'.$x];
 $arrayMateria[] = $_POST['registrarProfMateria'.$x];


 $check = "SELECT * from relacao_profescolas WHERE Escola_Cod='$arrayEscolas[$x]' AND Matéria = '". $arrayMateria[$x]. "' AND Prof_Turmas='$arrayTurmas[$x]';";
$checkQuery = mysqli_query($conn, $check);
$checkRow = mysqli_fetch_row($checkQuery);

if(!($checkRow==0))
{
      $_SESSION['registro_duplicado'] = true;

          header("Location: ../../../../Pages/Admin/professores.php");
          exit();

  }





$queryTurma = "INSERT into relacao_profescolas (RM_Prof, Escola_Cod, Matéria, Prof_Turmas)
VALUES ('$rm','$arrayEscolas[$x]','$arrayMateria[$x]','$arrayTurmas[$x]');";

if(!mysqli_query($conn,$queryTurma)){

    $_SESSION['registro_erro_escolas'] = true;

      header("Location: ../../../../Pages/Admin/professores.php");
      exit();


	}


}






 $checkRM = "SELECT * from professores WHERE RM_Prof = '$rm';";
$queryRM = mysqli_query($conn, $checkRM);
$rowRM = mysqli_fetch_row($queryRM);

if(!($rowRM==0))
{
      $_SESSION['registro_erro'] = true;

          header("Location: ../../../../Pages/Admin/professores.php");
          exit();

  }



	$query = "INSERT INTO professores (RM_Prof,Prof_Nome,Prof_Telefone,Prof_Celular,Prof_DataDeNascimento,Prof_Email,Prof_CPF,Prof_RG,Prof_CEP, Prof_Cidade,Prof_Endereco,Prof_Bairro)
	 VALUES (  '$rm',  '$nome','$tel','$cel','$dn',  '$email',  '$cpf',  '$rg',  '$cep','$municipio',  '$endereco',  '$bairro')";
	if(mysqli_query($conn,$query)){
    $_SESSION['prof_registrado'] = true;
      header("Location: ../../../../Pages/Admin/professores.php");
    	exit();
	}
	else {

		// echo mysqli_error($conn);

    $_SESSION['registro_erro'] = true;

      header("Location: ../../../../Pages/Admin/professores.php");
      exit();


	}

	mysqli_close($conn);
}

?>
