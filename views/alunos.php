<a href="?pagina=inserir_aluno"> Inserir aluno</a>
<table style = "border: 1px solid #ccc; width:100%">
    <tr>
        <th> ID</th>
        <th> Nome aluno</th>
        <th> Data de nascimento</th>
        <th> Deletar</th>
    </tr>

    <?php
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            # code...
            echo '<tr><td>'.$linha['id_aluno'].'</td>';
            echo '<td>'.$linha['nome_aluno'].'</td>';
            echo '<td>'.$linha['data_nascimento'].'</td>';
    ?>
    <td><a href = "deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>"> Deletar</a></td> </tr>
    
    <?php
        }
    ?>

</table>