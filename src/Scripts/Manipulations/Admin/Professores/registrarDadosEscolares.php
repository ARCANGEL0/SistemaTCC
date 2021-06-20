



<?php
include('../../../Database/Connection.php');
session_start();


$rm = $_POST['profrm'];
$numEscolas = $_POST['index'];
$arrayEscolas = $_POST['arrayEscolas'];
$arrayTurmas = $_POST['arrayTurmas'];
$arrayMateria = $_POST['arrayMaterias'];

for($x=0;$x<$numEscolas;$x++){





$check = "SELECT * from relacao_profescolas WHERE  Escola_Cod='$arrayEscolas[$x]' AND Matéria = '$arrayMateria[$x]' AND Prof_Turmas='$arrayTurmas[$x]';";
$checkQuery = mysqli_query($conn, $check);
$checkRow = mysqli_fetch_row($checkQuery);

if(!($checkRow==0))
{
throw new Exception();
}



$queryTurma = "INSERT into relacao_profescolas (RM_Prof, Escola_Cod, Matéria, Prof_Turmas)
VALUES ('$rm','$arrayEscolas[$x]','$arrayMateria[$x]','$arrayTurmas[$x]');";

if(mysqli_query($conn,$queryTurma)){

 }
 else {
	 throw new Exception();
 }


}


  mysqli_close($conn);

?>
