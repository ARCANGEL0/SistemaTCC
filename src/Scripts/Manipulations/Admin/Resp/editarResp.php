  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['edit_rm'];
$nome = $_POST['edit_nome'];
$dn = date("Ymd", strtotime($_POST['edit_dn']));
$email = $_POST['edit_email'];
$RG = $_POST['edit_rg'];
$cpf = $_POST['edit_cpf'];
$municipio = $_POST['edit_muninc'];
$telefone = $_POST['edit_telefone'];
$celular = $_POST['edit_cel'];
$endereco = $_POST['edit_endereco'];
$cep = $_POST['edit_cep'];



$aluno = $_POST['editarAluno'];

if(isset($_POST['salvarEdicao'])){


echo $aluno;



// $query= "UPDATE responsáveis SET Resp_Nome = '$nome', Resp_Email = '$email', Resp_DataDeNascimento = '$dn', Resp_RG = '$RG', Resp_CPF = '$cpf', Resp_Telefone = '$telefone', Resp_Celular = '$celular',  Resp_CEP = '$cep', Resp_Cidade = '$municipio', Resp_Endereco ='$endereco' WHERE RM_Responsável = $rm";

// 	if(mysqli_query($conn,$query)){
//     $_SESSION['resp_atualizado'] = true;
//       header("Location: ../../../../Pages/Admin/responsaveis.php");
//     	exit();
// 	}
// 	else {

//     $_SESSION['resp_erro_atualizacao'] = true;
//       header("Location: ../../../../Pages/Admin/responsaveis.php");
//     	exit();
	
// 	}mysqli_close($conn);
}	
 ?>
