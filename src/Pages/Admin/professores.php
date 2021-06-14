
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


<div id="RegistrarProfessor" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Registrar um novo professor</h4>          </div>
          <div class="modal-body registrarProfessor_corpo">
          <form action="../../Scripts/Manipulations/Admin/Professores/registrarProfessor.php" method="POST" id="modalform">
    <label for="rm">RM</label>
    <input required  type="large_number" id="rm" name="rm">
    <br>

    <label for="nome">Nome</label>
    <input required  type="text" id="nome" name="nome">
    <br>



	<label for="dn">Data Nascimento</label>
	<input required  maxlength="8" OnKeyPress="formatar('##-##-####', this)" type="date"id="dn" name="dn">
    <br>
    <label for="celular">Celular</label>
  <input required  maxlength="13" OnKeyPress="formatar('## #####-####', this)" type="text" id="celular" name="celular">
    <br>
    <label for="telefone">Telefone</label>
  <input required  maxlength="12" OnKeyPress="formatar('## ####-####', this)" type="text" id="telefone" name="telefone">
    <br>
    <label for="email">E-Mail</label>
    <input required  type="email" id="email" name="email">
    <br>
    <label for="cpf">CPF</label>
  <input required  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" type="text" id="cpf" name="cpf">
    <br>
 <label for="rg">RG</label>
  <input required  maxlength="13" OnKeyPress="formatar('##.###.###-##', this)" type="text" id="rg" name="rg">

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
    <label for="cep">CEP</label>
    <input required  maxlength="9" OnKeyPress="formatar('#####-###', this)" type="text"id="cep" name="cep">
	<br>


<hr class="form-divide">
<input type="hidden" value=1 id="numEscolas" name="numEscolas">
<br>
<fieldset id="RegFirstField">
<fieldset class="fieldEscolas">



<label for="registrarProfEscola0">Escola</label>
<select required class="form-control" name="registrarProfEscola0" id="registrarProfEscola0">
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

<label for="registrarProfTurma0">Turma</label>
<select required class="form-control" name="registrarProfTurma0" id="registrarProfTurma0">
  <option hidden disabled selected value="">Selecione uma turma</option>


</select>
<br>



<label for="registrarProfMateria0">Matéria</label>
<select required class="form-control" name="registrarProfMateria0" id="registrarProfMateria0">
  <option hidden disabled selected value="">Selecione uma matéria</option>

</select>
<br>
    <input  type="hidden" id="codigoescola0" name="codigoescola0">

    <input  type="hidden" id="codigoturma0" name="codigoturma0">



<hr style="border-width: 1.2px; border-color: #cecece">

<script>

  var add_len = 1;
  var add = 1;
  function addFilhos(){

    $(".fieldEscolas select").last().val()
  $('#RegFirstField .fieldEscolas')
  .clone()
  .appendTo('.RegNewFields')
  .attr("id","novoField"+ add_len)
  .each(function(){
var RegIDEscola = "registrarProfEscola"+ add_len;
var RegIDTurma = "registrarProfTurma"+ add_len;
var RegIDMateria ="registrarProfMateria"+ add_len;
var RegCodigoEscola = "codigoescola"+ add_len;
var RegCodigoTurma = "codigoturma"+ add_len;


    $('.RegNewFields #registrarProfEscola0')
    .attr("id",RegIDEscola)
    .attr("name",RegIDEscola)

    $('.RegNewFields #registrarProfTurma0')
    .attr("id",RegIDTurma)
    .empty()
    .attr("name",RegIDTurma)

    $('.RegNewFields #registrarProfMateria0')
    .attr("id",RegIDMateria)
    .empty()
    .attr("name",RegIDMateria)

     $('.RegNewFields #codigoescola0')
    .attr("id",RegCodigoEscola)
    .empty()
    .attr("name",RegCodigoEscola)
       $('.RegNewFields #codigoturma0')
    .attr("id",RegCodigoTurma)
    .empty()
    .attr("name",RegCodigoTurma)



    add++;
  add_len++;

$("#numEscolas").val(add);


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


      $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getEscolaID.php',
            type: 'post',
            data: {escola:reg_school},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $("#"+RegCodigoEscola).empty();


                for( var i = 0; i<len; i++){
                    var id = response[i][ 'escolaid'];
            $("#"+RegCodigoEscola).val(id);

                }


            }
            });   // aqui vai ajax para pegar codigo da escola

  });

