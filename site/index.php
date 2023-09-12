<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Biblioteca</title>

    <link rel="stylesheet" href="estilos/base-site.css">
    <link rel="stylesheet" href="estilos/table.css">
    <link rel="stylesheet" href="estilos/form.css">
    <link rel="stylesheet" href="estilos/produtos.css">
    <link rel="stylesheet" href="estilos/erro-msg.css">


    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        session_start();
        include('database/db.php');
        include('navbar.php')
    ?>

    <main style="text-align: center">
        
        <?php  
            /*
            Verifica se a variável de sessão é true, caso seja,
            pode verificar qual a página selecionada ou abre a página de empréstimos
            caso contrário, continuará na página home para realizar login
            */
            // Incluir as views (conteúdos)
            if (isset($_SESSION['login']) ){
                //Se não tiver clicado em nenhuma página ainda, carrega a pagina home.
                if (isset($_GET['pagina'])){
                    $pagina = $_GET['pagina'];
                }
                else {
                    $pagina = 'home';
                }
            } else {
                $pagina = 'login';
            }
            switch ($pagina) {
                case 'home':
                    include_once('views/home.php');
                    break;
                case 'alunos':
                    include_once('views/alunos.php');
                    break;
                case 'livros':
                    include_once('views/livros.php'); 
                    break;
                case 'emprestimos':
                    include_once('views/emprestimos.php');
                    break;
                
                case 'form_aluno':
                    include_once('views/form_alunos.php');
                    break;
                case 'form_livro':
                    include_once('views/form_livros.php');
                    break;
                case 'form_emprestimo':
                    include_once('views/form_emprestimos.php');
                    break;
                case 'login':
                    include_once('views/login.php');
                    break;
                case 'logout':
                    header('Location: login/logout.php');
                    break;
                    
                default:
                    include_once('views/error404.php');
                    break;
            }

        ?>
    </main>
    
    <?php include('footer.php') ?>
    
</body>
</html>