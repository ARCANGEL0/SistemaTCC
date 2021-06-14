<?php
include('../../../Database/Connection.php');


if(isset($_POST['escola']) && isset($_POST['profrm'])){
   $escola = mysqli_real_escape_string($conn,$_POST['escola']);
   $rm = mysqli_real_escape_string($conn,$_POST['profrm']);

}

$array = array();


    $sql = "SELECT DISTINCT turma.ID_Ano, turma.Turma from turmas turma
inner join relacao_profescolas rel on rel.Prof_Turmas = turma.ID_Ano
where rel.Escola_Cod='$escola' AND rel.RM_Prof='$rm';";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $turma = $row['Turma'];
        $id = $row["ID_Ano"];
        $array[] = array("turma" => $turma, "id" => $id);
    }


// encoding array to json format
echo json_encode($array);
