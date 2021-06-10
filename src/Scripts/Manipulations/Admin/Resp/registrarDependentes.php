<?php
include('../../../Database/Connection.php');
session_start();

$alunos = $_POST['arrayAlunos'];
$numFilhos = $_POST['filhos'];
$rm = $_POST['rmresp'];


foreach($alunos as $aluno)

{

$check .= "SELECT * FROM relacao_alunosresponsaveis WHERE RM_Aluno ='$aluno' AND Responsavel_Filhos='$rm';";



$query .= "INSERT into relacao_alunosresponsaveis (RM_Aluno, Responsavel_Filhos) VALUES ( '$aluno', '$rm');";
 


}

//// fim foreach


$queryCheck = mysqli_multi_query($conn,$check);
$rowCheck = mysqli_fetch_array($queryCheck);


if(! $rowCheck) {
 if(mysqli_multi_query($conn,$query)){
  return true;
   } 

   else
           {    
           throw new Exception();
              }

} else 
{

             throw new Exception();

}

?>



<?php
include('../../../Database/Connection.php');
session_start();

$alunos = $_POST['arrayAlunos'];
$numFilhos = $_POST['filhos'];
$rm = $_POST['rmresp'];


foreach($alunos as $aluno)

{




$query .= "INSERT into relacao_alunosresponsaveis (RM_Aluno, Responsavel_Filhos) VALUES ( '$aluno', '$rm');  ";
 


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

