  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['edit_rm'];
$RG = $_POST['edit_rg'];
$nome = $_POST['edit_nome'];
$dn = date("Y/m/d", strtotime($_POST['edit_dn']));
$email = $_POST['edit_email'];
$municipio = $_POST['edit_municipio'];
$endereco = $_POST['edit_endereco'];
$bairro = $_POST['edit_bairro'];
$cep = $_POST['edit_cep'];
$ano = $_POST['edit_ano'];
$telefone = $_POST['edit_telefone'];

echo $_GET['salvar'];

if(isset($_POST['salvar'])){

$query= "UPDATE Alunos SET Aluno_RG = '$RG', Aluno_Nome = '$nome', Aluno_DataDeNascimento = '$dn', Aluno_Email = '$email',Aluno_Cidade = '$municipio',Aluno_Endereço = '$endereco',Aluno_Bairro = '$bairro',Aluno_CEP = '$cep', Aluno_Ano = '$ano', Aluno_Telefone = '$telefone', WHERE RM_Aluno = $rm";

	if(mysqli_query($conn,$query)){
    $_SESSION['aluno_atualizado'] = true;
      header("Location: ../../../../Pages/Admin/alunos.php");
    	exit();
	}
	else {
		$_SESSION['erro_edit_aluno'] = true;

			header("Location: ../../../../Pages/Admin/alunos.php");
			exit();

	}mysqli_close($conn);
}
 ?>
