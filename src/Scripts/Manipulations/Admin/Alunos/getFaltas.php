<?php
include('../../../Database/Connection.php');


if(isset($_POST['postRM']) &&
isset($_POST['postMATERIA']) && isset($_POST['postANO'])){
   $rm = mysqli_real_escape_string($conn,$_POST['postRM']); 
   $materia = mysqli_real_escape_string($conn,$_POST['postMATERIA']); 
   $ano = mysqli_real_escape_string($conn,$_POST['postANO']); 

}

$array = array();


  
$sql = "SELECT COUNT(*) from alunos_faltas faltas
inner join alunos_notas ano on ano.ID = faltas.ID
where ano.RM_Aluno='$rm' && ano.Aluno_Ano='$ano' && ano.Aluno_Disciplina='$materia';";



    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $faltas = $row['COUNT(*)'];
      
        $array[] = array("faltas" => $faltas);
    }


// encoding array to json format
echo json_encode($array);
