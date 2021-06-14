<?php
include('../../../Database/Connection.php');


if(isset($_POST['profrm'])){
   $rm = mysqli_real_escape_string($conn,$_POST['profrm']);

}

$array = array();


    $sql = "SELECT DISTINCT esc.Escola_Nome, esc.Escola_Codigo from escolas esc
inner join relacao_profescolas ra on esc.Escola_Codigo = ra.Escola_Cod
where ra.RM_Prof='$rm';";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $escola = $row['Escola_Nome'];
        $id = $row['Escola_Codigo'];
        $array[] = array("escola" => $escola,"id" => $id);
    }


// encoding array to json format
echo json_encode($array);
