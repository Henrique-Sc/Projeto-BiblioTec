<?php 
    $sql = 'SELECT * FROM LIVROS';
    // $conn = mysqli_query();
?>

<form action="views/cadastrar/cadastrar_emprestimos.php" method="post">
    <h2>Cadastro de emprestimo</h2>

    <!-- 
        1. Caixa de pesquisa que filtra os livros disponíveis
            - Consultar usando o php, converter para array em js
            - filtro pelo js
     -->

    <!-- Títulos dos livros -->
    <div class="form-group">
        <input type="text" name="" id="" placeholder="Título do livro" required>
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
        <label for="data_devolucao">Data de devolução</label>
        <input type="date" name="" id="data_devolucao" required>
    </div>
    
    <div class="form-group">
        <input type="submit" value="Enviar">
    </div>
</form>