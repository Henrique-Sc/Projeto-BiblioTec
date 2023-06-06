<?php 
    if (!isset($_GET['edt_livro'])) {
    
?>

<form action="cadastrar/cadastrar_alunos.php" class="formu" method="post">
    <h2>Cadastro de aluno</h2>

    <!-- Nome -->
    <input required type="text" name="nome" id=""placeholder="Nome">

    <!-- Email -->
    <input required type="text" name="email" id=""placeholder="Email">

    <!-- Senha -->
    <input required type="text" name="psw" id=""placeholder="Senha">

    <!-- Data de nascimento -->
    <label for="nasc">Data de nascimento</label>
    <input required type="date" name="nasc" id="nasc"placeholder="dd/mm/aaaa" required> <!-- dd/mm/aaaa -->

    <!-- Telefone -->
    <input required type="text" name="tel" id=""placeholder="Telefone"> <!-- (11) 12345-1234 -->

    <!-- RM -->
    <input required type="text" name="rm" id=""placeholder="RM">


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
    
    <input required type="" name="anoingr" id=""placeholder="Ano de ingresso">
    
    <select name="perio" id="">
        <option value="Manhã">Manhã</option>
        <option value="Tarde">Tarde</option>
        <option value="Noite">Noite</option>
    </select>

    <button class="btnform" type="submit">Enviar</button>
    </div>
</form>

<?php 
} else {
        $query = "SELECT * FROM ALUNO WHERE RM = '". $_GET['edt_livro'] . "'";
        $consulta_alunos = mysqli_query($conexao, $query);
        $linha = mysqli_fetch_row($consulta_alunos);
        var_dump($linha);
    ?>
    
    <form action="cadastrar/cadastrar_alunos.php" class="formu" method="post">
        <h2>Cadastro de aluno</h2>
    
        <!-- Nome -->
        <input required type="text" name="nome" id=""placeholder="Nome" value="<?php $linha[""] ?>">
    
        <!-- Email -->
        <input required type="text" name="email" id=""placeholder="Email" value="<?php $linha[""] ?>">
    
        <!-- Senha -->
        <input required type="text" name="psw" id=""placeholder="Senha" value="<?php $linha[""] ?>">
    
        <!-- Data de nascimento -->
        <label for="nasc">Data de nascimento</label>
        <input required type="date" name="nasc" id="nasc"placeholder="dd/mm/aaaa" required value="<?php $linha[""] ?>"> <!-- dd/mm/aaaa -->
    
        <!-- Telefone -->
        <input required type="text" name="tel" id=""placeholder="Telefone" value="<?php $linha[""] ?>"> <!-- (11) 12345-1234 -->
    
        <!-- RM -->
        <input required type="text" name="rm" id=""placeholder="RM" value="<?php $linha[""] ?>">
    
    
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
        
        <input required type="" name="anoingr" id=""placeholder="Ano de ingresso" value="<?php $linha[""] ?>">
        
        <select name="perio" id="">
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>
    
        <button class="btnform" type="submit">Enviar</button>
        </div>
    </form>
<?php 
}
?>