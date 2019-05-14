<?php

include "../Telas/sessao.php";
include "../adm/menu.php";
include "../back/conexao.php";

$consulta = "Select * from documentos";
$resultado = mysqli_query($link,$consulta);
?>



<div class="container">
    <div class="row">
<div class="col-md-12 espaco-padrao">


<?php
foreach($resultado as $row){
    $codigo = $row['cod_user'];
    $imagem = $row['nome'];
    $imagem2 = $row['nome1'];

?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th width="1%" scope="col">Codigo</th>
      <th scope="col">RG/CNH</th>
      <th scope="col">RG/CNH com Selfie</th>
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
      <td>
          <?php echo $imagem;?>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Ver comprovante de pagamento
</button>

      </td>
            </div>
        </div>
    </tr>
  </tbody>
</table>

<?php } ?>

</body>

</html>


<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>

