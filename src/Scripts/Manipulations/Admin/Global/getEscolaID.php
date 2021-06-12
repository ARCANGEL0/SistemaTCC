<?php
include('../../../Database/Connection.php');


if(isset($_POST['escola'])){
   $escola = mysqli_real_escape_string($conn,$_POST['escola']); // department id
}

$array = array();


    $sql = "SELECT * FROM escolas WHERE Escola_Nome='".$escola."'";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $id = $row['Escola_Codigo'];
       
        $array[] = array("escolaid" => $id);
    }


// encoding array to json format
echo json_encode($array);

