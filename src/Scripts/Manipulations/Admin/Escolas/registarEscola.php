<?php
include('../../../Database/Connection.php');
session_start();

$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];
$munincipio = $_POST['munincipio'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];



if(isset($_POST['registrar'])){

	$query = "INSERT INTO escolas (Escola_CNPJ,Escola_Nome,Escola_CEP,Escola_Munincipio,Escola_Endereco)
	VALUES ('$cnpj','$nome','$cep','$munincipio','$endereco')";
	if(mysqli_query($conn,$query)){
    $_SESSION['escola_registrada'] = true;
      header("Location: ../../../../Pages/Admin/escolas.php");
    	exit();


	}
	else {

    $_SESSION['registro_erro'] = true;

      header("Location: ../../../../Pages/Admin/escolas.php");

      exit();


	}mysqli_close($conn);
}



?>
