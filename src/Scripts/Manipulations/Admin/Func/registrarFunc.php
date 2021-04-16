  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rm'];
$dn = date("Y/m/d", strtotime($_POST['dn']));
$escola = $_POST['funcEscola'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$municipio = $_POST['municipio'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['tel'];
$celular = $_POST['cel'];

if(isset($_POST['registrar'])){

	$query = "INSERT INTO secretaria (RM_Secretaria,Sec_Escola,Sec_Nome,Sec_DataDeNascimento,Sec_Email,Sec_Telefone,Sec_Celular,Sec_CPF,Sec_RG,Sec_CEP,Sec_Cidade,Sec_Endereço,Sec_Bairro)
	                      VALUES (   '$rm','$escola' ,  '$nome',   '$dn',   '$email',   '$telefone',                 '$celular',   '$cpf',   '$rg','$cep',   '$municipio',   '$endereco', '$bairro')";
	if(mysqli_query($conn,$query)){
    $_SESSION['func_registrado'] = true;
      header("Location: ../../../../Pages/Admin/funcionarios.php");
    	exit();
	}
	else {

 echo mysqli_error($conn);

//    	echo mysqli_error($conn);
    		}mysqli_close($conn);
}

?>
