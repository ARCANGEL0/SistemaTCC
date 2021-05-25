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

$query= "UPDATE `escolas` SET `Escola_Nome` = '$nome', `Escola_CEP` = '$cep', `Escola_Munincipio` = '$munincipio', `Escola_Endereco` = '$endereco' WHERE `escolas`.`Escola_Codigo` = $id;";
$query .="UPDATE `turmas` SET `Escola` = '$nome' WHERE ID_Escola=$id;";
$query .="UPDATE `alunos` SET `Aluno_Escola` = '$nome' WHERE ID_Escola=$id;";
$query .="UPDATE `turma_horario` SET `Turma_Escola` = '$nome' WHERE Escola_ID=$id;";

	if(mysqli_multi_query($conn,$query)){
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
