<?php
include('../../../Database/Connection.php');


if(isset($_POST['postRM'])){
   $rm = mysqli_real_escape_string($conn,$_POST['postRM']); // department id
}

$array = array();


    $sql = "SELECT DISTINCT ano.Aluno_Ano from alunos_notas ano
inner join alunos al on al.RM_Aluno = ano.RM_Aluno
where al.RM_Aluno=".$rm.";";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $ano = $row['Aluno_Ano'];
       
        $array[] = array("ano" => $ano);
    }


// encoding array to json format
echo json_encode($array);
