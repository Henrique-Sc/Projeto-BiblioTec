<?php
    include('../database/db.php');

    $id_livro = $_GET['id_livro'];

    $query = "SELECT * FROM EMPRESTIMO WHERE id_livro = $id_livro";
    $consulta_livros = mysqli_query($conexao, $query);
    if (mysqli_fetch_row($consulta_livros) != NULL) {
        echo "
        <script>
        alert('Não é possível deletar! Existe um empréstimo neste livro')
            
                
                window.location='../?pagina=livros';
            </script>
        ";
    } else {
        $query = "DELETE FROM LIVRO WHERE ID_LIVRO = '$id_livro'";
        mysqli_query($conexao, $query);
        header('Location: ../?pagina=livros');
    }

?>
       