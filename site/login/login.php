<?php
    include('../lib/forms.php');
    include('../database/db.php');

    $user = input_post('user');
    $password = input_post('password');

    //executa a consulta
    $query = "SELECT * FROM USUARIO WHERE nome = '$user' and senha = '$password'";
    $consulta = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_row($consulta);
    if ($usuario >= 1) {
        session_start();
        $_SESSION['login'] = [$usuario[0], $usuario[1]];

        header('Location: ../index.php');
    }
    else{
        header('Location: ../index.php?erro');
    }
        //Não pode fazer login, usuário ou senha inválidos
        //redirecionar para a página 
        //copiar no proximo index esses texto aq
        
?>




