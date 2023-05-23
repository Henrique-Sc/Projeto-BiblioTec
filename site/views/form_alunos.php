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
    <form action="cadastrar/cadastrar_alunos.php" class="formu" method="post">
        <h2>Cadastro de aluno</h2>

        <!-- 
            Curso, Série e
         -->
        
        <!-- Nome -->
        
            <input type="text" name="nome" id="" placeholder="Nome">
        

        <!-- Email -->
        
            <input type="text" name="email" id="" placeholder="Email">
        

        <!-- Senha -->
        
            <input type="text" name="psw" id="" placeholder="Senha">
        
        
        <!-- Data de nascimento -->
        
            <label for="nasc">Data de nascimento</label>
            <input type="date" name="nasc" id="nasc" placeholder="dd/mm/aaaa" required>  <!-- dd/mm/aaaa -->
        

        <!-- Telefone -->
        
            <input type="text" name="tel" id="" placeholder="Telefone">              <!-- (11) 12345-1234 -->
        

        <!-- RM -->
        
            <input type="text" name="rm" id="" placeholder="RM">
        

        <!-- Curso -->
        
            <input type="text" name="crso" id="" placeholder="Curso">
        

        <!-- Série -->
        
            <input type="text" name="serie" id="" placeholder="Série">
        

        
            <input type="number" name="anoingr" id="" placeholder="Ano de ingresso">
        

        
            <input type="text" name="perio" id="" placeholder="Período">
        

    
        <button class="btnform" type="submit">Enviar</button>
    </div>
    </form>
</body>

</html>