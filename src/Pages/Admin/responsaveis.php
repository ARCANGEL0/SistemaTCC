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
>
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
<link rel="stylesheet" href="../../assets/Resp/css/style.css">


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
.escolas{

padding-top: 10px;
  max-height: 0;
  overflow: hidden;
 align-content: center;
 align-items:center;
 justify-content: center;
  transition: max-height 0.2s ease-out;
}


.wrapper{
width: 150vw;}


#tabelaResp_filter {
  margin-top: 20px;
  margin-left: -892px;}
#tabelaResp_paginate{
  margin-left: 810px;
}
.fa-pen{
  margin-right: -3px;
}
.form-divide{
border-width: 1.5px;
border-color: black;
}

#addFilho {

  float: right;

}

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
          ADMIN
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Logado como ADMINISTRADOR
                </h3>
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

<div id="registrarResp" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Registrar Responsável</h4>          </div>
          <div class="modal-body">
          <form action="../../Scripts/Manipulations/Admin/Resp/registrarResp.php" method="POST" id="modalform">


            <label for="rm">RM </label>
    <input required class="form-control" type="text" id="rm" name="rm">

<br>

    <label for="nome">Nome</label>
    <input required  class="form-control" type="text" id="nome" name="nome">
    <br>


<label for="dn">Data Nascimento</label>
  <input required class="form-control"   type="date" id="dn" name="dn">
    <br>
    <label for="email">E-Mail</label>
    <input required class="form-control"  type="email" id="email" name="email">
    <br>
     <label for="telefone">Telefone</label>
    <input required class="form-control"  maxlength="12" OnKeyPress="formatar('## ####-####', this)" type="text" id="telefone" name="telefone">
    <br>
     <label for="cel">Celular</label >
    <input required class="form-control"  maxlength="13" OnKeyPress="formatar('## #####-####', this)" type="text" id="cel" name="cel">
  <br>
    <label for="rg">RG</label>
    <input required class="form-control"  maxlength="13" OnKeyPress="formatar('##.###.###-##', this)"type="text" id="rg" name="rg" >
    <br>
   <label for="cpf">CPF</label>
    <input required class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"type="text" id="cpf" name="cpf" >
    <br>

      <label for="cep">CEP</label>
    <input required class="form-control"  maxlength="9" OnKeyPress="formatar('#####-###', this)" type="text"id="cep" name="cep">
  <br>
    <label for="muninc">Munincípio</label>
    <input required class="form-control"  type="text" id="muninc" name="muninc">
    <br>
    <label for="endereco">Endereço</label>
    <input required class="form-control"  type="text" id="endereco" name="endereco">
    <br><br>

    <h3>Dependentes</h3>
<hr class="form-divide">
<input type="hidden" value=1 id="numFilhoReg" name="numFilhoReg">
<br>
<fieldset id="RegFirstField">
<fieldset class="RegFieldFilhos">



<label for="registrarAlunoEscola0">Escola</label>
<select required class="form-control" name="registrarAlunoEscola0" id="registrarAlunoEscola0">
  <option hidden disabled selected value="">Selecione uma escola</option>
  <?php
  $queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
  while($row = mysqli_fetch_array($queryEscolas))
  {
  echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
  };

  ?>
</select>

<br>

<label for="registrarAlunoTurma0">Turma</label>
<select required class="form-control" name="registrarAlunoTurma0" id="registrarAlunoTurma0">
  <option hidden disabled selected value="">Selecione uma turma</option>


</select>
<br>



<label for="registrarAluno0">Aluno</label>
<select required class="form-control" name="registrarAluno0" id="registrarAluno0">
  <option hidden disabled selected value="">Selecione um aluno</option>

</select>
<br>

<hr style="border-width: 1.2px; border-color: #cecece">

