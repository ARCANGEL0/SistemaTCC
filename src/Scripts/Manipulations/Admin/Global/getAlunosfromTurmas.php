<?php
include('../../../Database/Connection.php');


if(isset($_POST['aluno'])){
   $turma = mysqli_real_escape_string($conn,$_POST['aluno']); // department id
}

$array = array();



    $sql = "SELECT al.Aluno_Nome, al.RM_Aluno FROM alunos al 
    inner join turmas t on al.ID_Turma = t.ID_Ano
    where t.Turma='".$turma."'";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $name = $row['Aluno_Nome'];
        $rm = $row['RM_Aluno'];
 
        $array[] = array("name" => $name, "rm" => $rm);
    }


// encoding array to json format
echo json_encode($array);
