
<?php
// Aqui o PHP inicia uma sessão, e inclui o arquivo verifyLogin.php ao carregar
session_start();
include('../../Scripts/Login/Verify/adminVerify.php');

include('../../Scripts/Database/Connection.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EdSys | Sistema Escolar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../../assets/Admin/css/style.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/Global/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/Global/css/style.css">


  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-envelope"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Aluno1@email.com
                </h3>
                <p class="text-sm">Assunto 1</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 Hora atrás</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Funcionario2@email.com
                </h3>
                <p class="text-sm">Assunto 2</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 3 Horas atrás</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Professor3@email.com
                </h3>
                <p class="text-sm">Assunto 3</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas atrás</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todas as mensagens.</a>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notificações</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          Notificação 1
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
   Notificação 2
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
         Notificação 3
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todas as notificações</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>&nbsp;
ADMIN        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
Logado como ADMINISTRADOR             </h3>
                <div class="dropdown-divider"></div>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#editar" class="dropdown-item dropdown-footer bg-green">Editar</a>


          <div class="dropdown-divider"></div>
          <a href="../../Scripts/Login/Logout.php" class="dropdown-item dropdown-footer bg-cyan">Fazer logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="pageLogo">
       <i class="fa fa-cogs"></i>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-legacy flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->



          <li class="nav-item ">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Início
              </p>
            </a>
          </li>
        <br>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Escolas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="escolas.php" class="nav-link">
                  <i class="fa fa-caret-right nav-icon"></i>
                  <p>Escolas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="turmas.php" class="nav-link">
                  <i class="fa fa-caret-right nav-icon"></i>
                  <p>Turmas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="horarios.php" class="nav-link">
                  <i class="fa fa-caret-right nav-icon"></i>
                  <p>Horários</p>
                </a>
              </li>



            </ul>
          </li>

<br>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuários
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="funcionarios.php" class="nav-link">
                  <i class="fa fa-caret-right nav-icon"></i>
                  <p>Funcionários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="professores.php" class="nav-link">
                  <i class="fa fa-caret-right nav-icon"></i>
                  <p>Professores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="alunos.php" class="nav-link">
                  <i class="fa fa-caret-right nav-icon"></i>
                  <p>Alunos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="responsaveis.php" class="nav-link">
                  <i class="fa fa-caret-right nav-icon"></i>
                  <p>Responsáveis</p>
                </a>
              </li>
            </ul>
          </li><br>


          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendário
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
         <br>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Email
              </p>
            </a>

          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- ALGORITMO PARA FORMATAR INPUTS COM MASCARA DE ENTRADA -->
  <script>
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)

      if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
      }

    }
    </script>

<!-- MODAL DE REGISTRAR -->

<div id="RegistrarHorario" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">


        <div class="modal-content">
          <div class="modal-header">

            <h4 class="modal-title">Registrar uma nova turma</h4>
          </div>
          <div class="modal-body RegistrarHorario_corpo">
          <form action="../../Scripts/Manipulations/Admin/Horarios/registrarHorario.php" method="POST" id="modalform">


    <label for="nomeEscola">Escola</label>
    <select class="form-control" required type="text"onchange="teste(this.value)" id="nomeEscola" name="nomeEscola" >
      <option selected hidden disabled value="">Selecione uma escola</option>

<?php
$queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
};

?>
                  </select>
    <br>
<label for="nomeTurma">Turma</label>
    <select class="form-control" required type="text" onchange="" id="nomeTurmas" name="nomeTurmas" >
      <option hidden disabled selected value="#"></option>

   
    </select>
     <script>
      $(document).ready(function(){
// script quqe usa ajax para detectar escola selecionada, rodar um sql para selecionar turmas e colocar no segundo select
    $("#nomeEscola").change(function(){
        var escolanome = $(this).val();
        $.ajax({
            url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#nomeTurmas").empty();

                $("#nomeTurmas").append("<option disabled hidden selected value='none'>Selecione uma turma</option>");

                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];

                    $("#nomeTurmas").append("<option value='"+turma+"'>"+turma+"</option>");

                }
            }
        });
    });

   
});
  </script>
    <br><br>
    <table class="table table-bordered display" id="tabela" width="100%" cellspacing="0">
      <form action="" id="myform">
    <thead>

     <tr>
       <th>Horário</th>
  <th>Segunda</th>
    <th>Terça</th>
    <th>Quarta</th>
    <th>Quinta</th>
