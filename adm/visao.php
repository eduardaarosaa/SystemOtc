<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">

</head>
<?php
include "../adm/menu.php";
include "../Back/conexao.php";

$mes = date('m');
//echo $mes;

$consulta = "SELECT sum(valor_ordem) FROM `ordens` WHERE month(date) = '$mes' and status = 4";
$result = mysqli_query($link, $consulta);
$consulta1 = "SELECT sum(valor_ordem) FROM `ordens` WHERE month(date) = '$mes' and status != 4";
$result1 = mysqli_query($link, $consulta1);
foreach ($result1 as $row1) {
    $row1;

if ($result == true) {
   // echo "true";
} else {
  //  echo "false";
}
foreach ($result as $row) {
    $row;


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
                    <img src="https://image.flaticon.com/icons/svg/138/138274.svg" class="card-img-top" width='200px' alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vendas efetuadas</h5>
                        <p class="card-text">R$ <?php echo implode('', $row) . ',00'; ?></p>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="https://image.flaticon.com/icons/svg/138/138276.svg" class="card-img-top" width='200px' alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vendas em trânsito</h5>
                        <p class="card-text">R$ <?php echo implode('', $row1) . ',00'; ?></p>

                    </div>
                </div>
            </div>
        </div>
    <?php }} ?>
</div>