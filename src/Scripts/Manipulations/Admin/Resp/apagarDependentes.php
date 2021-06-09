<?php
include('../../../Database/Connection.php');
session_start();

$rmResp = $_POST['rmresp'];
$rmAluno = $_POST['rmaluno'];



 	$query = "delete from relacao_alunosresponsaveis where RM_Aluno = '$rmAluno' && relacao_alunosresponsaveis.Responsavel_Filhos = '$rmResp';
";
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
