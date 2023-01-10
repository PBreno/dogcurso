<a class= "btn btn-success" href="?pagina=inserir_matricula"> Inserir Matricula</a>
<br><br>
<table  class="table table-hover table-triper" id ="matriculas">
    <thead>
        <tr>
            <th>ID</th>
            <th> Nome aluno</th>
            <th> Nome curso</th>
            <th> Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($linha = mysqli_fetch_array($consulta_matriculas)) {
                # code...
                echo '<tr><td>'.$linha['id_alunos_cursos'].'</td>';
                echo '<td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['nome_curso'].'</td>';
        ?>
        <td>
            <a href ="deleta_matricula.php?id_alunos_cursos=<?php echo $linha['id_alunos_cursos'];?>"> Deletar</a>
        </td> </tr>
        
        <?php
            }
        ?>
    </tbody>
</table>