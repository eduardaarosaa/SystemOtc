<?php


include "../Back/conexao.php";

$numero_foto = rand();
$cod_ordens =$_POST['cod_ordem'];
$tipo = $_FILES['file']['type'];
$nome_foto = $_FILES['file']['name'];
$nome_foto = $numero_foto . $nome_foto;
$tamanho = $_FILES['file']['size'];


$dia = mktime(date('d'), date('m'), date('y'));

$data1 = gmdate('d/m/Y',$dia);

//print $data1;

$time = mktime(date('H')-3, date('i'), date('s'));

$hora = gmdate("H:i:s", $time);

move_uploaded_file($_FILES['file']['tmp_name'], "C:\\xampp\\htdocs\\otc\\nota_fiscal\\$nome_foto");


$inserir = "Insert into nota_fiscal(cod_ordem,nome,tipo,tamanho,data,hora) values ('$cod_ordens','$nome_foto','$tipo','$tamanho','$data1','$hora')";

$result = mysqli_query($link,$inserir);


if($result  == true){
    echo ("<script>
    window.alert('Nota fiscal enviada com sucesso!')
    window.location.href='../adm/ordens.php?cod=".$cod_ordens."';
    </script>");
}elseif($result == false){

    echo ("<script>
    window.alert('Erro!! Entre em contato com a Bloco1')
    window.location.href='../adm/ordes.php?cod=".$cod_ordens."';
    </script>");
    //echo "Error:" . $inserir . "<br>" . mysqli_error($link);
    
}