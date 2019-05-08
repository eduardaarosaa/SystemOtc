<?php
$cod_ordens=$_GET['cod'];
include "conexao.php";
$comentario=$_GET["comentario"];

$sql="insert into comentarios(comentario, cod) values('$comentario','$cod_ordens')";
	$query=$link->query($sql);
	//if($query){
	header("location:ordens.php?id=".$cod_ordens."");

	//}


?>