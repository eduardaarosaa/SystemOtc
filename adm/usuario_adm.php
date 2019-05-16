<?php
include "../Telas/sessao.php";
include "../adm/menu.php";
include "../Back/conexao.php";

?>

<div class='container'>
    <div class="col-md-12">
    <h2 class="espaco-padrao">Cadastre um novo usuário</h2>
</div>
    <div class="col-md-12">
<div class="form-group espaco-padrao">
    <form action="../adm/user_adm.php" method="POST" name="form1">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Digte o nome do usuário" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digte e-mail do usuário" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite uma senha" required>
  </div>
  <button type="submit" class="btn btn-primary" >Cadastrar</button>
</form>
  <input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)"> 
</div>
</div>