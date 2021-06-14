<?php
include('../../../Database/Connection.php');


if(isset($_POST['turma']) && isset($_POST['profrm'])){
   $turma = mysqli_real_escape_string($conn,$_POST['turma']);
   $rm = mysqli_real_escape_string($conn,$_POST['profrm']);

}

$array = array();


    $sql = "SELECT rel.Matéria from relacao_profescolas rel
where RM_Prof = '$rm' AND Prof_Turmas = '$turma';";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $materia = $row['Matéria'];
        $array[] = array("materia" => $materia);
    }


// encoding array to json format
echo json_encode($array);
