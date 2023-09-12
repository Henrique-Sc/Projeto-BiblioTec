<?php
    session_start();
    if (isset($_SESSION['login'])) {
        session_destroy();
        header('Location: ../index.php');
    }
    header('Location: ../index.php?pagina=login');
    
    die();
?>