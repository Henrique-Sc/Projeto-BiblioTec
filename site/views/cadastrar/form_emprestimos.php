<?php 
    $sql = "SELECT livro.id_livro, livro.titulo FROM LIVRO";
    $consulta_livros = mysqli_query($conexao, $sql);
    

?>

<h2>Cadastro de emprestimo</h2>

<!-- 
1. Caixa de pesquisa que filtra os livros disponíveis
    - Consultar usando o php, converter para array em js
    - filtro pelo js
-->
<form action="views/cadastrar/cadastrar_emprestimos.php" method="post">
    <div class="form-group">
        <input type="text" name="" id="titulo_livro" placeholder="Título do livro" oninput="searchLivro(this)" required>
        <select name="titulo_livro" id="">
            <?php 
                while ($row = mysqli_fetch_array($consulta_livros)) {
                    echo "<option value='$row[1]'>$row[1]</option>";
                }
            ?>
        </select>
    </div>
    <!-- <div id="caixa-resultado">

    </div> -->

    <div class="form-group">
        <input type="text" name="" id="" placeholder="RM" required>
    </div>

    <div class="form-group">
        <input type="text" name="" id="" placeholder="Nome" required>
    </div>

    <div class="form-group">
        <label for="data_devolucao">Data de devolução</label><br>
        <input type="date" name="" id="data_devolucao" required>
    </div>
    
    <div class="form-group">
        <input type="submit" value="Enviar">
    </div>
</form>