<?php

include "menu.php";

?>

<div class='container'>
    <div class="col-md-12">
    <h2 class="espaco-padrao">Alterar sua senha</h2>
</div>
    <div class="col-md-12">
<div class="form-group">
    <form action="../Back/executa_senha.php" method="POST">
    <label for="exampleInputEmail1">Digite sua senha atual</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="senha_atual" aria-describedby="emailHelp" placeholder="Digite sua senha atual" require="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Digite sua nova senha</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="senha_nova" aria-describedby="emailHelp" placeholder="Digite sua senha nova">
  </div>

  <button type="submit" style="margin-left:1%" class="btn btn-primary">Alterar senha</button>
</form>
</div>