// get alunos from turmas

$("#"+RegIDTurma).change(function(){


  var reg_turma = $("#"+RegIDTurma).val();




   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getMateria.php',
            type: 'post',
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $('#'+RegIDMateria).empty();
            $("#"+RegIDMateria).append("<option hidden selected> Selecione uma materia</option>");


                for( var i = 0; i<len; i++){
                    var nome = response[i]['nome'];
                    var abreviacao = response[i]['abreviacao'];

                    $("#"+RegIDMateria).append("<option value='"+abreviacao+"'>"+nome+"</option>");

                }


            }
            });   // aqui vai ajax


        $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getTurmaID.php',
            type: 'post',
            data: {turma:reg_turma},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $("#"+RegCodigoTurma).empty();


                for( var i = 0; i<len; i++){
                    var id = response[i]['turmaid'];
            $("#"+RegCodigoTurma).val(id);

                }


            }
            });   // aqui vai ajax para pegar codigo da escola



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
    <input  type="hidden" id="edit_rm" name="edit_rm">

    <label for="edit_nome">Nome</label>
    <input required  type="text" id="edit_nome" name="edit_nome">
    <br>
	<label for="edit_dn">Data Nascimento</label>
	<input required   value="2020-06-06" type="date" id="edit_dn" name="edit_dn">
    <br>
  <label for="edit_celular">Celular</label>
    <input required  maxlength="13" OnKeyPress="formatar('## #####-####', this)"type="text" id="edit_celular" name="edit_celular" >
    <br>
  <label for="edit_telefone">Telefone</label>
    <input required  maxlength="12" OnKeyPress="formatar('## ####-####', this)" type="text" id="edit_telefone" name="edit_telefone" >
    <br>
        <label for="edit_email">E-Mail</label>
    <input required  type="email" id="edit_email" name="edit_email">
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


<!-- MODAL Modal materias -->


<div id="profMaterias" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">


      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Materias lecionadas</h4>
        </div>
        <div class="modal-body">


 <form class="formMaterias"  id="formMaterias" >

   <input type="hidden" name="" id="materiaRM" value="">




   <table class="tabelaMaterias table table-bordered display">
     <thead>
       <tr>

     <th>Matéria</th>
     <th>Apagar</th>
   </tr>
     </thead>
     <tbody id="materias">

     </tbody>

   </table>




<label for="materiaESCOLA"> Escola</label>
<select required class="form-control" name="materiaESCOLA" id="materiaESCOLA">
  <option hidden disabled selected value="">Selecione uma escola</option>
  <?php
  $queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
  while($row = mysqli_fetch_array($queryEscolas))
  {
  echo '<option value="'.$row['Escola_Codigo'].'">' . $row['Escola_Nome'] . '</td>';
  };

  ?>
</select>

<br>

<label for="materiaTURMA">Turma</label>
<select required class="form-control" name="materiaTURMA" id="materiaTURMA">


</select>
<br><br>
<select required class="form-control" name="materiaDISCIPLINA" id="materiaDISCIPLINA">


</select>
<br><br>

      </form>



        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="registrarMateria" name="registrarMateria" >Registrar</button>

          <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
        </div>
      </div>

    </div>
  </div>
<!-- FIM Modal materias -->








<!-- MODAL Modal turmas -->


