
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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/Global/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/Global/css/style.css">
  <link rel="stylesheet" href="../../assets/Admin/css/style.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../../assets/Admin/js/paginate.js" charset="utf-8"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../../assets/Admin/js/paginate.js" charset="utf-8"></script>



  <script type="text/javascript">
  $(document).ready(function() {
    $('#vmap').vectorMap({


      map: 'brazil_br',
   backgroundColor: 'transparent',
   borderColor: '#818181',
   borderOpacity: 0.25,
   borderWidth: 1,
   color: '#f4f3f0',
   enableZoom: true,
   hoverColor: '#c9dfaf',
   hoverOpacity: null,
   normalizeFunction: 'linear',
   scaleColors: ['#b6d6ff', '#005ace'],
   selectedColor: '#c9dfaf',
   selectedRegions: null,
   showTooltip: true,
   onRegionClick: function(element, code, region)
   {
       var message = 'Estado selecionado "'
           + region
           + '" UF: '
           + code.toUpperCase();

       alert(message);
   }

    });
  });
  </script>
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
<?php

echo $_SESSION["usuario"];

?>        </a>
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
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Início
              </p>
            </a>
          </li>
        <br>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Página Inicial</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
<?php
// Este código executa um select para ver quantos registros tem de uma tabela, e retornar o valor com um echo

$query = mysqli_query($conn, "SELECT * FROM escolas"); // Query do SQL

 $rows = mysqli_num_rows($query); // Variável para o número de registros

echo $rows;
 ?>

                </h3>

                <p>Escolas cadastradas</p>
              </div>
              <div class="icon">
                <i class="fa fa-building"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>

                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM alunos"); // Query do SQL

                   $rows = mysqli_num_rows($query); // Variável para o número de registros

                  echo $rows;
                   ?>
                </h3>

                <p>Alunos matriculados</p>
              </div>
              <div class="icon">
                <i class="fa fa-book-reader"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning ">
              <div class="inner text-white">
                <h3>
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM professores"); // Query do SQL

                   $rows = mysqli_num_rows($query); // Variável para o número de registros

                  echo $rows;
                   ?>
                </h3>

                <p>Professores registrados</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM secretaria"); // Query do SQL

                   $rows = mysqli_num_rows($query); // Variável para o número de registros

                  echo $rows;
                   ?>
                </h3>

                <p>Funcionários ativos</p>
              </div>
              <div class="icon">
                <i class="fa fa-id-badge"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->


            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Etapas para concluir
                </h3>

                <div class="card-tools">
               
                </div>
              </div>
              <script>

// A adição, e conclusão das etapas deverá ser feita manualmente através das variáveis como todo1, todo2 e etc...
// Isto porque não tem outra forma de armazenar as informações de forma que todos possam ver.
// O máximo que pode ser feito... é criar um Local Storage, onde eu poderia assinalar as etapas e manter elas após recarregar
// Porém as etapas concluidas só poderiam ser vistas por mim, pois estarão salvas como cookies localmente no meu PC
// Por isso acho melhor editar manualmente mesmo... para determinar uma etapa como concluida, basta adicionar a classe 'done' na tag <li>
// para adicionar uma etapa nova, basta copiar uma tag <li> até </li>, e colocar o que você quiser


          var todo1 ='<ul class="todo-list" data-widget="todo-list">'+
       
                           '<li class="">'+

                        '<div  class="icheck-primary d-inline ml-2">'+
                        '<i class="fa fa-clipboard"></i>'+

                        '</div>'+
                        '<span class="text">Descobrir uma forma de relacionar o professor</span>'+
                        '<span class="text"> com várias escolas no Sistema </span>'+



                         '<li class="">'+

                        '<div  class="icheck-primary d-inline ml-2">'+
                        '<i class="fa fa-clipboard"></i>'+

                        '</div>'+
                        '<span class="text">Dar um jeito para a busca no horário por TURMA</span>'+
                        '<span class="text">procurar pela string específica e evitar procurar </span>'+
                        '<span class="text">semelhantes. Exemplo:   Turma 1R5 e turma 1R </span>'+


                            '<li class="done">'+

                        '<div  class="icheck-primary d-inline ml-2">'+
                          '<i class="fa fa-clipboard"></i>'+
                        '</div>'+
                        '<span class="text">Achar uma forma de passar a Array JS para o PHP, para enviar</span>'+
                '<span class="text">o RM dos alunos para o arquivo PHP e cadastrar dependentes novos</span>'+


  '<li class="done">'+

                        '<div  class="icheck-primary d-inline ml-2">'+
                          '<i class="fa fa-clipboard"></i>'+
                        '</div>'+
                        '<span class="text">Criar uma tabela listando os filhos e botões para poder excluir os mesmos</span>'+


    '<li class="done">'+

                        '<div  class="icheck-primary d-inline ml-2">'+
                          '<i class="fa fa-clipboard"></i>'+
                        '</div>'+
                        '<span class="text">Descobrir uma forma de editar Dependentes na tabela RESPONSÁVEIS</span>'+

          '<li class="done">'+
                      '<div  class="icheck-primary d-inline ml-2">'+
                        '<i class="fa fa-clipboard"></i>'+
                      '</div>'+
                        '<span class="text">Criar modal de NOTAS para mostrar notas e faltas</span>'+

                      '<li class="done">'+
                      '<div  class="icheck-primary d-inline ml-2">'+
                        '<i class="fa fa-clipboard"></i>'+
                      '</div>'+
                        '<span class="text">Editar modal de NOTAS para cadastrar notas e faltas</span>'+


   '<li class="done">'+
                      '<div  class="icheck-primary d-inline ml-2">'+
                        '<i class="fa fa-clipboard"></i>'+
                      '</div>'+
                        '<span class="text">Trocar requisições POST dos modals</span>'+

                        '<span class="text">para uso do ajax, para evitar recarregar a página</span>'+
                     

                      '<li class="done">'+

                        '<div class="icheck-primary d-inline ml-2">'+
                        '<i class="fa fa-clipboard"></i>'+

                        '</div>'+
                        '<span class="text">Fazer links nas tabelas para redirecionar </span>'+
                        '<span class="text"> a outras páginas com filtro de busca.</span>' +
                        '<span class="text">Exemplo: Ao clicar no botãozinho da lousa</span>'+
                        '<span class="text">na tabela Escolas, redirecionar para a página TURMAS filtrando por aquela escola</span>'+
                   
                      '</li>'+
                      '<li class="done">'+

                        '<div  class="icheck-primary d-inline ml-2">'+
                        '<i class="fa fa-clipboard"></i>'+

                        '</div>'+
                        '<span class="text">Pensar numa forma de filtrar os Responsáveis na tabela</span>'+
    
                   
                    '</ul>';

      

              $('.paginate').bootpag({

           total: 1, // Aqui você define quantas páginas a lista todo pode ter
           page: 1,
           maxVisible: 1
          })
              </script>


              <!-- /.card-header -->
              <div class="card-body">


                <ul class="todo-list" data-widget="todo-list">

                  <div id="content">
<script>
    $("#content").html(todo1);
</script>
                  </div>
                </ul>

              </div>

              <!-- /.card-body -->
              <div class="card-footer clearfix">

              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Escolas
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button"
                          class="btn btn-primary btn-sm daterange"
                          data-toggle="tooltip"
                          title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button"
                          class="btn btn-primary btn-sm"
                          data-card-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="vmap" style="height: 250px; width: 100%;"></div>

              </div>
              <!-- /.card-body-->

            </div>
            <!-- /.card -->


         <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
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
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.brazil.js"></script>
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
</body>
</html>
