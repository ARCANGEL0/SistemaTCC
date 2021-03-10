<?php
include('../../../Database/Connection.php');


if(isset($_POST['RMPost'])){
   $rm = mysqli_real_escape_string($conn,$_POST['RMPost']); // department id
}


$array2 = array();

 

  $sql = "  

SELECT RPT.Matéria, turma.Turma from Relacao_ProfessorTurma RPT
inner join Professores P on RPT.Prof_Turma = P.RM_Prof
inner join Turmas turma on turma.ID_Ano = RPT.Cod_DisTurma
where P.RM_Prof=".$rm."
    ";

    $result = mysqli_query($conn,$sql);
  
 
    while( $row = mysqli_fetch_array($result) ){
     	$turma = $row['Turma'];
     	$materia = $row['Matéria'];
        $array2[] = array("turmas" => $turma, "materias" => $materia);

    
    }
 
// encoding array to json format
echo json_encode($array2);

