<?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rmprof'];
$escola = $_POST['escolaid'];
$turma = $_POST['turmaid'];
$materia = $_POST['materia'];


 $query = "DELETE from relacao_profescolas where RM_Prof = '$rm' AND Escola_Cod = '$escola' AND Prof_Turmas = '$turma' AND Matéria = '". $materia. "';";
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
