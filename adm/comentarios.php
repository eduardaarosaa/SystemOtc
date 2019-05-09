<?php
$cod_ordens=$_POST['codigo'];
echo $cod_ordens;
include "../Back/conexao.php";
$comentario=$_POST["comentario"];

$dia = mktime(date('d'), date('m'), date('y'));

$data1 = gmdate('d/m/Y',$dia);

print $data1;

$time = mktime(date('H')-3, date('i'), date('s'));

$hora = gmdate("H:i:s", $time);


$sql="insert into comentarios(comentario, cod_ordens, data, hora) values('$comentario','$cod_ordens','$data1','$hora')";
	$query=$link->query($sql);
	//if($query){
	header("location:ordens.php?cod=$cod_ordens");

	//}


?>