<?php
include('../../../Database/Connection.php');
session_start();

$escola = $_POST['escolaEdit'];
$turma = $_POST['turmaEdit'];
$segunda1 = $_POST['Editsegunda0'];

$segunda2 = $_POST['Editsegunda1'];

$segunda3 = $_POST['Editsegunda2'];

$segunda4 = $_POST['Editsegunda3'];

$segunda5 = $_POST['Editsegunda4'];
$segunda6 = $_POST['Editsegunda5'];

$segunda7 = $_POST['Editsegunda6'];
$segunda8 = $_POST['Editsegunda7'];
$segunda9 = $_POST['Editsegunda8'];

$terca1 = $_POST['Editterca0'];

$terca2 = $_POST['Editterca1'];

$terca3 = $_POST['Editterca2'];

$terca4 = $_POST['Editterca3'];

$terca5 = $_POST['Editterca4'];
$terca6 = $_POST['Editterca5'];

$terca7 = $_POST['Editterca6'];
$terca8 = $_POST['Editterca7'];
$terca9 = $_POST['Editterca8'];

$quarta1 = $_POST['Editquarta0'];

$quarta2 = $_POST['Editquarta1'];

$quarta3 = $_POST['Editquarta2'];

$quarta4 = $_POST['Editquarta3'];

$quarta5 = $_POST['Editquarta4'];
$quarta6 = $_POST['Editquarta5'];

$quarta7 = $_POST['Editquarta6'];
$quarta8 = $_POST['Editquarta7'];
$quarta9 = $_POST['Editquarta8'];

$quinta1 = $_POST['Editquinta0'];

$quinta2 = $_POST['Editquinta1'];

$quinta3 = $_POST['Editquinta2'];

$quinta4 = $_POST['Editquinta3'];

$quinta5 = $_POST['Editquinta4'];
$quinta6 = $_POST['Editquinta5'];

$quinta7 = $_POST['Editquinta6'];
$quinta8 = $_POST['Editquinta7'];
$quinta9 = $_POST['Editquinta8'];

$sexta1 = $_POST['Editsexta0'];

$sexta2 = $_POST['Editsexta1'];

$sexta3 = $_POST['Editsexta2'];
$sexta4 = $_POST['Editsexta3'];
$sexta5 = $_POST['Editsexta4'];
$sexta6 = $_POST['Editsexta5'];
$sexta7 = $_POST['Editsexta6'];
$sexta8 = $_POST['Editsexta7'];
$sexta9 = $_POST['Editsexta8'];





if(isset($_POST['editar'])){
	$query = "UPDATE Turma_Horario SET Horario_Segunda = '$segunda1', Horario_Terça = '$terca1',
	Horario_Quarta = '$quarta1', Horario_Quinta = '$quinta1', Horario_Sexta = '$sexta1' WHERE Turma_Ano = '$turma' AND Turma_Horario = '8 às 9';";

	$query .=  "UPDATE Turma_Horario SET Horario_Segunda = '$segunda2', Horario_Terça = '$terca2',
	Horario_Quarta = '$quarta2', Horario_Quinta = '$quinta2', Horario_Sexta = '$sexta2' WHERE Turma_Ano = '$turma' AND Turma_Horario = '9 às 10';";

	$query .=  "UPDATE Turma_Horario SET Horario_Segunda = '$segunda3', Horario_Terça = '$terca3',
	Horario_Quarta = '$quarta3', Horario_Quinta = '$quinta3', Horario_Sexta = '$sexta3' WHERE Turma_Ano = '$turma' AND Turma_Horario = '10 às 11';";

	$query .=  "UPDATE Turma_Horario SET Horario_Segunda = '$segunda4', Horario_Terça = '$terca4',
	Horario_Quarta = '$quarta4', Horario_Quinta = '$quinta4', Horario_Sexta = '$sexta4' WHERE Turma_Ano = '$turma' AND Turma_Horario = '11 às 12';";

	$query .=  "UPDATE Turma_Horario SET Horario_Segunda = '$segunda5', Horario_Terça = '$terca5',
	Horario_Quarta = '$quarta5', Horario_Quinta = '$quinta5', Horario_Sexta = '$sexta5' WHERE Turma_Ano = '$turma' AND Turma_Horario = '13 às 14';";

	$query .=  "UPDATE Turma_Horario SET Horario_Segunda = '$segunda6', Horario_Terça = '$terca6',
	Horario_Quarta = '$quarta6', Horario_Quinta = '$quinta6', Horario_Sexta = '$sexta6' WHERE Turma_Ano = '$turma' AND Turma_Horario = '14 às 15';";

	$query .=  "UPDATE Turma_Horario SET Horario_Segunda = '$segunda7', Horario_Terça = '$terca7',
	Horario_Quarta = '$quarta7', Horario_Quinta = '$quinta7', Horario_Sexta = '$sexta7' WHERE Turma_Ano = '$turma' AND Turma_Horario = '15 às 16';";



	$query .=  "UPDATE Turma_Horario SET Horario_Segunda = '$segunda8', Horario_Terça = '$terca8',
	Horario_Quarta = '$quarta8', Horario_Quinta = '$quinta8', Horario_Sexta = '$sexta8' WHERE Turma_Horario = '16 às 17';";

	$query .=  "UPDATE Turma_Horario SET Horario_Segunda = '$segunda9', Horario_Terça = '$terca9',
	Horario_Quarta = '$quarta9', Horario_Quinta = '$quinta9', Horario_Sexta = '$sexta9' WHERE Turma_Horario = '17 às 18';";



if(mysqli_multi_query($conn,$query)){
$_SESSION['horario_atualizado'] = true;
  header("Location: ../../../../Pages/Admin/horarios.php");
  exit();
}
else{

 $_SESSION['horario_edit_erro'] = true;
   header("Location: ../../../../Pages/Admin/horarios.php");
   exit();
}
	mysqli_close($conn);
}



?>
