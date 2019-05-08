<?php

include "conexao.php";

$numero_foto = rand();

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$agencia = $_POST['agencia'];
$conta = $_POST['numero_conta'];
$banco = $_POST['banco'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = base64_encode($senha);
$nivel = 2;

$tipo = $_FILES['file']['type'];
$nome_foto = $_FILES['file']['name'];
$nome_foto = $numero_foto . $nome_foto;
$tamanho = $_FILES['file']['size'];

$dia = mktime(date('d'), date('m'), date('y'));

$data1 = gmdate('d/m/Y',$dia);

print $data1;

$time = mktime(date('H')-3, date('i'), date('s'));

$hora = gmdate("H:i:s", $time);

move_uploaded_file($_FILES['file']['tmp_name'], "C:\\xampp\\htdocs\\otc\\documentos\\$nome_foto");	



$inserir = "Insert into usuarios(nome,cpf,agencia,numero_conta,banco,email,senha,tipo,nome_foto,tamanho,nivel,data,hora) values ('$nome','$cpf','$agencia','$conta','$banco','$email','$senha','$tipo','$nome_foto','$tamanho','$nivel','$data1','$hora')";

$result = mysqli_query($link,$inserir);

if($result == true){
    echo ("<script>
    window.alert('Cadastro realizado com sucesso!')
    window.location.href='../telas/criar_ordem.php';
    </script>");
}elseif($result == false){

    echo ("<script>
    window.alert('Erro!! Entre em contato com a Bloco1')
    window.location.href='../telas/login.php';
    </script>");
    //echo "Error:" . $inserir . "<br>" . mysqli_error($link);
    
}
?>




