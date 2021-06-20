<?php
include('../../../Database/Connection.php');


if(isset($_POST['idturma'])){
   $turma = mysqli_real_escape_string($conn,$_POST['idturma']); // department id
}


$array = array();

$rows = array();
    $sql = "SELECT rel.Matéria, prof.Prof_Nome from relacao_profescolas rel inner join professores prof on prof.RM_Prof = rel.RM_Prof where rel.Prof_Turmas = '$turma';";

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result)) {
        $materia = $row['Matéria'];
        $prof = $row['Prof_Nome'];
        $array[] = array("prof" => $prof, "materia" => $materia);
    }


// encoding array to json format
 echo json_encode($array);