<script>

  var add_len = 1;
  var add_filhos = 1;
  function addFilhos(){

    $(".RegFieldFilhos select").last().val()
  $('#RegFirstField .RegFieldFilhos')
  .clone()
  .appendTo('.RegNewFields')
  .attr("id","novoField"+ add_len)
  .each(function(){
var RegIDEscola = "registrarAlunoEscola"+ add_len;
var RegIDTurma = "registrarAlunoTurma"+ add_len;
var RegIDAluno ="registrarAluno"+ add_len;

    $('.RegNewFields #registrarAlunoEscola0')
    .attr("id",RegIDEscola)
    .attr("name",RegIDEscola)

    $('.RegNewFields #registrarAlunoTurma0')
    .attr("id",RegIDTurma)
    .empty()
    .attr("name",RegIDTurma)
    
    $('.RegNewFields #registrarAluno0')
    .attr("id",RegIDAluno)
    .empty()
    .attr("name",RegIDAluno)

    add_filhos++;
  add_len++;

$("#numFilhoReg").val(add_filhos);


$("#"+RegIDEscola).change(function(){

  var reg_school = $("#"+RegIDEscola).val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:reg_school},
            dataType: 'json',
            success:function(response){
              var turma = response[0]['turma'];

                var len = response.length;

            $("#"+RegIDTurma).empty();
            $("#"+RegIDTurma).append("<option hidden selected> Selecione uma turma</option>");


                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    $("#"+RegIDTurma).append("<option value='"+turma+"'>"+turma+"</option>");

                }


            }
            });   // aqui vai ajax

  });

// get alunos from turmas

$("#"+RegIDTurma).change(function(){

  var reg_turmas = $("#"+RegIDTurma).val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getAlunosfromTurmas.php',
            type: 'post',
            data: {aluno:reg_turmas},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $("#"+RegIDAluno).empty();
            $("#"+RegIDAluno).append("<option hidden selected> Selecione um aluno</option>");


                for( var i = 0; i<len; i++){
                    var aluno = response[i]['name'];
                    var alunorm = response[i]['rm'];

                    $("#"+RegIDAluno).append("<option value='"+alunorm+"'>"+aluno+"</option>");

                }


            }
            });   // aqui vai ajax

  });





  });


}

</script>


</fieldset>
</fieldset>

<fieldset class="RegNewFields">

</fieldset>
<div class="addField">

  <button class="btn btn-outline-info" type="button" onclick="addFilhos();" id="addFilho"  name="addFilho"><i class="fa fa-plus"></i></button>

</div>

    </div>
          <div class="modal-footer">
          <button type="submit" name="registrar" id="registrar" class="btn btn-success">Salvar</button>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </form>
          </div>
    </div>

      </div>
    </div>


<!-- FIM MODAL REGISTRAR -->


<!-- MODAL EDITAR -->
<div id="EditarResp" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Editar Responsável</h4>          </div>
          <div class="modal-body">
          <form action="../../Scripts/Manipulations/Admin/Resp/editarResp.php" method="POST" id="modalform">
    <input class="form-control" type="hidden" id="edit_rm" name="edit_rm">


    <label for="edit_nome">Nome</label>
    <input  class="form-control" type="text" id="edit_nome" name="edit_nome">
    <br>


<label for="edit_dn">Data Nascimento</label>
  <input class="form-control"   type="date" id="edit_dn" name="edit_dn">
    <br>
    <label for="edit_email">E-Mail</label>
    <input class="form-control"  type="text" id="edit_email" name="edit_email">
    <br>
     <label for="edit_telefone">Telefone</label>
    <input class="form-control"  maxlength="12" OnKeyPress="formatar('## ####-####', this)" type="text" id="edit_telefone" name="edit_telefone">
    <br>
     <label for="edit_cel">Celular</label >
    <input class="form-control"  maxlength="13" OnKeyPress="formatar('## #####-####', this)" type="text" id="edit_cel" name="edit_cel">
  <br>
    <label for="edit_rg">RG</label>
    <input class="form-control"  maxlength="13" OnKeyPress="formatar('##.###.###-##', this)"type="text" id="edit_rg" name="edit_rg" >
    <br>
   <label for="edit_cpf">CPF</label>
    <input class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"type="text" id="edit_cpf" name="edit_cpf" >
    <br>

      <label for="edit_cep">CEP</label>
    <input class="form-control"  maxlength="9" OnKeyPress="formatar('#####-###', this)" type="text"id="edit_cep" name="edit_cep">
  <br>
    <label for="edit_muninc">Munincípio</label>
    <input class="form-control"  type="text" id="edit_muninc" name="edit_muninc">
    <br>
    <label for="edit_endereco">Endereço</label>
    <input class="form-control"  type="text" id="edit_endereco" name="edit_endereco">
    <br><br>

    <h3>Dependentes</h3>


    </div>
          <div class="modal-footer">
          <button type="submit" name="salvarEdicao" id="salvarEdicao" class="btn btn-success">Salvar</button>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </form>
          </div>
    </div>

      </div>
    </div>

