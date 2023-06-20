<?php
   // Criar a consulta
   $query = "SELECT * FROM LIVRO";
   $consulta_livros = mysqli_query($conexao, $query);
?>

<!-- Tabela de livros -->
<h2>Livros</h2>

<table>
   <!-- TÍTULOS -->
   <tr>
      <th>ISBN</th>        <!-- 1 -->
      <th>Título</th>      <!-- 2 -->
      <th>Autor</th>       <!-- 3 -->
      <th>Editora</th>     <!-- 4 -->
      <th>Gênero</th>      <!-- 5 -->
      <th>Ano</th>         <!-- 6 -->
      <th>Exemplares</th>  <!-- 7 -->
      <th>Situação</th>    <!-- 8 -->
      <th>Editar</th>
      <th>Deletar</th>

   </tr>

   <?php
      while ($linha = mysqli_fetch_array($consulta_livros)){
         echo '<tr>';
            echo '<td>'.$linha['ISBN'].'</td>';      // 1
            echo '<td>'.$linha['TITULO'].'</td>';    // 2
            echo '<td>'.$linha['AUTOR'].'</td>';     // 3
            echo '<td>'.$linha['EDITORA'].'</td>';   // 4
            echo '<td>'.$linha['GENERO'].'</td>';    // 5
            echo '<td>'.$linha['ANO'].'</td>';       // 6
            echo '<td>'.$linha['EXEMPLAR'].'</td>';  // 7
            echo '<td>'.$linha['SITUACAO'].'</td>';  // 8
            echo '<td><a href="?pagina=form_livro&edt_livro='. $linha["ID_LIVRO"]. '">Editar</a></td>';
            echo '<td><a href="deletar/deleta_livros.php?id_livro='. $linha["ID_LIVRO"]. '">Deletar</a></td>';
         echo '</tr>';
      }
   ?>
</table>

<a href="?pagina=form_livro"><button class="cadastrar">Cadastrar livro</button></a>