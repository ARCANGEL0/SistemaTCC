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

if(isset($_POST['registrar'])){

	$query = "INSERT INTO Alunos (RM_Aluno,Aluno_Ano,Aluno_Nome,Aluno_RG,Aluno_Email,Aluno_DataDeNascimento,Aluno_Telefone,Aluno_CEP,Aluno_Cidade,Aluno_Endereço,Aluno_Bairro)
	                      VALUES (   '$rm',   '$ano',   '$nome',   '$rg',   '$email',                 '$dn',   '$telefone',   '$cep','$municipio',   '$endereco',   '$bairro')";
	if(mysqli_query($conn,$query)){
    $_SESSION['aluno_registrado'] = true;
      header("Location: ../../../../Pages/Admin/alunos.php");
    	exit();
	}
	else {

    $_SESSION['registro_erro'] = true;

      header("Location: ../../../../Pages/Admin/alunos.php");
      exit();
	}mysqli_close($conn);
}

?>