<!-- FIM MODAL EDITAR -->


<!-- MODAL FILHOS -->


<div id="modalFilhos" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">


      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Dependentes</h4>
        </div>
        <div class="modal-body">

        <form class="formFilhos"  id="formFilhos" >


        <table class="tabelaFilhos table table-bordered display">
          <thead>
            <tr>
              <th>RM</th>
          <th>Nome</th>
          <th>Escola</th>
          <th>Apagar</th>
        </tr>
          </thead>
          <tbody class="filhos">

          </tbody>

        </table>

<br>
<hr class="form-divide">
<input type="hidden" value=1 id="numFilho" name="numFilho">
<br>
<fieldset id="firstFieldFilhos">
<fieldset class="fieldFilhos">



<label for="editarAlunoEscola0">Escola</label>
<select class="form-control editescola" name="editarAlunoEscola0" id="editarAlunoEscola0">
  <option hidden disabled selected value="">Selecione uma escola</option>
  <?php
  $queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
  while($row = mysqli_fetch_array($queryEscolas))
  {
  echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
  };

  ?>
</select>

<br>

<label for="editarAlunoTurma0">Turma</label>
<select class="form-control editturma" name="editarAlunoTurma0" id="editarAlunoTurma0">
  <option hidden disabled selected value="">Selecione uma turma</option>


</select>
<br>



<label for="editarAluno0">Aluno</label>
<select class="form-control editaluno" name="editarAluno0" id="editarAluno0">
  <option hidden disabled selected value="">Selecione um aluno</option>

</select>
<br>

<hr style="border-width: 1.2px; border-color: #cecece">

<script>



  var len = 1;
  var filhos = 1;
  function editFilhos(){


 $(".fieldFilhos select").last().val()
  $('#firstFieldFilhos .fieldFilhos')
  .clone()
  .appendTo('.newFields')
  .attr("id","novoField"+ len)
  .each(function(){
var idEscola = "editarAlunoEscola"+ len;
var idTurma = "editarAlunoTurma"+ len;
var idAluno ="editarAluno"+ len;

    $('.newFields #editarAlunoEscola0')
    .attr("id",idEscola)
    .attr("name",idEscola)

    $('.newFields #editarAlunoTurma0')
    .attr("id",idTurma)
    .empty()
    .attr("name",idTurma)
    
    $('.newFields #editarAluno0')
    .attr("id",idAluno)
    .empty()
    .attr("name",idAluno)

    filhos++;
  len++;

$("#numFilho").val(filhos);

$("#"+idEscola).change(function(){

  var school = $("#"+idEscola).val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:school},
            dataType: 'json',
            success:function(response){
              var turma = response[0]['turma'];

                var len = response.length;

            $("#"+idTurma).empty();
            $("#"+idTurma).append("<option hidden selected> Selecione uma turma</option>");


                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    $("#"+idTurma).append("<option value='"+turma+"'>"+turma+"</option>");

                }


            }
            });   // aqui vai ajax

  });

// get alunos from turmas

$("#"+idTurma).change(function(){

  var turmass = $("#"+idTurma).val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getAlunosfromTurmas.php',
            type: 'post',
            data: {aluno:turmass},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $("#"+idAluno).empty();
            $("#"+idAluno).append("<option hidden selected> Selecione um aluno</option>");


                for( var i = 0; i<len; i++){
                    var aluno = response[i]['name'];
                                        var alunorm = response[i]['rm'];

                    $("#"+idAluno).append("<option value='"+alunorm+"'>"+aluno+"</option>");

                }


            }
            });   // aqui vai ajax

  });





  });


}

</script>


</fieldset>
</fieldset>

<fieldset class="newFields">

