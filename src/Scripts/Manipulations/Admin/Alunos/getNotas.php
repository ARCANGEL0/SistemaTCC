<?php
include('../../../Database/Connection.php');


if(isset($_POST['postRM']) &&
isset($_POST['postMATERIA']) && isset($_POST['postANO'])){
   $rm = mysqli_real_escape_string($conn,$_POST['postRM']); 
   $materia = mysqli_real_escape_string($conn,$_POST['postMATERIA']); 
   $ano = mysqli_real_escape_string($conn,$_POST['postANO']); 

}

$array = array();


  

$sql = "SELECT ano.Aluno_Nota1, ano.Aluno_Nota2, ano.Aluno_Nota3, ano.Aluno_Nota4, ano.Aluno_MencaoFinal from alunos_notas ano
where ano.RM_Aluno='$rm' && ano.Aluno_Ano='$ano' && ano.Aluno_Disciplina='$materia';";



    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $nota1 = $row['Aluno_Nota1'];
        $nota2 = $row['Aluno_Nota2'];
        $nota3 = $row['Aluno_Nota3'];
        $nota4 = $row['Aluno_Nota4'];
       $mencao = $row['Aluno_MencaoFinal'];
        $array[] = array("nota1" => $nota1,"nota2" => $nota2,"nota3" => $nota3,"nota4" => $nota4,"mencao" => $mencao);
    }



// encoding array to json format
echo json_encode($array);
