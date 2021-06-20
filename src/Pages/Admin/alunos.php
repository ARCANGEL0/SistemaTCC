
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


#tabelaAlunos_filter {
  margin-top: 20px;
  margin-left: -892px;}
#tabelaAlunos_paginate{
  margin-left: 810px;
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
RegistrarEscola
    }
    </script>


<!-- MODAL DE NOTAS -->


<div id="notasAluno" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Notas</h4>          </div>
          <div class="modal-body registrarAluno_corpo">
          <form action="#" method="POST" id="modalform">

  <input  type="hidden" id="Notasrm" name="Notasrm">
<select class="form-control" name="notasMateria" id="notasMateria">
      <option hidden disabled selected value="">Selecione uma escola</option>

    <?php
    $queryEscolas =  mysqli_query($conn,"SELECT * FROM disciplinas");
    while($row = mysqli_fetch_array($queryEscolas))
    {
    echo '<option value="'.$row['Materia_Nome'].'">' . $row['Materia_Nome'] . '</td>';
    };

    ?>

</select>
<br>
<div style="display: flex">
<select style="width: 60%" class="form-control" name="notasANO" id="notasANO">
      <option value="1">1º Ano</option>
      <option value="2">2º Ano</option>
      <option value="3">3º Ano</option>


</select>




</div>
<br><br><br>


    <div style="width: 50%;" class=" d-flex flex-wrap notas">


      <div style="height: 53px" class="form-control mb-4 flex-lg-row d-flex ">
     <h2 class=""> Nota 1: &nbsp;&nbsp;&nbsp;&nbsp;</h2>


     <div  >
<input type="number" min="0" step="0.1" max="10"  type="number" min="0" step="0.1" max="10" id="nota1" name='nota1' class='notasInput' value="0"></input>

     </div>

     </div>

       <div style="height: 53px" class="form-control mb-4 flex-lg-row d-flex  ">
     <h2 class=""> Nota 2: &nbsp;&nbsp;&nbsp;</h2>
     <div>
<input type="number" min="0" step="0.1" max="10"  id='nota2' name='nota2' class='notasInput' value="0"></input>


       </div>

     </div>

       <div style="height: 53px" class="form-control mb-4 flex-lg-row d-flex  ">
     <h2 class=""> Nota 3: &nbsp;&nbsp;&nbsp;</h2>
  <div>

    <input type="number" min="0" step="0.1" max="10"  id='nota3' name='nota3' class='notasInput' value="0"></input>

  </div>

     </div>

       <div style="height: 53px" class="form-control mb-4 flex-lg-row d-flex  ">
     <h2 class=""> Nota 4: &nbsp;&nbsp;&nbsp;</h2>
  <div>
    <input type="number" min="0" step="0.1" max="10"  id='nota4' name='nota4' class='notasInput' value="0"></input>


  </div>

     </div>

   <div  style="height: 53px; " class="form-control flex-lg-row d-flex ">
     <h2 class=""> Faltas: &nbsp;&nbsp;&nbsp;  </h2>
<div class="faltas"></div>



</div>
      <div  style="height: 53px; " class="form-control flex-lg-row d-flex ">
     <h2 class=""> Menção: &nbsp;&nbsp;&nbsp;  </h2>
<div >
  <input type="number" min="0" step="0.1" max="10"  id='mencao' name='mencao' class='notasInput' value="0"></input>


</div>

   </div>

   </div>

    </select>


</input>

    </div>
          <div class="modal-footer">
            <button type='button' id='criarFalta' style='margin-top: 4px; margin-left: 40px;' class='btn-sm btn-danger'><i class='fa fa-plus'></i>&nbsp;&nbsp;Registrar ausência</button>
          <button type="button" name="salvarNotas" id="salvarNotas" class="btn btn-success">Salvar</button>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>

            </form>

          </div>
    </div>

      </div>
    </div>
<!-- FIM MODAL NOTAS -->


<!-- MODAL DE REGISTRAR -->


