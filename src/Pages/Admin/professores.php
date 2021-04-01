
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

  <link rel="stylesheet" href="../../assets/Prof/css/style.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!-- Aqui vai alguns css para corrigir bugs da tabela -->
<style>

.wrapper{
width: 150vw;}
#tabela_paginate{
  padding-left: 420px;
}
#tabela_filter{
  margin-left: -890px;
}
</style>
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuários
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
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
RegistrarEscola
    }
    </script>

<!-- MODAL DE REGISTRAR -->


<div id="RegistrarProfessor" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Registrar um novo professor</h4>          </div>
          <div class="modal-body registrarProfessor_corpo">
          <form action="../../Scripts/Manipulations/Admin/Professores/registarProfessor.php" method="POST" id="modalform">
    <label for="rm">RM</label>
    <input  type="large_number" id="rm" name="rm">
    <br>
   
    <label for="nome">Nome</label>
    <input  type="text" id="nome" name="nome">
    <br>
    <label for="profEscola">Escola</label>
    <select class="form-control" required type="text" id="profEscola" name="profEscola" >
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
<label for="profTurma">Turma</label>
    <select class="form-control" required type="text" onchange="" id="profTurma" name="profTurma" >
      <option hidden disabled selected value="#"></option>

   
    </select><br>
        

	<label for="dn">Data Nascimento</label>
	<input  maxlength="8" OnKeyPress="formatar('##-##-####', this)" type="date"id="dn" name="dn">
    <br>
    <label for="email">E-Mail</label>
    <input  type="text" id="email" name="email">
    <br>
    <label for="rg">RG</label>
    <input  type="text" id="rg" name="rg">
    <br>
    <label for="municipio">Munincípio</label>
    <input  type="text" id="municipio" name="municipio">
    <br>
    <label for="endereco">Endereço</label>
    <input  type="text" id="endereco" name="endereco">
    <br>
    <label for="bairro">Bairro</label>
    <input  type="text" id="bairro" name="bairro">
    <br>
    <label for="cep">CEP</label>
    <input  maxlength="9" OnKeyPress="formatar('#####-###', this)" type="text"id="cep" name="cep">
	<br>
    <label for="codigoescola">Cód. Escola</label>
    <input  type="text" id="codigoescolar" name="codigoescola">

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
<div id="EditarProfessor" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Editar professor</h4>          </div>
          <div class="modal-body registrarProfessor_corpo">
          <form action="../../Scripts/Manipulations/Admin/Professores/editarProfessor.php" method="POST" id="modalform">
    <input  type="text" id="edit_rm" name="edit_rm">
    <br>

    <label for="edit_nome">Nome</label>
    <input  type="text" id="edit_nome" name="edit_nome">
    <br>
	<label for="edit_dn">Data Nascimento</label>
	<input   value="2020-06-06" type="date" id="edit_dn" name="edit_dn">
    <br>
  <label for="edit_telefone">Telefone</label>
    <input  maxlength="13" OnKeyPress="formatar('## #####-####', this)"type="text" id="edit_telefone" name="edit_telefone" >
    <br>
 
        <label for="edit_email">E-Mail</label>
    <input  type="text" id="edit_email" name="edit_email">
    <br>
        <label for="edit_cpf">CPF</label>
    <input  maxlength="13" OnKeyPress="formatar('##.###.###-##', this)"type="text" id="edit_cpf" name="edit_cpf" >
    <br>
    <label for="edit_rg">RG</label>
    <input  type="text" id="edit_rg" name="edit_rg">
    <br>
       <label for="edit_cep">CEP</label>
    <input  maxlength="9" OnKeyPress="formatar('#####-###', this)" type="text"id="edit_cep" name="edit_cep">
  <br>
    <label for="edit_muninc">Munincípio</label>
    <input  type="text" id="edit_muninc" name="edit_muninc">
    <br>
    <label for="edit_endereco">Endereço</label>
    <input  type="text" id="edit_endereco" name="edit_endereco">
    <br>
    <label for="edit_bairro">Bairro</label>
    <input  type="text" id="edit_bairro" name="edit_bairro">
    <br>
 

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


<!-- MODAL Modal escolas -->


<div id="profEscolas" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">


      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Escolas registradas</h4>
        </div>
        <div class="modal-body">


       <input type="hidden" value="" id="rm_esc" name="rm_esc">
  <style type="text/css">
    .collap:hover, .activeTurmas {
  background-color: #56D7CC11;
  border: 1px solid #56D7CC;

}
    .turmas {
padding-top: 10px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;


}
  </style>

<div class="form-group" id="listagemEscolas" "> 
 

