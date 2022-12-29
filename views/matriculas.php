<table style = "border: 1px solid #ccc; width:100%">
    <tr>
        <th> ID</th>
        <th> Nome aluno</th>
        <th> Nome curso</th>
    </tr>

    <?php
        while ($linha = mysqli_fetch_array($consulta_matriculas)) {
            # code...
            echo '<tr><td>'.$linha['id_matricula'].'</td>';
            echo '<tr><td>'.$linha['nome_aluno'].'</td>';
            echo '<td>'.$linha['nome_curso'].'</td></tr>';
        }
    ?>

</table>