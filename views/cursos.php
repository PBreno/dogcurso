<a class= "btn btn-success" href="?pagina=inserir_curso"> Inserir Curso</a>
<br><br>
<table class="table table-hover table-triper" id ="cursos">
    <thead>
        <tr>
            <th> ID</th>
            <th> Nome Curso</th>
            <th> Carga Horária</th>
            <th> Editar</th>
            <th> Deletar</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_cursos)) {
                # code...
                echo '<tr><td>'.$linha['id_curso'].'</td>';
                echo '<td>'.$linha['nome_curso'].'</td>';
                echo '<td>'.$linha['carga_horaria'].'</td>';
        ?>
        <td><a href = "?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>"> 
        <span class="fa-solid fa-pen-to-square">  </span> </a></td> 
        <td><a href = "deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>">
        <i class="fa-solid fa-trash"></i></a></td> </tr>
        
        <?php
            }
        ?>
    </tbody>
</table>