</div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger apagar">Editar</button>

          <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
        </div>
      </div>

    </div>
  </div>
<!-- FIM Modal escolas -->



<div id="escolaDeletar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">


      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Deletar escola</h4>
        </div>
        <div class="modal-body">

        <form class="deletar" action="#" method="POST" id="deletar" >

       <input type="hidden" value="" id="idDel" name="idDel">
       <input id="cnpjDel" value="" type="hidden" name="cnpjDel">

       <input id="nomeDel" type="hidden" name="nomeDel">

       <input id="cidadeDel" type="hidden" name="cidadeDel">

       <input id="enderecoDel" type="hidden" name="enderecoDel">

       <input id="cepDel" type="hidden" name="cepDel">





  <h5>Você tem certeza que deseja deletar esta escola e todos os seus dependentes?</h5>

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
            <h1 class="m-0 text-dark">Professores</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- 




 <button class="form-control collap">Escola 1 </button>
<div class="turmas">
  <p class="bg-turma">
<a class="bg-nomeTurma"> 1N4 </a> 

<a class="bg-identifier"> - </a>

<a class="bg-nomeMateria">Materia </a> 

</p>

  <p class="bg-turma">
<a class="bg-nomeTurma"> 1N4 </a> 

<a class="bg-identifier"> - </a>

<a class="bg-nomeMateria">Materia </a> 

</p>
</div>
 <button class="form-control collap">Escola 2 </button>

<div class="turmas">
  <p>Turma 1 - Materia </p>
  <p> Turma 2 - Materia</p>
</div>


 -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <button class="btn btn-success" type="button" name="button" data-toggle="modal" data-target="#RegistrarProfessor"><i class="fa fa-plus"></i> &nbsp;  Cadastrar um novo professor</button>

        <table class="table table-bordered display" id="tabela" width="100%" cellspacing="0">
          <form action="" id="myform">
        <thead>
        <tr>
        <th>RM</th>
		<th>Nome</th>
        <th>Data Nascimento</th>
		<th>Telefone</th>
		<th>Email</th>
		<th>CPF</th>
		<th>RG</th>
		<th>CEP</th>
		<th>Cidade</th>
    <th>Endereço</th>
    <th>Bairro</th>
        <th>Ações</th>
      </tr>
        </thead>
      <tbody>
<?php
$result =  mysqli_query($conn,"SELECT * FROM professores");

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['RM_Prof'] . "</td>";
echo "<td>" . $row['Prof_Nome'] . "</td>";
echo "<td>" . date("d/m/Y", strtotime($row['Prof_DataDeNascimento'])) . "</td>";
echo "<td>" . $row['Prof_Telefone'] . "</td>";
echo "<td>" . $row['Prof_Email'] . "</td>";

echo "<td>" . $row['Prof_CPF'] . "</td>";
echo "<td>" . $row['Prof_RG'] . "</td>";
echo "<td>" . $row['Prof_CEP'] . "</td>";
echo "<td>" . $row['Prof_Cidade'] . "</td>";
echo "<td>" . $row['Prof_Endereço'] . "</td>";
echo "<td>" . $row['Prof_Bairro'] . "</td>";
echo '<td><a class="btn-sm  btn-secondary text-white btnEditar" id="editar" href="#"> <i class="fa fa-pen"></i>   </a>
&nbsp;
  <a class="btn-sm btn-danger btnProfessores" name="professores" href="#"><i class="fa fa-graduation-cap"></i></a>
  <a class="btn-sm btn-success btnAlunos" name="alunos" href="#"><i class="fa fa-book-reader"></i></a>
  <a class="btn-sm btn-info btnEscolas" name="escolas" href="#"><i class="fa fa-school"></i></a>
  <a class="btn-sm btn-warning text-white btnTurmas" name="turmas" href="#"><i class="fa fa-chalkboard-teacher"></i></a>
</td>';
echo "</tr>";
}

//mysqli_close($conn);
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

    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
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


<!-- AQUI SÃO OS EVENTOS DE SESSÃO PARA REGISTRO DE PROFS -->
<!-- Se o prof for registrado, o php irá redirecionar para esta página com a sessão de registro, exibindo um alerta de succeso -->
<?php
          if(isset($_SESSION['prof_registrado'])):
          ?>
        <script>

        $(function () {
          $(document).ready(function(){
                toastr.success('Professor registrado com sucesso!');
              });
            });
         </script>
          <?php
          endif;
          unset($_SESSION['prof_registrado']);

          ?>

