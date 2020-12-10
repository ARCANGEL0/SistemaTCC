<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'toor');
define('DB', 'TCC');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB);
if($conn === false){
    die("ERRO: Não foi possivel conectar. " . mysqli_connect_error());
}

?>
