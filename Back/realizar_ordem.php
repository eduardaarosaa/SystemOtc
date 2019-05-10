<?php
include "../telas/sessao.php";
include "conexao.php";
$numero = rand();
$quantidade = $_POST['quantidade'];
$carteira = $_POST['carteira'];
$tipo = $_FILES['file']['type'];
$nome = $_FILES['file']['name'];
$nome = $numero . $nome;
$tamanho = $_FILES['file']['size'];

$dia = mktime(date('d'), date('m'), date('y'));

$data1 = gmdate('d/m/Y',$dia);

//print $data1;

$time = mktime(date('H')-3, date('i'), date('s'));

$hora = gmdate("H:i:s", $time);

move_uploaded_file($_FILES['file']['tmp_name'], "C:\\xampp\\htdocs\\otc\\anexos\\$nome");	

$logado = $_SESSION['email'];

$inserir = "Insert into ordens (quantidade,carteira,tipo,nome,tamanho,email,data,hora)
values ('$quantidade','$carteira','$tipo','$nome','$tamanho','$logado','$data1','$hora')";
$resposta = mysqli_query($link,$inserir);

if($resposta == true){
    echo ("<script>
    window.alert('Ordem criada com sucesso!')
    window.location.href='../telas/minhas_ordens.php';
    </script>");
}else{
    echo ("<script>
    window.alert('Erro entre em contato com a Bloco1!')
    window.location.href='../telas/criar_ordem.php';
    </script>");
}

?>