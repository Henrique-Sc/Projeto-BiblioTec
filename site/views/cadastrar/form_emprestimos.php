<?php 
    $sql = 'SELECT * FROM LIVRO.TITULO';
    $consulta_livro = mysqli_query($conexao, $sql);
?>

<form action="views/cadastrar/cadastrar_emprestimos.php" method="post">
    <h2>Cadastro de emprestimo</h2>

    <!-- Títulos dos livros -->
    <div class="form-group">
        <!-- <input type="text" name="" id="" placeholder="Título do livro"required> -->
        <select name="" id="">
            <?php
                while ($linha = mysqli_fetch_array($consulta_livro)) {
                    echo "<option>1</option>";
                }
            ?>
        </select>
        
    </div>

    <!-- RM -->
    <div class="form-group">
        <input type="text" name="" id="" placeholder="RM" required>
    </div>

    <!-- Nome -->
    <div class="form-group">
        <input type="text" name="" id="" placeholder="Nome" required>
    </div>

    <!-- Data de devolução -->
    <div class="form-group">
        <input type="date" name="" id="data_devolucao" required>
    </div>
    
    <div class="form-group">
        <button type="submit">Enviar</button>
    </div>
</form>
