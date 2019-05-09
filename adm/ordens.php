<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<?php
include "../adm/menu.php";
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
            echo '<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
            
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
            echo'<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Documentação aprovada
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="analise_pagamento.php?cod='. $cod_ordens.'">Pagamento em análise</a>
    <a class="dropdown-item" href="pagamento_aprovado.php?cod= '. $cod_ordens .'">Pagamento aprovado</a>
    <a class="dropdown-item" href="pagamento_reprovado.php?cod='. $cod_ordens .'">Pagamento reprovado</a>
    <a class="dropdown-item" href="processamento.php?cod= '. $cod_ordens .'">Processamento</a>
    <a class="dropdown-item" href="ordem_concluida.php?cod= '. $cod_ordens .'">Ordem Concluída</a>';
        }elseif($status == 2){

          echo'<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<img class='myImg produto' src="../anexos/<?php echo $imagem; ?>"   width='180' height='180'/>


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
      <th width="1%" scope="col">Comentário</th>
      <th scope="col">Data</th>
      <th scope="col">Hora</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <div class='col-md-12'>
    <div class='row'>
<td><?php echo $comentario ?></td>
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

<h3>Adicionar um comentário</h3>

<form action="../adm/comentarios.php" method="POST">
<input type="hidden" name="codigo" value="<?php echo $cod_ordens ?>"/>
<textarea type="text" name="comentario" cols='60' rows='5'></textarea>
<br>
<button type="submit" class="btn btn-primary">Comentar</button>
 </form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
<!-- The Modal -->
	<div id="myModal" class="modal">
  		<!-- The Close Button -->
  		<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  		<!-- Modal Content (The Image) -->
  		<img class="modal-content" id="img01">
  		<!-- Modal Caption (Image Text) -->
  		<div id="caption">
  		</div>
  	</div>
  		<script type="text/javascript" src="../script/modal.js"></script>
<!--<script>
$(document).ready(function(){
    $('.produto').on( "click", function() {
        $(this).toggleClass('maxSize')
    });
});
</script>-->

