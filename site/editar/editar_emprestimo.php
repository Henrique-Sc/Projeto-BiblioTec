<?php
    include('../database/db.php');
    include('../lib/forms.php');

    $id_emp = input_post('id_emp');
    $multa = input_post('multa');
    $data = input_post('data_devolucao');
    $sit = input_post('situacao');
      
    
    $query = "UPDATE EMPRESTIMO SET MULTA = $multa, DATA_DEVOLUCAO = '$data', SITUACAO = '$sit' WHERE ID_EMP = $id_emp" ;
    mysqli_query($conexao, $query);

    echo $query;
    header ('Location: ../?pagina=emprestimos')


?>