<th>Sexta </th>

  </tr>
    </thead>
  <tbody>
<?php
// array para horarios
$horarios = array("8 às 9","9 às 10","10 às 11","11 às 12","13 às 14","14 às 15","15 às 16","16 às 17","17 às 18");
$queryTurmas =  mysqli_query($conn,"SELECT Materia_Abrev FROM disciplinas");
$aulas = array();
while($row = mysqli_fetch_array($queryTurmas))
{
  $aulas[] = $row['Materia_Abrev'];


};

for ($x = 0; $x <= 8; $x++) {
  echo '<tr>';
  echo '<td>'.$horarios[$x].'</td>'; // aqui ele cria o proximo horario para o novo registro
  // aqui começam os selects

  echo '<td><select required name="segunda'.$x.'" id="segunda'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';

  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}

  echo '</select></td>';




  echo '<td><select required id="terca'.$x.'" name="terca'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';
  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}
  echo '</select></td>';




  echo '<td><select required id="quarta'.$x.'" name="quarta'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';

  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}
  echo '</select></td>';
  echo '<td><select required name="quinta'.$x.'" id="quinta'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';

  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}
  ECHO '</select></td>';
  echo '<td><select required name="sexta'.$x.'"id="sexta'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';



  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}
echo '  </select></td>';
  echo '</tr>';
}
?>
  </tbody>
  </table>
          </div>
          <div class="modal-footer">
          <button type="submit" name="registrar" id="registrar" class="btn btn-success">Registrar</button>

            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </form>
          </div>
        </div>

      </div>
    </div>
<!-- FIM MODAL REGISTRAR -->


<!-- MODAL EDITAR -->

<div id="EditarHorario" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">


        <div class="modal-content">
          <div class="modal-header">

            <h4 class="modal-title">Editar Horario</h4>
          </div>
          <div class="modal-body">
          <form action="../../Scripts/Manipulations/Admin/Horarios/editarHorario.php" method="POST" name="editarform" id="editarform">

<input type="hidden" id="idEdit" name="idEdit">

    <label for="nomeEscola">Escola</label>
    <select class="form-control" required type="text" id="escolaEdit" name="escolaEdit" >
      <option selected hidden disabled value="">Selecione uma escola</option>

<?php
$queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
};

?>
                  </select>
    <br>
