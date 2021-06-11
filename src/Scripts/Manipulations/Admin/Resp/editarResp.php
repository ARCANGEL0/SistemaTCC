  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['edit_rm'];
$nome = $_POST['edit_nome'];
$dn = date("Ymd", strtotime($_POST['edit_dn']));
$email = $_POST['edit_email'];
$rg = $_POST['edit_rg'];
$cpf = $_POST['edit_cpf'];
$municipio = $_POST['edit_muninc'];
$telefone = $_POST['edit_telefone'];
$celular = $_POST['edit_cel'];
$endereco = $_POST['edit_endereco'];
$cep = $_POST['edit_cep'];
$numFilhos = $_POST['numFilho'];




if(isset($_POST['salvarEdicao'])){


$arrayAlunos = array(); 
// aqui cria um array para pegar todos os possiveis filhos no registro


// aqui cria um for loop que vai inserindo os varios inputs de alunos na array
 for($x=0;$x<$numFilhos;$x++){

 $arrayAlunos[] = $_POST['editarAluno'.$x];

}
// aqui vai executando os queries abaixo um por um para cada aluno
foreach($arrayAlunos as $aluno)

{



$query2= "INSERT INTO relacao_alunosresponsaveis (RM_Aluno,Responsavel_Filhos)
 VALUES ($aluno,$rm);";

 if(mysqli_query($conn,$query2)){
 	 }
 	 else {


echo mysqli_error($conn);
} 
 	}


 	 $query = "UPDATE responsáveis SET Resp_Nome ='$nome', Resp_DataDeNascimento = '$dn' , Resp_Email='$email', Resp_CPF = '$cpf',Resp_RG='$rg',Resp_CEP='$cep', Resp_Cidade='$municipio',Resp_Endereco='$endereco',  Resp_Telefone='$telefone', Resp_Celular='$celular' WHERE RM_Responsável='$rm'";


 	 if(mysqli_query($conn,$query)){
      $_SESSION['resp_atualizado'] = true;
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
