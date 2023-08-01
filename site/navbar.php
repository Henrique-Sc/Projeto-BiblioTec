<nav>
    <div class="img_logo"><a href="?pagina=home"><img src="img/biblioteca-logo.png" alt="Logo da bibliotec"></a></div>

    <ul class="nav-itens">
        <li class="nav-item"><a href="?pagina=alunos">Alunos</a></li>
        <li class="nav-item"><a href="?pagina=livros">Livros</a></li>
        <li class="nav-item"><a href="?pagina=emprestimos">Empréstimos</a></li>

        <?php
            if (isset($_SESSION['login'])) {
                echo '<li class="nav-item"><a href="?pagina=logout">Logout</a></li>';
            }
        ?>
    </ul>
</nav>