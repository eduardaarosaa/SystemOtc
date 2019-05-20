
<head>
<link rel="stylesheet" type="text/css" href="../style/style.css">

</head>
<?php
include "../adm/menu.php";
include "../Back/conexao.php";

$mes = date('m');
echo $mes;

$consulta1 = "Select sum(valor), data from ordens where status != 4";
$result1 = mysqli_query($link,$consulta1);
foreach ($result1 as $row1){



$consulta = "Select sum(valor) from ordens where status = 4";
$result = mysqli_query($link,$consulta);
foreach ($result as $row){
   

?>

<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
        <h2 class='espaco-padrao'>Visão Geral</h2>
</div>
    </div>
    <div class="row espaco-padrao">
        <div class="col-md-6">
        <div class="card" style="width: 18rem;">
             <img src="https://image.flaticon.com/icons/svg/138/138274.svg" class="card-img-top"  width='200px' alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Vendas fetuadas</h5>
                 <p class="card-text">R$ <?php  echo implode($row) . ',00'; ?></p>
                
         </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="card" style="width: 18rem;">
             <img src="https://image.flaticon.com/icons/svg/138/138276.svg" class="card-img-top"  width='200px' alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Vendas em trânsito</h5>
                 <p class="card-text">R$ <?php  echo implode($row1) . ',00';?></p>
                
         </div>
        </div>
        </div>

    <?php 
}

}
?>
</div>
</div>