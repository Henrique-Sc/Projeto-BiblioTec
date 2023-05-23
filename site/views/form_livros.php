
<form action="cadastrar/cadastrar_livros.php" class="formu" method="post">
    <h2>Cadastro de Livros</h2>
    
    <div class="form-group">
        <input type="text" name="isbn" placeholder="ISBN">
    </div>
    <div class="form-group">
        <input type="text" name="titulo" placeholder="Título">
    </div>
    <div class="form-group">
        <input type="text" name="autor" placeholder="Autor">
    </div>
    <div class="form-group">
        <input type="text" name="editora" placeholder="Editora">
    </div>
    <div class="form-group">
        <input type="text" name="genero" placeholder="Gênero">
    </div>
    <div class="form-group">
        <input type="text" name="ano" placeholder="Ano">
    </div>
    <div class="form-group">
        <input type="text" name="exemplares" placeholder="Exemplares">
    </div>
    <div class="form-group">
        <select name="situacao" id="">
            <option value="Disponível">Disponível</option>
            <option value="Indisponível">Indisponível</option>
        </select>
    </div>
    <div class="form-group">
        <button class="btnform" type="submit">Enviar</button>
    </div>
</form>
            