<div id="registrarAluno" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Registrar um novo Aluno</h4>          </div>
          <div class="modal-body registrarAluno_corpo">
          <form action="../../Scripts/Manipulations/Admin/Alunos/registrarAluno.php" method="POST" id="modalform">
    <label for="rm">RM</label>
    <input required  type="large_number" id="rm" name="rm">
    <br>
    <label for="cpf">Escola</label>
    <select class="form-control" name="createAlunoEscola" id="createAlunoEscola">
      <option hidden disabled selected value="">Selecione uma escola</option>

    <?php
    $queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
    while($row = mysqli_fetch_array($queryEscolas))
    {
    echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
    };

    ?>

    </select>    <br>
    <label >Turma</label>
        <select class="form-control" required type="text" onchange="" id="createAlunoTurma" name="createAlunoTurma" >
          <option hidden disabled selected value="#">Escolha uma escola primeiro</option>


        </select><br>
        <label for="nome">Nome</label>
        <input required  type="text" id="nome" name="nome">
        <br>
    <label for="rg">RG</label>
    <input required  maxlength="13" OnKeyPress="formatar('##.###.###-##', this)"type="text" id="rg" name="rg" >
    <br>

	<label for="dn">Data Nascimento</label>
	<input  maxlength="8" OnKeyPress="formatar('##-##-####', this)" type="date" id="dn" name="dn">
    <br>
    <label for="email">E-Mail</label>
    <input required  type="text" id="email" name="email">
    <br>
      <label for="telefone">Telefone</label>
    <input required  maxlength="13" OnKeyPress="formatar('## #####-####', this)" type="text" id="telefone" name="telefone">
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

    <input placeholder="Escola ID" type="hidden" name="codigoescola" id="codigoescola">
    <input placeholder="Turma ID" type="hidden" name="codigoturma" id="codigoturma">


<!-- Precisa-se fazer com que os ID's sejam coletados através dos selects, o que dispensa o input -->


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
<div id="EditarAluno" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Editar Aluno</h4>          </div>
          <div class="modal-body registrarProfessor_corpo">
          <form action="../../Scripts/Manipulations/Admin/Alunos/editarAluno.php" method="POST" id="modalform">
    <input  type="hidden" id="edit_rm" name="edit_rm">


    <label for="edit_nome">Nome</label>
    <input required type="text" id="edit_nome" name="edit_nome">
    <br>
    <label for="cpf">Escola</label>
    <select class="form-control" name="editAlunoEscola" id="editAlunoEscola">
      <option hidden disabled selected value="">Selecione uma escola</option>

    <?php
    $queryEscolas =  mysqli_query($conn,"SELECT * FROM escolas");
    while($row = mysqli_fetch_array($queryEscolas))
    {
    echo '<option value="'.$row['Escola_Nome'].'">' . $row['Escola_Nome'] . '</td>';
    };

    ?>

    </select>    <br>
    <label >Turma</label>
        <select class="form-control" required type="text" onchange="" id="editAlunoTurma" name="editAlunoTurma" >
          <option hidden disabled selected value="#">Escolha uma escola primeiro</option>


        </select><br>

<label for="edit_dn">Data Nascimento</label>
  <input required   type="date" id="edit_dn" name="edit_dn">
    <br>
    <label for="edit_email">E-Mail</label>
    <input required  type="text" id="edit_email" name="edit_email">
    <br>
     <label for="edit_telefone">Telefone</label>
    <input required  maxlength="13" OnKeyPress="formatar('## #####-####', this)" type="text" id="edit_telefone" name="edit_telefone">
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

    <input  type="hidden" id="edit_codEscola" name="edit_codEscola">
    <input  type="hidden" id="edit_codTurma" name="edit_codTurma">

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


<!-- MODAL APAGAR -->


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
            <h1 class="m-0 text-dark">Alunos</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <button class="btn btn-success" type="button" name="button" data-toggle="modal" data-target="#registrarAluno"><i class="fa fa-plus"></i> &nbsp;  Cadastrar um novo Aluno</button>




