<?php
include('../../../Database/Connection.php');


if(isset($_POST['escola'])){
   $escola = mysqli_real_escape_string($conn,$_POST['escola']); // department id
}

$array = array();


    $sql = "SELECT * FROM turma_horario WHERE Turma_Escola='".$escola."'";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $name = $row['Turma_Ano'];
     
        $array[] = array("turma" => $name);
    }


// encoding array to json format
echo json_encode($array);
