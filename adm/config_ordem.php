
<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

</head>

<?php
include "../Telas/sessao.php";
if($nivel == 1){
include "../adm/menu_cotacao.php";
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
    <input type="text" class="form-control valor_compra" id="real" name="valor_compra" aria-describedby="emailHelp" placeholder="Digte a cotação da ordem" require="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço de venda</label>
    <input type="text" class="form-control valor_venda" id="exampleInputEmail1" name="valor_venda" aria-describedby="emailHelp" placeholder="Digite o FEE da ordem">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço da ordem</label>
    <input type="text" class="form-control valor_ordem" id="exampleInputEmail1" name="valor_ordem" aria-describedby="emailHelp" placeholder="Digite o valor da ordem">
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
    $(document).ready(function(){
      
        $('.valor_compra').mask('000.000.000.000.000,00', {reverse: true});
        $('.valor_venda').mask('000.000.000.000.000,00', {reverse: true});
        $('.valor_ordem').mask('000.000.000.000.000,00', {reverse: true});
      
    }
  );
    </script>