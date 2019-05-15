<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<?php
include "../Telas/sessao.php";
if($nivel == 1){
include "../adm/menu.php";
} else{
include "../Telas/menu.php";
}
include "../Back/conexao.php";
$codigo = $_GET['cod'];

 
$resultado="SELECT * FROM usuarios where cod='$codigo'";
$exibir = mysqli_query($link,$resultado);
while($rows = mysqli_fetch_array($exibir)){
    $codigo = $rows['cod'];
    $nome = $rows['nome'];
    $email = $rows['email'];
    $agencia = $rows['agencia'];
    $conta = $rows['numero_conta'];
    $banco = $rows['banco'];
    

?>
<div class="container">
    <div class="row">
<div class="col-md-12 espaco-padrao">
<table class="table table-bordered">
  <thead>
    <tr>
      <th width="1%" scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Agência</th>
      <th scope="col">Conta</th>
      <th scope="col">Banco</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<div class="col-md-12">
            <div class="row">
      <th width="1%" scope="row"><?php echo $codigo?></th>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo  $nome ?></td>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo $email ?></td>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo $agencia ?></td>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo $conta ?></td>
            </div>
</div>
<div class="col-md-12">
            <div class="row">
      <td><?php echo $banco ?></td>
            </div>
        </div>
    </tr>
  </tbody>
</table>
<a href="usuarios.php"><input type="button" class="btn btn-primary" value="Voltar"></a> 
<?php } ?>
</div>
    </div>
</div>
