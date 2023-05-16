<?php 
    $query = "SELECT ID_LIVRO, LIVRO.TITULO FROM LIVRO";
    $consulta_livros = mysqli_query($conexao, $query);
?>

<?php 
// echo htmlspecialchars($_SERVER['PHP_SELF']) . "?pagina=form_emprestimo" 
?>
<form action="cadastrar/cadastrar_emprestimos.php" method="post">
    <h2>Cadastro de emprestimo</h2>

    <!-- Títulos dos livros -->
    <div class="form-group">
        <select name="titulo_livro" required>
            <?php
                while ($linha = mysqli_fetch_array($consulta_livros)) {
                    // linha[0] -> id_livro
                    // linha[1] -> titulo_livro
                    echo "<option value='$linha[0]'>$linha[1]</option>";
                }

            ?>
        </select>
    </div>

    <!-- RM -->
    <div class="form-group">
        <input type="number" name="rm_aluno" id="" placeholder="RM do aluno" required>
    </div>

    <!-- Data de devolução -->
    <div class="form-group">
        <label for="data_devolucao">Data de devolução</label>
        <input type="date" name="data_devolucao" id="data_devolucao" placeholder="" required>
    </div>
    
    <div class="form-group">
        <input type="submit" value="Enviar"/>
    </div>
</form>
