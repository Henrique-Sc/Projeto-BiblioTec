<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Biblioteca</title>

    <link rel="stylesheet" href="estilos/base-site.css">
</head>
<body>

    <?php
        include('db.php');
        include('navbar.php')
    ?>

    <main>
        <?php  
            // Incluir as views (conteúdos)
            if (isset($_GET['alunos'])) {
                include_once('views/alunos.php');

            } else if (isset($_GET['livros'])) {
                include_once('views/livros.php');

            } else if (isset($_GET['emprestimos'])) {
                include_once('views/emprestimos.php');

            } else {
                include_once('views/home.php');
            }
        ?>
    </main>
    
    <?php include('footer.php') ?>
    
</body>
</html>