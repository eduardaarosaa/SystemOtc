<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<?php

include "../Telas/sessao.php";
include "../adm/menu.php";
include "../back/conexao.php";

$consulta = "Select * from documentos where aprovado = '0'";
$resultado = mysqli_query($link,$consulta);

$consulta_documentos = "Select * from usuarios where ativo !=3 ";
$result = mysqli_query($link,$consulta_documentos);
?>


<div class="container">
    <div class="row">

 
   



<?php
foreach($result as $linha){

  $folha = $linha['nome_foto'];


}
foreach($resultado as $row){

    $codigo = $row['cod_user'];
    $imagem = $row['nome'];
    $imagem2 = $row['nome1'];
    $status = $row['aprovado'];

?>
<div class="col-md-12 espaco-padrao">
<table class="table table-bordered">
  <thead>
    <tr>
      <th width="1%" scope="col">Codigo</th>
      <th scope="col">RG</th>
      <th scope="col">Selfie</th>
      <th scope="col">Selfie com folha</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
 <tbody>
 <tr>
<div class="col-md-12">
            <div class="row">
      <th width="1%" scope="row"><?php echo $codigo?></th>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td> <img src="../documentos_ativo/<?php echo $imagem?>"  width='300' height='300'/> 
      </td>

      <div class="col-md-12">
            <div class="row">
      
      <td>

      <img src="../documentos_ativo/<?php echo $imagem2?>"  width='300' height='300'/> </div>
  
  
      </td>
     
            </div>
        </div>
        
      <div class="col-md-12">
            <div class="row">
      
      <td>

      <img src="../documentos/<?php echo $folha?>"  width='300' height='300'/> </div>
  
  
      </td>
     
            </div>
        </div>

        
      <div class="col-md-12">
            <div class="row">
      
      <td>
        <?php 
      if($status == 0){
            echo '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
            
          Reprovado
            

           
           
            
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="aprova_documento.php?cod='. $codigo .'">Aprovar</a>
    <a class="dropdown-item" href="reprovaar_documento.php?cod='. $codigo .'">Reprovar</a>';

    
        }else{
            echo'<button class=" btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Aprovado
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="reprovaar_documento.php?cod='. $codigo.'">Reprovar</a>
    <a class="dropdown-item" href="aprova_documento.php?cod='. $codigo.'">Aprovar</a>';
      '</td>
     
            </div>
        </div>';
         } ?>
    </tr>
  </tbody>
</table>
        <?php } ?>

</div>
    </div>
</div>

</body>
</html>


