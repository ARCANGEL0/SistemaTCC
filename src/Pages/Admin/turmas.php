
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
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../assets/Admin/css/style.css">

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

<style >


.profsDivisor {
  margin: 1.5em auto;
  position: relative;
  height: 9px;
  width: 9px;
  border: transparent;
  overflow: visible;
  background-image: url('data:image/svg+xml;utf8,<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><rect x="0.75" y="0.5" width="8" height="8" rx="4" fill="%231CB0A8" /></svg>');

  &:before {
    position: absolute;
    height: 9px;
    width: 10px;
    content: '';
    background-image: url('data:image/svg+xml;utf8,<svg width="10" height="9" viewBox="0 0 10 9" xmlns="http://www.w3.org/2000/svg"><path d="M3.91043 1.29752C4.30449 0.688518 5.19551 0.688519 5.58957 1.29752L9.25143 6.95675C9.68196 7.62211 9.20436 8.5 8.41186 8.5H1.08814C0.29564 8.5 -0.181954 7.62211 0.248574 6.95675L3.91043 1.29752Z" fill="%23FCB643" /></svg>');
    left: -18px;
  }

  &:after {
    position: absolute;
    height: 9px;
    width: 39px;
    content: '';
    background-image: url('data:image/svg+xml;utf8,<svg width="9" height="9" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><rect x="0.75" y="0.5" width="8" height="8" rx="1" fill="%23EF4056" /></svg>');
    right: -18px;
  }
}


</style>

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
            <a href="404.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendário
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
         <br>
          <li class="nav-item">
            <a href="404.php" class="nav-link">
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

<div id="RegistrarTurma" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">


        <div class="modal-content">
          <div class="modal-header">

            <h4 class="modal-title">Registrar uma nova turma</h4>
          </div>
          <div class="modal-body registrarTurma_corpo">
          <form action="../../Scripts/Manipulations/Admin/Turmas/registrarTurma.php" method="POST" id="modalform">


    <label for="nomeEscola">Escola</label>
    <select class="form-control" required type="text"  id="nomeEscola" name="nomeEscola" >
      <option selected hidden disabled value="">Selecione uma escola</option>

<?php
$queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Escola_Codigo'].'">' . $row['Escola_Nome'] . '</td>';
};

?>
                  </select>
    <br>
    <label for="nomeCoord">Coordenador</label>
    <select class="form-control" required type="text" id="nomeCoord" name="nomeCoord" >
      <option selected hidden disabled value="">Selecione um professor</option>

                  </select>
    <br>
    <label for="nomeTurma">Turma</label>
    <input required  type="text" id="nomeTurma" name="nomeTurma">



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

<div id="EditarTurma" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">


        <div class="modal-content">
          <div class="modal-header">

            <h4 class="modal-title">Editar Turma</h4>
          </div>
          <div class="modal-body">
          <form action="../../Scripts/Manipulations/Admin/Turmas/editarTurma.php" method="POST" name="editarform" id="editarform">

<input type="hidden" id="idEdit" name="idEdit">


    <label for="editEscola">Escola</label>
    <select class="form-control" required type="text" id="editEscola" name="editEscola" >
      <option selected hidden disabled value="">Selecione uma escola</option>

<?php
$queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Escola_Codigo'].'">' . $row['Escola_Nome'] . '</td>';
};

?>
                  </select>
    <br>
    <label for="editCoord">Coordenador</label>
    <select class="form-control" required type="text" id="editCoord" name="editCoord" >
      <option selected hidden disabled value="">Selecione um professor</option>

                  </select>
                  <br>
    <label for="editTurma">Turma</label>
    <input required  type="text" id="editTurma" name="editTurma">



          </div>
          <div class="modal-footer">
          <button type="submit" name="salvar" id="salvar" class="btn btn-success">Salvar</button>

            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </form>
          </div>
        </div>

      </div>
    </div>

<!-- FIM MODAL EDITAR -->


<!-- MODAL AULAS -->

