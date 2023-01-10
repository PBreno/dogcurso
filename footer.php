    </div>
        <footer>
            <div class= 'container'>
                ©2022  DogCursos -  Todos os direitos reservados.
            </div>

            <script src = "bootstrap/js/src/jquery.js"></script>
            <script src = "//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready( function () {
                    $('#cursos').DataTable();
                    $('#alunos').DataTable();
                    $('#matriculas').DataTable();
                } );
            </script>
        </footer>
    </body>
</html>