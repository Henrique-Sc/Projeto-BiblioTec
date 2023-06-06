<?php 
    if (!isset($_GET['edt_livro'])) {
        
    }
?>

<form action="cadastrar/cadastrar_alunos.php" class="formu" method="post">
    <h2>Cadastro de aluno</h2>

    <!-- Nome -->
    <input type="text" name="nome" id="" placeholder="Nome">

    <!-- Email -->
    <input type="text" name="email" id="" placeholder="Email">

    <!-- Senha -->
    <input type="text" name="psw" id="" placeholder="Senha">

    <!-- Data de nascimento -->
    <label for="nasc">Data de nascimento</label>
    <input type="date" name="nasc" id="nasc" placeholder="dd/mm/aaaa" required> <!-- dd/mm/aaaa -->

    <!-- Telefone -->
    <input type="text" name="tel" id="" placeholder="Telefone"> <!-- (11) 12345-1234 -->

    <!-- RM -->
    <input type="text" name="rm" id="" placeholder="RM">


    <!-- Curso -->
    <select name="crso" id="">
        <option value="MTEC Administração">MTEC Administração</option>
        <option value="MTEC Informática para Internet">MTEC Informática para Internet</option>
        <option value="MTEC Logística">MTEC Logística</option>
        <option value="Técnico em Administração">Técnico em Administração</option>
        <option value="Técnico em Desenvolvimento de Sistemas">Técnico em Desenvolvimento de Sistemas</option>
    </select>
    
    <!-- Série -->
    <select name="serie" id="">
        <option value="1">1º ano</option>
        <option value="2">2º ano</option>
        <option value="3">3º ano</option>
    </select>
    
    <input type="" name="anoingr" id="" placeholder="Ano de ingresso">
    
    <select name="perio" id="">
        <option value="Manhã">Manhã</option>
        <option value="Tarde">Tarde</option>
        <option value="Noite">Noite</option>
    </select>

    <button class="btnform" type="submit">Enviar</button>
    </div>
</form>