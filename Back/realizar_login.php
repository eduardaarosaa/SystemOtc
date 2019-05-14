<?php


include "conexao.php";

session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];



$login = ("Select * from usuarios where email = '$email'");


$SESSION['email'] = $_POST['email'];
$SESSION['senha'] = $_POST['senha'];



$resultado = mysqli_query($link,$login);
$verificar = mysqli_num_rows($resultado);

foreach ($resultado as $rows){

    $rows['email'];
    $rows['senha'];
    $rows['cpf'];
    $rows['nome'];
    $rows['agencia'];
    $rows['numero_conta'];
    $rows['banco'];
    $rows['ativo'];
}

if($_SESSION == true){

    $SESSION['cpf'] = $rows['cpf'];
    $SESSION['nome'] = $rows['nome'];
    $SESSION['agencia'] = $rows['agencia'];
    $SESSION['numero_conta'] = $rows['numero_conta'];
    $SESSION['banco'] = $rows['banco'];
    $SESSION['ativo'] = $rows['ativo'];
}


if($verificar> 0 && base64_encode($senha) == $rows['senha'] && $rows['nivel']==2){
    
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $dados = mysqli_fetch_assoc($resultado);
        $_SESSION['cpf'] = $rows['cpf'];
        $_SESSION['nome'] = $rows['nome'];
        $_SESSION['agencia']= $rows['agencia'];
        $_SESSION['numero_conta'] = $rows['numero_conta'];
        $_SESSION['banco'] = $rows['banco'];
        $_SESSION['cod'] = $rows['cod'];
        $_SESSION['nivel'] = $rows['nivel'];
        $_SESSION['ativo'] = $rows['ativo'];
        header("location:../Telas/criar_ordem.php");

}elseif($verificar> 0 && base64_encode($senha) == $rows['senha'] && $rows['nivel']==1){
        
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        
        $dados = mysqli_fetch_assoc($resultado);
        $_SESSION['cpf'] = $rows['cpf'];
        $_SESSION['cod'] = $rows['cod'];  
        $_SESSION['nivel'] = $rows['nivel'];
        $_SESSION['ativo'] = $rows['ativo'];
      
        header("location:../adm/adm.php");
}else{
    echo ("<script>
    window.alert('Dados Inválidos!')
    window.location.href='../telas/login.php';
    </script>");
}

?>