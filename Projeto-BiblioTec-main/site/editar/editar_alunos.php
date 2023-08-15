<?php
    include('../database/db.php');
    include('../lib/forms.php');

    $rm = input_post('rm');
    $nome = input_post('nome');
    $email = input_post('email');
    $senha = input_post('psw');
    $data_nasc = input_post('nasc');
    $tel = input_post('tel');
    $curso = input_post('crso');
    $serie = input_post('serie');
    $periodo = input_post('perio');
    $ano_ingresso = input_post('anoingr');
    
    $query = "UPDATE ALUNO SET NOME = '$nome', TELEFONE = '$tel', DATA_NASC = '$data_nasc', EMAIL = '$email', SENHA = '$senha', CURSO = '$curso', SERIE = '$serie', ANO_INGRESSO = $ano_ingresso, PERIODO = '$periodo' WHERE RM = $rm";
    mysqli_query($conexao, $query);

    header('Location: ../?pagina=alunos')


?>