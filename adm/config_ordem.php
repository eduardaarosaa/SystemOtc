
<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script type="text/javascript" src="../Jquery/src/jquery.mask.min.js"></script>
  

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
    <label for="exampleInputEmail1">Preço de compra</label>
    <input type="text" class="form-control real" id="real" name="valor_compra" aria-describedby="emailHelp" placeholder="Digte a cotação da ordem" require="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço de venda</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="valor_venda" aria-describedby="emailHelp" placeholder="Digite o FEE da ordem">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço da ordem</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="valor_ordem" aria-describedby="emailHelp" placeholder="Digite o valor da ordem">
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
   jQuery("#real").mask('#.##0,00');
</script>