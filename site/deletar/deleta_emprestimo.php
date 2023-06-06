<?php
    include('../database/db.php');

    $id_emp = $_GET['id_emp'];
    $query = "DELETE FROM EMPRESTIMO WHERE ID_EMP = '$id_emp'";
    mysqli_query($conexao, $query);
    header('Location: ../?pagina=emprestimos');
?>