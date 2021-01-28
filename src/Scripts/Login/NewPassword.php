<?php
session_start();
include('../Database/Connection.php'); // Inclusão do arquivo para conectar ao Banco de Dados


if(empty($_POST['redefinirEmail'])) { // Verifica se o campo de usuário está vazio
	$_SESSION['campoVazio'] = true;  // Caso ele estiver vazio, redireciona para o login com a sessão semUsuario
	header('Location: ../../redefinir.php'); // Exibindo um alerta "Digite um usuário"
	exit();
}

$email = $_POST['redefinirEmail'];

$query = mysqli_query($conn, "SELECT * FROM Login_ADMIN WHERE Usuario='$usuario' AND Senha='$senha'"); // Query do SQL

 $rows = mysqli_num_rows($query); // Variável para o número de registros


  if($rows == 1){ // Se as credenciais baterem, então irá aparecer apenas 1 registro, e essa condicional testa se é verdadeiro
$_SESSION['loginAdmin'] = true; //define a sessão loginAdmin e redireciona para o painel
  header("Location: ../../Pages/Admin/home.php");
	exit();
  }
  else
  {
		$_SESSION['nao_autenticado'] = true; // Caso retorne falso, é porque não apareceu nenhum registro
		header('Location: ../../index.php'); // Logo, as credenciais estão erradas, e irá voltar ao login cm a sessão nao_autenticado
		exit();  } // Exibindo um alerta de usuario ou senha errados
  mysqli_close($conn); // Fechando conexão


 ?>
