<a class= "btn btn-success" href="?pagina=inserir_aluno"> Inserir aluno</a>
<br><br>
<table class="table table-hover table-triper" id ="alunos">
    <thead>
        <tr>
            <th> ID</th>
            <th> Nome aluno</th>
            <th> Data de nascimento</th>
            <th> Editar</th>
            <th> Deletar</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_alunos)) {
                # code...
                echo '<tr><td>'.$linha['id_aluno'].'</td>';
                echo '<td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['data_nascimento'].'</td>';
        ?>
        <td><a href = "?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno'];?>">
        <i class="fas fa-solid fa-trash"></i></a></td> 
        <td><a href = "deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>"> Deletar</a></td> </tr>
        
        <?php
            }
        ?>
    </tbody>
</table>