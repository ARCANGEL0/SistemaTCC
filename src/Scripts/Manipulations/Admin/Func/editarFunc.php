  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['edit_rm'];
$dn = date("Y/m/d", strtotime($_POST['edit_dn']));
$escola = $_POST['edit_escola'];
$nome = $_POST['edit_nome'];
$email = $_POST['edit_email'];
$cpf = $_POST['edit_cpf'];
$rg = $_POST['edit_rg'];
$municipio = $_POST['edit_muninc'];
$endereco = $_POST['edit_endereco'];
$bairro = $_POST['edit_bairro'];
$cep = $_POST['edit_cep'];
$telefone = $_POST['edit_telefone'];
$celular = $_POST['edit_celular'];

if(isset($_POST['salvar'])){

$query= "UPDATE secretaria SET Sec_Escola='$escola',Sec_Nome='$nome',Sec_DataDeNascimento='$dn',Sec_Email='$email',Sec_Telefone='$telefone',Sec_Celular='$celular',Sec_CPF='$cpf',Sec_RG='$rg',Sec_Cidade='$municipio',Sec_Endereço='$endereco',Sec_Bairro='$bairro' WHERE RM_Secretaria = $rm";

	if(mysqli_query($conn,$query)){


    $_SESSION['func_atualizado'] = true;
      header("Location: ../../../../Pages/Admin/funcionarios.php");
      exit();
  }
	else {

    $_SESSION['erro_edit_func'] = true;
      header("Location: ../../../../Pages/Admin/funcionarios.php");
      exit();

	}mysqli_close($conn);
}	
 ?>
