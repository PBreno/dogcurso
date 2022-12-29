<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste";

//try {
    //code...
    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);
//} catch (mysqli_sql_exception $th) {
    //throw $th;
    //$th->getMessage();
//}
$query = "SELECT *FROM CURSOS";
$consulta = mysqli_query($conexao,$query);