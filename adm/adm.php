<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<?php
include "../adm/menu.php";
include "../Back/conexao.php"; 
?>

<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <h2 class='espaco-padrao'>Ordens solicitadas</h2>
  </div>
</div>
<div class="row">
    <div class="col-md-12">

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Carteira</th>
      <th scope="col">Status</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php
       
       $consulta = "Select * from ordens";
       $resultado = mysqli_query($link,$consulta);

       foreach ($resultado as $rows){ 

           $codigo = $rows['cod'];
           $quantidade = $rows['quantidade'];
           $carteira = $rows['carteira'];
           $status = $rows['status'];

           ?>
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
      
      if ($status == 0){

        echo "<button type='button' align='center' class='btn btn-secondary'>Pagamento em análise</button>";
        
      }elseif($status == 1){
        echo "<button type='button' align='center' class='btn btn-warning'>Pagamento aprovado</button>";
     }elseif($status == 2){

        echo "<button type='button' align='center' class='btn btn-danger'>Pagamento reprovado</button>";
      }elseif($status == 3){
        echo "<button type='button' align='center' class='btn btn-dark'>Processando</button>";

      }else{

        echo "<button type='button' align='center' class='btn btn-success'>Ordem concluída</button>";
      }
      
       ?></td>
            </div>

            <div class="col-md-12">
            <div class="row">
      <td align='center'><a href="ordens.php?cod= <?=$codigo;?>"><button type="button" class="btn btn-danger">Alterar</button></a></td>
            </div>
        </div>
        </div>
    </tr>

         <?php   

        }

        ?>
        </tbody>
</table>

    </div>

</div>






</div>