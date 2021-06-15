<?php
include('../../../Database/Connection.php');


if(isset($_POST['escola'])){
   $escola = mysqli_real_escape_string($conn,$_POST['escola']); // department id
}

$array = array();


    $sql = "SELECT * FROM turmas WHERE ID_Escola='$escola';";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $name = $row['Turma'];
        $idturma = $row['ID_Ano'];
        $idescola = $row['ID_Escola'];
        $array[] = array("name" => $name, "escola" => $idescola, "turma" => $idturma);
    }


// encoding array to json format
echo json_encode($array);
