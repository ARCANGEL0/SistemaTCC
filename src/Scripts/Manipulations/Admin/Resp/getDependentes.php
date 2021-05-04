<?php
include('../../../Database/Connection.php');


if(isset($_POST['rmresp'])){
$rm = mysqli_real_escape_string($conn,$_POST['rmresp']); // department id
}


$array2 = array();

 

  $sql = "  
SELECT al.Aluno_Nome, al.Aluno_Escola, al.RM_Aluno from alunos al
inner join relacao_alunosresponsaveis RAR on al.RM_Aluno = RAR.RM_Aluno
inner join responsáveis R on RAR.Responsavel_Filhos = R.RM_Responsável
where R.RM_Responsável=".$rm.";
    ";

    $result = mysqli_query($conn,$sql);
  
 
    while( $row = mysqli_fetch_array($result) ){
     	$alunoNome = $row['Aluno_Nome'];
     	$alunoEscola = $row['Aluno_Escola'];
     	$alunoRM = $row['Aluno_RM'];
        $array2[] = array("escola" => $alunoEscola, "nome" => $alunoNome, "rm" => $alunoRM);

    
    }
 
// encoding array to json format
echo json_encode($array2);

