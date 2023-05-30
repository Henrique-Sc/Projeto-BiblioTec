<?php
    include('../database/db.php');

    $rm = $_GET['rm'];

    $query = "SELECT * FROM EMPRESTIMO WHERE rm = $rm";
    $consulta_emprestimos = mysqli_query($conexao, $query);

    if (mysqli_fetch_row($consulta_emprestimos) != NULL) {
        echo "
            <script>
                alert('Não é possível deletar! O aluno tem empréstimos pendentes.')
                
                window.location='../?pagina=alunos';
            </script>
        ";
    } else {
        $query = "DELETE FROM ALUNO WHERE RM = '$rm'";
        mysqli_query($conexao, $query);
        header('Location: ../?pagina=alunos');
    }

?>