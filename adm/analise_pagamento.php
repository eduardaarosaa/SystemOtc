<?php

include "../Back/conexao.php";
$cod_ordens = $_GET['cod'];

$update = "update ordens set status = 0 where cod = '$cod_ordens'";

$resultado = mysqli_query($link, $update);

if ($resultado == true) {

    header("location:../adm/ordens.php?cod=$cod_ordens");
} else {

    echo "Error";
}
