
<?php
include('../../../Database/Connection.php');


if(isset($_POST['escola'])){
   $escola = mysqli_real_escape_string($conn,$_POST['escola']);

}

$array = array();


    $sql = "SELECT * FROM turmas WHERE Escola= '".$escola."';";

    $result = mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_array($result) ){
      $name = $row['Turma'];

      $idturma = $row['ID_Ano'];
      $idescola = $row['ID_Escola'];
        $array[] = array("name" => $name,"idturma" => $idturma, "idescola" => $idescola);
    }


// encoding array to json format
echo json_encode($array);
