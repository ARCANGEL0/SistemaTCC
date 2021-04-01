<?php
include('../../../Database/Connection.php');


if(isset($_POST['turmaNome'])){
   $turma = mysqli_real_escape_string($conn,$_POST['turmaNome']); // department id
} // Verifica se select mudou

$array = array();


// Segunda 
$sqlS0= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='8 às 9'";
$resultS0 = mysqli_query($conn,$sqlS0);
$rowS0 = mysqli_fetch_row($resultS0);

$sqlS1= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='9 às 10'";
$resultS1 = mysqli_query($conn,$sqlS1);
$rowS1 = mysqli_fetch_row($resultS1);

$sqlS2= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='10 às 11'";
$resultS2 = mysqli_query($conn,$sqlS2);
$rowS2 = mysqli_fetch_row($resultS2);

$sqlS3= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='11 às 12'";
$resultS3 = mysqli_query($conn,$sqlS3);
$rowS3 = mysqli_fetch_row($resultS3);

$sqlS4= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='13 às 14'";
$resultS4 = mysqli_query($conn,$sqlS4);
$rowS4 = mysqli_fetch_row($resultS4);

$sqlS5= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='14 às 15'";
$resultS5 = mysqli_query($conn,$sqlS5);
$rowS5 = mysqli_fetch_row($resultS5);

$sqlS6= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='15 às 16'";
$resultS6 = mysqli_query($conn,$sqlS6);
$rowS6 = mysqli_fetch_row($resultS6);

$sqlS7= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='16 às 17'";
$resultS7 = mysqli_query($conn,$sqlS7);
$rowS7 = mysqli_fetch_row($resultS7);

$sqlS8= "SELECT Horario_Segunda FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='17 às 18'";
$resultS8 = mysqli_query($conn,$sqlS8);
$rowS8 = mysqli_fetch_row($resultS8);


// Terça
$sqlTer0= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='8 às 9'";
$resultTer0 = mysqli_query($conn,$sqlTer0);
$rowTer0 = mysqli_fetch_row($resultTer0);

$sqlTer1= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='9 às 10'";
$resultTer1 = mysqli_query($conn,$sqlTer1);
$rowTer1 = mysqli_fetch_row($resultTer1);

$sqlTer2= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='10 às 11'";
$resultTer2 = mysqli_query($conn,$sqlTer2);
$rowTer2 = mysqli_fetch_row($resultTer2);

$sqlTer3= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='11 às 12'";
$resultTer3 = mysqli_query($conn,$sqlTer3);
$rowTer3 = mysqli_fetch_row($resultTer3);

$sqlTer4= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='13 às 14'";
$resultTer4 = mysqli_query($conn,$sqlTer4);
$rowTer4 = mysqli_fetch_row($resultTer4);

$sqlTer5= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='14 às 15'";
$resultTer5 = mysqli_query($conn,$sqlTer5);
$rowTer5 = mysqli_fetch_row($resultTer5);

$sqlTer6= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='15 às 16'";
$resultTer6 = mysqli_query($conn,$sqlTer6);
$rowTer6 = mysqli_fetch_row($resultTer6);

$sqlTer7= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='16 às 17'";
$resultTer7 = mysqli_query($conn,$sqlTer7);
$rowTer7 = mysqli_fetch_row($resultTer7);

$sqlTer8= "SELECT Horario_Terça FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='17 às 18'";
$resultTer8 = mysqli_query($conn,$sqlTer8);
$rowTer8 = mysqli_fetch_row($resultTer8);

// Quarta
$sqlQua0= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='8 às 9'";
$resultQua0 = mysqli_query($conn,$sqlQua0);
$rowQua0 = mysqli_fetch_row($resultQua0);

$sqlQua1= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='9 às 10'";
$resultQua1 = mysqli_query($conn,$sqlQua1);
$rowQua1 = mysqli_fetch_row($resultQua1);

$sqlQua2= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='10 às 11'";
$resultQua2 = mysqli_query($conn,$sqlQua2);
$rowQua2 = mysqli_fetch_row($resultQua2);

$sqlQua3= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='11 às 12'";
$resultQua3 = mysqli_query($conn,$sqlQua3);
$rowQua3 = mysqli_fetch_row($resultQua3);

$sqlQua4= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='13 às 14'";
$resultQua4 = mysqli_query($conn,$sqlQua4);
$rowQua4 = mysqli_fetch_row($resultQua4);

$sqlQua5= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='14 às 15'";
$resultQua5 = mysqli_query($conn,$sqlQua5);
$rowQua5 = mysqli_fetch_row($resultQua5);

$sqlQua6= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='15 às 16'";
$resultQua6 = mysqli_query($conn,$sqlQua6);
$rowQua6 = mysqli_fetch_row($resultQua6);

$sqlQua7= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='16 às 17'";
$resultQua7 = mysqli_query($conn,$sqlQua7);
$rowQua7 = mysqli_fetch_row($resultQua7);

$sqlQua8= "SELECT Horario_Quarta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='17 às 18'";
$resultQua8 = mysqli_query($conn,$sqlQua8);
$rowQua8 = mysqli_fetch_row($resultQua8);

// Quinta
$sqlQui0= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='8 às 9'";
$resultQui0 = mysqli_query($conn,$sqlQui0);
$rowQui0 = mysqli_fetch_row($resultQui0);

