
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
.btnEditar{
  padding-right: 10px;
  margin-right: 10px;
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


<div id="RegistrarFunc" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Registrar um novo funcionário</h4>          </div>
          <div class="modal-body registrarProfessor_corpo">
          <form action="../../Scripts/Manipulations/Admin/Func/registrarFunc.php" method="POST" id="modalform">
    <label for="rm">RM</label>
    <input required  type="large_number" id="rm" name="rm">
    <br>

    <label for="nome">Nome</label>
    <input required  type="text" id="nome" name="nome">
    <br>
    <label for="funcEscola">Escola</label>
    <select class="form-control" required type="text" id="funcEscola" name="funcEscola" >
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



	<label for="dn">Data Nascimento</label>
	<input  required maxlength="8" OnKeyPress="formatar('##-##-####', this)" type="date"id="dn" name="dn">
    <br>
      <label for="tel">Telefone</label>
  <input required  maxlength="12" OnKeyPress="formatar('## ####-####', this)" type="text" id="tel" name="tel">
    <br>
      <label for="cel">Celular</label>
  <input  maxlength="13" OnKeyPress="formatar('## #####-####', this)" type="text" id="cel" name="cel">
    <br>
    <label for="email">E-Mail</label>
    <input required  type="text" id="email" name="email">
    <br>
    <label for="cpf">CPF</label>
    <input required  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"type="text" id="cpf" name="cpf" >
    <br>
    <label for="rg">RG</label>
    <input required  maxlength="13" OnKeyPress="formatar('##.###.###-##', this)"type="text" id="rg" name="rg" >
    <br>
     <label for="cep">CEP</label>
    <input required  maxlength="9" OnKeyPress="formatar('#####-###', this)" type="text"id="cep" name="cep">
    <br>
    <label for="municipio">Munincípio</label>
    <input required  type="text" id="municipio" name="municipio">
    <br>
    <label for="endereco">Endereço</label>
    <input required  type="text" id="endereco" name="endereco">
    <br>
    <label for="bairro">Bairro</label>
    <input required  type="text" id="bairro" name="bairro">
    <br>

	<br>


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
<div id="editarFunc" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Editar funcionário</h4>          </div>
          <div class="modal-body ">
          <form action="../../Scripts/Manipulations/Admin/Func/editarFunc.php" method="POST" id="modalform">
    <input required  type="hidden" id="edit_rm" name="edit_rm">
    <br>

    <label for="edit_nome">Nome</label>
    <input required  type="text" id="edit_nome" name="edit_nome">
    <br>
    <label for="edit_escola"> Escola</label>
    <select class="form-control" required type="text" id="edit_escola" name="edit_escola" >
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

	<label for="edit_dn">Data Nascimento</label>
	<input required   value="" type="date" id="edit_dn" name="edit_dn">
    <br>
  <label for="edit_celular">Celular</label>
    <input  maxlength="13" OnKeyPress="formatar('## #####-####', this)"type="text" id="edit_celular" name="edit_celular" >
    <br>
   <label for="edit_telefone">Telefone</label>
    <input required  maxlength="12" OnKeyPress="formatar('## ####-####', this)"type="text" id="edit_telefone" name="edit_telefone" >
    <br>
        <label for="edit_email">E-Mail</label>
    <input required type="email" id="edit_email" name="edit_email">
    <br>
        <label for="edit_cpf">CPF</label>
    <input required  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"type="text" id="edit_cpf" name="edit_cpf" >
    <br>
    <label for="edit_rg">RG</label>
    <input required  maxlength="13" OnKeyPress="formatar('##.###.###-##', this)"type="text" id="edit_rg" name="edit_rg" >
    <br>
       <label for="edit_cep">CEP</label>
    <input required  maxlength="9" OnKeyPress="formatar('#####-###', this)" type="text"id="edit_cep" name="edit_cep">
  <br>
    <label for="edit_muninc">Munincípio</label>
    <input required  type="text" id="edit_muninc" name="edit_muninc">
    <br>
    <label for="edit_endereco">Endereço</label>
    <input required  type="text" id="edit_endereco" name="edit_endereco">
    <br>
    <label for="edit_bairro">Bairro</label>
    <input required  type="text" id="edit_bairro" name="edit_bairro">
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
            <h1 class="m-0 text-dark">Funcionários</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <button class="btn btn-success" type="button" name="button" data-toggle="modal" data-target="#RegistrarFunc"><i class="fa fa-plus"></i> &nbsp;  Cadastrar um novo funcionário</button>



       <br><br>
  <select class="btn btn-outline-info" name="filtroEscola" id="filtroEscola">
          <option selected value="">Todas as escolas</option>

<?php
$queryEscolas =  mysqli_query($conn,"select DISTINCT esc.Escola_Nome from escolas esc
inner join secretaria sec on sec.Sec_Escola = esc.Escola_Codigo");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
};

?>

</select>



        <table class="table table-bordered display" id="tabela" width="100%" cellspacing="0">
          <form action="" id="myform">
        <thead>
        <tr>
        <th>RM</th>
		<th>Nome</th>
    <th>Cod Escola</th>
        <th>Escola</th>
		<th>Email</th>
		<th>Data de Nascimento</th>
    <th>Telefone</th>
    <th>Celular</th>
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
$result =  mysqli_query($conn,"SELECT * FROM secretaria");


while($row = mysqli_fetch_array($result))
{

 // SQL PARA PEGAR RM E IDENTIFICAR ESCOLA POR ID

 $getEscola = mysqli_query($conn,"select esc.Escola_Nome from escolas esc
inner join secretaria sec on sec.Sec_Escola = esc.Escola_Codigo
where RM_Secretaria = ".$row['RM_Secretaria'].";");

  // SQL


echo "<tr>";
echo "<td>" . $row['RM_Secretaria'] . "</td>";
echo "<td>" . $row['Sec_Nome'] . "</td>";
echo "<td>" . $row['Sec_Escola'] . "</td>";

// Aqui cria um laco q pega o nome da escola em vez de printar o codigo dela
while($escola = mysqli_fetch_array($getEscola)) {
echo "<td>" . $escola['Escola_Nome'] . "</td>";

}






echo "<td>" . $row['Sec_Email'] . "</td>";

echo "<td>" . date("d/m/Y", strtotime($row['Sec_DataDeNascimento'])) . "</td>";
echo "<td>" . $row['Sec_Telefone'] . "</td>";

echo "<td>" . $row['Sec_Celular'] . "</td>";

echo "<td>" . $row['Sec_CPF'] . "</td>";
echo "<td>" . $row['Sec_RG'] . "</td>";
echo "<td>" . $row['Sec_CEP'] . "</td>";
echo "<td>" . $row['Sec_Cidade'] . "</td>";
echo "<td>" . $row['Sec_Endereço'] . "</td>";
echo "<td>" . $row['Sec_Bairro'] . "</td>";

echo '<td>
<center>

<a class="btn-sm  btn-secondary text-white btnEditar" id="editar" href="#"> <i class="fa fa-pen"></i>   </a
  </center>
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
          if(isset($_SESSION['func_registrado'])):
          ?>
        <script>

        $(function () {
          $(document).ready(function(){
                toastr.success('Funcionário registrado com sucesso!');
              });
            });
         </script>
          <?php
          endif;
          unset($_SESSION['func_registrado']);

          ?>

<!-- Caso ocorra um erro, irá voltar com a sessão erro, e exibir o alerta de erro -->
          <?php
                    if(isset($_SESSION['registro_erro'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o funcionário!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro']);

                    ?>


<!-- Mesma coisa, mas agora para atualização dos prof -->
<!-- Este é para caso de sucesso -->

                  <?php
                        if(isset($_SESSION['func_atualizado'])):
                      ?>
                          <script>
4
                    $(function () {
                        $(document).ready(function(){
                           toastr.success('Funcionário atualizado com sucesso!');
                             });
                                          });
                          </script>
          <?php
                      endif;
                      unset($_SESSION['func_atualizado']);

           ?>
<!-- E este, para caso de erro -->
           <?php
                     if(isset($_SESSION['erro_edit_func'])):
                     ?>
                   <script>

                   $(function () {
                     $(document).ready(function(){
                           toastr.error('Erro ao atualizar o funcionário!');
                         });
                       });
                    </script>
                     <?php
                     endif;
                     unset($_SESSION['erro_edit_func']);

                     ?>


<!-- SCRIPT PARA INICIAR O JS DE DATATABLES, E CRIAR UMA TABELA INTERATIVA -->

<script>
  $(function () {

  var table =  $('#tabela').DataTable({


        "columnDefs": [
                 {
                     "targets": [ 2 ],
                     "visible": false,
                     "searchable": true
                 }

                 ],

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


 var parametroEscola = parametroUrl("escola");

    var parametroTurma = parametroUrl("turma");


    $('#filtroEscola').on('change', function(){ // Este aqui muda o conteúdo com base na mudança do select
       table
       .search($(this).val()).draw();
      });





// escolas
     table.on('click','.btnEditar',function(){


      $tr=$(this).closest('tr');

      var data = table.row($tr).data();
      data.splice(14,1);
      function FormataStringData(data) {
        var dia  = data.split("/")[0];
        var mes  = data.split("/")[1];
        var ano  = data.split("/")[2];

        return ano + '-' + ("0"+mes).slice(-2) + '-' + ("0"+dia).slice(-2);
        // Utilizo o .slice(-2) para garantir o formato com 2 digitos.
      }


      

      $('#edit_rm').val(data[0]);
      $('#edit_nome').val(data[1]);
      $('#edit_escola').val([data[2]]);
      $('#edit_dn').val(FormataStringData(data[5]));
      $('#edit_telefone').val(data[6]);
      $('#edit_celular').val(data[7]);
      $('#edit_cpf').val(data[8]);
      $('#edit_email').val(data[4]);

      $('#edit_rg').val(data[9]);
      $('#edit_cep').val(data[10]);
      $('#edit_muninc').val(data[11]);
      $('#edit_endereco').val(data[12]);
      $('#edit_bairro').val(data[13]);

    $('#editarFunc').modal('show');
    });




  }); // fim document.ready
</script>


</body>
</html>
