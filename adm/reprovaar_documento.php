<?php 

include "../Back/conexao.php";
$codigo = $_GET['cod'];

$update = "update documentos set aprovado = '4' where cod_user = '$codigo'";

$resultado = mysqli_query($link,$update);

echo "Error: " . $update . "<br>" . mysqli_error($link);

$update1 = "update usuarios set ativo = '4' where cod = '$codigo'";

$resultado1 = mysqli_query($link,$update1);
echo "Error: " . $update1 . "<br>" . mysqli_error($link);

if($resultado == true){

    header("location:../adm/comentario_reprova.php?cod='$codigo'");
}else{

    echo "Error";
}





?>