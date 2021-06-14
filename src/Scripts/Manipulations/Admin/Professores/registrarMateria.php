



<?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rmprof'];
$escola = $_POST['escolaprof'];
$turma = $_POST['turmaprof'];
$materia = $_POST['materiaprof'];



$check = "SELECT * from relacao_profescolas WHERE RM_Prof = '$rm' AND Escola_Cod = '$escola' AND Matéria = '".$materia."' AND Prof_Turmas = '$turma';";

$checkQuery = mysqli_query($conn, $check);
$checkRow = mysqli_fetch_row($checkQuery);

if(!($checkRow==0))
{
	throw new Exception();
	}


$query = "INSERT into relacao_profescolas (RM_Prof, Escola_Cod, Matéria, Prof_Turmas) VALUES ( '$rm', '$escola','$materia','$turma');";








 if(mysqli_query($conn,$query)){
  return true;
   }

   else
           {
 throw new Exception();
   }


  mysqli_close($conn);

?>
