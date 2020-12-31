<?php
include('../../../Database/Connection.php');


if(isset($_POST['escola'])){
   $escola = mysqli_real_escape_string($conn,$_POST['escola']); // department id
}
$sql = "SELECT * FROM Turmas WHERE Escola='".$escola."'";

$array = array();


    $sql = "SELECT * FROM Turmas WHERE Escola='".$escola."'";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
        $name = $row['Turma'];

        $array[] = array("name" => $name);
    }


// encoding array to json format
echo json_encode($array);
