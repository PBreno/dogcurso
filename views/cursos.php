<a href="?pagina=inserir_curso"> Inserir Curso</a>
<table style = "border: 1px solid #ccc; width:100%">
    <tr>
        <th> ID</th>
        <th> Nome Curso</th>
        <th> Carga Horária</th>
        <th> Editar</th>
        <th> Deletar</th>
    </tr>

    <?php
        while ($linha = mysqli_fetch_array($consulta_cursos)) {
            # code...
            echo '<tr><td>'.$linha['id_curso'].'</td>';
            echo '<tr><td>'.$linha['nome_curso'].'</td>';
            echo '<td>'.$linha['carga_horaria'].'</td>';
    ?>
    <td><a href = "?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>"> Editar</a></td> 
    <td><a href = "deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>"> Deletar</a></td> </tr>
    
    <?php
        }
    ?>
</table>