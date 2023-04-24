<?php 

    function tratar_input ($valor) {
        $valor = trim($valor);          // Deletar espaços no começo e no fim
        $valor = stripslashes($valor);  // Desfaz o efeito do addslashes()
        htmlspecialchars($valor);       // Converter caracteres especiais para ser exibidos no html
        return $valor;
    }

    function input_post($name) {
        return tratar_input(filter_input(INPUT_POST, $name));
    }
?>