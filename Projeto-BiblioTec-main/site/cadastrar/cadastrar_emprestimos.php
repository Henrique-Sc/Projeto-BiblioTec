<?php 
    include('../database/db.php');
    include('../lib/forms.php');
    
    /*
    1. Verificar se o RM existe                                
    2. Data de retirada -> data atual (YYYY-MM-D)              xx
    3. Redirecionamento automático para a tela de empréstimos  
    4. Multa - não sei fazer ainda
    5. V
    */
    
    $id_livro = input_post('titulo_livro');
    $rm = input_post('rm_aluno');
    $data_retirada = date('Y-m-d');
    $data_devolucao = input_post('data_devolucao');

    var_dump($id_livro);
    var_dump($rm);
    var_dump($data_retirada);
    var_dump($data_devolucao);

    $query = "INSERT INTO emprestimo (ID_LIVRO, RM, DATA_RETIRADA, DATA_DEVOLUCAO, SITUACAO, multa) VALUES ($id_livro, $rm, '$data_retirada', '$data_devolucao', 'Concluído', null)";
    
    //executar comando na conexão estabelecida
    mysqli_query($conexao, $query);
    //redirecionamento 
    header('location:../index.php?pagina=emprestimos');



?>