<div id="profTurmas" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">


      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Turmas vinculadas</h4>
        </div>
        <div class="modal-body">


 <form class="formTurmas"  id="formTurmas" >
   <table class="tabelaTurmas table table-bordered display">
     <thead>
       <tr>

     <th>Turma</th>
     <th>Apagar</th>
   </tr>
     </thead>
     <tbody class="turmas">

     </tbody>

   </table>


<label for="turmaESCOLA"> Escola</label>
<select required class="form-control" name="turmaESCOLA" id="turmaESCOLA">

</select>

<br><br>


      </form>



        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-danger apagar">Editar</button>

          <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
        </div>
      </div>

    </div>
  </div>
<!-- FIM Modal turmas -->









<!-- MODAL Modal escolas -->


<div id="profEscolas" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">


      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Turmas vinculadas</h4>
        </div>
        <div class="modal-body">


 <form class="formEscolas"  id="formEscolas" >


        <table class="tabelaEscolas table table-bordered display">
          <thead>
            <tr>
         <th style="width:11% !important">Código</th>
          <th>Escola</th>
          <th>Apagar</th>
        </tr>
          </thead>
          <tbody class="escolas">

          </tbody>

        </table>

      </form>



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
    <th>Celular</th>
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

echo "<td>" . $row['Prof_Celular'] . "</td>";
echo "<td>" . $row['Prof_Email'] . "</td>";

echo "<td>" . $row['Prof_CPF'] . "</td>";
echo "<td>" . $row['Prof_RG'] . "</td>";
echo "<td>" . $row['Prof_CEP'] . "</td>";
echo "<td>" . $row['Prof_Cidade'] . "</td>";
echo "<td>" . $row['Prof_Endereco'] . "</td>";
echo "<td>" . $row['Prof_Bairro'] . "</td>";
echo '<td><a class="btn-sm  btn-secondary text-white btnEditar" id="editar" href="#"> <i class="fa fa-pen"></i>   </a>
&nbsp;
  <a class="btn-sm btn-danger btnProfessores" name="professores" href="#"><i class="fa fa-graduation-cap"></i></a>
  <a class="btn-sm btn-success btnEscolas" name="escolas" href="#"><i class="fa fa-school"></i></a>
  <a class="btn-sm btn-info btnMaterias" name="materias" href="#"><i class="fa fa-book"></i></a>
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
                    if(isset($_SESSION['registro_duplicado'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro! Dados duplicados em Escolas!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_duplicado']);

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



function criarMateria(rm) {

var escola=  $("#materiaESCOLA").val();
var turma = $("#materiaTURMA").val();
var materia = $("#materiaDISCIPLINA").val();

  $.ajax({
             url: '../../Scripts/Manipulations/Admin/Professores/registrarMateria.php',
             type: 'POST',
             data: {rmprof:rm,
               escolaprof: escola,
               turmaprof: turma,
               materiaprof: materia},
             success:function(response){
               toastr.success('Disciplina registrada!');
                 $("#profMaterias").modal("hide");

 },
             error: function(response) {
               toastr.error('Erro ao registrar! ');

             }
 });







}


///

function apagarMateria(rm,turma){


var rowId = event.target.parentNode.parentNode.id;
              var dataT =
document.getElementById(rowId).querySelectorAll(".row-data");

              var materia = dataT[0].innerHTML;


 $.ajax({
           url: '../../Scripts/Manipulations/Admin/Professores/excluirMateria.php',
           type: 'POST',
           data: {rmprof:rm,
          turmaprof: turma,
          materiaprof: materia},
           dataType: 'text',
           success:function(response){

                toastr.success('Matéria excluida!');
              $("#profMaterias").modal('hide');

 },
           error: function(response) {
             toastr.error('Erro ao deletar!');

           }
 });




};







////////////////////////////
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



// get Turmas
$("#registrarProfEscola0").change(function(){

  var escolanome = $('#registrarProfEscola0').val();


   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){
              var turma = response[0]['turma'];

                var len = response.length;

            $('#registrarProfTurma0').empty();
            $("#registrarProfTurma0").append("<option hidden selected> Selecione uma turma</option>");


                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    $("#registrarProfTurma0").append("<option value='"+turma+"'>"+turma+"</option>");

                }


            }
            });   // aqui vai ajax

     $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getEscolaID.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $("#codigoescola0").empty();


                for( var i = 0; i<len; i++){
                    var id = response[i]['escolaid'];
            $("#codigoescola0").val(id);

                }


            }
            });   // aqui vai ajax para pegar codigo da escola

  });

