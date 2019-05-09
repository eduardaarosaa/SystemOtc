<?php
include "../Telas/sessao.php";
include "../Telas/menu.php";
include "../Back/conexao.php";

$agencia = $_POST['agencia'];
$conta = $_POST['numero_conta'];
$banco = $_POST['banco'];
$email = $_POST['email'];

$update = "update usuarios set agencia='$agencia', numero_conta='$conta', banco='$banco', email='$email' where email='$logado'";
$resultado = mysqli_query($link,$update);
var_dump($update);

echo "Error: " . $resultado . "<br>" . mysqli_error($link);

if($resultado == true){
    
    //echo ("<script>
    //window.alert('Dados alterados com sucesso!')
    //window.location.href='../telas/meu_perfil.php';
    //</script>");
}else{
    echo "Erro! Entre em contato com a Bloco1";
}


?>

