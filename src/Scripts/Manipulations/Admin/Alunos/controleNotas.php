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

if(isset($_POST['salvarNotas'])){



$check = "SELECT * from alunos_notas where
RM_Aluno='$rm' && Aluno_Ano = '$ano' && Aluno_Disciplina='$materia';";
$queryCheck = mysqli_query($conn,$check);
$rowCheck = mysqli_fetch_array($queryCheck);



  $queryCriar = "INSERT into alunos_notas  ( RM_Aluno, Aluno_Ano, Aluno_Disciplina, Aluno_Nota1,Aluno_Nota2, Aluno_Nota3,Aluno_Nota4,Aluno_MencaoFinal) VALUES ('$rm', '$ano', '$materia', '$nota1','$nota2','$nota3','$nota4','$mencao');";
 

$queryAlterar = "UPDATE alunos_notas SET Aluno_Nota1 = '$nota1', Aluno_Nota2 = '$nota2', Aluno_Nota3 = '$nota3',Aluno_Nota4= '$nota4',Aluno_MencaoFinal='$mencao' WHERE RM_Aluno='$rm' && Aluno_Ano='$ano' && Aluno_Disciplina='$materia';";

if($rowCheck) {

    if(mysqli_query($conn,$queryAlterar)){
      $_SESSION['notas_sucesso'] = true;
        header("Location: ../../../../Pages/Admin/alunos.php");
        exit();
    }
    else {
       $_SESSION['notas_erro'] = true;
        header("Location: ../../../../Pages/Admin/alunos.php");
        exit();
      }

}
else {
    if(mysqli_query($conn,$queryCriar)){
      $_SESSION['notas_sucesso'] = true;
        header("Location: ../../../../Pages/Admin/alunos.php");
        exit();
      }

      else {

         $_SESSION['notas_erro'] = true;
        header("Location: ../../../../Pages/Admin/alunos.php");
        exit();
      }

}



  }

   

  

?>
