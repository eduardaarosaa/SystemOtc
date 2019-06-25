
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
$cod_ordens = $_POST['cod'];
$valor_compra = $_POST['valor_compra'];
$valor_venda = $_POST['valor_venda'];
$valor_ordem = $_POST['valor_ordem'];

$insert = "update ordens set valor_compra = '$valor_compra', valor_venda = '$valor_venda', valor_ordem = '$valor_ordem' where cod = $cod_ordens";
$resultado = mysqli_query($link,$insert);

//echo "Error: " . $insert . "<br>" . mysqli_error($link);

if($resultado == true){
    
    echo ("<script>
    window.alert('Configuração efetuada!')
    window.location.href='../adm/ordens.php?cod=$cod_ordens';
    </script>");
}else{
    echo "Erro! Entre em contato com a Bloco1";
}


?>