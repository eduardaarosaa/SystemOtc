<?php
session_start();
$nivel=$_SESSION['nivel'];
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
    header('location:../Telas/valida_sessao.php');
}
if($nivel == 2){
    $cod = $_SESSION['cod'];
    $logado = $_SESSION['email'];
    $nivel=$_SESSION['nivel'];
    $ativo = $_SESSION['ativo'];
    $cpf = $_SESSION['cpf'];
    $nome = $_SESSION['nome'];
    $conta = $_SESSION['numero_conta'];
    $agencia = $_SESSION['agencia'];
    $banco = $_SESSION['banco'];

}else{
    $logado = $_SESSION['email'];
    $nivel=$_SESSION['nivel'];

}
   

 





?>