<label for="nomeTurma">Turma</label>
    <select class="form-control" required type="text" onchange="" id="turmaEdit" name="turmaEdit" >
      <option hidden  disabled selected value="">Selecione uma turma</option>';

    </select>


    <br><br>
    <table class="table table-bordered display" id="tabela" width="100%" cellspacing="0">
      <form action="" id="myform">
      <div id="test"></div>

    <thead>

      <script>
      $(document).ready(function(){
// script quqe usa ajax para detectar escola selecionada, rodar um sql para selecionar turmas e colocar no segundo select
 
    $("#escolaEdit").change(function(){
        var escolanome2= $(this).val();
        $.ajax({
            url: '../../Scripts/Manipulations/Admin/Horarios/getEditTurma.php',
            type: 'post',
            data: {escola:escolanome2},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#turmaEdit").empty();
                $("#turmaEdit").append("<option disabled hidden selected value='none'>Selecione uma turma</option>");

                for( var i = 0; i<len; i++){
                    var turma = response[i]['turma'];

                    $("#turmaEdit").append("<option value='"+turma+"'>"+turma+"</option>");




                }


                // Esse script serve para evitar que apareçam turmas duplicadas no select
                 var opt = {};
    $("#turmaEdit > option").each(function () {
        if(opt[$(this).text()]) {
            $(this).remove();
        } else {
            opt[$(this).text()] = $(this).val();
        }
    });
            }
        });
    });

    $("#filtroEscola").change(function(){
        var escolanome = $(this).val();
        $.ajax({
            url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){

                var len1 = response.length;

                $("#filtroTurma").empty();
                $("#filtroTurma").append("<option disabled hidden selected value='none'>Selecione uma turma</option>");


                for( var i = 0; i<len1; i++){
                    var turma = response[i]['name'];
                    $("#filtroTurma").append("<option value='"+turma+"'>"+turma+"</option>");

                }

            }
        });
    });
     $("#turmaEdit").change(function(){
        var aula = $(this).val();
        $.ajax({
            url: '../../Scripts/Manipulations/Admin/Horarios/ClassSelect.php',
            type: 'post',
            data: {turmaNome:aula},
            dataType: 'json',
            success:function(data){

                 var aulaS0 = data.segunda0;
                 var aulaS1 = data.segunda1;
                 var aulaS2 = data.segunda2;
                 var aulaS3 = data.segunda3;
                 var aulaS4 = data.segunda4;
                 var aulaS5 = data.segunda5;
                 var aulaS6 = data.segunda6;
                 var aulaS7 = data.segunda7;
                 var aulaS8 = data.segunda8;

                 var aulaTer0 = data.terca0;
                 var aulaTer1 = data.terca1;
                 var aulaTer2 = data.terca2;
                 var aulaTer3 = data.terca3;
                 var aulaTer4 = data.terca4;
                 var aulaTer5 = data.terca5;
                 var aulaTer6 = data.terca6;
                 var aulaTer7 = data.terca7;
                 var aulaTer8 = data.terca8;
            

                 var aulaQua0 = data.quarta0;
                 var aulaQua1 = data.quarta1;
                 var aulaQua2 = data.quarta2;
                 var aulaQua3 = data.quarta3;
                 var aulaQua4 = data.quarta4;
                 var aulaQua5 = data.quarta5;
                 var aulaQua6 = data.quarta6;
                 var aulaQua7 = data.quarta7;
                 var aulaQua8 = data.quarta8;
            

                 var aulaQui0 = data.quinta0;
                 var aulaQui1 = data.quinta1;
                 var aulaQui2 = data.quinta2;
                 var aulaQui3 = data.quinta3;
                 var aulaQui4 = data.quinta4;
                 var aulaQui5 = data.quinta5;
                 var aulaQui6 = data.quinta6;
                 var aulaQui7 = data.quinta7;
                 var aulaQui8 = data.quinta8;
            

                 var aulaSex0 = data.sexta0;
                 var aulaSex1 = data.sexta1;
                 var aulaSex2 = data.sexta2;
                 var aulaSex3 = data.sexta3;
                 var aulaSex4 = data.sexta4;
                 var aulaSex5 = data.sexta5;
                 var aulaSex6 = data.sexta6;
                 var aulaSex7 = data.sexta7;
                 var aulaSex8 = data.sexta8;
            
            
                var len = data.length;

                $("#Editsegunda0").append("<option  hidden selected value='"+aulaS0+"'>"+aulaS0+" </option>");
                $("#Editsegunda1").append("<option  hidden selected value='"+aulaS1+"'>"+aulaS1+" </option>");
                $("#Editsegunda2").append("<option  hidden selected value='"+aulaS2+"'>"+aulaS2+" </option>");
                $("#Editsegunda3").append("<option  hidden selected value='"+aulaS3+"'>"+aulaS3+" </option>");
                $("#Editsegunda4").append("<option  hidden selected value='"+aulaS4+"'>"+aulaS4+" </option>");
                $("#Editsegunda5").append("<option  hidden selected value='"+aulaS5+"'>"+aulaS5+" </option>");
                $("#Editsegunda6").append("<option  hidden selected value='"+aulaS6+"'>"+aulaS6+" </option>");
                $("#Editsegunda7").append("<option  hidden selected value='"+aulaS7+"'>"+aulaS7+" </option>");
                $("#Editsegunda8").append("<option  hidden selected value='"+aulaS8+"'>"+aulaS8+" </option>");

                 $("#Editterca0").append("<option  hidden selected value='"+aulaTer0+"'>"+aulaTer0+" </option>");
                $("#Editterca1").append("<option  hidden selected value='"+aulaTer1+"'>"+aulaTer1+" </option>");
                $("#Editterca2").append("<option  hidden selected value='"+aulaTer2+"'>"+aulaTer2+" </option>");
                $("#Editterca3").append("<option  hidden selected value='"+aulaTer3+"'>"+aulaTer3+" </option>");
                $("#Editterca4").append("<option  hidden selected value='"+aulaTer4+"'>"+aulaTer4+" </option>");
                $("#Editterca5").append("<option  hidden selected value='"+aulaTer5+"'>"+aulaTer5+" </option>");
                $("#Editterca6").append("<option  hidden selected value='"+aulaTer6+"'>"+aulaTer6+" </option>");
                $("#Editterca7").append("<option  hidden selected value='"+aulaTer7+"'>"+aulaTer7+" </option>");
                $("#Editterca8").append("<option  hidden selected value='"+aulaTer8+"'>"+aulaTer8+" </option>");

                 $("#Editquarta0").append("<option  hidden selected value='"+aulaQua0+"'>"+aulaQua0+" </option>");
                $("#Editquarta1").append("<option  hidden selected value='"+aulaQua1+"'>"+aulaQua1+" </option>");
                $("#Editquarta2").append("<option  hidden selected value='"+aulaQua2+"'>"+aulaQua2+" </option>");
                $("#Editquarta3").append("<option  hidden selected value='"+aulaQua3+"'>"+aulaQua3+" </option>");
                $("#Editquarta4").append("<option  hidden selected value='"+aulaQua4+"'>"+aulaQua4+" </option>");
                $("#Editquarta5").append("<option  hidden selected value='"+aulaQua5+"'>"+aulaQua5+" </option>");
                $("#Editquarta6").append("<option  hidden selected value='"+aulaQua6+"'>"+aulaQua6+" </option>");
                $("#Editquarta7").append("<option  hidden selected value='"+aulaQua7+"'>"+aulaQua7+" </option>");
                $("#Editquarta8").append("<option  hidden selected value='"+aulaQua8+"'>"+aulaQua8+" </option>");

                 $("#Editquinta0").append("<option  hidden selected value='"+aulaQui0+"'>"+aulaQui0+" </option>");
                $("#Editquinta1").append("<option  hidden selected value='"+aulaQui1+"'>"+aulaQui1+" </option>");
                $("#Editquinta2").append("<option  hidden selected value='"+aulaQui2+"'>"+aulaQui2+" </option>");
                $("#Editquinta3").append("<option  hidden selected value='"+aulaQui3+"'>"+aulaQui3+" </option>");
                $("#Editquinta4").append("<option  hidden selected value='"+aulaQui4+"'>"+aulaQui4+" </option>");
                $("#Editquinta5").append("<option  hidden selected value='"+aulaQui5+"'>"+aulaQui5+" </option>");
                $("#Editquinta6").append("<option  hidden selected value='"+aulaQui6+"'>"+aulaQui6+" </option>");
                $("#Editquinta7").append("<option  hidden selected value='"+aulaQui7+"'>"+aulaQui7+" </option>");
                $("#Editquinta8").append("<option  hidden selected value='"+aulaQui8+"'>"+aulaQui8+" </option>");

                 $("#Editsexta0").append("<option  hidden selected value='"+aulaSex0+"'>"+aulaSex0+" </option>");
                $("#Editsexta1").append("<option  hidden selected value='"+aulaSex1+"'>"+aulaSex1+" </option>");
                $("#Editsexta2").append("<option  hidden selected value='"+aulaSex2+"'>"+aulaSex2+" </option>");
                $("#Editsexta3").append("<option  hidden selected value='"+aulaSex3+"'>"+aulaSex3+" </option>");
                $("#Editsexta4").append("<option  hidden selected value='"+aulaSex4+"'>"+aulaSex4+" </option>");
                $("#Editsexta5").append("<option  hidden selected value='"+aulaSex5+"'>"+aulaSex5+" </option>");
                $("#Editsexta6").append("<option  hidden selected value='"+aulaSex6+"'>"+aulaSex6+" </option>");
                $("#Editsexta7").append("<option  hidden selected value='"+aulaSex7+"'>"+aulaSex7+" </option>");
                $("#Editsexta8").append("<option  hidden selected value='"+aulaSex8+"'>"+aulaSex8+" </option>");
             
            }
        });
    });
    // Aqui é a função para pegar as aulas ja existentes do horário
    // $("#turmaEdit").change(function(){
    //     var className = $(this).val();
    //     $.ajax({
    //       url: '../../Scripts/Manipulations/Admin/Horarios/ClassSelect.php',
    //         type: 'post',
    //         data: {turmaNome:className},
    //         dataType: 'json',
    //         success:function(data){

    //             alert(data);
    //             var len = data.length;
    //             alert(len);

    //             $("#Editsegunda0").empty();
    //             $("#Editsegunda0").append("<option disabled hidden selected value='none'>Fodase </option>");



    //                                 for( var i = 0; i<9; i++){
    //                                     var aula = data['segunda'];
    //                                     $("#Editsegunda0").append("<option value='"+aula+"'>"+aula+"</option>");


    //                                 }



    //         }
    //     });
    // });

});
      </script>
     <tr>
       <th>Horário</th>
  <th>Segunda</th>
    <th>Terça</th>
    <th>Quarta</th>
    <th>Quinta</th>
