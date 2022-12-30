<?php

include 'database.php';
$nome_curso = $_POST['nome_aluno'];
$carga_horaria = $_POST['data_nascimento'];

$query = "INSERT INTO  Alunos(nome_aluno, data_nascimento)
            VALUES ('$nome_aluno','$data_nascimento')";

mysqli_query($conexao,$query);

header('location:index.php?pagina=alunos');