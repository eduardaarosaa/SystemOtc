<?php
$codigo=$_POST['codigo'];

include "../Back/conexao.php";
$comentario=$_POST["comentario"];

$dia = mktime(date('d'), date('m'), date('y'));

$data1 = gmdate('d/m/Y',$dia);
echo $data1;

$time = mktime(date('H')-3, date('i'), date('s'));

$hora = gmdate("H:i:s", $time);


$sql="insert into comentarios_reprovados(comentario, cod_user, data, hora) values('$comentario',$codigo,'$data1','$hora')";
	$query=$link->query($sql);
	//if($query){
	header("location:documentos_adm.php");
	echo "Error: " . $sql . "<br>" . mysqli_error($link);

	//}


?>