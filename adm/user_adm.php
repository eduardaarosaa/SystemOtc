<?php
include "../Telas/sessao.php";
include "../back/conexao.php";

$numero_foto = rand();

$nome = $_POST['nome'];
$cpf = '0';
$agencia = '0';
$conta = '0';
$banco = '0';
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = base64_encode($senha);
$nivel = 3;
$ativo = 3;

$tipo = "Bloco1";
$nome_foto = "Bloco1";
$nome_foto =  "Bloco1";
$tamanho =  "Bloco1";

$dia = mktime(date('d'), date('m'), date('y'));

$data1 = gmdate('d/m/Y',$dia);

//print $data1;

$time = mktime(date('H')-3, date('i'), date('s'));

$hora = gmdate("H:i:s", $time);

//move_uploaded_file($_FILES['file']['tmp_name'], "C:\\xampp\\htdocs\\otc\\documentos\\$nome_foto");	

$consulta = "Select * from usuarios where email = '$email'";
$resultado = mysqli_query($link,$consulta);
$linha = mysqli_num_rows($resultado);

if($linha > 0){
    echo ("<script>
    window.alert('Esse e-mail já está cadastrado!')
    window.location.href='../telas/cadastro.php';
    </script>");
}else{


$inserir = "Insert into usuarios(nome,cpf,agencia,numero_conta,banco,email,senha,tipo,nome_foto,tamanho,nivel,ativo,data,hora) values ('$nome','$cpf','$agencia','$conta','$banco','$email','$senha','$tipo','$nome_foto','$tamanho','$nivel','$ativo','$data1','$hora')";

$result = mysqli_query($link,$inserir);

if($result == true){
    echo ("<script>
    window.alert('Cadastro realizado com sucesso!')
    window.location.href='../adm/usuarios.php';
    </script>");
}elseif($result == false){

    // echo ("<script>
    // window.alert('Erro!! Entre em contato com a Bloco1')
    // window.location.href='../adm/usuarios.php';
    // </script>");
    echo "Error:" . $inserir . "<br>" . mysqli_error($link);
    
}
}
?>




