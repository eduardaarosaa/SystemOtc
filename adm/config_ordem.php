
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
$cod_ordens = $_GET['cod'];

?>
<div class='container'>
    <div class="row">
        <div class="col-md-12">
<h2 class='espaco-padrao'> Configure os valores da Ordem </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
 <div class="form-group espaco-padrao">
     
<form action="../adm/executa_config.php" method="POST" name="form1" enctype="multipart/form-data">
    <input type="hidden" name='cod' value='<?php echo $cod_ordens; ?>'>
    <label for="exampleInputEmail1">Cotação</label>
    <input type="text" class="form-control ValoresItens" id="exampleInputEmail1" name="cotacao" aria-describedby="emailHelp" placeholder="Digte a cotação da ordem" require="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">FEE</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="fee" aria-describedby="emailHelp" placeholder="Digite o FEE da ordem">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Valor</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="valor" aria-describedby="emailHelp" placeholder="Digite o valor da ordem">
  </div>
  <div class="row">
      <div class="col-md-12">
  <button type="submit" class="btn btn-primary">Configurar</button>
</div>
</div>
</form>
</div>
</div>
</div>

<script>
  $(document).ready(function()
{
     $(".ValoresItens").maskMoney({
         prefix: "R$:",
         decimal: ",",
         thousands: "."
     });
});
</script>