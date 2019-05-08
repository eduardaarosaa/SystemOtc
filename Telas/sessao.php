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
    }
 
$logado = $_SESSION['email'];
$cpf = $_SESSION['cpf'];
$nome = $_SESSION['nome'];
$conta = $_SESSION['numero_conta'];
$agencia = $_SESSION['agencia'];
$banco = $_SESSION['banco'];
$nivel=$_SESSION['nivel'];

//echo $logado . "<br>";
//echo $cpf;


?>