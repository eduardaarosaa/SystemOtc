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

 
$resultado="SELECT * FROM ordens where cod='$cod_ordens'";
$exibir = mysqli_query($link,$resultado);
while($rows = mysqli_fetch_array($exibir)){
    $codigo = $rows['cod'];
    $quantidade = $rows['quantidade'];
    $carteira = $rows['carteira'];
    $email = $rows['email'];
    $status = $rows['status'];
    $imagem = $rows['nome'];
    

?>
<div class="container">
    <div class="row">
<div class="col-md-12 espaco-padrao">
<table class="table table-bordered">
  <thead>
    <tr>
      <th width="1%" scope="col">Codigo</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Carteira</th>
      <th scope="col">Status</th>
      <th scope="col">E-mail</th>
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
      <td><?php echo  $quantidade ?></td>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo $carteira ?></td>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td width="5%"><?php 
          
          if($status == 0){
            echo '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
            
          Pagamento em análise
            

           
           
            
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="analise_pagamento.php?cod='. $cod_ordens .'">Pagamento em análise</a>
    <a class="dropdown-item" href="pagamento_aprovado.php?cod='. $cod_ordens .'">Pagamento aprovado</a>
    <a class="dropdown-item" href="pagamento_reprovado.php?cod='. $cod_ordens .'">Pagamento reprovado</a>
    <a class="dropdown-item" href="processamento.php?cod= '. $cod_ordens .'">Processamento</a>
    <a class="dropdown-item" href="ordem_concluida.php?cod= '. $cod_ordens .'">Ordem Concluída</a>
    ';

    
        }elseif($status == 1){
            echo'<button class=" btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Documentação aprovada
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="analise_pagamento.php?cod='. $cod_ordens.'">Pagamento em análise</a>
    <a class="dropdown-item" href="pagamento_aprovado.php?cod= '. $cod_ordens .'">Pagamento aprovado</a>
    <a class="dropdown-item" href="pagamento_reprovado.php?cod='. $cod_ordens .'">Pagamento reprovado</a>
    <a class="dropdown-item" href="processamento.php?cod= '. $cod_ordens .'">Processamento</a>
    <a class="dropdown-item" href="ordem_concluida.php?cod= '. $cod_ordens .'">Ordem Concluída</a>';
        }elseif($status == 2){

          echo'<button class="btn btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Documentação reprovada
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         
         <a class="dropdown-item" href="analise_pagamento.php?cod='. $cod_ordens .'">Pagamento em análise</a>
         <a class="dropdown-item" href="pagamento_aprovado.php?cod='. $cod_ordens .'">Pagamento aprovado</a>
         <a class="dropdown-item" href="pagamento_reprovado.php?cod= '. $cod_ordens .'">Pagamento reprovado</a>
         <a class="dropdown-item" href="processamento.php?cod= '. $cod_ordens .'">Processamento</a>
         <a class="dropdown-item" href="ordem_concluida.php?cod= '. $cod_ordens .'">Ordem Concluída</a>';


        }elseif($status == 3){
          echo'<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Processamento
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         
         <a class="dropdown-item" href="analise_pagamento.php?cod= '. $cod_ordens .'">Pagamento em análise</a>
         <a class="dropdown-item" href="pagamento_aprovado.php?cod= '. $cod_ordens .'">Pagamento aprovado</a>
         <a class="dropdown-item" href="pagamento_reprovado.php?cod= '. $cod_ordens .'">Pagamento reprovado</a>
         <a class="dropdown-item" href="processamento.php?cod= '. $cod_ordens .'">Processamento</a>
         <a class="dropdown-item" href="ordem_concluida.php?cod= '. $cod_ordens .'">Ordem Concluída</a>';
        }else{
          echo'<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Ordem concluída
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         
         <a class="dropdown-item" href="analise_pagamento.php?cod='. $cod_ordens .'">Pagamento em análise</a>
         <a class="dropdown-item" href="pagamento_aprovado.php?cod= '. $cod_ordens .'">Pagamento aprovado</a>
         <a class="dropdown-item" href="pagamento_reprovado.php?cod= '. $cod_ordens .'">Pagamento reprovado</a>
         <a class="dropdown-item" href="processamento.php?cod= '. $cod_ordens .'">Processamento</a>
         <a class="dropdown-item" href="ordem_concluida.php?cod= '. $cod_ordens .'">Ordem Concluída</a>';
        }
        echo '
    </div>
  </div></td>
      ';
      
       ?>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo $email ?></td>
            </div>
        </div>
      </tr>
        </div>
    </div>
    </div>
    </tr>

        
        </tbody>
</table>
<h3>Anexo</h3>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Ver comprovante de pagamento
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
      <img src="../anexos/<?php echo $imagem; ?>"   width='450' height='450'/>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




<?php   

}

?>

<br><br>
<h3>Observações</h3>


<?php
$consulta="select * from comentarios where cod_ordens = '$cod_ordens' order by id desc";
$resultado=mysqli_query($link,$consulta);
if($resultado ==true  ){
  while($linha = mysqli_fetch_assoc($resultado)){

    $comentario = $linha['comentario'];
    $data = $linha['data'];
    $hora = $linha['hora'];
  

  
  ?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Comentário</th>
      <th scope="col">Data</th>
      <th scope="col">Hora</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <div class='col-md-12'>
    <div class='row'>
<td><?php  if($comentario != NULL) {echo $comentario;} else { echo "Nenhuma observação adicionada.";} ?></td>
</div>
</div>
<div class='col-md-12'>
    <div class='row'>
<td><?php echo $data ?></td>
</div>
</div>
<div class='col-md-12'>
    <div class='row'>
<td><?php echo $hora ?></td>
</div>
</div>
<?php } 
  
  ?>
</tr>
  </tbody>
</table>
<?php }else{ 
  echo "Nenhuma observação adicionada" . "<br>";
} ?>

<?php 
 if ($nivel == 1) { ?>
<h3>Adicionar um comentário</h3>

<form action="../adm/comentarios.php" method="POST">
<input type="hidden" name="codigo" value="<?php echo $cod_ordens ?>"/>
<textarea type="text" name="comentario" cols='60' rows='5'></textarea>
<br>
<button type="submit" class="btn btn-primary">Comentar</button>
 </form>
 
 <?php 
$config = "select * from ordens where cod='$cod_ordens'";
$pesquisa = mysqli_query($link,$config);

foreach ($pesquisa as $r){

      $cotacao = $r['cotacao'];
      $fee = $r['fee'];
      $valor = $r['valor'];

  ?>



 <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Cotação</th>
      <th scope="col">Fee</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
  <div class='col-md-12'>
    <div class='row'>
<td><?php echo $cotacao ?></td>
</div>
</div>
<div class='col-md-12'>
    <div class='row'>
<td><?php echo $fee ?></td>
</div>
</div>
<div class='col-md-12'>
    <div class='row'>
<td><?php echo $valor ?></td>
</div>
</div>
  </tbody>
 </table>

 <?php }?>


 <a href="config_ordem.php?cod= <?=$codigo;?>"><button type="submit" class="btn btn-primary">Configure os valores desta ordem</button></a>
 <br><br>
 <?php } else { echo "";} ?>

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>

