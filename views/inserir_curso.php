<?php 

    if (!isset($_GET['editar'])) {?>

<h1>Inserir curso</h1>
<form action="processa_curso.php" method="post">
    <br>
    <label  class="badge badge-pill badge-secondary">Curso</label><br>
    <input  class="form-control" type="text" name="nome_curso" placeholder = "Insira o nome do curso">
    <br><br>
    <label  class="badge badge-pill badge-secondary"> Carga horária</label> <br>
    <input class="form-control" type="text" name="carga_horaria" placeholder = "Insira a carga horária">
    <br><br>
    <input type="submit" class="btn btn-success" value="Inserir curso">
</form>

<?php } else { ?>

    <?php  while ($linha = mysqli_fetch_array($consulta_cursos)) { ?>
        <?php if($linha['id_curso'] == $_GET['editar']) { ?>
            
            <h1>Editar curso</h1>
            <form action="edita_curso.php" method="post">
                <input class="form-control" type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
                <br>
                <label  class="badge badge-pill badge-secondary" >Curso</label><br>
                <input class="form-control" type="text" name="nome_curso" placeholder = "Insira o nome do curso" 
                                    value="<?php echo $linha['nome_curso']; ?>">
                <br><br>
                <label  class="badge badge-pill badge-secondary"> Carga horária</label> <br>
                <input class="form-control" type="text" name="carga_horaria" placeholder = "Insira a carga horária"
                                    value="<?php echo $linha['carga_horaria']; ?>">
                <br><br>
                <input type="submit" class="btn btn-success" value="Editar curso">
            </form>

        <?php } ?>
    <?php } ?>
<?php } ?>