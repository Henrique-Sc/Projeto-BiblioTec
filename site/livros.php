<include 'db.php'>

<table border = 1>
 <tr>
    <th>ISBN</th>
    <th>Título</th>
    <th>Autor</th>
    <th>Editora</th>
    <th>Gênero</th>
    <th>Ano</th>
    <th>Exemplares</th>
    <th>Situação</th>
 </tr>

<?php
while($linha = mysqli_fetch_array(
    $consulta_livros)){
        echo '<tr><td>'.$linha['ISBN'].'</td>'
    }

</table>