<?php
include "../telas/sessao.php";
include "conexao.php";
$numero = rand();
$valor_total = $_POST['valor_total'];
$quantidade = implode('-',$_POST['quantidade']);
$carteira = implode(',', $_POST['carteira']);
$tipo = implode(',',$_FILES['file']['type']);
$nome = $_FILES['file']['name'];

$result = count($nome);
// echo $result;

$novo = [];
 for ($i = 0 ; $i < $result; $i++){

  $hehe = $numero .$nome[$i];
  array_push($novo,$hehe);

  //print_r($novo);

}
$arra = implode(',', $novo);
print_r($arra);



//var_dump($nome);
$tamanho = implode(',',$_FILES['file']['size']);



	 

    $dia = mktime(date('d'), date('m'), date('y'));

    $data1 = gmdate('d/m/Y',$dia);

    //print $data1;

    $time = mktime(date('H')-3, date('i'), date('s'));

    $hora = gmdate("H:i:s", $time);



		
    foreach( $_FILES['file']['name'] as $key =>$name){

        $nome1 =  $numero . ($_FILES['file']['name'][$key]);

         move_uploaded_file( $_FILES['file']['tmp_name'][$key], "C:\\xampp\\htdocs\\otc\\anexos\\$nome1");	
    }


  $logado = $_SESSION['email'];
       
 $inserir = "insert into ordens(valor_total,quantidade,carteira,tipo,nome,tamanho,email,data,hora,status)values(
  '$valor_total','$quantidade','$carteira','$tipo','$arra','$tamanho','$logado','$data1','$hora','0')";
 
 
 $resposta = mysqli_query($link,$inserir);
//echo "Error: " . $inserir . "<br>" . mysqli_error($link);

 
    
//     }

// if($resposta == true){
//     echo ("<script>
//     window.alert('Ordem criada com sucesso!')
//     window.location.href='../telas/minhas_ordens.php';
//     </script>");
// }else{
//     echo ("<script>
//     window.alert('Erro entre em contato com a Bloco1!')
//     window.location.href='../telas/criar_ordem.php';
//     </script>");


 ?>