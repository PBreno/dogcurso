<?php

include 'database.php';
include 'header.php';

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

switch ($pagina) {
    case 'cursos':
        include 'views/cursos.php';
        break;

    case 'alunos':
        include 'views/alunos.php';
        break;
    
    case 'matriculas':
        include 'views/matriculas.php';
        break;    
    
    case 'inserir_curso':
        include 'views/inserir_curso.php';
        break;
    case 'inserir_aluno':
        include 'views/inserir_aluno.php';
        break;

    case 'inserir_matricula':
        include 'views/inserir_matricula.php';
        break;
    
    default:
        include 'views/home.php';
        break;
}
/* if ($pagina == 'cursos') {
    # code...
    include 'views/cursos.php';
}
elseif ($pagina == 'alunos') {
    # code...
    include 'views/alunos.php';
}
elseif ($pagina == 'inserir_curso') {
    # code...
    include 'views/inserir_curso.php';
}
elseif ($pagina == 'inserir_aluno') {
    # code...
    include 'views/inserir_aluno.php';
}
elseif ($pagina == 'inserir_matricula') {
    # code...
    include 'views/inserir_matricula.php';
}
elseif ($pagina == 'matriculas') {
# code...
    include 'views/matriculas.php';
}else {
    include 'views/home.php';
} */
include 'footer.php';

# Conexão com o banco de dados MySQL
/* $servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'teste';

$conexao = mysqli_connect($servidor,$usuario,$senha,$database); */

#Criando tabelas usando PHP
    
/*     $query = "CREATE TABLE CURSOS (
        id_curso int not null auto_increment,
        nome_curso varchar (255) not null, 
        carga_horaria int not null,
        primary key(id_curso)
    )";

    $executar = mysqli_query($conexao,$query);
    
    $query = "CREATE TABLE ALUNOS(
        id_aluno int not null auto_increment,
        nome_aluno varchar(255) not null, 
        data_nascimento varchar(255),
        primary key(id_aluno)
    )";

    $executar = mysqli_query($conexao,$query);

    $query = "CREATE TABLE ALUNOS_CURSOS(
        id_aluno_curso int not null auto_increment,
        id_aluno int not null,
        id_curso int not null,
        primary key(id_aluno_curso)
    )";

    $executar = mysqli_query($conexao,$query);
    

    $query = 
 */

//echo $executar;
