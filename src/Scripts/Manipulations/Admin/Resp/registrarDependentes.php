



<?php
include('../../../Database/Connection.php');
session_start();

$alunos = $_POST['arrayAlunos'];
$numFilhos = $_POST['filhos'];
$rm = $_POST['rmresp'];


foreach($alunos as $aluno)

{


$check = "SELECT * from relacao_alunosresponsaveis WHERE RM_Aluno = '$aluno' AND Responsavel_Filhos='$rm';";
$checkQuery = mysqli_query($conn, $check);
$checkRow = mysqli_fetch_row($checkQuery);

if(!($checkRow==0))
{
	throw new Exception();
	}
$query .= "INSERT into relacao_alunosresponsaveis (RM_Aluno, Responsavel_Filhos) VALUES ( '$aluno', '$rm');";
 


}

//// fim foreach





 if(mysqli_multi_query($conn,$query)){
  return true;
   } 

   else
           {    
 throw new Exception();
   }


  mysqli_close($conn);

?>

