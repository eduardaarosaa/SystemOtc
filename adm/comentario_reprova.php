
<head>
<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<?php
include "../Telas/sessao.php";
if($nivel == 1){
include "../adm/menu.php";
} else{
include "../Telas/menu.php";
}
include "../Back/conexao.php";

$codigo = $_GET['cod'];

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 espaco-padrao">
<h2>Motivo de reprovação dos documentos</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

<form action="../adm/back_comentario_reprova.php" method="POST">
<input type="hidden" name="codigo" value="<?php echo $codigo ?>"/>
<textarea type="text" name="comentario" cols='60' rows='5'></textarea>
<br>
<button type="submit" class="btn btn-primary">Salvar</button>
 </form>
        </div>
    </div>