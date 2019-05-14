<head>
</head>
<?php
include "../Telas/sessao.php";
include "../Telas/menu.php";
include "../Back/conexao.php";

$consulta = "Select * from usuarios where cpf = $cpf";
$resultado = mysqli_query($link,$consulta);
if($resultado == true ){
    while($rows=mysqli_fetch_array($resultado)) {
        $agencia = $rows['agencia'];
        $conta = $rows['numero_conta'];
        $banco = $rows['banco'];
        $email = $rows['email'];
    }
}


?>

<div class='container'>
    <div class="col-md-12">
    <h2 class="espaco-padrao">Alterar dados </h2>
</div>
    <div class="col-md-12">
<div class="form-group espaco-padrao">
    <form action="../Back/executa_alter.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Agência</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="agencia" value="<?php echo $agencia?>" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Número da conta</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="numero_conta" value="<?php echo $conta?>" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Observação: Número da conta com o digíto. </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Banco</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="banco" value="<?php echo $banco?>" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $logado?>" aria-describedby="emailHelp" >
  </div>
  <button type="submit" class="btn btn-primary">alterar</button>
  <input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)"> 
</form>
  
</div>
</div>

