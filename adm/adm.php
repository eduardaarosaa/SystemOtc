<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    

  </head>
<div id="loader" class="loader"></div>
<div style="display:none" id="tudo_page">
<?php
include "../Telas/sessao.php";
include "../adm/menu.php";
include "../Back/conexao.php"; 

//echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=../adm/adm.php'>";

?>

<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <h2 class='espaco-padrao'>Ordens solicitadas</h2>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
    <form action="../adm/busca.php" method="POST" class='espaco-padrao'>
    <input type="text" class="form-control" id="exampleInputEmail1" name="busca" aria-describedby="emailHelp" placeholder="Busca" require="required">
    <br>
    <div class="row">
      <div class="col-md-12">
    <button type="submit" class="btn btn-danger">Buscar</button>
      </div>
    </div>
    
</form>
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
      <th scope="col">E-mail</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php
    
       $consulta = "Select * from ordens where status != '4' order by cod desc";
       $resultado = mysqli_query($link,$consulta);
       

       foreach ($resultado as $rows){ 

           $codigo = $rows['cod'];
           $valor_total = $rows['valor_total'];
           $quantidade = $rows['quantidade'];
           $carteira = $rows['carteira'];
           $status = $rows['status'];
           $email = $rows['email'];

           ?>
        <div class="col-md-12">
            <div class="row">
      <th scope="row"><?php echo $codigo?></th>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <th scope="row"><?php echo $valor_total?></th>
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
      }elseif($status == 5){
        echo "<button type='button' align='center' class='btn btn-dark'>Nota Fiscal</button>";

      }else{

        echo "<button type='button' align='center' class='btn btn-success'>Ordem concluída</button>";
      }
      
       ?></td>
            </div>
            <div class="col-md-12">
            <div class="row">
      <td><?php echo $email ?></td>
            </div>
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
      </body>

<script>
jQuery(window).load(function () {
      $(".loader").delay(50).fadeOut("slow"); //retire o delay quando for copiar!
    $("#tudo_page").toggle("fast");
});
</script>

</html>