<?php 
    $sql = 'SELECT * FROM LIVRO.TITULO';
    $consulta_livro = mysqli_query($conexao, $sql);
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
        <input type="text" name="" id="" placeholder="Título do livro" oninput="searchEmprestimos(this)" required>
        <div id="caixa-resultado">

        </div>
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
        <button type="submit">Enviar</button>
    </div>
</form>

<script>
    function searchEmprestimos(input) {
        let valor_input = input.value  

        if (valor_input.length >= 3) {
            console.log(tirarAcentos(valor_input))
        } 
    }

    function tirarAcentos(string) {
        return string.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
    }

</script>