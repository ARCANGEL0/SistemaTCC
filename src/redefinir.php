<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EdSys</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/Global/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
 <b>Sistema</b>&nbsp; Escolar
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <br>
      <form action="Scripts/Login/NewPassword.php" method="POST">
        <div class="mb-4">
<center>
          <h4>Redefinir senha</h4>
</center>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="redefinirEmail" id="redefinirEmail" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
          <?php
                    if(isset($_SESSION['noEmail'])):
                    ?>
                    <div class="alert alert-danger">
                      ERRO: Email errado ou inexistente!!
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['noEmail']);

                    if(isset($_SESSION['campoVazio'])):
                    ?>
                    <div class="alert alert-danger">
                      ERRO: Digite um email!
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['campoVazio']);


                    ?>

                  <?php
                    if(isset($_SESSION['emailEnviado'])):
                    ?>
                    <div class="alert alert-success">
                    <p>Sua senha foi alterada com sucesso!</p>
                    <p> A nova senha foi enviada para o seu email!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['emailEnviado']); ?>
                    <?php
                      if(isset($_SESSION['emailNaoEnviado'])):
                      ?>
                      <div class="alert alert-danger">
                        Opa! <br>
                      Houve um problema em redefinir sua senha!

                      </div>
                      <?php
                      endif;
                      unset($_SESSION['emailNaoEnviado']); ?>

            <button type="submit" class="btn btn-primary btn-block">Solicitar redefinição</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<br>
      <!-- /.password-define -->

      <p class="mb-0">
        <a href="index.php">Fazer login</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->






<!--  SCRIPTS QUE SERÃO UTILIZADOS DEPOIS. NÃO APAGUE. -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/Global/js/adminlte.js"></script>

</body>
</html>
