<?php
include('../../../Database/Connection.php');



$array = array();


    $sql = "SELECT * FROM disciplinas";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $nome = $row['Materia_Nome'];
        $abrev = $row['Materia_Abrev'];
       
        $array[] = array("nome" => $nome,"abreviacao" => $abrev);
    }


// encoding array to json format
echo json_encode($array);

