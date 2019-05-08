<?php
include "sessao.php";

include "menu.php";
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
      <td><?php echo $logado;?></td>
    </tr>
    <tr>
      <th scope="row">Agência</th>
      <td><?php echo $agencia;?></td>
    </tr>
    <tr>
      <th scope="row">Conta</th>
      <td><?php echo $conta;?></td>
    </tr>
    <tr>
      <th scope="row">Banco</th>
      <td><?php echo $banco;?></td>
    </tr>
  </tbody>
</table>


<button class="btn btn-black espaco-padrao">Alterar dados</button>
<button class="btn btn-black espaco-padrao">Alterar senha</button>

</div>



</div>