<th>Sexta </th>

  </tr>
    </thead>
  <tbody>
<?php
// array para horarios
$horarios = array("8 às 9","9 às 10","10 às 11","11 às 12","13 às 14","14 às 15","15 às 16","16 às 17","17 às 18");
$queryTurmas =  mysqli_query($conn,"SELECT Materia_Abrev FROM disciplinas");
$aulas = array();
while($row = mysqli_fetch_array($queryTurmas))
{
  $aulas[] = $row['Materia_Abrev'];


};

for ($x = 0; $x <= 8; $x++) {
  echo '<tr>';
  echo '<td>'.$horarios[$x].'</td>'; // aqui ele cria o proximo horario para o novo registro
  // aqui começam os selects

  echo '<td><select required name="Editsegunda'.$x.'" id="Editsegunda'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';

  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}

  echo '</select></td>';




  echo '<td><select required id="Editterca'.$x.'" name="Editterca'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';
  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}
  echo '</select></td>';




  echo '<td><select required id="Editquarta'.$x.'" name="Editquarta'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';

  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}
  echo '</select></td>';
  echo '<td><select required name="Editquinta'.$x.'" id="Editquinta'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';

  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}
  ECHO '</select></td>';
  echo '<td><select required name="Editsexta'.$x.'"id="Editsexta'.$x.'">
  <option selected disabled hidden value="">MATÉRIA</option>';
  echo '<option value="">   </option>';



  for($i = 0; $i <= 10; $i++){
echo '<option value="'.$aulas[$i].'">'.$aulas[$i].'</option>';
}
echo '  </select></td>';
  echo '</tr>';
}
?>
  </tbody>
  </table>
          </div>
          <div class="modal-footer">
          <button type="submit" name="editar" id="editar" class="btn btn-success">Alterar</button>

            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </form>
          </div>
        </div>

      </div>
    </div>
