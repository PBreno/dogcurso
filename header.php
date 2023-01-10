<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cursos PHP&Mysql</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">  
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">        
        <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="css/estilo.css">        
    </head>

    <body>
        <header>
            <div class = 'container'>
                <a href="?pagina=home"><img class="img-fluid" src="img/dog.png" title="Logo" alt="Logo"></a>  
                <div id='menu'>
                    <a href="?pagina=cursos">Cursos</a>
                    <a href="?pagina=alunos">Alunos</a>
                    <a href="?pagina=matriculas">Matrículas</a>
                    <?php if(isset($_SESSION['login'])){ ?>
                        <a href="logout.php">
                            <?php echo $_SESSION['usuario'];?> (Sair)
                        </a>
                    <?php } ?>    
                </div>
            </div>
        </header>   
        
        <div id='conteudo' class='container'>