<div id="turmaAulas" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">


        <div class="modal-content">
          <div class="modal-header">

            <h4 class="modal-title">Aulas da turma</h4>
          </div>
          <div class="modal-body">
          <form action="../../Scripts/Manipulations/Admin/Turmas/editarTurma.php" method="POST" name="aulasform" id="aulasform">

<br>
  <div class="d-flex flex-column"  id="turmaMaterias">

</div>

          </div>
          <div class="modal-footer">
          <button type="submit" name="salvar" id="salvar" class="btn btn-success">Editar</button>

            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </form>
          </div>
        </div>

      </div>
    </div>

<!-- FIM MODAL AULAS -->

  <!-- Content Wrapper. Início do conteudo -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Turmas</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <button class="btn btn-success" type="button" name="button" data-toggle="modal" id="registrarNovaTurma" data-target="#RegistrarTurma"><i class="fa fa-plus"></i> &nbsp;  Registrar uma nova turma</button>

<br><br>

        <select
        data-column="2" class="btn btn-outline-info" name="filtroEscola" id="filtroEscola">
          <option selected value="">Todas as escolas</option>

<?php
$queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
};

?>

</select>
<br><br>
     <table class="table table-bordered display text-center" id="tabelaTurmas" width="100%" cellspacing="0">
          <form action="" id="myform">
        <thead>
         <tr>
           <th>ID</th>
           <th>Escola</th>
           <th> Prof. Coordenador</th>
      <th>Turma</th>

               <th style="width:18%">Ações</th>
      </tr>
        </thead>
      <tbody>
<?php
$result =  mysqli_query($conn,"SELECT * FROM turmas");
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID_Ano'] . "</td>";
echo "<td>" . $row['Escola'] . "</td>";
echo "<td>" . $row['Prof_Coordenador']. "</td>";
echo "<td>" . $row['Turma'] . "</td>";

echo '<td><a class="btn-sm  btn-secondary btnEditar" id="editar" href="#"> <i class="fa fa-pen"></i>   </a>
&nbsp;



  <a class="btn-sm btn-success btnAlunos" name="alunos" href="#"><i class="fa fa-book-reader"></i></a>


  <a class="btn-sm btn-info  btnHorários" href="#" id="horarios" name="horarios" ><i class="fa fa-clock"></i></a>

  <a class="btn-sm btn-warning text-white btnAulas" name="turmas" href="#"><i class="fa fa-chalkboard-teacher"></i></a>


</td>';
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

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
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
          if(isset($_SESSION['turma_registrada'])):
          ?>
        <script>

        $(function () {
          $(document).ready(function(){
                toastr.success('Turma registrada com sucesso!');
              });
            });
         </script>
          <?php
          endif;
          unset($_SESSION['turma_registrada']);

          ?>

