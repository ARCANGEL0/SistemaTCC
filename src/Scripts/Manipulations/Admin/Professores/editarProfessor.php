<?php
include('../../../Database/Connection.php');
session_start();

$id = $_POST['idEdit'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$dn = date("Y/m/d", strtotime($_POST['dn']));
$email = $_POST['email'];
$rg = $_POST['rg'];
$municipio = $_POST['municipio'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$codigo_escola = $_POST['codigo_escola'];

echo $_GET['salvar'];

if(isset($_POST['salvar'])){

$query= "UPDATE professores SET Prof_CPF = '$cpf', Prof_Nome = '$nome', Prof_DataDeNascimento = '$nd', Prof_Email = '$email', Prof_RG = '$rg',Prof_Cidade = '$municipio',Prof_Endereço = '$endereco',Prof_Bairro = '$bairro',Prof_CEP = '$cep',Prof_IDEscola = '$codigo_escola' WHERE RM_Prof = $id";

	if(mysqli_query($conn,$query)){
    $_SESSION['professor_atualizado'] = true;
      header("Location: ../../../../Pages/Admin/professores.php");
    	exit();
	}
	else {

  echo mysqli_error($conn);


	}mysqli_close($conn);
}
 ?>
