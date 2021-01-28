<?php
include('../../../Database/Connection.php');


if(isset($_POST['turmaNome'])){
   $turma = mysqli_real_escape_string($conn,$_POST['turmaNome']); // department id


$array3 = array();

$sql = "SELECT * FROM Turma_Horario";


    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_row($result) ){
        $segunda = $row['Horario_Segunda'];


        $array3 = array('segunda' => 'test');
    }

}
// encoding array to json format
echo json_encode($array3);
