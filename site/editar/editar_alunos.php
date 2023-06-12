<?php
    include('../database/db.php');
    include('../lib/forms.php');


    $aluno = [
        "rm" => input_post('rm'),
        "nome" => input_post('nome'),
        "email" => input_post('email'),
        "senha" => input_post('psw'),
        "data_nasc" => input_post('nasc'),
        "tel" => input_post('tel'),
        "curso" => input_post('crso'),
        "serie" => input_post('serie'),
        "periodo" => input_post('perio'),
        "ano_ingresso" => input_post('anoingr'),
    ];
    
    $query = ''
    // Realizar a atualização dos dados e retornar para o index (header)


?>