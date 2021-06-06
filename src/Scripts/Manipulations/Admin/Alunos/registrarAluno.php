  <?php
include('../../../Database/Connection.php');
session_start();

$rm = $_POST['rm'];
$escola = $_POST['createAlunoEscola'];
$turma = $_POST['createAlunoTurma'];
$dn = date("Y/m/d", strtotime($_POST['dn']));
$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$municipio = $_POST['municipio'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$idescola = $_POST['codigoescola'];
$idturma = $_POST['codigoturma'];

if(isset($_POST['registrar'])){

	$query = "INSERT INTO alunos (RM_Aluno,Aluno_Escola,Aluno_Ano,Aluno_Nome,Aluno_RG,Aluno_Email,Aluno_DataDeNascimento,Aluno_Telefone,Aluno_CEP,Aluno_Cidade,Aluno_Endereco,Aluno_Bairro,ID_Escola,ID_Turma)
	                      VALUES (   '$rm','$escola' ,  '$turma',   '$nome',   '$rg',   '$email',                 '$dn',   '$telefone',   '$cep','$municipio',   '$endereco',   '$bairro', '$idescola','$idturma')";

  $query2 = "INSERT INTO alunos_notas (RM_Aluno,Aluno_Ano, Aluno_Disciplina, Aluno_Nota1,Aluno_Nota2,Aluno_Nota3,Aluno_Nota4,Aluno_MencaoFinal) VALUES 
('$rm', 1, 'Artes', 0,0,0,0,0),
('$rm', 2, 'Artes', 0,0,0,0,0),
('$rm', 3, 'Artes', 0,0,0,0,0),
('$rm', 1, 'Biologia', 0,0,0,0,0),
('$rm', 2, 'Biologia', 0,0,0,0,0),
('$rm', 3, 'Biologia', 0,0,0,0,0),
('$rm', 1, 'Educação Física', 0,0,0,0,0),
('$rm', 2, 'Educação Física', 0,0,0,0,0),
('$rm', 3, 'Educação Física', 0,0,0,0,0),

('$rm', 1, 'Espanhol', 0,0,0,0,0),
('$rm', 2, 'Espanhol', 0,0,0,0,0),
('$rm', 3, 'Espanhol', 0,0,0,0,0),

('$rm', 1, 'Física', 0,0,0,0,0),
('$rm', 2, 'Física', 0,0,0,0,0),
('$rm', 3, 'Física', 0,0,0,0,0),

('$rm', 1, 'Geografia', 0,0,0,0,0),
('$rm', 2, 'Geografia', 0,0,0,0,0),
('$rm', 3, 'Geografia', 0,0,0,0,0),

('$rm', 1, 'História', 0,0,0,0,0),
('$rm', 2, 'História', 0,0,0,0,0),
('$rm', 3, 'História', 0,0,0,0,0),

('$rm', 1, 'Inglês', 0,0,0,0,0),
('$rm', 2, 'Inglês', 0,0,0,0,0),
('$rm', 3, 'Inglês', 0,0,0,0,0),


('$rm', 1, 'Matemática', 0,0,0,0,0),
('$rm', 2, 'Matemática', 0,0,0,0,0),
('$rm', 3, 'Matemática', 0,0,0,0,0),

('$rm', 1, 'Português', 0,0,0,0,0),
('$rm', 2, 'Português', 0,0,0,0,0),
('$rm', 3, 'Português', 0,0,0,0,0),

('$rm', 1, 'Química', 0,0,0,0,0),
('$rm', 2, 'Química', 0,0,0,0,0),
('$rm', 3, 'Química', 0,0,0,0,0);";

	if(mysqli_query($conn,$query) && mysqli_query($conn,$query2)){
    $_SESSION['Aluno_registrado'] = true;
      header("Location: ../../../../Pages/Admin/alunos.php");
    	exit();
	}
	else {

echo mysqli_error($conn);

      	}mysqli_close($conn);
}

?>