<br><br>

        <select class="btn btn-outline-info" name="filtroEscola" id="filtroEscola">
          <option  selected value="">Todas as escolas</option>

<?php
$queryEscolas =  mysqli_query($conn,"SELECT DISTINCT Aluno_Escola FROM alunos");
while($row = mysqli_fetch_array($queryEscolas))
{
echo '<option value="'.$row['Aluno_Escola'].'">' . $row['Aluno_Escola'] . '</td>';
};

?>

</select>

<select
class="btn btn-outline-info" name="filtroTurma" id="filtroTurma">
  <option disabled selected value=""></option>

</select>


        <table class="table table-bordered display" id="tabelaAlunos" width="100%" cellspacing="0">
          <form action="" id="myform">
        <thead>
        <tr>
          <th>RM</th>
		      <th>Nome</th>
          <th>Escola</th>
          <th>Ano</th>
		      <th>Data de Nascimento</th>
		      <th>Email</th>
          <th>Telefone</th>
          <th>RG</th>
		      <th>CEP</th>
		      <th>Cidade</th>
		      <th>Endereço</th>
		      <th>Bairro</th>
          <th>ID Escola</th>
          <th>ID Turma</th>
          <th>Ações</th>
        </tr>
        </thead>
      <tbody>
<?php
$result =  mysqli_query($conn,"SELECT * FROM alunos");
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['RM_Aluno'] . "</td>";
echo "<td>" . $row['Aluno_Nome'] . "</td>";
echo "<td>" . $row['Aluno_Escola'] . "</td>";
echo "<td>" . $row['Aluno_Ano'] . "</td>";
echo "<td>" . date("d/m/Y", strtotime($row['Aluno_DataDeNascimento'])) . "</td>";
echo "<td>" . $row['Aluno_Email'] . "</td>";
echo "<td>" . $row['Aluno_Telefone'] . "</td>";
echo "<td>" . $row['Aluno_RG'] . "</td>";
echo "<td>" . $row['Aluno_CEP'] . "</td>";
echo "<td>" . $row['Aluno_Cidade'] . "</td>";
echo "<td>" . $row['Aluno_Endereco'] . "</td>";
echo "<td>" . $row['Aluno_Bairro'] . "</td>";
echo "<td>" . $row['ID_Escola'] . "</td>";
echo "<td>" . $row['ID_Turma'] . "</td>";

echo '<td><a class="btn-sm  btn-secondary text-white btnEditar" id="editar" href="#"> <i class="fa fa-pen"></i>   </a>
&nbsp;

  <a class="btn-sm btn-success btnNotas" name="alunos" href="#"><i class="fa fa-tasks"></i></a>
  <a class="btn-sm btn-warning text-white btnTurmas" name="turmas" href="#"><i class="fa fa-chalkboard-teacher"></i></a>
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
          if(isset($_SESSION['Aluno_registrado'])):
          ?>
        <script>

        $(function () {
          $(document).ready(function(){
                toastr.success('Aluno registrado com sucesso!');
              });
            });
         </script>
          <?php
          endif;
          unset($_SESSION['Aluno_registrado']);

          ?>

