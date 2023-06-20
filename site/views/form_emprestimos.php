<?php 
    $query = "SELECT ID_LIVRO, LIVRO.TITULO FROM LIVRO";
    $consulta_livros = mysqli_query($conexao, $query);
?>

<?php 
// echo htmlspecialchars($_SERVER['PHP_SELF']) . "?pagina=form_emprestimo" 
?>
<?php 
if (!isset ($_GET["edt_emp"])){
?>
<form action="cadastrar/cadastrar_emprestimos.php" class="formu" method="post">
    <h2>Cadastro de emprestimo</h2>

    <!-- Títulos dos livros -->
    <div class="form-group">
        <select name="titulo_livro" required>
            <?php
                while ($consulta = mysqli_fetch_array($consulta_livros)) {
                    // consulta[0] -> id_livro
                    // consulta[1] -> titulo_livro
                    echo "<option value='$consulta[0]'>$consulta[1]</option>";
                }
                
                ?>
        </select>
    </div>

    <!-- RM -->
    <div class="form-group">
        <input type="number" name="rm_aluno" id="" placeholder="RM do aluno" required>
    </div>

    <!-- Data de devolução -->
    <div class="form-group">
        <label for="data-devolucao">Data de devolução</label>
        <input type="date" name="data_devolucao" id="data-devolucao" placeholder="" required>
    </div>
    
    <div class="form-group">
        <button class="btnform" type="submit">Enviar</button>
    </div>

    <script>
        let data_devol = document.querySelector('#data-devolucao')
        data_devol.min = new Date().toLocaleDateString('fr-ca')
    </script>
</form>

<?php
} else {
    include('database/db.php');

    $id_emprestimo = $_GET['edt_emp'];
    $query = "SELECT * FROM EMPRESTIMO WHERE id_emp = $id_emprestimo" ;
    $consulta_emprestimo = mysqli_query($conexao, $query);

    $consulta = mysqli_fetch_row($consulta_emprestimo);
    var_dump($consulta);
    ?>
       <form action="editar/editar_emprestimo.php" class="formu" method="post">
           <h2>Editar empréstimos</h2>
           <input type="hidden" name="id_emp" value="<?php echo $consulta[0]; ?>">
           
           <!-- Títulos dos livros -->
           <div class="form-group">
               <select name="titulo_livro" required disabled>
                   <?php
                    while ($linha = mysqli_fetch_array($consulta_livros)) {
                        // linha[0] -> id_livro
                        // linha[1] -> titulo_livro
                        echo "<option value='$linha[0]'>$linha[1]</option>";
                    }
                    
                    ?>
            </select>
        </div>

        <!-- Data de retirada -->
        <div class="form-group">
            <label for="data-retirada">Data de retirada</label>
            <input type="date" name="data_retirada" id="data-retirada" value="<?php echo $consulta[3];?>" disabled>
        </div>
        <!-- Data de devolução -->
        <div class="form-group">
            <label for="data-devolucao">Data de devolução</label>
            <input type="date" name="data_devolucao" id="data-devolucao" value="<?php echo $consulta[4];?>">
        </div>
        <!-- Multa -->
        <div class="form-group">
            <label for="multa">Multa</label>
            <input type="number" name="multa"  placeholder="" id="multa" value="<?php echo $consulta[6];?>">
        </div>
        <div class="form-group">
            <label for="situacao">Situação</label>
            <select name="situacao" id="situacao">
                <option value="Concluído">Concluído</option>
                <option value="Renovado">Renovado</option>
                <option value="Vencido">Vencido</option>
            </select>
        </div>

        <div class="form-group">
            <button class="btnform" type="submit">Enviar</button>
        </div>
    </form>

<?php 
}
?>


