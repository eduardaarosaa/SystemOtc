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
    

?>
<div class="container">
    <div class="row">
<div class="col-md-12 espaco-padrao">
<?php
 echo $cod_ordens;
?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
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
      <th scope="row"><?php echo $codigo?></th>
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
      <td align="center"><?php 
          
          if($status == 0){
            echo '<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
            
          Pagamento em análise
            

           
           
            
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="analise_pagamento.php?cod='. $cod_ordens .'">Pagamento em análise</a>
    <a class="dropdown-item" href="pagamento_aprovado.php?cod= .<?=$cod_ordens?>.">Pagamento aprovado</a>
    <a class="dropdown-item" href="pagamento_reprovado?cod= .<?=$cod_ordens?>.">Pagamento reprovado</a>
    <a class="dropdown-item" href="processamento?cod= .<?=$cod_ordens?>.">Processamento</a>
    <a class="dropdown-item" href="ordem_concluida?cod= .<?=$cod_ordens?>.">Ordem Concluída</a>
    ';

    
        }elseif($status == 1){
            echo'<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Documentação aprovada
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="analise_pagamento?cod='. $cod_ordens.'">Pagamento em análise</a>
    <a class="dropdown-item" href="pagamento_aprovado?cod= .<?=$cod_ordens?>.">Pagamento aprovado</a>
    <a class="dropdown-item" href="pagamento_reprovado?cod= .<?=$cod_ordens?>.">Pagamento reprovado</a>
    <a class="dropdown-item" href="processamento?cod= .<?=$cod_ordens?>.">Processamento</a>
    <a class="dropdown-item" href="ordem_concluida?cod= .<?=$cod_ordens?>.">Ordem Concluída</a>';
        }elseif($status == 2){

          echo'<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Documentação reprovada
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         
         <a class="dropdown-item" href="analise_pagamento?cod= .<?=$cod_ordens?>.">Pagamento em análise</a>
         <a class="dropdown-item" href="pagamento_aprovado?cod= .<?=$cod_ordens?>.">Pagamento aprovado</a>
         <a class="dropdown-item" href="pagamento_reprovado?cod= .<?=$cod_ordens?>.">Pagamento reprovado</a>
         <a class="dropdown-item" href="processamento?cod= .<?=$cod_ordens?>.">Processamento</a>
         <a class="dropdown-item" href="ordem_concluida?cod= .<?=$cod_ordens?>.">Ordem Concluída</a>';


        }elseif($status == 3){
          echo'<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Processamento
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         
         <a class="dropdown-item" href="analise_pagamento?cod= .<?=$cod_ordens?>.">Pagamento em análise</a>
         <a class="dropdown-item" href="pagamento_aprovado?cod= .<?=$cod_ordens?>.">Pagamento aprovado</a>
         <a class="dropdown-item" href="pagamento_reprovado?cod= .<?=$cod_ordens?>.">Pagamento reprovado</a>
         <a class="dropdown-item" href="processamento?cod= .<?=$cod_ordens?>.">Processamento</a>
         <a class="dropdown-item" href="ordem_concluida?cod= .<?=$cod_ordens?>.">Ordem Concluída</a>';
        }else{
          echo'<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Ordem concluída
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         
         <a class="dropdown-item" href="analise_pagamento?cod= .<?=$cod_ordens?>.">Pagamento em análise</a>
         <a class="dropdown-item" href="pagamento_aprovado?cod= .<?=$cod_ordens?>.">Pagamento aprovado</a>
         <a class="dropdown-item" href="pagamento_reprovado?cod= .<?=$cod_ordens?>.">Pagamento reprovado</a>
         <a class="dropdown-item" href="processamento?cod= .<?=$cod_ordens?>.">Processamento</a>
         <a class="dropdown-item" href="ordem_concluida?cod= .<?=$cod_ordens?>.">Ordem Concluída</a>';
        }
        echo '
    </div>
  </div></td>
      </tr>';
      
       ?></td>
            </div>
        </div>
        <div class="row">
      <td><?php echo $email; ?></td>
            </div>
        </div>
    </div>
    </div>
    </tr>

         <?php   

        }

        ?>
        </tbody>
</table>

<?php
$consulta="select * from comentarios where cod = '$cod_ordens' order by id desc";
$resultado=mysqli_query($link,$consulta);
if($resultado){
  while($linha = mysqli_fetch_assoc($resultado)){

    echo $resultado['comentario'];


  }
}  
  ?>

<h3>Adicionar um comentário</h3>

<form action="../adm/comentarios.php?cod=<?=$codigo_ordens;?>" method="POST">
<textarea type="text" name="comentario" cols='60' rows='5'></textarea>
<br>
<button type="submit" class="btn btn-primary">Comentar</button>
 </form>