</fieldset>
<div class="addField">

  <button class="btn btn-outline-info" type="button" onclick="editFilhos();" id="editFilho"  name="editFilho"><i class="fa fa-plus"></i></button>

</div>
        </div>
        <div class="modal-footer">
        <button type="button" name="registrarFilhos" id="registrarFilhos" class="btn btn-success">Ok</button>

          <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
          </form>
        </div>
      </div>

    </div>
  </div>
<!-- FIM MODAL FILHOS -->
  <!-- Content Wrapper. Início do conteudo -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Responsáveis</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <button class="btn btn-success" type="button" name="button" data-toggle="modal" data-target="#registrarResp"><i class="fa fa-plus"></i> &nbsp;  Cadastrar um novo Responsável</button>
<br><br>

 <select class="btn btn-outline-info" name="filtroCidade" id="filtroCidade">
          <option selected value="">Todas os munincípios</option>

<?php
$queryEscolas =  mysqli_query($conn,"SELECT DISTINCT Resp_Cidade FROM responsáveis");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Resp_Cidade'].'">' . $row['Resp_Cidade'] . '</td>';
};

?>

</select>
        <table class="table table-bordered display" id="tabelaResp" width="100%" cellspacing="0">
          <form action="" id="myform">
        <thead>
            <tr>
                <th>RM</th>
		        <th>Nome</th>
		        <th>Data de Nascimento</th>
		        <th>Email</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>RG</th>
		        <th>CPF</th>
            <th>CEP</th>
                <th>Cidade</th>
<th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
      <tbody>
<?php
$result =  mysqli_query($conn,"SELECT * FROM responsáveis");
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['RM_Responsável'] . "</td>";
echo "<td>" . $row['Resp_Nome'] . "</td>";
echo "<td>" . date("d/m/Y", strtotime($row['Resp_DataDeNascimento'])) . "</td>";
echo "<td>" . $row['Resp_Email'] . "</td>";
echo "<td>" . $row['Resp_Telefone'] . "</td>";
echo "<td>" . $row['Resp_Celular'] . "</td>";
echo "<td>" . $row['Resp_RG'] . "</td>";
echo "<td>" . $row['Resp_CPF'] . "</td>";
echo "<td>" . $row['Resp_CEP'] . "</td>";
echo "<td>" . $row['Resp_Cidade'] . "</td>";
echo "<td>" . $row['Resp_Endereco'] . "</td>";


echo '<td><a class="btn-sm  btn-secondary text-white btnEditar" id="editar" href="#"> <i class="fa fa-pen"></i>   </a>
&nbsp;
  <a class="btn-sm btn-info btnFilhos" name="filhos" href="#" ><i class="fa fa-child"></i></a>

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

<!-- AQUI SÃO OS EVENTOS DE SESSÃO PARA REGISTRO DOS ALUNOS -->
<!-- Se o aluno for registrado, o php irá redirecionar para esta página com a sessão de registro, exibindo um alerta de succeso -->
<?php
          if(isset($_SESSION['resp_registrado'])):
          ?>
        <script>

        $(function () {
          $(document).ready(function(){
                toastr.success('Responsável registrado com sucesso!');
              });
            });
         </script>
          <?php
          endif;
          unset($_SESSION['resp_registrado']);

          ?>

