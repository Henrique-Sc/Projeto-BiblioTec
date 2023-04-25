<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>

    </script>
</head>

<body>
    <form action="home.php" method="post">
        <h2>Cadastro de aluno</h2>
        
        <div class="form-group">
            <input type="text" name="nome" id="" placeholder="Nome">
        </div>
        <div class="form-group">
            <input type="text" name="email" id="" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" name="psw" id="" placeholder="Senha">
        </div>
        <div class="form-group">
            <input type="text" name="nasc" id="" placeholder="dd/mm/aaaa" required> <!-- dd/mm/aaaa -->
        </div>
        <div class="form-group">
            <input type="text" name="tel" id="" placeholder="Telefone"> <!-- (11) 12345-1234 -->
        </div>
        <div class="form-group">
            <input type="text" name="rm" id="" placeholder="RM">
        </div>
        <div class="form-group">
            <input type="text" name="crso" id="" placeholder="Curso">
        </div>
        <div class="form-group">
            <input type="text" name="serie" id="" placeholder="Série">
        </div>
        <div class="form-group">
            <input type="text" name="anoingr" id="" placeholder="Ano de ingresso">
        </div>
        <div class="form-group">
            <input type="text" name="perio" id="" placeholder="Período">
        </div>

    <div class="form-group">
        <button type="submit">Enviar</button>
    </div>
    </form>
</body>

</html>