<?php
include_once './includes/_head.php';
include_once './includes/_dados.php';
include_once './includes/_banco.php';
?>

<div id="title-admin" class="container">
    <h1>Bem vindo Admin</h1>
</div>
<div id="login" class="container">
<form>
  <div id="group" class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>


<?php
include_once './includes/_footer.php'

?>










