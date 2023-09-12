<?php
    include('../database/db.php');
    include('../lib/forms.php');

    //Recebimento dos valores inseridos no formulário
    $nome = input_post('nome');
    $psw = input_post('psw');
    $nasc = input_post('nasc');
    $tel = input_post('tel');
    $rm = input_post('rm');
    $crso = input_post('crso');
    $serie = input_post('serie');
    $anoingr = input_post('anoingr');
    $perio = input_post('perio');
    $email = input_post('email');
    $psw = md5($_POST['psw']);
    $query = "INSERT INTO aluno (RM, NOME, TELEFONE, DATA_NASC, EMAIL, SENHA, CURSO, SERIE, ANO_INGRESSO, PERIODO) VALUES ($rm, '$nome', '$tel', '$nasc', '$email' , '$psw' ,'$crso', '$serie', $anoingr,'$perio')";
    
    //executar comando na conexão estabelecida
    mysqli_query($conexao, $query);
    

    //redirecionamento 
    header('location:../index.php?pagina=alunos');


?>