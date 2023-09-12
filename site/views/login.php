<h1>Login</h1>
<?php 
    if (isset($_GET['erro'])){
        echo '
        <div class="erro-msg">
            <span>Usuário ou Senha inválidos</span>
        </div>
        ';
    } 
?>
<form class="formu" method="post" action="login/login.php">
  
  <div class="form-group">
    <input type="text" name="user" placeholder="Nome de usuário">
  </div>

  <div class="form-group">
    <input type="password" name="password" placeholder="Digite a senha">
  </div>

  <div class="form-group">
    <input type="submit" value="Entrar">
  </div>
</form>