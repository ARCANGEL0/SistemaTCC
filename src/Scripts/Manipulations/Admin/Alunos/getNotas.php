<?php
include('../../../Database/Connection.php');


if(isset($_POST['postRM']) &&
isset($_POST['postMATERIA']) && isset($_POST['postANO'])){
   $rm = mysqli_real_escape_string($conn,$_POST['postRM']); 
   $materia = mysqli_real_escape_string($conn,$_POST['postMATERIA']); 
   $ano = mysqli_real_escape_string($conn,$_POST['postANO']); 

}

$array = array();


  

$sql = "SELECT COUNT(faltas.ID), ano.Aluno_Nota1, ano.Aluno_Nota2, ano.Aluno_Nota3, ano.Aluno_Nota4, ano.Aluno_MencaoFinal from alunos_notas ano
inner join alunos_faltas faltas on faltas.ID = ano.ID
inner join alunos al on al.RM_Aluno = ano.RM_Aluno
inner join alunos_notas notas on notas.ID = faltas.ID
inner join disciplinas disc on disc.Materia_Abrev = ano.Aluno_Disciplina
where al.RM_Aluno=".$rm." && ano.Aluno_Ano=".$ano." && disc.Materia_Nome='".$materia."';";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $faltas = $row['COUNT(faltas.ID)'];
        $nota1 = $row['Aluno_Nota1'];
        $nota2 = $row['Aluno_Nota2'];
        $nota3 = $row['Aluno_Nota3'];
        $nota4 = $row['Aluno_Nota4'];
       $mencao = $row['Aluno_MencaoFinal'];
        $array[] = array("nota1" => $nota1,"nota2" => $nota2,"nota3" => $nota3,"nota4" => $nota4,"faltas" => $faltas,"mencao" => $mencao);
    }


// encoding array to json format
echo json_encode($array);