// get alunos from turmas



    $("#materiaTURMA").change(function(){

      var turmaid = $(this).val();
      var rm = $("#materiaRM").val();
       $.ajax({

     url: '../../Scripts/Manipulations/Admin/Professores/getProfMaterias.php',
                type: 'post',
                data: {turma:turmaid,
                profrm: rm},
                dataType: 'json',
                success:function(response){
                    var len = response.length;

$("#materias").empty();

                    for( var i = 0; i<len; i++){
                        var materia = response[i]['materia'];

                        $("#materias").append("<tr id="+i+"><th scope='row' style='text-align:center; font-size: 20px;' class='row-data'>"+materia+"</td><td style='width: 10%; text-align:center'><button type='button' class='btn-sm btn-danger' onclick='apagarMateria("+rm+","+turmaid+")'><i class='fa fa-trash'></i></button></td></tr>");
                    }


                }
                });   // aqui vai ajax

                $.ajax({

              url: '../../Scripts/Manipulations/Admin/Global/getMateria.php',
                         type: 'post',
                         data: {turma:turmaid,
                         profrm: rm},
                         dataType: 'json',
                         success:function(response){
                             var len = response.length;

           $("#materiaDISCIPLINA").empty();
           $("#materiaDISCIPLINA").append("<option hidden disabled selected> Selecione uma disciplina</option>");

                             for( var i = 0; i<len; i++){
                                 var nome = response[i]['nome'];
                                 var abreviacao = response[i]['abreviacao'];
                $("#materiaDISCIPLINA").append("<option value='"+abreviacao+"'>"+nome+"</option>");


                         }

                       }
                         });   // aqui vai ajax

      });




////////////////////




