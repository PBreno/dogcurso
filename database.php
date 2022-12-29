<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "dogcurso";

//try {
    //code...
    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);
//} catch (mysqli_sql_exception $th) {
    //throw $th;
    //$th->getMessage();
//}
$query = "SELECT *FROM CURSOS";
$consulta_cursos = mysqli_query($conexao,$query);

$query = "SELECT *FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao,$query);

 $query = "SELECT alunos.nome_aluno, cursos.nome_curso 
            FROM alunos, cursos, alunos_cursos
            WHERE alunos_cursos.id_aluno =alunos.id_aluno
            And alunos_cursos.id_curso = cursos.id_curso"; 

$consulta_matriculas = mysqli_query($conexao,$query);