<!-- FIM MODAL EDITAR -->


<!-- MODAL APAGAR -->


<div id="turmaDeletar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">


      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Deletar turma</h4>
        </div>
        <div class="modal-body">

        <form class="deletar" action="#" method="POST" id="deletar" >

       <input type="hidden" value="" id="idDel" name="idDel">
       <input id="cnpjDel" value="" type="hidden" name="cnpjDel">

       <input id="nomeDel" type="hidden" name="nomeDel">

       <input id="cidadeDel" type="hidden" name="cidadeDel">

       <input id="enderecoDel" type="hidden" name="enderecoDel">

       <input id="cepDel" type="hidden" name="cepDel">





  <h5>Você tem certeza que deseja deletar esta turma e todos os seus dependentes?</h5>

        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger apagar">Deletar</button>

          <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
          </form>
        </div>
      </div>

    </div>
  </div>
<!-- FIM MODAL APAGAR -->
  <!-- Content Wrapper. Início do conteudo -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Horários</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <button class="btn btn-success" type="button" name="button" data-toggle="modal" data-target="#RegistrarHorario"><i class="fa fa-plus"></i> &nbsp;  Registrar um horário</button>
        <button class="btn btn-danger" type="button" name="button" data-toggle="modal" data-target="#EditarHorario"><i class="fa fa-edit"></i> &nbsp;  Editar um horário</button>

