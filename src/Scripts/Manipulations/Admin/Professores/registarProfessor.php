<?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rm'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$dn = date("Y/m/d", strtotime($_POST['dn']));
$email = $_POST['email'];
$cel = $_POST['celular'];
$rg = $_POST['rg'];
$municipio = $_POST['municipio'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$codigo_escola = $_POST['codigo_escola'];

if(isset($_POST['registrar'])){

	$query = "INSERT INTO professores (RM_Prof,Prof_Nome,Prof_Celular,Prof_DataDeNascimento,Prof_Email,Prof_CPF,Prof_RG,Prof_CEP, Prof_Cidade,Prof_Endereco,Prof_Bairro)
	                           VALUES (  '$rm',  '$nome','$celular','$dn',  '$email',  '$cpf',  '$rg',  '$cep','$municipio',  '$endereco',  '$bairro')";
	if(mysqli_query($conn,$query)){
    $_SESSION['prof_registrado'] = true;
      header("Location: ../../../../Pages/Admin/professores.php");
    	exit();
	}
	else {

		echo mysqli_error($conn);

  /*  $_SESSION['registro_erro'] = true;

      header("Location: ../../../../Pages/Admin/professores.php");
      exit();
	
*/
	}mysqli_close($conn);
}

?>
