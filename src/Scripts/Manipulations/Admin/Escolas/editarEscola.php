<?php
include('../../../Database/Connection.php');
session_start();

$id = $_POST['idEdit'];

$cnpj = $_POST['cnpjEdit'];
$nome = $_POST['nomeEdit'];
$munincipio = $_POST['munincipioEdit'];
$endereco = $_POST['enderecoEdit'];
$cep = $_POST['cepEdit'];


echo $_GET['salvar'];

if(isset($_POST['salvar'])){

$query= "UPDATE `Escolas` SET `Escola_Nome` = '$nome', `Escola_CEP` = '$cep', `Escola_Munincipio` = '$munincipio', `Escola_Endereco` = '$endereco' WHERE `Escolas`.`Escola_Codigo` = $id";

	if(mysqli_query($conn,$query)){
    $_SESSION['escola_atualizada'] = true;
      header("Location: ../../../../Pages/Admin/escolas.php");
    	exit();


	}
	else {

		$_SESSION['escola_atualizacao_erro'] = true;

			header("Location: ../../../../Pages/Admin/escolas.php");

			exit();

	}mysqli_close($conn);
}
 ?>