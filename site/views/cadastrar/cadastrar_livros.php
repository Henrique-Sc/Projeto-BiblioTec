<?php 
    include('../../lib/forms.php');
    include('../../database/db.php');

    $isbn = input_post('isbn');
    $titulo = input_post('titulo');
    $autor = input_post('autor');
    $editora = input_post('editora');
    $genero = input_post('genero');
    $ano = input_post('ano');
    $exemplares = input_post('exemplares');
    $situacao = input_post('situacao');

    
    $query = "INSERT INTO livro (ISBN, TITULO, AUTOR, EDITORA, GENERO, ANO, EXEMPLAR, SITUACAO) VALUES ('$isbn', '$titulo', '$autor', '$editora', '$genero', $ano, $exemplares, '$situacao')";
    mysqli_query($conexao, $query);

    


?>