<br><br>

        <select class="btn btn-outline-info" name="filtroEscola" id="filtroEscola">
          <option hidden disabled selected value="">Selecione uma escola</option>

<?php
$queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
};

?>

</select>

<select
class="btn btn-outline-info" name="filtroTurma" id="filtroTurma">
  <option disabled selected value=""></option>

</select>
<br><br>
     <table class="table table-bordered display text-center" id="tabelaTurmas" width="100%" cellspacing="0">
          <form action="" id="myform">
        <thead>
         <tr>
           <th> Turma</th>
           <th class="text-cyan bg-primary ">Horário</th>
           <th class="text-cyan bg-primary ">Segunda</th>
<th class="text-cyan bg-primary ">Terça</th>
<th class="text-cyan bg-primary ">Quarta</th>
<th class="text-cyan bg-primary ">Quinta</th>
<th class="text-cyan bg-primary ">Sexta</th>
      </tr>
        </thead>
      <tbody>
<?php
$result =  mysqli_query($conn,"SELECT * FROM turma_horario ");
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['Turma_Ano']."</td>";
echo "<td class='text-cyan bg-primary ' >" . $row['Turma_Horario'] . "</td>";

// Segunda
if (empty($row['Horario_Segunda'])) {
  echo "<td class='bg-danger disabled'>" . "---" . "</td>";
}
else{
  echo "<td class='text-cyan bg-danger'>" . $row['Horario_Segunda'] . "</td>";

}
// Terça

if (empty($row['Horario_Terça'])) {
  echo "<td class='bg-danger disabled'>" . "---" . "</td>";
}
else{
  echo "<td class='text-cyan bg-danger'>" . $row['Horario_Terça'] . "</td>";

}
// Quarta
if (empty($row['Horario_Quarta'])) {
  echo "<td class='bg-danger disabled'>" . "---" . "</td>";
}
else{
  echo "<td class='text-cyan bg-danger'>" . $row['Horario_Quarta'] . "</td>";

}
// Quinta


if (empty($row['Horario_Quinta'])) {
  echo "<td class='bg-danger disabled'>" . "---" . "</td>";
}
else{
  echo "<td class='text-cyan bg-danger'>" . $row['Horario_Quinta'] . "</td>";

}

// Sexta

if (empty($row['Horario_Sexta'])) {
  echo "<td class='bg-danger disabled'>" . "---" . "</td>";
}
else{
  echo "<td class='text-cyan bg-danger'>" . $row['Horario_Sexta'] . "</td>";

}
echo "</tr>";
}

mysqli_close($conn);
?>



      </tbody>
      </table>
      </form>




      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>


<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/Global/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/Global/js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/Global/js/demo.js"></script>
<script src="../../plugins/toastr/toastr.min.js"></script>


<!-- AQUI SÃO OS EVENTOS DE SESSÃO PARA REGISTRO DE Turmas -->
<!-- Se a Turma for registrada, o php irá redirecionar para esta página com a sessão de registro, exibindo um alerta de succeso -->
<?php
          if(isset($_SESSION['horario_registrado'])):
          ?>
        <script>

        $(function () {
          $(document).ready(function(){
                toastr.success('Horario registrado com sucesso!');
              });
            });
         </script>
          <?php
          endif;
          unset($_SESSION['horario_registrado']);

          ?>

