<?php
    $query = "SELECT livro.titulo, aluno.rm, aluno.nome, emprestimo.data_retirada, emprestimo.data_devolucao, emprestimo.situacao, emprestimo.multa, emprestimo.id_emp from livro, aluno, emprestimo WHERE (emprestimo.id_livro = livro.id_livro) AND (emprestimo.rm = aluno.rm)";
    $consulta_emprestimos = mysqli_query($conexao, $query);
?>

<h2>Empréstimos</h2>
<a href="?pagina=form_emprestimo"><button class="cadastrar">Cadastrar emprestimo</button></a>
<table id="emprestimos">

    <!-- TÍTULOS -->
    <thead>
        <tr>
          <th>Título</th>             <!-- 1 -->
          <th>RM</th>                 <!-- 2 -->
          <th>Nome</th>               <!-- 3 -->
          <th>Data de retirada</th>   <!-- 4 -->
          <th>Data de devolução</th>  <!-- 5 -->
          <th>Situação</th>           <!-- 6 -->
          <th>Multa</th>              <!-- 7 -->
          <th>Editar</th>            <!-- 8 -->
       </tr>
    </thead>

    <tbody>
    <?php
    while ($linha = mysqli_fetch_array($consulta_emprestimos)) {
        $data_retirada = new DateTimeImmutable($linha[3]);
        $data_devolucao = new DateTimeImmutable($linha[4]);

        echo "<tr>";
            echo "<td>". $linha[0] ."</td>";
            echo "<td>". $linha[1] ."</td>";
            echo "<td>". $linha[2] ."</td>";
            echo "<td>". $data_retirada->format('d/m/Y') ."</td>";
            echo "<td>". $data_devolucao->format('d/m/Y') ."</td>";
            echo "<td>". $linha[5] ."</td>";
            if ($linha[6] == null) {echo "<td>R$ 0,00</td>";} else {echo "<td>R$ ". str_replace('.', ',', number_format($linha[6], 2)) ."</td>";}
            echo '<td><a href="?pagina=form_emprestimo&edt_emp='. $linha[7]. '"><i class="fa-regular fa-pen-to-square edit"></i></a></td>';
        echo "</tr>";
    }
    ?>
    </tbody>

</table>

<script>
    $('#emprestimos').DataTable();
</script>