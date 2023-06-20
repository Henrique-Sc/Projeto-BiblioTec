<?php 
if (!isset ($_GET["edt_livro"])){
?>
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
    
    <?php 
} else {
    include('database/db.php');

    $id_livro = $_GET['edt_livro'];
    $query = "SELECT * FROM LIVRO WHERE id_livro = '$id_livro'" ;

    $consulta_livros = mysqli_query($conexao, $query);

    $linha = mysqli_fetch_row($consulta_livros);
    
    
    ?>
    <form action="editar/editar_livros.php" class="formu" method="post">
        <h2>Editar Livro</h2>
        
        <input type="hidden" name="id_livro" value="<?php echo $linha[0] ?>">
        <div class="form-group">
            <input type="text" name="isbn" placeholder="ISBN" value="<?php echo $linha[1];?>">
        </div>
        <div class="form-group">
            <input type="text" name="titulo" placeholder="Título" value="<?php echo $linha[2];?>">
        </div>
        <div class="form-group">
            <input type="text" name="autor" placeholder="Autor" value="<?php echo $linha[3];?>">
        </div>
        <div class="form-group">
            <input type="text" name="editora" placeholder="Editora" value="<?php echo $linha[4];?>">
        </div>
        <div class="form-group">
            <input type="text" name="genero" placeholder="Gênero" value="<?php echo $linha[5];?>">
        </div>
        <div class="form-group">
            <input type="text" name="ano" placeholder="Ano" value="<?php echo $linha[6];?>">
        </div>
        <div class="form-group">
            <input type="text" name="exemplares" placeholder="Exemplares" value="<?php echo $linha[7]?>">
        </div>
        <div class="form-group">
            <select name="situacao" id="" value="<?php echo $linha
            [8];?>">
                <option value="Disponível">Disponível</option>
                <option value="Indisponível">Indisponível</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btnform" type="submit">Enviar</button>
        </div>
    </form>

<?php 
}
?>