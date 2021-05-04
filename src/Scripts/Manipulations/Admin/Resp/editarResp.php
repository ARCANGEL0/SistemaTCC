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
$numFilhos = $_POST['numFilho'];




if(isset($_POST['salvarEdicao'])){

echo 'test<br><br>';

echo $rm . "<br><br>";
echo $nome. "<br><br>";
echo $dn. "<br><br>";
echo $email. "<br><br>";
echo $rg. "<br><br>";
echo  "<br><br>";

echo "Número de filhos:  ". $numFilhos . "<br><br>";
echo $_POST['editarAlunoEscola']. "<br><br>";
echo $_POST['editarAlunoTurma']. "<br><br>";
echo $_POST['editarAluno']. "<br><br>";

for($x=0;$x<$numFilhos;$x++){
  echo $_POST['editarAlunoEscola'.$x]. "<br><br>";
echo $_POST['editarAlunoTurma'.$x]. "<br><br>";
echo $_POST['editarAluno'.$x]. "<br><br>";


}






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