<!-- Caso ocorra um erro, irá voltar com a sessão erro, e exibir o alerta de erro -->
          <?php
                    if(isset($_SESSION['registro_erro'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o Responsável!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro']);

                    ?>


<!-- Mesma coisa, mas agora para atualização dos Alunos -->

<!-- Verificação de registros já existentes -->
  <?php
                    if(isset($_SESSION['registro_erro_rm'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o Responsável!\n\n\n RM já cadastrado!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro_rm']);

                    ?>


<?php
                    if(isset($_SESSION['registro_erro_cpf'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o Responsável!\n\n\n CPF já cadastrado!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro_cpf']);

                    ?>

                    <?php
                    if(isset($_SESSION['registro_erro_rg'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o Responsável!\n\n\n RG já cadastrado!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro_rg']);

                    ?>

                    <?php
                    if(isset($_SESSION['registro_erro_email'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o Responsável!\n\n\n Email já cadastrado!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro_email']);

                    ?>

  <?php
                    if(isset($_SESSION['registro_erro_filhos'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar os dependentes do Responsável!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro_filhos']);

                    ?>
<!-- Este é para caso de sucesso -->

                  <?php
                        if(isset($_SESSION['resp_atualizado'])):
                      ?>
                          <script>

                    $(function () {
                        $(document).ready(function(){
                           toastr.success('Responsável atualizado com sucesso!');
                             });
                                          });
                          </script>
          <?php
                      endif;
                      unset($_SESSION['resp_atualizado']);

           ?>
<!-- E este, para caso de erro -->
           <?php
                     if(isset($_SESSION['erro_edit_Alunoresp_erro_atualizacao'])):
                     ?>
                   <script>

                   $(function () {
                     $(document).ready(function(){
                           toastr.error('Erro ao atualizar o Aluno!');
                         });
                       });
                    </script>
                     <?php
                     endif;
                     unset($_SESSION['resp_erro_atualizacao']);

                     ?>


<!-- SCRIPT PARA INICIAR O JS DE DATATABLES, E CRIAR UMA TABELA INTERATIVA -->

<script>

function criarFilho(RMresp) {

  alert(RMresp);
  alert(filhos);
var alunos = []; 

        $(".editaluno").each(function() {

 alunos.push(this.value); // nessa função, se adiciona os rms de cada input numa array

});



alert(alunos); // log de teste




}
  function apagarFilho(RMresp){


var rowId = event.target.parentNode.parentNode.id;
                var dataT = 
 document.getElementById(rowId).querySelectorAll(".row-data"); 
  
                var rm = dataT[0].innerHTML;
                var nome = dataT[1].innerHTML;
                var escola = dataT[2].innerHTML;
  


  $.ajax({
            url: '../../Scripts/Manipulations/Admin/Resp/apagarDependentes.php',
            type: 'POST',
            data: {rmresp:RMresp,
				   rmaluno: rm},
            dataType: 'text',
            success:function(response){

                 toastr.success('Dependente excluido!');
               $("#modalFilhos").modal('hide');

},
            error: function(response) {
              toastr.error('Erro ao deletar!');

            }
});




};


  $(function () {

  var table =  $('#tabelaResp').DataTable({

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




  $('#filtroCidade').on('change', function(){ // Este aqui muda o conteúdo com base na mudança do select
       table
       .search($(this).val()).draw();
      });
// ajax para pegar os dependentes do responsavel
   table.on('click','.btnFilhos',function(){

 $tr=$(this).closest('tr');

  var data = table.row($tr).data();
  var RM = data[0];


$("#registrarFilhos").attr('onclick','criarFilho('+RM+')');
  $.ajax({
            url: '../../Scripts/Manipulations/Admin/Resp/getDependentes.php',
            type: 'POST',
            data: {rmresp:RM},
            dataType: 'json',
            success:function(response){

                var len = response.length;



            $(".filhos").empty();


                 for( var i = 0; i<len; i++){
                    var escola = response[i]['escola'];
                    var nome = response[i]['nome'];
                    var rm = response[i]['rm'];



  $(".filhos").append("<tr id="+i+"><th scope='row' class='row-data'>"+rm+"</td><td class='row-data'>"+nome+"</td><td class='row-data'>"+escola+"</td><td><button type='button' class='btn btn-danger' onclick='apagarFilho("+RM+")'><i class='fa fa-trash'></i></button></td></tr>");



                }

            }

        });
      $('#modalFilhos').modal('show');

});


 

   // script para fazer a animação no modal de Dependentes

  $(".filhos").on('click','.collap',function() {
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
      content.style.margin = "-2px 0 10px 0";
      content.style.fontSize = "24px";

         }
  });

   // fim animação






// get Turmas
$("#editarAlunoEscola").change(function(){

  var escolanome = $('#editarAlunoEscola').val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){
              var turma = response[0]['turma'];

                var len = response.length;

            $('#editarAlunoTurma').empty();
            $("#editarAlunoTurma").append("<option hidden selected> Selecione uma turma</option>");


                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    $("#editarAlunoTurma").append("<option value='"+turma+"'>"+turma+"</option>");

                }


            }
            });   // aqui vai ajax

  });

// get alunos from turmas

$("#editarAlunoTurma").change(function(){

  var turma = $('#editarAlunoTurma').val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getAlunosfromTurmas.php',
            type: 'post',
            data: {aluno:turma},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $('#editarAluno').empty();
            $("#editarAluno").append("<option hidden selected> Selecione um aluno</option>");


                for( var i = 0; i<len; i++){
                    var aluno = response[i]['name'];
                    $("#editarAluno").append("<option value='"+aluno+"'>"+aluno+"</option>");

                }


            }
            });   // aqui vai ajax

  });



// get Turmas



// get Turmas
$("#registrarAlunoEscola0").change(function(){

  var escolanome = $('#registrarAlunoEscola0').val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){
              var turma = response[0]['turma'];

                var len = response.length;

            $('#registrarAlunoTurma0').empty();
            $("#registrarAlunoTurma0").append("<option hidden selected> Selecione uma turma</option>");


                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    $("#registrarAlunoTurma0").append("<option value='"+turma+"'>"+turma+"</option>");

                }


            }
            });   // aqui vai ajax

  });

// get alunos from turmas

$("#registrarAlunoTurma0").change(function(){

  var turma = $('#registrarAlunoTurma0').val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getAlunosfromTurmas.php',
            type: 'post',
            data: {aluno:turma},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $('#registrarAluno0').empty();
            $("#registrarAluno0").append("<option hidden selected> Selecione um aluno</option>");


                for( var i = 0; i<len; i++){
                    var aluno = response[i]['name'];
                    var alunorm = response[i]['rm'];

                    $("#registrarAluno0").append("<option value='"+alunorm+"'>"+aluno+"</option>");

                }


            }
            });   // aqui vai ajax

  });
/////






// get Turmas
$("#editarAlunoEscola0").change(function(){

  var escolanome = $('#editarAlunoEscola0').val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){
              var turma = response[0]['turma'];

                var len = response.length;

            $('#editarAlunoTurma0').empty();
            $("#editarAlunoTurma0").append("<option hidden selected> Selecione uma turma</option>");


                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    $("#editarAlunoTurma0").append("<option value='"+turma+"'>"+turma+"</option>");

                }


            }
            });   // aqui vai ajax

  });

// get alunos from turmas

$("#editarAlunoTurma0").change(function(){

  var turma = $('#editarAlunoTurma0').val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getAlunosfromTurmas.php',
            type: 'post',
            data: {aluno:turma},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $('#editarAluno0').empty();
            $("#editarAluno0").append("<option hidden selected> Selecione um aluno</option>");


                for( var i = 0; i<len; i++){
                    var aluno = response[i]['name'];
                    var alunorm = response[i]['rm'];

                    $("#editarAluno0").append("<option value='"+alunorm+"'>"+aluno+"</option>");

                }


            }
            });   // aqui vai ajax

  });


// get Turmas

   // modal Editar


     table.on('click','.btnEditar',function(){

      $tr=$(this).closest('tr');

      var data = table.row($tr).data();
      function FormataStringData(data) {
        var dia  = data.split("/")[0];
        var mes  = data.split("/")[1];
        var ano  = data.split("/")[2];

        return ano + '-' + ("0"+mes).slice(-2) + '-' + ("0"+dia).slice(-2);
        // Utilizo o .slice(-2) para garantir o formato com 2 digitos.
      }

      $('#edit_rm').val(data[0])
      $('#edit_nome').val(data[1]);
      $('#edit_dn').val(FormataStringData(data[2]));
      $('#edit_email').val(data[3]);
      $('#edit_telefone').val(data[4]);
      $('#edit_cel').val(data[5]);
      $('#edit_rg').val(data[6]);
      $('#edit_cpf').val(data[7]);
      $('#edit_cep').val(data[8]);
      $('#edit_muninc').val(data[9]);
      $('#edit_endereco').val(data[10]);





    $('#EditarResp').modal('show');

    });



  });
//essa função pega o ID da turma apos selecionar ela






</script>


</body>
</html>
