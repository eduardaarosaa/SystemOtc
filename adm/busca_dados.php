<?php
include "../Telas/sessao.php";
include "../adm/menu.php";
include "../Back/conexao.php";

?>

<head>
<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<div class='container'>
    <div classs="row">
        <div class="col-md-12">

            <h2 class='espaco-padrao'>Resultados </h2>

            <div class="row">
    <div class="col-md-12">

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Detalhes</th>
 
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php

$busca = $_POST['busca'];

$consulta = ("select * from usuarios where email LIKE '%$busca%'");
$resultado = mysqli_query($link,$consulta);
if($resultado == true){

    foreach($resultado as $rows){

        $codigo = $rows['cod'];
        $nome = $rows['nome'];
        $email = $rows['email'];
?>

<div class="col-md-12">
            <div class="row">
      <th scope="row"><?php echo $codigo?></th>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo  $nome ?></td>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo $email ?></td>
            </div>
        </div>
       
            <div class="col-md-12">
            <div class="row">
      <td align='center'><a href="resultado.php?cod= <?=$codigo;?>"><button type="button" class="btn btn-danger">Detalhes</button></a></td>

            </div>
        </div>

          
    </tr>

         <?php   
    }
        }

        ?>
        </tbody>
</table>
<input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)"> 
    </div>

</div>
    </div>

