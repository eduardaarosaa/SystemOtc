<?php
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['cpf']);
    unset($_SESSION['nome']);
    unset($_SESSION['agencia']);
    unset($_SESSION['banco']);
    unset($_SESSION['numero_conta']);
    unset($_SESSION['cod']);
    unset($_SESSION['nivel']);
    header('location:login.php');
$logado = $_SESSION['email'];
$cpf = $_SESSION['cpf'];
$nome = $_SESSION['nome'];
$conta = $_SESSION['numero_conta'];
$agencia = $_SESSION['agencia'];
$banco = $_SESSION['banco'];
$nivel=$_SESSION['nivel'];
$ativo = $_SESSION['ativo'];
    }else{ ?> 
<div class='container'>
    <div class="row espaco-padrao">
    <div class='col-md-12'>
<div class="jumbotron">
  <h1 class="display-4">Atenção</h1>
  <p class="lead">Acesso restrito</p>
  <hr class="my-4">
  <p>É necessário logar para ter acesso a essa página.</p>
  <a class="btn btn-primary btn-lg" href="../Telas/login.php" role="button">Logar</a>
</div>
    </div>
    </div>

        
    <?php }
 


//echo $logado . "<br>";
//echo $cpf;


?>