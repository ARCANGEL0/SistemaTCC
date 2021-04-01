<?php
include('../../../Database/Connection.php');


if(isset($_POST['RMPost'])){
   $rm = mysqli_real_escape_string($conn,$_POST['RMPost']); // department id
}


$array2 = array();

 

  $sql = "  
 SELECT esc.Escola_Nome from escolas esc
inner join relacao_professorescola RPE ON esc.Escola_Codigo = RPE.Escola_Cod
inner join professores P on RPE.Prof_Escola = P.RM_Prof
where P.RM_Prof=".$rm.";
    ";

    $result = mysqli_query($conn,$sql);
  
 
    while( $row = mysqli_fetch_array($result) ){
     	$escola = $row['Escola_Nome'];
        $array2[] = array("escola" => $escola);

    
    }
 
// encoding array to json format
echo json_encode($array2);