<!-- Caso ocorra um erro, irá voltar com a sessão erro, e exibir o alerta de erro -->
          <?php
                    if(isset($_SESSION['registro_erro'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao registrar o Aluno!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['registro_erro']);

                    ?>

                     <?php
                    if(isset($_SESSION['notas_erro'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.error('Erro ao gerenciar as notas!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['notas_erro']);

                    ?>

                     <?php
                    if(isset($_SESSION['notas_sucesso'])):
                    ?>
                  <script>

                  $(function () {
                    $(document).ready(function(){
                          toastr.success('Notas gerenciadas com sucesso!');
                        });
                      });
                   </script>
                    <?php
                    endif;
                    unset($_SESSION['notas_sucesso']);

                    ?>

<!-- Mesma coisa, mas agora para atualização dos Alunos -->
<!-- Este é para caso de sucesso -->

                  <?php
                        if(isset($_SESSION['Aluno_atualizado'])):
                      ?>
                          <script>

                    $(function () {
                        $(document).ready(function(){
                           toastr.success('Aluno atualizado com sucesso!');
                             });
                                          });
                          </script>
          <?php
                      endif;
                      unset($_SESSION['Aluno_atualizado']);

           ?>
<!-- E este, para caso de erro -->
           <?php
                     if(isset($_SESSION['erro_edit_Aluno'])):
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
                     unset($_SESSION['erro_edit_Aluno']);

                     ?>


<!-- SCRIPT PARA INICIAR O JS DE DATATABLES, E CRIAR UMA TABELA INTERATIVA -->

<script>
  $(function () {

  var table =  $('#tabelaAlunos').DataTable({
 "columnDefs": [
                 {
                     "targets": [ 12 ],
                     "visible": false,
                     "searchable": true
                 },
                 {
                     "targets": [ 13 ],
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


                for( var i = 0; i<len1; i++){
                    var turma = response[i]['name'];
                    $("#filtroTurma").append("<option value='"+turma+"'>"+turma+"</option>");

                }

            }
        });
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




    // Isto serve para impedir a visualização de conteudo

       //ao carregar a página, e forçar o filtro por turma
    var parametroaluno = parametroUrl("aluno");

    var parametroturma = parametroUrl("turma");

var parametroescola = parametroUrl("escola");

    escola = '\\b' + parametroescola  + '\\b';
    turma = '\\b' + parametroturma  + '\\b';
    aluno = '\\b' + parametroaluno  + '\\b';


// se parametro turma tiver algo e os demais vazios, busca por turma
     if (parametroturma != null && parametroescola == null && parametroaluno == null) {
         table.rows().search(turma, true, true).draw();
     }






     // se parametro escola tiver algo e os demais vazios, busca por escola

   else  if (parametroturma == null && parametroescola != null && parametroaluno == null) {
       table.rows().search(escola, true, true).draw();
     }

     // se parametro aluno tiver algo e os demais vazios, busca pelo nome do aluno


   else if (parametroturma == null && parametroescola == null && parametroaluno != null)
     {
       table.rows().search(aluno, true, true).draw();

      }


// caso os 2 estejam vazios, não busca nada
else  {
table.rows().search('').draw();
}





    $('#filtroEscola').on('change', function(){ // Este aqui muda o conteúdo com base na mudança do select
       table
       .search($(this).val()).draw();
      });
    $('#filtroTurma').on('change', function(){ // Este aqui muda o conteúdo com base na mudança do select
       table
       .search($(this).val()).draw();
      });







// função para procurar turma do aluno

table.on('click', '.btnTurmas', function(){


   $tr=$(this).closest('tr');

      var data = table.row($tr).data();

      var turma = data[3];

      location.href = 'turmas.php?turma='+turma;
});



// função para procurar turma do aluno FIM




table.on('click','.btnNotas', function(){
    $("#notasMateria").append("<option hidden selected value=''>Matéria</option>");
        $("#notasANO").append("<option hidden selected value=''>Ano escolar</option>");


$('#nota1').val('');
$('#nota2').val('');
$('#nota3').val('');
$('#nota4').val('');
$('#mencao').val('');
$('.faltas').empty();


 $tr=$(this).closest('tr');
  var data = table.row($tr).data();
  var rm = data[0];

  $("#Notasrm").val(rm);


//getbimestre

  $("#notasANO").change(function(){
    var ano =$("#notasANO").val();
    var materia = $('#notasMateria').val();


$('#nota1').val('');
$('#nota2').val('');
$('#nota3').val('');

$('#nota4').val('');
$('#mencao').val('');

  $.ajax({
        url: '../../Scripts/Manipulations/Admin/Alunos/getNotas.php',
        type: 'post',
        data: {postRM:rm,
               postMATERIA: materia,
               postANO: ano
                },
        dataType: 'json',
        success:function(response){

    var len = response.length;




                 for( var i = 0; i<len; i++){

                     var nota1 = response[0]['nota1'];
                     var nota2 = response[0]['nota2'];
                     var nota3 = response[0]['nota3'];
                     var nota4 = response[0]['nota4'];
                     var mencao = response[0]['mencao'];



$('#nota1').val(nota1);
$('#nota2').val(nota2);
$('#nota3').val(nota3);
$('#nota4').val(nota4);
$('#mencao').val(mencao);


                 }



        }



});

  $.ajax({
        url: '../../Scripts/Manipulations/Admin/Alunos/getFaltas.php',
        type: 'post',
        data: {postRM:rm,
               postMATERIA: materia,
               postANO: ano
                },
        dataType: 'json',
        success:function(response){

    var len = response.length;


            $('.faltas').empty();



                 for( var i = 0; i<len; i++){


                     var faltas = response[i]['faltas'];


 $(".faltas").append("<h2 id='faltas' class='notasInput'>"+faltas+"</h2>");




                 }



        }

});
  });


 $("#notasMateria").change(function(){
    var ano =$("#notasANO").val();
    var materia = $('#notasMateria').val();


$('#nota1').val('');
$('#nota2').val('');
$('#nota3').val('');
$('#nota4').val('');
$('#mencao').val('');


// ajax pra notas
  $.ajax({
        url: '../../Scripts/Manipulations/Admin/Alunos/getNotas.php',
        type: 'post',
        data: {postRM:rm,
               postMATERIA: materia,
               postANO: ano
                },
        dataType: 'json',
        success:function(response){

    var len = response.length;




                 for( var i = 0; i<len; i++){

                     var nota1 = response[0]['nota1'];
                     var nota2 = response[0]['nota2'];
                     var nota3 = response[0]['nota3'];
                     var nota4 = response[0]['nota4'];
                     var mencao = response[0]['mencao'];


$('#nota1').val(nota1);
$('#nota2').val(nota2);
$('#nota3').val(nota3);
$('#nota4').val(nota4);
$('#mencao').val(mencao);


                 }



        }


});


  $.ajax({
        url: '../../Scripts/Manipulations/Admin/Alunos/getFaltas.php',
        type: 'post',
        data: {postRM:rm,
               postMATERIA: materia,
               postANO: ano
                },
        dataType: 'json',
        success:function(response){

    var len = response.length;


            $('.faltas').empty();



                 for( var i = 0; i<len; i++){


                     var faltas = response[i]['faltas'];


 $(".faltas").append("<h2 id='faltas' class='notasInput'>"+faltas+"</h2>");




                 }



        }

});

  });


    $('#notasAluno').modal('show');

});


//add Falta

$("#salvarNotas").on('click',function(){

   var rm = $("#Notasrm").val();
  var ano =$("#notasANO").val();
    var materia = $('#notasMateria').val();
    var getnota1 = $('#nota1').val();

    var getnota2 = $('#nota2').val();

    var getnota3 = $('#nota3').val();

    var getnota4 = $('#nota4').val();
    var getmencao = $('#mencao').val();


 $.ajax({
        url: '../../Scripts/Manipulations/Admin/Alunos/controleNotas.php',
        type: 'post',
        data: {Notasrm:rm,
               notasMateria: materia,
               notasANO: ano,
               nota1: getnota1,
               nota2: getnota2,
               nota3: getnota3,
               nota4: getnota4,
               mencao: getmencao,
                },
        dataType: 'text',
        success:function(response){

  toastr.success('Notas alteradas!');

                 },

                 error:function(response){

  toastr.error('Erro ao gerenciar notas!');
                 }





        });

});

$("#criarFalta").on('click',function(){
   var rm = $("#Notasrm").val();
  var ano =$("#notasANO").val();
    var materia = $('#notasMateria').val();

 $.ajax({
        url: '../../Scripts/Manipulations/Admin/Alunos/criarFalta.php',
        type: 'post',
        data: {postRM:rm,
               postMATERIA: materia,
               postANO: ano
                },
        dataType: 'text',
        success:function(response){
          $('#notasAluno').modal('hide');

  toastr.success('Falta registrada!');

                 },

                 error:function(response){

  toastr.error('Erro ao aplicar falta!');
                 }





        });


});


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
      $('#editAlunoEscola').val(data[2]);
      $('#editAlunoTurma').val(data[3]);
      $('#edit_dn').val(FormataStringData(data[4]));
      $('#edit_email').val(data[5]);
      $('#edit_telefone').val(data[6]);
      $('#edit_rg').val(data[7]);
      $('#edit_cep').val(data[8]);
      $('#edit_muninc').val(data[9]);
      $('#edit_endereco').val(data[10]);
      $('#edit_bairro').val(data[11]);

console.log(data);




     var nomeEscola = data[2];
     var nomeTurma = data[3];
       $.ajax({
            url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:nomeEscola},
            dataType: 'json',
            success:function(response){
              var turma = response[0]['turma'];

                var len = response.length;

            $('#editAlunoTurma').empty();
                     $("#editAlunoTurma").append("<option disabled hidden selected value='"+data[3]+"'>"+data[3]+"</option>");


                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    var idescola = response[i]['idescola'];
                    var idturma = response[i]['idturma'];
                    $("#editAlunoTurma").append("<option value='"+turma+"'>"+turma+"</option>");
                    $("#edit_codEscola").val(idescola);
                    $("#edit_codTurma").val(idturma);
                }


            }

    });





    $('#EditarAluno').modal('show');
    });
  table.search(parametroTurma || parametroAluno).draw();



  });
//essa função pega o ID da turma apos selecionar ela
  $("#createAlunoTurma").change(function(){
    var turmanome =$("#createAlunoTurma").val();

    $.ajax({
        url: '../../Scripts/Manipulations/Admin/Global/turmaIDDependency.php',
        type: 'post',
        data: {turmaID:turmanome},
        dataType: 'json',
        success:function(response){
        var turma = response[0]['turma'];
      $("#codigoturma").val(turma);
        }

});
  });





  //essa função pega o ID da escola dps de selecionar
  $("#createAlunoEscola").change(function(){
      var escolanome = $(this).val();

        $.ajax({
            url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#createAlunoTurma").empty();

                $("#createAlunoTurma").append("<option disabled hidden selected value='none'>Selecione uma turma</option>");

                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    var idescola = response[i]['idescola'];
                    $("#createAlunoTurma").append("<option value='"+turma+"'>"+turma+"</option>");

                }
                $("#codigoescola").val(idescola);



            }

    });

  });

  //estas para o editar


  $("#editAlunoTurma").change(function(){
    var turmanome =$("#editAlunoTurma").val();

    $.ajax({
        url: '../../Scripts/Manipulations/Admin/Global/turmaIDDependency.php',
        type: 'post',
        data: {turmaID:turmanome},
        dataType: 'json',
        success:function(response){
        var turma = response[0]['turma'];
      $("#edit_codTurma").val(turma);
        }

});
  });

  //essa função pega o ID da escola dps de selecionar
  $("#editAlunoEscola").change(function(){
      var escolanome = $(this).val();

        var escolanome = $(this).val();
        $.ajax({
            url: '../../Scripts/Manipulations/Admin/Global/selectDependency.php',
            type: 'post',
            data: {escola:escolanome},
            dataType: 'json',
            success:function(response){
              var escola = response[0]['escola'];
              var turma = response[0]['turma'];

                var len = response.length;

                $("#editAlunoTurma").empty();

                $("#editAlunoTurma").append("<option disabled hidden selected value='none'>Selecione uma turma</option>");

                for( var i = 0; i<len; i++){
                    var turma = response[i]['name'];
                    var idescola = response[i]['idescola'];
                    $("#editAlunoTurma").append("<option value='"+turma+"'>"+turma+"</option>");

                }
                $("#edit_codEscola").val(idescola);


            }


    });




  });


</script>


</body>
</html>
