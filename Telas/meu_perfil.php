<?php
include "sessao.php";

include "menu.php";

include "../Back/conexao.php";

$consulta = "Select * from usuarios where cpf='$cpf'";
$resultado = mysqli_query($link,$consulta);
if($resultado == true){

  foreach ($resultado as $rows){

    $email = $rows['email'];
    $agencia1 = $rows['agencia'];
    $conta1 = $rows['numero_conta'];
    $banco1 = $rows['banco'];

  }
}
?>
<div class='container'>
    <div class="row">
    <div class='col-md-12'>
<h2 class="espaco-padrao">Meu perfil</h2>
    </div>
</div>
<div class="row">
 <div class="col-md-10 espaco-padrao">   
<table class="table table-sm">
 
  <tbody>
    <tr>
      <th scope="row">Nome:</th>
      <td><?php echo $nome; ?> </td>

    </tr>
    <tr>
      <th scope="row">CPF:</th>
      <td><?php echo $cpf;?></td>
    
    </tr>
    <tr>
      <th scope="row">E-mail</th>
      <td><?php echo $email;?></td>
    </tr>
    <tr>
      <th scope="row">Agência</th>
      <td><?php echo $agencia1;?></td>
    </tr>
    <tr>
      <th scope="row">Conta</th>
      <td><?php echo $conta1;?></td>
    </tr>
    <tr>
      <th scope="row">Banco</th>
      <td><?php echo $banco1;?></td>
    </tr>
  </tbody>
</table>


<a href="../Telas/alterar_dados.php"><button class="btn btn-black espaco-padrao">Alterar dados</button></a>
<a href="../Telas/alterar_senha.php"><button class="btn btn-black espaco-padrao">Alterar senha</button></a>

</div>



</div>




