<?php
include('../../../Database/Connection.php');


if(isset($_POST['turma'])){
   $turma = mysqli_real_escape_string($conn,$_POST['turma']); // department id
}

$array = array();


    $sql = "SELECT * FROM turmas WHERE Turma='".$turma."';";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $id = $row['ID_Ano'];
       
        $array[] = array("turmaid" => $id);
    }


// encoding array to json format
echo json_encode($array);

