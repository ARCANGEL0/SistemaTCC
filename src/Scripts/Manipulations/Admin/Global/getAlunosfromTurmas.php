<?php
include('../../../Database/Connection.php');


if(isset($_POST['aluno'])){
   $turma = mysqli_real_escape_string($conn,$_POST['aluno']); // department id
}

$array = array();



    $sql = "SELECT al.Aluno_Nome FROM alunos al 
    inner join turmas t on al.ID_Turma = t.ID_Ano
    where t.Turma='".$turma."'";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $name = $row['Aluno_Nome'];
 
        $array[] = array("name" => $name);
    }


// encoding array to json format
echo json_encode($array);
