  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['edit_rm'];
$nome = $_POST['edit_nome'];
$escola = $_POST['editAlunoEscola'];
$turma = $_POST['editAlunoTurma'];
$dn = date("Ymd", strtotime($_POST['edit_dn']));
$email = $_POST['edit_email'];
$RG = $_POST['edit_rg'];
$municipio = $_POST['edit_muninc'];
$telefone = $_POST['edit_telefone'];
$endereco = $_POST['edit_endereco'];
$bairro = $_POST['edit_bairro'];
$cep = $_POST['edit_cep'];

echo $_GET['salvarEdicao'];

if(isset($_POST['salvarEdicao'])){

$query= "UPDATE alunos SET Aluno_Escola = '$escola', Aluno_Ano = '$turma', Aluno_Nome = '$nome', Aluno_RG = '$RG', Aluno_Email = '$email', Aluno_DataDeNascimento = $dn, Aluno_Telefone = '$telefone', Aluno_CEP = '$cep', Aluno_Cidade = '$municipio', Aluno_Endereco = '$endereco', Aluno_Bairro = '$bairro'WHERE RM_Aluno = $rm";

	if(mysqli_query($conn,$query)){
    $_SESSION['Aluno_atualizado'] = true;
      header("Location: ../../../../Pages/Admin/alunos.php");
    	exit();
	}
	else {

	  $_SESSION['erro_edit_Aluno'] = true;
       header("Location: ../../../../Pages/Admin/alunos.php");
     	exit();
	}mysqli_close($conn);
}	
 ?>
