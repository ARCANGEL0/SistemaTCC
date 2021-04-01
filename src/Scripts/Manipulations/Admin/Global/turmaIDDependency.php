<?php
include('../../../Database/Connection.php');


if(isset($_POST['turmaID'])){
   $turma = mysqli_real_escape_string($conn,$_POST['turmaID']); // department id
}
$sql = "SELECT ID_Ano FROM turmas WHERE Turma='".$turma."'";

$array = array();


    $sql = "SELECT ID_Ano FROM turmas WHERE Turma='".$turma."'";

    $result = mysqli_query($conn,$sql);

  $turmaID = mysqli_fetch_row($result);
        $array[] = array("turma" => $turmaID);



// encoding array to json format
echo json_encode($array);


?>
