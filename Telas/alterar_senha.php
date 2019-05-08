<?php

include "menu.php";

?>

<div class='container'>
    <div class="col-md-12">
    <h2 class="espaco-padrao">Alterar sua senha</h2>
</div>
    <div class="col-md-12">
<div class="form-group">
    <form action="realizar_ordem" method="POST">
    <label for="exampleInputEmail1">Digite sua senha atual</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="senha_atual" aria-describedby="emailHelp" placeholder="Digite sua senha atual" require="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Digite sua nova senha</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="carteira" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Anexe aqui o comprovante de pagamento</label>
    <input type="file" class="form-control" name="anexo">
  </div>
  </div>

  <button type="submit" style="margin-left:1%" class="btn btn-primary">Cadastrar</button>
</form>
</div>