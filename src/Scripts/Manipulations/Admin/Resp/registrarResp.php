<?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rm'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$dn = date("Y/m/d", strtotime($_POST['dn']));
$email = $_POST['email'];
$rg = $_POST['rg'];
$municipio = $_POST['municipio'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['cel'];

$codigo_escola = $_POST['codigo_escola'];

$numFilhos = $_POST['numFilhoReg'];

if(isset($_POST['registrar'])){


$arrayAlunos = array(); 
// aqui cria um array para pegar todos os possiveis filhos no registro


// aqui cria um for loop que vai inserindo os varios inputs de alunos na array
 for($x=0;$x<$numFilhos;$x++){

 $arrayAlunos[] = $_POST['registrarAluno'.$x];

}
// aqui vai executando os queries abaixo um por um para cada aluno
foreach($arrayAlunos as $aluno)

{



$query2= "INSERT INTO relacao_alunosresponsaveis (RM_Aluno,Responsavel_Filhos)
 VALUES ($aluno,$rm);";

 if(mysqli_query($conn,$query2)){
    
 	 }
 	 else {



       $_SESSION['registro_erro_filhos'] = true;

          header("Location: ../../../../Pages/Admin/responsaveis.php");
          exit();
} 
 	}


 	 $query = "INSERT INTO responsáveis (RM_Responsável,Resp_Nome,Resp_DataDeNascimento,Resp_Email,Resp_CPF,Resp_RG,Resp_CEP, Resp_Cidade,Resp_Endereco,  Resp_Telefone, Resp_Celular)
 	 VALUES (  '$rm',  '$nome','$dn',  '$email',  '$cpf',  '$rg',  '$cep','$municipio',  '$endereco','$telefone', '$celular')";

// estes são os queries para verificar se já existe algum registro com estes dados
 	 $queryRM = mysqli_query($conn,"SELECT * from responsáveis where RM_Responsável='$rm';");
 	 $queryRG = mysqli_query($conn,"SELECT * from responsáveis where Resp_RG='$rg';");
 	 $queryCPF = mysqli_query($conn,"SELECT * from responsáveis where Resp_CPF='$cpf';");
 	 $queryEmail= mysqli_query($conn,"SELECT * from responsáveis where Resp_Email='$email';");

// abaixo daqui, segue as verificações se o RM, CPF, RG ou email retornam um registro existente ou não
 	 if(mysqli_fetch_row($queryRM)>0){

 	 	  $_SESSION['registro_erro_rm'] = true;

          header("Location: ../../../../Pages/Admin/responsaveis.php");
          exit();

 	 }

	 if(mysqli_fetch_row($queryRG)>0){

 	 	  $_SESSION['registro_erro_rg'] = true;

          header("Location: ../../../../Pages/Admin/responsaveis.php");
          exit();

 	 }
 	 	 if(mysqli_fetch_row($queryCPF)>0){

 	 	  $_SESSION['registro_erro_cpf'] = true;

          header("Location: ../../../../Pages/Admin/responsaveis.php");
          exit();

 	 }
 	 	 if(mysqli_fetch_row($queryEmail)>0){

 	 	  $_SESSION['registro_erro_email'] = true;

          header("Location: ../../../../Pages/Admin/responsaveis.php");
          exit();

 	 }



 	 if(mysqli_query($conn,$query)){
      $_SESSION['resp_registrado'] = true;
    header("Location: ../../../../Pages/Admin/responsaveis.php");
      	exit();
 	 }
 	 else {

      $_SESSION['registro_erro'] = true;

          header("Location: ../../../../Pages/Admin/responsaveis.php");
          exit();
 	 }mysqli_close($conn);
}

?>
