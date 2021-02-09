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
$codescola = $_POST['edit_codEscola'];
$codturma = $_POST['edit_codTurma'];
echo $_GET['salvarEdicao'];

if(isset($_POST['salvarEdicao'])){

$query= "UPDATE Alunos SET Aluno_Escola = '$escola', Aluno_Ano = '$turma', Aluno_Nome = '$nome', Aluno_RG = '$RG', Aluno_Email = '$email', Aluno_DataDeNascimento = $dn, Aluno_Telefone = '$telefone', Aluno_CEP = '$cep', Aluno_Cidade = '$municipio', Aluno_Endereço = '$endereco', Aluno_Bairro = '$bairro', ID_Escola = '$codescola', ID_Turma = '$codturma' WHERE RM_Aluno = $rm";

	if(mysqli_query($conn,$query)){
    $_SESSION['Aluno_atualizado'] = true;
      header("Location: ../../../../Pages/Admin/alunos.php");
    	exit();
	}
	else {

	echo $rm ;
	echo "<br>";
echo $nome  ;
	echo "<br>";
echo $escola ;
	echo "<br>";
echo $turma  ;
	echo "<br>";
echo $dn ;
	echo "<br>";
echo $email; 
	echo "<br>";
echo $RG ;
	echo "<br>";
echo $municipio ;
	echo "<br>";
echo $telefone  ;
	echo "<br>";
echo $endereco  ;
	echo "<br>";
echo $bairro ;
	echo "<br>";
echo $cep  ;
	echo "<br>";
echo $codescola; 
	echo "<br>";
echo $codturma ;
	echo "<br>";
	echo "<br>";
	echo "<br>";
			echo mysqli_error($conn);
	}mysqli_close($conn);
}	
 ?>
