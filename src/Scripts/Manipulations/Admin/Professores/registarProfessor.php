<?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rm'];
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

if(isset($_POST['registrar'])){

	$query = "INSERT INTO Professores (RM_Prof,Prof_Nome,Prof_DataDeNascimento,Prof_Email,Prof_CPF,Prof_RG,Prof_CEP, Prof_Cidade,Prof_Endereço,Prof_Bairro,  Prof_IDEscola)
	                           VALUES (  '$rm',  '$nome','                $dn',  '$email',  '$cpf',  '$rg',  '$cep','$municipio',  '$endereco',  '$bairro','$codigo_escola')";
	if(mysqli_query($conn,$query)){
    $_SESSION['professor_registrado'] = true;
      header("Location: ../../../../Pages/Admin/professores.php");
    	exit();
	}
	else {

    $_SESSION['registro_erro'] = true;

      header("Location: ../../../../Pages/Admin/professores.php");
      exit();
	}mysqli_close($conn);
}

?>
