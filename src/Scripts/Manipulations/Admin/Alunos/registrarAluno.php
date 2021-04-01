  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rm'];
$escola = $_POST['createAlunoEscola'];
$turma = $_POST['createAlunoTurma'];
$dn = date("Y/m/d", strtotime($_POST['dn']));
$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$municipio = $_POST['municipio'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$idescola = $_POST['codigoescola'];
$idturma = $_POST['codigoturma'];

if(isset($_POST['registrar'])){

	$query = "INSERT INTO alunos (RM_Aluno,Aluno_Escola,Aluno_Ano,Aluno_Nome,Aluno_RG,Aluno_Email,Aluno_DataDeNascimento,Aluno_Telefone,Aluno_CEP,Aluno_Cidade,Aluno_Endereço,Aluno_Bairro,ID_Escola,ID_Turma)
	                      VALUES (   '$rm','$escola' ,  '$turma',   '$nome',   '$rg',   '$email',                 '$dn',   '$telefone',   '$cep','$municipio',   '$endereco',   '$bairro', '$idescola','$idturma')";
	if(mysqli_query($conn,$query)){
    $_SESSION['Aluno_registrado'] = true;
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
