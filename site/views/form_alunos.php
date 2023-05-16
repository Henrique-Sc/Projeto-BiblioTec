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
    <form action="cadastrar/cadastrar_alunos.php" method="post">
        <h2>Cadastro de aluno</h2>

        <!-- 
            Curso, Série e
         -->
        
        <!-- Nome -->
        <div class="form-group">
            <input type="text" name="nome" id="" placeholder="Nome">
        </div>

        <!-- Email -->
        <div class="form-group">
            <input type="text" name="email" id="" placeholder="Email">
        </div>

        <!-- Senha -->
        <div class="form-group">
            <input type="text" name="psw" id="" placeholder="Senha">
        </div>
        
        <!-- Data de nascimento -->
        <div class="form-group">
            <label for="nasc">Data de nascimento</label>
            <input type="date" name="nasc" id="nasc" placeholder="dd/mm/aaaa" required>  <!-- dd/mm/aaaa -->
        </div>

        <!-- Telefone -->
        <div class="form-group">
            <input type="text" name="tel" id="" placeholder="Telefone">              <!-- (11) 12345-1234 -->
        </div>

        <!-- RM -->
        <div class="form-group">
            <input type="text" name="rm" id="" placeholder="RM">
        </div>

        <!-- Curso -->
        <div class="form-group">
            <input type="text" name="crso" id="" placeholder="Curso">
        </div>

        <!-- Série -->
        <div class="form-group">
            <input type="text" name="serie" id="" placeholder="Série">
        </div>

        <div class="form-group">
            <input type="number" name="anoingr" id="" placeholder="Ano de ingresso">
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