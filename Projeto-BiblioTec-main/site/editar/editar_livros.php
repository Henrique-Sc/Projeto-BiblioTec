<?php
    include('../database/db.php');
    include('../lib/forms.php');

    $id_livro = input_post('id_livro');
    $titulo = input_post('titulo');
    $autor = input_post('autor');
    $editora = input_post('editora');
    $genero = input_post('genero');
    $ano = input_post('ano');
    $exemplares = input_post('exemplares');
    $situacao = input_post('situacao');

    $query = "UPDATE LIVRO SET TITULO = '$titulo', AUTOR = '$autor', EDITORA = '$editora', GENERO = '$genero', ANO = $ano, EXEMPLAR = $exemplares, SITUACAO = '$situacao' WHERE ID_LIVRO = $id_livro";
    mysqli_query ($conexao, $query);

    header('Location: ../?pagina=livros')
?>