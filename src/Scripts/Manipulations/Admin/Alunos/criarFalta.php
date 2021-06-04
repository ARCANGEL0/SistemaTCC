<?php
include('../../../Database/Connection.php');


if(isset($_POST['postRM']) &&
isset($_POST['postMATERIA']) && isset($_POST['postANO'])){

   $rm = mysqli_real_escape_string($conn,$_POST['postRM']); 
   $materia = mysqli_real_escape_string($conn,$_POST['postMATERIA']); 
   $ano = mysqli_real_escape_string($conn,$_POST['postANO']); 




$getFaltaId = "SELECT ID from alunos_notas where RM_Aluno= '$rm' && Aluno_Ano='$ano' && Aluno_Disciplina='$materia';";

$fetchQuery = mysqli_query($conn, $getFaltaId);
$rs = mysqli_fetch_array($fetchQuery);

$idFalta = $rs['ID'];




	$query = "INSERT into alunos_faltas (ID)
VALUES ('$idFalta');";

	if(mysqli_query($conn,$query)){


	}
	else {

        throw new Exception();
    

    }


 

    mysqli_close($conn);


}

?>





