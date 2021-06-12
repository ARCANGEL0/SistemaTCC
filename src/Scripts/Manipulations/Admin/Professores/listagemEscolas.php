<?php
include('../../../Database/Connection.php');


if(isset($_POST['RMPost'])){
   $rm = mysqli_real_escape_string($conn,$_POST['RMPost']); // department id
}


$array2 = array();

 

  $sql = "  
";

    $result = mysqli_query($conn,$sql);
  
 
    while( $row = mysqli_fetch_array($result) ){
     	$escola = $row['Escola_Nome'];

        $array2[] = array("escola" => $escola, "turma" => $turma, "materia" => $materia);

    
    }
 
// encoding array to json format
echo json_encode($array2);

