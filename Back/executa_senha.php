<?php

include "../Telas/sessao.php";
include "../Telas/menu.php";
include "../Back/conexao.php";

$senha_atual = $_POST['senha_atual']; 
$senha_nova = $_POST['senha_nova'];

$consulta = "select * from usuarios where cpf ='$cpf'";
$resultado = mysqli_query($link,$consulta);

foreach ($resultado as $rows){

    $senha_banco = $rows['senha'];
}

$senha_atual = base64_encode($senha_atual);
$senha_nova = base64_encode($senha_nova);
//echo $senha_atual;
//echo $senha_banco;

if ($senha_atual == $senha_banco){

    $update = "Update usuarios set senha = '$senha_nova' where cpf ='$cpf'";
    $alterado = mysqli_query($link,$update);

    if($alterado == true){

    echo ("<script>
    window.alert('Dados alterados com sucesso!')
    window.location.href='../telas/meu_perfil.php';
    </script>");

    }else{

       echo ("<script>
    window.alert('Erro ao alterar a senha entre em contato com a Bloco1!')
    window.location.href='../telas/meu_perfil.php';
   </script>");

    }

    
}else{

   echo ("<script>
   window.alert('Senha atual inválida!')
   window.location.href='../telas/meu_perfil.php';
   </script>");
}

?>