<?php

include 'database.php';

$id_alunos_cursos= $_GET['id_alunos_cursos'];

$query = "DELETE FROM ALUNOS_CURSOS WHERE ID_ALUNOS_CURSOS = $id_alunos_cursos";

mysqli_query($conexao,$query);

header('location:index.php?pagina=matricula');
?>