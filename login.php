<?php

include "database.php";
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT *FROM USUARIOS WHERE USUARIO = '$usuario' 
            AND SENHA='$senha'";

$consulta = mysqli_query($conexao,$query);

if (mysqli_num_rows($consulta) == 1) {

    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    header('location:index.php');
}else {
    # code...
    header('location:index.php?erro');
}
?>