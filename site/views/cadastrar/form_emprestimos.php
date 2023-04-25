<?php 
    $sql = 'SELECT * FROM LIVRO.TITULO';
    $consulta_livro = mysqli_query($conexao, $sql);
    // echo 
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
    </div>
    <div id="caixa-resultado">
        <div class="">Livro 1</div>
        <div class="">Livro 2</div>
        <div class="">Livro 3</div>
    </div>

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

<script>
    const caixa_resultado = document.getElementById('caixa-resultado');
    const search_livro = document.getElementById('search_livro');

    function tirarAcentos(string) {
        return string.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
    }

    function searchLivro(input) {
        let valor_input = input.value  

        if (valor_input.length >= 3) {
            console.log(tirarAcentos(valor_input))
            caixa_resultado.style.display = 'inline';


        } else {
            caixa_resultado.style.display = 'none';
        }
    }

</script>