<table style = "border: 1px solid #ccc; width:100%">
    <tr>
        <th> ID</th>
        <th> Nome Curso</th>
        <th> Carga Horária</th>
    </tr>

    <?php
        while ($linha = mysqli_fetch_array($consulta_cursos)) {
            # code...
            echo '<tr><td>'.$linha['id_curso'].'</td>';
            echo '<tr><td>'.$linha['nome_curso'].'</td>';
            echo '<td>'.$linha['carga_horaria'].'</td></tr>';
        }
    ?>

</table>