<?php
    // Criar consulta
    $query = "SELECT * FROM ALUNO ORDER BY NAME";
    $consulta_alunos = mysqli_query($conexao, $query);
?>

<!-- TABELA ALUNOS -->
<h2>Alunos</h2>

<table border="1">
    <tr>
      <th>RM</th>        <!-- 1 -->
      <th>NOME</th>      <!-- 2 -->
      <th>TELEFONE</th>       <!-- 3 -->
      <th>DATA_NASC</th>     <!-- 4 -->
      <th>EMAIL</th>      <!-- 5 -->
      <th>SENHA</th>         <!-- 6 -->
      <th>CURSO</th>  <!-- 7 -->
      <th>SERIE</th>    <!-- 8 -->
      <th>ANO_INGRESSO</th>    <!-- 9 -->
      <th>PERIODO</th>    <!-- 10 -->
   </tr>

   <?php 

        while (mysqli_fetch_array())
   ?>
</table>