  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['Notasrm'];
$ano = $_POST['notasANO'];
$materia = $_POST['notasMateria'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];
$mencao = $_POST['mencao'];









$queryAlterar = "UPDATE alunos_notas SET Aluno_Nota1 = '$nota1', Aluno_Nota2 = '$nota2', Aluno_Nota3 = '$nota3',Aluno_Nota4= '$nota4',Aluno_MencaoFinal='$mencao' WHERE RM_Aluno='$rm' && Aluno_Ano='$ano' && Aluno_Disciplina='$materia';";


if (isset($rm) && isset($ano) && isset($materia)) {

if ($nota1<=10 && $nota1>= 0 &&
$nota2<=10 && $nota2>= 0 &&
$nota3<=10 && $nota3>= 0 &&
$nota4<=10 && $nota4>= 0 &&
$mencao<=10 && $mencao>= 0) {


    if(mysqli_query($conn,$queryAlterar)){
      $_SESSION['notas_sucesso'] = true;
        header("Location: ../../../../Pages/Admin/alunos.php");
        exit();
    }
    else {
        throw new Exception();
      }



}
else {
          throw new Exception();

}

  

   

  }
else { 

          throw new Exception();
}

?>
