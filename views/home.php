
<h1 style = "text-align:center">Bem-Vindos a Dog Cursos</h1> 

<form method= "post" action = "login.php">
    
    <label  class="badge badge-pill badge-secondary"> Usuário:</label>
    <input type = "text" name ="usuario" placeholder="Nome do usuário" class = "form-control">
    <br>
    
    <label  class="badge badge-pill badge-secondary"> Senha:</label>
    <input type = "password" name ="senha" placeholder="Senha" class = "form-control">
  
    <br>
    <input type = "submit" value= "Entrar" class = "btn btn-success">

</form>
<br>

<?php if (isset($_GET['erro'])){?>

<div class="alert alert-danger" role="alert">
    Usuário e/ou senha inválido
</div>
<?php } ?>