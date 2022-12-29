<table style = "border: 1px solid #ccc; width:100%">
    <tr>
        <th> ID</th>
        <th> Nome aluno</th>
        <th> Data de nascimento</th>
    </tr>

    <?php
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            # code...
            echo '<tr><td>'.$linha['id_aluno'].'</td>';
            echo '<td>'.$linha['nome_aluno'].'</td>';
            echo '<td>'.$linha['data_nascimento'].'</td></tr>';
        }
    ?>

</table>