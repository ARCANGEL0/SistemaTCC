



<?php
include('../../../Database/Connection.php');
session_start();

$alunos = $_POST['arrayAlunos'];
$numFilhos = $_POST['filhos'];
$rm = $_POST['rmresp'];


foreach($alunos as $aluno)

{




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

