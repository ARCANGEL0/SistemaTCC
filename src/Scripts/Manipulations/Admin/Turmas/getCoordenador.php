<?php
include('../../../Database/Connection.php');


if(isset($_POST['escola'])){
   $escola = mysqli_real_escape_string($conn,$_POST['escola']); // department id
}


$array2 = array();

 

  $sql = "SELECT prof.Prof_Nome from professores prof
inner join relacao_profescolas rp on prof.RM_Prof = rp.RM_Prof
inner join escolas esc on  esc.Escola_Codigo = rp.Escola_Cod
where rp.Escola_Cod=$escola;";

    $result = mysqli_query($conn,$sql);
  
 
    while( $row = mysqli_fetch_array($result) ){
     	$nome = $row['Prof_Nome'];
        $array2[] = array("nome" => $nome);

    
    }
 
// encoding array to json format
echo json_encode($array2);

