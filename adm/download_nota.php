<?php
include "../Telas/sessao.php";
include "../Telas/menu.php";
include "../Back/conexao.php";
$cod_ordens = $_GET['cod_ordem'];
$nota_fiscal = "Select * from nota_fiscal where cod_ordem = $cod_ordens";
$retorno =mysqli_query($link,$nota_fiscal);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 espaco-padrao">
            <div class="jumbotron">
                <h1 class="display-4">Nota Fiscal</h1>
                <p class="lead">Sua nota fiscal não está disponível .</p>
                <hr class="my-4">
          
        </div>
    </div>
</div>
<?php

//echo $cod_ordens;
//echo "Error: " . $nota_fiscal . "<br>" . mysqli_error($retorno);


foreach ($retorno as $nf){
  $nome_nota = $nf['nome'];
  $tipo_nota = $nf['tipo'];
  $tamanho_nota = $nf['tamanho'];



$arquivo = "../nota_fiscal/$nome_nota";


	header("Content-Type: application/octetstream");
	header("Content-Disposition: attachment; filename=" . basename($arquivo));
	header("Pragma: no-cache");
	header("Expires: 0");
	header("Content-Length: " . filesize($arquivo));

    readfile($arquivo);
}
