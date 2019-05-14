<?php

include "../Back/conexao.php";

$numero_foto = rand();
$cod =$_POST['cod'];
$tipo = $_FILES['file']['type'];
$nome_foto = $_FILES['file']['name'];
$nome_foto = $numero_foto . $nome_foto;
$tamanho = $_FILES['file']['size'];

$tipo1 = $_FILES['file1']['type'];
$nome_foto1 = $_FILES['file1']['name'];
$nome_foto1 = $numero_foto . $nome_foto1;
$tamanho1 = $_FILES['file1']['size'];

$dia = mktime(date('d'), date('m'), date('y'));

$data1 = gmdate('d/m/Y',$dia);

//print $data1;

$time = mktime(date('H')-3, date('i'), date('s'));

$hora = gmdate("H:i:s", $time);

move_uploaded_file($_FILES['file']['tmp_name'], "C:\\xampp\\htdocs\\otc\\documentos_ativo\\$nome_foto");
move_uploaded_file($_FILES['file1']['tmp_name'], "C:\\xampp\\htdocs\\otc\\documentos_ativo\\$nome_foto1");

$inserir = "Insert into documentos(cod_user,nome,tipo,tamanho,nome1,tipo1,tamanho1,data,hora) values ('$cod','$nome_foto','$tipo','$tamanho','$nome_foto1','$tipo1','$tamanho1','$data1','$hora')";

$result = mysqli_query($link,$inserir);

$update = "update usuarios set ativo = '1' where cod = $cod ";

$resultado = mysqli_query($link,$update);

if($result && $resultado == true){
    echo ("<script>
    window.alert('Documentos enviados com sucesso!Logue novamente para criar uma ordem.')
    window.location.href='../back/sair.php';
    </script>");
}elseif($result && $resultado == false){

    echo ("<script>
    window.alert('Erro!! Entre em contato com a Bloco1')
    window.location.href='../telas/meu_perfil.php';
    </script>");
    //echo "Error:" . $inserir . "<br>" . mysqli_error($link);
    
}