$("#registrarProfTurma0").change(function(){
  var valorturma = $(this).val();



   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getMateria.php',
            type: 'post',
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $('#registrarProfMateria0').empty();
            $("#registrarProfMateria0").append("<option hidden selected> Selecione uma materia</option>");


                for( var i = 0; i<len; i++){
                    var nome = response[i]['nome'];
                    var abreviacao = response[i]['abreviacao'];

                    $("#registrarProfMateria0").append("<option value='"+abreviacao+"'>"+nome+"</option>");

                }


            }
            });   // aqui vai ajax


  $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getTurmaID.php',
            type: 'post',
            data: {turma:valorturma},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $("#codigoturma0").empty();


                for( var i = 0; i<len; i++){
                    var id = response[i]['turmaid'];
            $("#codigoturma0").val(id);

                }


            }
            });   // aqui vai ajax para pegar codigo da escola

  });







 table.on('click','.btnTurmas',function(){

 $tr=$(this).closest('tr');

  var data = table.row($tr).data();
  var RM = data[0];

 $.ajax({
            url: '../../Scripts/Manipulations/Admin/Resp/listagemEscolas.php',
            type: 'POST',
            data: {rmresp:RM},
            dataType: 'json',
            success:function(response){

                var len = response.length;



            $(".filhos").empty();


                 for( var i = 0; i<len; i++){
                    var escola = response[i]['escola'];
                    var turma = response[i]['turma'];
                    var materia = response[i]['materia'];



  $(".filhos").append("<tr id="+i+"><th scope='row' class='row-data'>"+escola+"</td><td class='row-data'>"+turma+"</td><td class='row-data'>"+materia+"</td><td><button type='button' class='btn btn-danger' onclick='apagarTurma("+RM+")'><i class='fa fa-trash'></i></button></td></tr>");



                }

            }

        });


$("#profTurmas").modal('show');
});







 table.on('click','.btnEscolas',function(){

 $tr=$(this).closest('tr');

  var data = table.row($tr).data();
  var RM = data[0];

 $.ajax({
            url: '../../Scripts/Manipulations/Admin/Resp/listagemEscolas.php',
            type: 'POST',
            data: {rmresp:RM},
            dataType: 'json',
            success:function(response){

                var len = response.length;



            $(".filhos").empty();


                 for( var i = 0; i<len; i++){
                    var escola = response[i]['escola'];
                    var turma = response[i]['turma'];
                    var materia = response[i]['materia'];



  $(".filhos").append("<tr id="+i+"><th scope='row' class='row-data'>"+escola+"</td><td class='row-data'>"+turma+"</td><td class='row-data'>"+materia+"</td><td><button type='button' class='btn btn-danger' onclick='apagarTurma("+RM+")'><i class='fa fa-trash'></i></button></td></tr>");



                }

            }

        });


$("#profEscolas").modal('show');
});





 table.on('click','.btnMaterias',function(){

 $tr=$(this).closest('tr');

  var data = table.row($tr).data();
  var RM = data[0];
$("#materiaRM").val(RM);




$("#registrarMateria").attr('onclick','criarMateria('+RM+')');



 $.ajax({
            url: '../../Scripts/Manipulations/Admin/Professores/getProfEscolas.php',
            type: 'POST',
            data: {profrm:RM},
            dataType: 'json',
            success:function(response){

                var len = response.length;



            $("#materiaESCOLA").empty();
            $("#materiaTURMA").empty();
            $("#materias").empty();
            $("#materiaDISCIPLINA").empty();

            $("#materiaESCOLA").append("<option hidden selected> Selecione uma escola</option>");


                 for( var i = 0; i<len; i++){
                    var escola = response[i]['escola'];
                    var id = response[i]['id'];




                            $("#materiaESCOLA").append("<option value='"+id+"'>"+escola+"</option>");

                }

            }

        });


$("#profMaterias").modal('show');
});

     table.on('click','.btnEditar',function(){


      $tr=$(this).closest('tr');

      var data = table.row($tr).data();
      data.splice(12,1);
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
      $('#edit_celular').val(data[4]);
      $('#edit_email').val(data[5]);
      $('#edit_telefone').val(data[3]);
      $('#edit_cpf').val(data[6]);
      $('#edit_cep').val(data[8]);
      $('#edit_muninc').val(data[9]);
      $('#edit_endereco').val(data[10]);
      $('#edit_rg').val(data[7]);
      $('#edit_bairro').val(data[11]);

    $('#EditarProfessor').modal('show');
    });










//
$("#materiaESCOLA").change(function(){

  var escolanome = $(this).val();
var profrm = $("#materiaRM").val();
   $.ajax({

 url: '../../Scripts/Manipulations/Admin/Professores/getProfTurmas.php',
            type: 'post',
            data: {escola:escolanome,
                    profrm: profrm},
            dataType: 'json',
            success:function(response){

                var len = response.length;

            $('#materiaTURMA').empty();
            $("#materias").empty();
            $("#materiaDISCIPLINA").empty();

            $("#materiaTURMA").append("<option hidden selected> Selecione uma turma</option>");


                for( var i = 0; i<len; i++){
                    var turma = response[i]['turma'];
                    var id = response[i]['id'];
                    $("#materiaTURMA").append("<option value='"+id+"'>"+turma+"</option>");
                }


            }
            });   // aqui vai ajax

     $.ajax({

 url: '../../Scripts/Manipulations/Admin/Global/getEscolaID.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){

                var len = response.length;



                for( var i = 0; i<len; i++){
                    var id = response[i]['escolaid'];
                }


            }
            });   // aqui vai ajax para pegar codigo da escola

  });



///









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
