<?php
include('../../../Database/Connection.php');


if(isset($_POST['idturma'])){
   $turma = mysqli_real_escape_string($conn,$_POST['idturma']); // department id
}

if(isset($_POST['idescola'])){
   $escola = mysqli_real_escape_string($conn,$_POST['idescola']); // department id
}

$array = array();


    $sql = "SELECT * FROM Turmas WHERE Escola='$escola' AND Turma='$turma'";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $turma = $row['Turma'];
        $escola = $row['Escola'];

        $array = array("SelectTurma" => $turma, "SelectEscola" => $escola);
    }


// encoding array to json format
echo json_encode($array);
