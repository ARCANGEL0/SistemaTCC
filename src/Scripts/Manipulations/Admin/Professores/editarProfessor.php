<?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['edit_rm'];
$cpf = $_POST['edit_cpf'];
$nome = $_POST['edit_nome'];
$dn = date("Y/m/d", strtotime($_POST['edit_dn']));
$email = $_POST['edit_email'];
$rg = $_POST['edit_rg'];
$municipio = $_POST['edit_muninc'];
$endereco = $_POST['edit_endereco'];
$bairro = $_POST['edit_bairro'];
$cep = $_POST['edit_cep'];
$codigo_escola = $_POST['edit_codEscola'];

echo $_GET['salvar'];

if(isset($_POST['salvar'])){

$query= "UPDATE Professores SET Prof_CPF = '$cpf', Prof_Nome = '$nome', Prof_DataDeNascimento = '$dn', Prof_Email = '$email', Prof_RG = '$rg',Prof_Cidade = '$municipio',Prof_Endereço = '$endereco',Prof_Bairro = '$bairro',Prof_CEP = '$cep',Prof_IDEscola = '$codigo_escola' WHERE RM_Prof = $rm";

	if(mysqli_query($conn,$query)){
    $_SESSION['prof_atualizado'] = true;
      header("Location: ../../../../Pages/Admin/professores.php");
    	exit();
	}
	else {
		$_SESSION['erro_edit_prof'] = true;

			header("Location: ../../../../Pages/Admin/professores.php");
			exit();

	}mysqli_close($conn);
}
 ?>