<!-- Caso ocorra um erro, irá voltar com a sessão erro, e exibir o alerta de erro -->
          <?php
                    if(isset($_SESSION['registro_erro'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o horário!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro']);

                    ?>

                    <?php
                              if(isset($_SESSION['registro_existente'])):
                              ?>
                            <script>

                            $(function () {
                              $(document).ready(function(){
                                    toastr.error('Horário já existente!');
                                  });
                                });
                             </script>
                              <?php
                              endif;
                              unset($_SESSION['registro_existente']);

                              ?>

<!-- Mesma coisa, mas agora para atualização das Turmas -->
<!-- Este é para caso de sucesso -->

                  <?php
                        if(isset($_SESSION['horario_atualizado'])):
                      ?>
                          <script>

                    $(function () {
                        $(document).ready(function(){
                           toastr.success('Horário  atualizado com sucesso!');
                             });
                                          });
                          </script>
          <?php
                      endif;
                      unset($_SESSION['horario_atualizado']);

           ?>
<!-- E este, para caso de erro -->
           <?php
                     if(isset($_SESSION['horario_edit_erro'])):
                     ?>
                   <script>

                   $(function () {
                     $(document).ready(function(){
                           toastr.error('Erro ao atualizar horário!');
                         });
                       });
                    </script>
                     <?php
                     endif;
                     unset($_SESSION['horario_edit_erro']);

                     ?>


<!-- SCRIPT PARA INICIAR O JS DE DATATABLES, E CRIAR UMA TABELA INTERATIVA -->

<script>


  $(function () {

  var table =  $('#tabelaTurmas').DataTable({
    "columnDefs": [
                {
                    "targets": [ 0 ],
                    "visible": false,
                    "searchable": true
                }],
          "language": {
          "sEmptyTable": "Nenhum registro encontrado",
          "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
          "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
          "sInfoFiltered": "(Filtrados de _MAX_ registros)",
          "sInfoPostFix": "",
          "sInfoThousands": ".",
          "sLengthMenu": "_MENU_ resultados por página",
          "sLoadingRecords": "Carregando...",
          "sProcessing": "Processando...",
          "sZeroRecords": "Selecione uma turma",
          "sSearch": "Pesquisar",
          "oPaginate": {
              "sNext": "Próximo",
              "sPrevious": "Anterior",
              "sFirst": "Primeiro",
              "sLast": "Último"
          },
          "oAria": {



              "sSortAscending": ": Ordenar colunas de forma ascendente",
              "sSortDescending": ": Ordenar colunas de forma descendente"
          }},
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": true,
      "responsive": true,
    });

            



     table.on('click','.btnEditar',function(){


      $tr=$(this).closest('tr');

      var data = table.row($tr).data();
      data.splice(4,1);

      console.log(data);
      $('#idEdit').val(data[0])
      $('#editEscola').val(data[1]);
      $('#editCoord').val(data[2]);
      $('#editTurma').val(data[3]);


    $('#EditarTurma').modal('show');
    });


// Essa função serve para identificar o URL com um parametro de um script php e identificar o parametro
    var parametroUrl = function parametroUrl(sParam) {
           var sPageURL = decodeURIComponent(window.location.search.substring(1)),
               sURLVar = sPageURL.split('&'),
               sParametNome,
               i;

           for (i = 0; i < sURLVar.length; i++) {
               sParametNome = sURLVar[i].split('=');

               if (sParametNome[0] === sParam) {
                   return sParametNome[1] === undefined ? true : sParametNome[1];
               }
           }
       };


    
    
table.search("Sem turma").draw();
    // Isto serve para impedir a visualização de conteudo
    
       //ao carregar a página, e forçar o filtro por turma

    var parametroTurma = parametroUrl("turma");


    $('#filtroTurma').on('change', function(){ // Este aqui muda o conteúdo com base na mudança do select
       table
       .search($(this).val()).draw();
      });




table.search(parametroTurma).draw();
 //  function getTurma(){ // Essa função serve para detectar se houve um redirecionamento pelo URL e filtrar automaticamente atraves dos parametros
 //    // do url
 //   var escolanome = $('#filtroEscola').val();
 //        $.ajax({
 //            url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
 //            type: 'post',
 //            data: {escola:escolanome},
 //            dataType: 'json',
 //            success:function(response){

 //                var len1 = response.length;

 //                $("#filtroTurma").empty();
            
 //                for( var i = 0; i<len1; i++){
 //                    var turma = response[i]['name'];

 //                    $("#filtroTurma").append("<option value='"+turma+"'>"+turma+"</option>");

 //                } // aqui o for pega todas as turmas


 //                    $("#filtroTurma").val(parametroTurma).change(); // aqui ele insere automaticamente a turma do parametro
                

 // table.search(parametroTurma.value).draw(); // aqui ele seleciona o horário da turma

 //            }

 //        });

 //  } 



// getTurma(); 

 // aqui ele chama a função
  });



  
</script>

</body>
</html>
