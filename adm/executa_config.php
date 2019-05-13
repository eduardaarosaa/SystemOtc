
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
$cotacao = $_POST['cotacao'];
$fee = $_POST['fee'];
$valor = $_POST['valor'];

$insert = "update ordens set cotacao = $cotacao, fee = $fee, valor = $valor where cod = $cod_ordens";
$resultado = mysqli_query($link,$insert);

echo "Error: " . $insert . "<br>" . mysqli_error($link);

if($resultado == true){
    
    echo ("<script>
    window.alert('Configuração efetuada!')
    window.location.href='../adm/adm.php';
    </script>");
}else{
    echo "Erro! Entre em contato com a Bloco1";
}


?>