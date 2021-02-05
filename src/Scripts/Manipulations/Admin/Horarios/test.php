 <?php
session_start();
include('../../../Database/Connection.php');

 ?>

 <table class="table table-bordered display" id="tabela" width="100%" cellspacing="0">
          <form action="" id="myform">
        <thead>
         <tr>
           <th>ID</th>
      <th>CNPJ</th>
        <th>Nome</th>
        <th>Munincípio</th>
        <th>Endereço</th>
<th>CEP </th>
               <th>Ações</th>
      </tr>
        </thead>
      <tbody>
<?php
$result =  mysqli_query($conn,"SELECT * FROM Escolas");
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Escola_Codigo'] . "</td>";
echo "<td>" . $row['Escola_CNPJ'] . "</td>";
echo "<td>" . $row['Escola_Nome'] . "</td>";
echo "<td>" . $row['Escola_Munincipio'] . "</td>";
echo "<td>" . $row['Escola_Endereco'] . "</td>";
echo "<td>" . $row['Escola_CEP'] . "</td>";

echo "</tr>";
}

mysqli_close($conn);
?>



      </tbody>
      </table>