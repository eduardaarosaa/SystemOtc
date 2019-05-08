<?php
 include "../Telas/sessao.php";
 include "../Back/conexao.php";
 include "menu.php";

?>

<div class="container">
    <div class="col-md-12">

        <h2 class="espaco-padrao">Minhas ordens </h2>
</div>
        <?php
       
        $consulta = "Select * from ordens where email = '$logado' ";
        $resultado = mysqli_query($link,$consulta);

        foreach ($resultado as $rows){ 

            $codigo = $rows['cod'];
            $quantidade = $rows['quantidade'];
            $carteira = $rows['carteira'];
            $status = $rows['status'];

            ?>
<div class="col-md-12">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Carteira</th>
      <th scope="col">Status</th>
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
        </div>
    </tr>

         <?php   

        }

        ?>
        </tbody>
</table>
    </div>




</div>