<!-- Caso ocorra um erro, irá voltar com a sessão erro, e exibir o alerta de erro -->
          <?php
                    if(isset($_SESSION['registro_erro'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o professor!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro']);

                    ?>

                    <?php
                              if(isset($_SESSION['prof_registrado'])):
                              ?>
                            <script>

                            $(function () {
                              $(document).ready(function(){
                                    toastr.success('Professor registrado com sucesso!');
                                  });
                                });
                             </script>
                              <?php
                              endif;
                              unset($_SESSION['prof_registrado']);

                              ?>
<!-- Mesma coisa, mas agora para atualização dos prof -->
<!-- Este é para caso de sucesso -->

                  <?php
                        if(isset($_SESSION['prof_atualizado'])):
                      ?>
                          <script>

                    $(function () {
                        $(document).ready(function(){
                           toastr.success('Professor atualizado com sucesso!');
                             });
                                          });
                          </script>
          <?php
                      endif;
                      unset($_SESSION['prof_atualizado']);

           ?>
<!-- E este, para caso de erro -->
           <?php
                     if(isset($_SESSION['erro_edit_prof'])):
                     ?>
                   <script>

                   $(function () {
                     $(document).ready(function(){
                           toastr.error('Erro ao atualizar o professor!');
                         });
                       });
                    </script>
                     <?php
                     endif;
                     unset($_SESSION['erro_edit_prof']);

                     ?>


<!-- SCRIPT PARA INICIAR O JS DE DATATABLES, E CRIAR UMA TABELA INTERATIVA -->

<script>
  $(function () {

  var table =  $('#tabela').DataTable({

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

 table.on('click','.btnEscolas',function(){

 $tr=$(this).closest('tr');

  var data = table.row($tr).data();
  var RM = data[0];

  $.ajax({
            url: '../../Scripts/Manipulations/Admin/Professores/listagemEscolas.php',
            type: 'POST',
            data: {RMPost:RM},
            dataType: 'json',
            success:function(response){

                var len = response.length;


  
               $("#listagemEscolas").empty();

                console.log(response[0]['turmas']);
                console.log(response[0]['materias']);

                 for( var i = 0; i<len; i++){
                    var escolanomes = response[i]['escola'];
                    var turma = response[i]['turmas'];
                    var materia = response[i]['materias'];


             


                    $("#listagemEscolas").append("<button class='form-control collap' id='escola"+i+"'>"+escolanomes+"</button>");
                    
                    $("#escola"+i).after("<div class='turmas'><p class='bg-turma'><a class='bg-nomeTurma'>1N4</a>                                            <a class='bg-identifier'> - </a>                                        <a class='bg-nomeMateria'> Materia </a>        </p>                                                                                                 </div>");

                 

                }

            }

        });
                
  $("#listagemEscolas").on('click','.collap',function() {
  this.classList.toggle("active");


    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
      content.style.border = null;
      content.style.background = null;
      content.style.margin = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";

      content.style.border = "1px solid #56D7CC";
      content.style.background = "#56D7CC22";
      content.style.margin = "10px 0 10px 0";

         } 
  });

$("#profEscolas").modal('show');
});

     table.on('click','.btnEditar',function(){


      $tr=$(this).closest('tr');

      var data = table.row($tr).data();
      data.splice(11,1);
      function FormataStringData(data) {
        var dia  = data.split("/")[0];
        var mes  = data.split("/")[1];
        var ano  = data.split("/")[2];

        return ano + '-' + ("0"+mes).slice(-2) + '-' + ("0"+dia).slice(-2);
        // Utilizo o .slice(-2) para garantir o formato com 2 digitos.
      }

      console.log(data);
      console.log(data[3]);
      $('#edit_rm').val(data[0])
      $('#edit_nome').val(data[1]);
      $('#edit_dn').val(FormataStringData(data[2]));
      $('#edit_email').val(data[4]);
      $('#edit_cpf').val(data[5]);
      $('#edit_telefone').val(data[3]);

      $('#edit_rg').val(data[6]);
      $('#edit_muninc').val(data[8]);
      $('#edit_endereco').val(data[9]);
      $('#edit_bairro').val(data[10]);
      $('#edit_cep').val(data[7]);

    $('#EditarProfessor').modal('show');
    });


$("#profEscola").change(function(){
        var escolanome = $(this).val();
        $.ajax({
            url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#profTurma").empty();

                $("#profTurma").append("<option disabled hidden selected value='none'>Selecione uma turma</option>");

                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];

                    $("#profTurma").append("<option value='"+turma+"'>"+turma+"</option>");

                }
            }
        });
    });

  }); // fim document.ready
</script>


</body>
</html>
