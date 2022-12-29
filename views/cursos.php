<table style = "border: 1px solid #ccc; width:100%">
    <tr>
        <th> Nome Curso</th>
        <th> Carga Horária</th>
    </tr>

    <?php
        while ($linha = mysqli_fetch_array($consulta)) {
            # code...
            echo '<tr><td>'.$linha['nome_curso'].'</td>';
            echo '<td>'.$linha['carga_horaria'].'</td></tr>';
        }
    ?>

</table>