<?php
    // Criar consulta
    $query = "SELECT * FROM ALUNO ORDER BY NOME";
    $consulta_alunos = mysqli_query($conexao, $query);
?>

<!-- TABELA ALUNOS -->
<h2>Alunos</h2><i class="fa-solid fa-plus plus"></i>

<table>
    <tr>
      <th>RM</th>            <!-- 1 -->
      <th>NOME</th>          <!-- 2 -->
      <th>TELEFONE</th>      <!-- 3 -->
      <th>DATA_NASC</th>     <!-- 4 -->
      <th>EMAIL</th>         <!-- 5 -->
      <th>SENHA</th>         <!-- 6 -->
      <th>CURSO</th>         <!-- 7 -->
      <th>SERIE</th>         <!-- 8 -->
      <th>ANO_INGRESSO</th>  <!-- 9 -->
      <th>PERIODO</th>       <!-- 10 -->
   </tr>

   <?php 
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            echo "<tr>";
                echo '<td>'.$linha["RM"].'</td>';
                echo '<td>'.$linha["NOME"].'</td>';
                echo '<td>'.$linha["TELEFONE"].'</td>';
                echo '<td>'.$linha["DATA_NASC"].'</td>';
                echo '<td>'.$linha["EMAIL"].'</td>';
                echo '<td>'.$linha["SENHA"].'</td>';
                echo '<td>'.$linha["CURSO"].'</td>';
                echo '<td>'.$linha["SERIE"].'</td>';
                echo '<td>'.$linha["ANO_INGRESSO"].'</td>';
                echo '<td>'.$linha["PERIODO"].'</td>';
            echo "</tr>";
        }
   ?>   
</table>