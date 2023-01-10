<?php 

    if (!isset($_GET['editar'])) {?>

<h1>Inserir Aluno</h1>
<form action="processa_aluno.php" method="post">
    <br>
    <label class= "badge badge-pill badge-secondary">Aluno</label><br>
    <input  class="form-control" type="text" name="nome_aluno" placeholder = "Insira o nome aluno">
    <br><br>
    <label class="badge badge-pill badge-secondary">Data de Nascimento</label> <br>
    <input  class="form-control"type="date" name="data_nascimento" placeholder = "Insira a data de nascimento">
    <br><br>
    <input type="submit"  class="btn btn-success" value="Inserir aluno">
    
</form>

<?php } else { ?>

    <?php  while ($linha = mysqli_fetch_array($consulta_alunos)) { ?>
        <?php if($linha['id_aluno'] == $_GET['editar']) { ?>
           
            <h1>Inserir Aluno</h1>
            <form action="edita_aluno.php" method="post">
                <br>
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
                <br>
                <label class="badge badge-pill badge-secondary">Aluno</label><br>
                <input  class="form-control" type="text" name="nome_aluno" placeholder = "Insira o nome aluno"
                        value="<?php echo $linha['nome_aluno']; ?>">
                <br><br>
                <label class="badge badge-pill badge-secondary">Data de Nascimento</label> <br>
                <input  class="form-control" type="date" name="data_nascimento" placeholder = "Insira a data de nascimento"
                    value="<?php echo $linha['data_nascimento']; ?>">
                <br><br>
                <input type="submit"  class="btn btn-success" value="Editar aluno">

            </form>

        <?php } ?>
    <?php } ?>
<?php } ?>