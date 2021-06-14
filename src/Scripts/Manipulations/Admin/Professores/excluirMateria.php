<?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rmprof'];
$turma = $_POST['turmaprof'];
$materia = $_POST['materiaprof'];


 	$query = "DELETE from relacao_profescolas
where RM_Prof = '$rm' AND Matéria = '".$materia."' AND Prof_Turmas = '$turma';";
 	if(mysqli_query($conn,$query)){

     	return TRUE;

     }
 	else {

        throw new Exception();

   /*  $_SESSION['registro_erro'] = true;

       header("Location: ../../../../Pages/Admin/professores.php");
       exit();

 */
 	}mysqli_close($conn);

?>