<!-- Caso ocorra um erro, irá voltar com a sessão erro, e exibir o alerta de erro -->
          <?php
                    if(isset($_SESSION['registro_erro'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar a Turma!');
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
                          toastr.error('Erro ao registrar a turma! Turma duplicada no banco de dados');
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
                        if(isset($_SESSION['turma_atualizada'])):
                      ?>
                          <script>

                    $(function () {
                        $(document).ready(function(){
                           toastr.success('Turma atualizada com sucesso!');
                             });
                                          });
                          </script>
          <?php
                      endif;
                      unset($_SESSION['turma_atualizada']);

           ?>
<!-- E este, para caso de erro -->
           <?php
                     if(isset($_SESSION['turma_atualizacao_erro'])):
                     ?>
                   <script>

                   $(function () {
                     $(document).ready(function(){
                           toastr.error('Erro ao atualizar a turma!');
                         });
                       });
                    </script>
                     <?php
                     endif;
                     unset($_SESSION['turma_atualizacao_erro']);

                     ?>


<!-- SCRIPT PARA INICIAR O JS DE DATATABLES, E CRIAR UMA TABELA INTERATIVA -->

<script>
  $(function () {

  var table =  $('#tabelaTurmas').DataTable({

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
          "sZeroRecords": "Nenhum registro encontrado",
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
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });


    $("#editEscola").change(function(){
      var escola = $(this).val();

       $.ajax({

     url: '../../Scripts/Manipulations/Admin/Turmas/getCoordenador.php',
                type: 'post',
                dataType: 'json',
                data: { escola: escola},
                success:function(response){

                    var len = response.length;

    		$('#editCoord').empty();
                $("#editCoord").append("<option disabled hidden selected> Selecione um professor</option>");


                    for( var i = 0; i<len; i++){
                        var nome = response[i]['nome'];

                        $("#editCoord").append("<option value='"+nome+"'>"+nome+"</option>");

                    }


                }
                });   // aqui vai ajax

    		});

$("#nomeEscola").change(function(){
  var escola = $(this).val();

   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Turmas/getCoordenador.php',
            type: 'post',
            dataType: 'json',
            data: { escola: escola},
            success:function(response){

                var len = response.length;

		$('#nomeCoord').empty();
            $("#nomeCoord").append("<option disabled hidden selected> Selecione um professor</option>");


                for( var i = 0; i<len; i++){
                    var nome = response[i]['nome'];

                    $("#nomeCoord").append("<option value='"+nome+"'>"+nome+"</option>");

                }


            }
            });   // aqui vai ajax

		});

     table.on('click','.btnEditar',function(){


      $tr=$(this).closest('tr');

      var data = table.row($tr).data();
      data.splice(4,1);

      console.log(data);
      $('#idEdit').val(data[0])
      $("#editEscola").append("<option hidden disabled selected> Selecione uma escola</option>");
      $('#editTurma').val(data[3]);


    $('#EditarTurma').modal('show');
    });




     // horarios



     // btnAulas





     table.on('click','.btnAulas',function(){
   $tr=$(this).closest('tr');

      var data = table.row($tr).data();
      data.splice(4,1);
var turma = data[0];

      console.log(data);

      $.ajax({

    url: '../../Scripts/Manipulations/Admin/Turmas/getMatériasData.php',
               type: 'post',
               dataType: 'json',
               data: { idturma: turma},
               success:function(response){

                   var len = response.length;

   		$('#turmaMaterias').empty();


                   for( var i = 0; i<len; i++){
                       var materia = response[i]['materia'];
                       var prof = response[i]['prof'];

$('#turmaMaterias').append('<div class="input-group mb-2 mr-sm-2" style="width:75%;margin-left: 60px;" ><div class="input-group-prepend"><label id="materia" class="input-group-text">'+materia+'</label></div><label class="form-control" id="prof">'+prof+'</label></div></div><hr class="profsDivisor">')                   }

$("#turmaMaterias").children().last().remove();
               }
               });   // aqui vai ajax






      $('#turmaAulas').modal('show');
     });




     table.on('click','.btnHorários',function(){
   $tr=$(this).closest('tr');

      var data = table.row($tr).data();

    var turma = data[3];
location.href="horarios.php?turma="+turma;
     });





     table.on('click','.btnAlunos',function(){
   $tr=$(this).closest('tr');

      var data = table.row($tr).data();

    var turma = data[3];
location.href="alunos.php?turma="+turma;
     });








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
       // Isto serve para impedir a visualização de conteudo
       //ao carregar a página, e forçar o filtro por turma

    var parametroturma = parametroUrl("turma");
    var parametroescola = parametroUrl("escola");




               escola = '\\b' + parametroescola  + '\\b';
               turma = '\\b' + parametroturma  + '\\b';


// se parameroturma estiver vazio e o escola nao, busca por escola
                if (parametroturma == null && parametroescola != null) {
                    table.rows().search(escola, true, true).draw();
                }

                // se parametro turma estiver com algo, e o escola vazio, pesquisa por turma

              else  if (parametroturma != null && parametroescola == null) {
                  table.rows().search(turma, true, true).draw();
                }
// caso os 2 estejam vazios, não busca nada
else  {
          table.rows().search('').draw();
        }




    $('#filtroEscola').on('change', function(){ // Este aqui muda o conteúdo com base na mudança do select
       table.search(this.value).draw();
    });





  });


// Aqui vai opções para sSelect para professor com base na escola




</script>

</body>
</html>
