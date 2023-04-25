<?php
//inclusão do arquivo de conexão com o banco de dados
include 'db.php';

//Recebimento dos valores inseridos no formulário
//Variável nome vai receber o valor na input nome
$nome = $_POST['nome'];
$psw = $_POST['psw'];
$nasc = $_POST['nasc'];
$tel = $_POST['tel'];
$rm = $_POST['rm'];
$crso = $_POST['crso'];
$serie = $_POST['serie'];
$anoingr = $_POST['anoingr'];
$perio = $_POST['perio'];

$query = "INSERT INTO aluno (RM, NOME, TELEFONE, DATA_NASC, EMAIL, SENHA, CURSO, SERIE, ANO_INGRESSO, PERIODO) VALUES 
(NULL, '$nome', '$psw','$nasc',$tel,$rm,'$curso','$serie','$anoingr','$perio')";
//executar comando na conexão estabelecida
mysqli_query($conexao,$query);
//redirecionamento 
header('location:index.php?cadastrar_alunos');


?>