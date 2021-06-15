<?php
include('../../../Database/Connection.php');



$array = array();


    $sql = "SELECT * FROM escolas";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $nome = $row['Escola_Nome'];
        $codigo = $row['Escola_Codigo'];

        $array[] = array("nome" => $nome,"id" => $codigo);
    }


// encoding array to json format
echo json_encode($array);