$sqlQui1= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='9 às 10'";
$resultQui1 = mysqli_query($conn,$sqlQui1);
$rowQui1 = mysqli_fetch_row($resultQui1);

$sqlQui2= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='10 às 11'";
$resultQui2 = mysqli_query($conn,$sqlQui2);
$rowQui2 = mysqli_fetch_row($resultQui2);

$sqlQui3= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='11 às 12'";
$resultQui3 = mysqli_query($conn,$sqlQui3);
$rowQui3 = mysqli_fetch_row($resultQui3);

$sqlQui4= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='13 às 14'";
$resultQui4 = mysqli_query($conn,$sqlQui4);
$rowQui4 = mysqli_fetch_row($resultQui4);

$sqlQui5= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='14 às 15'";
$resultQui5 = mysqli_query($conn,$sqlQui5);
$rowQui5 = mysqli_fetch_row($resultQui5);

$sqlQui6= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='15 às 16'";
$resultQui6 = mysqli_query($conn,$sqlQui6);
$rowQui6 = mysqli_fetch_row($resultQui6);

$sqlQui7= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='16 às 17'";
$resultQui7 = mysqli_query($conn,$sqlQui7);
$rowQui7 = mysqli_fetch_row($resultQui7);

$sqlQui8= "SELECT Horario_Quinta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='17 às 18'";
$resultQui8 = mysqli_query($conn,$sqlQui8);
$rowQui8 = mysqli_fetch_row($resultQui8);


// Sexta


$sqlSex0= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='8 às 9'";
$resultSex0 = mysqli_query($conn,$sqlSex0);
$rowSex0 = mysqli_fetch_row($resultSex0);

$sqlSex1= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='9 às 10'";
$resultSex1 = mysqli_query($conn,$sqlSex1);
$rowSex1 = mysqli_fetch_row($resultSex1);

$sqlSex2= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='10 às 11'";
$resultSex2 = mysqli_query($conn,$sqlSex2);
$rowSex2 = mysqli_fetch_row($resultSex2);

$sqlSex3= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='11 às 12'";
$resultSex3 = mysqli_query($conn,$sqlSex3);
$rowSex3 = mysqli_fetch_row($resultSex3);

$sqlSex4= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='13 às 14'";
$resultSex4 = mysqli_query($conn,$sqlSex4);
$rowSex4 = mysqli_fetch_row($resultSex4);

$sqlSex5= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='14 às 15'";
$resultSex5 = mysqli_query($conn,$sqlSex5);
$rowSex5 = mysqli_fetch_row($resultSex5);

$sqlSex6= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='15 às 16'";
$resultSex6 = mysqli_query($conn,$sqlSex6);
$rowSex6 = mysqli_fetch_row($resultSex6);

$sqlSex7= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='16 às 17'";
$resultSex7 = mysqli_query($conn,$sqlSex7);
$rowSex7 = mysqli_fetch_row($resultSex7);

$sqlSex8= "SELECT Horario_Sexta FROM turma_horario WHERE Turma_Ano='$turma' && Turma_Horario='17 às 18'";
$resultSex8 = mysqli_query($conn,$sqlSex8);
$rowSex8 = mysqli_fetch_row($resultSex8);

// Aqui ele insere cada horario de cada dia em uma array
        $array = array(
        	"segunda0" => $rowS0,
        	"segunda1" => $rowS1,
        	"segunda2" => $rowS2,
        	"segunda3" => $rowS3,
        	"segunda4" => $rowS4,
        	"segunda5" => $rowS5,
        	"segunda6" => $rowS6,
        	"segunda7" => $rowS7,
        	"segunda8" => $rowS8,
        	"terca0" => $rowTer0,
        	"terca1" => $rowTer1,
        	"terca2" => $rowTer2,
        	"terca3" => $rowTer3,
        	"terca4" => $rowTer4,
        	"terca5" => $rowTer5,
        	"terca6" => $rowTer6,
        	"terca7" => $rowTer7,
        	"terca8" => $rowTer8,
        	"quarta0" => $rowQua0,
        	"quarta1" => $rowQua1,
        	"quarta2" => $rowQua2,
        	"quarta3" => $rowQua3,
        	"quarta4" => $rowQua4,
        	"quarta5" => $rowQua5,
        	"quarta6" => $rowQua6,
        	"quarta7" => $rowQua7,
        	"quarta8" => $rowQua8,
        	"quinta0" => $rowQui0,
        	"quinta1" => $rowQui1,
        	"quinta2" => $rowQui2,
        	"quinta3" => $rowQui3,
        	"quinta4" => $rowQui4,
        	"quinta5" => $rowQui5,
        	"quinta6" => $rowQui6,
        	"quinta7" => $rowQui7,
        	"quinta8" => $rowQui8,
        	"sexta0" => $rowSex0,
        	"sexta1" => $rowSex1,
        	"sexta2" => $rowSex2,
        	"sexta3" => $rowSex3,
        	"sexta4" => $rowSex4,
        	"sexta5" => $rowSex5,
        	"sexta6" => $rowSex6,
        	"sexta7" => $rowSex7,
        	"sexta8" => $rowSex8,
    );
    
    

echo json_encode($array); // codificação para json
