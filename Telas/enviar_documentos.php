<?php
include "sessao.php";

include "menu.php";

include "../Back/conexao.php";

?>

<head>
<script type="text/javascript">
	function updatepicture(e){
		var img = e.files[0];
		var rea = new FileReader();

		rea.readAsDataURL(img);
		rea.onload = function(e){
			var end = rea.result;
			var iframe = document.getElementById("image");
			iframe.src = end;
		}
		//document.getElementById("image").setAttribute("src",pic);
	}
	function verificar_foto(){
		//alert("teste");
		if (document.forms[ 'form1' ].file.value == '' && document.getElementById("image1").src==""){
			alert("Anexe seu RG/CNH");
			return false;
        } 
        

        function updatepicture1(e){
		var img = e.files[0];
		var rea = new FileReader();

		rea.readAsDataURL(img);
		rea.onload = function(e){
			var end = rea.result;
			var iframe = document.getElementById("image1");
			iframe.src = end;
		}
		//document.getElementById("image").setAttribute("src",pic);
	}
	function verificar_foto1(){
		//alert("teste");
		if (document.forms[ 'form1' ].file.value == '' && document.getElementById("image").src==""){
			alert("Anexe sua selfie com o RG/CNH");
			return false;
		} 


    }
    </script>
    </head>



<div class='container'>
    <div class="row">
        <div class="col-md-12">

        <h2 class="espaco-padrao">Envie seus documentos</h2>

        </div>

		<?php 
		if ($ativo == 0){ ?>


			<div class="row">
					<div class="col-md-6">
						<div class="form-group espaco-padrao">
							
							<form action="../Back/documentos.php" method="POST" name="form1" enctype="multipart/form-data">
							<div class="form-group">
							<b><p id="message">Envie seu RG/CNH</p></b>
							<input type="hidden" id="cod" name="cod" value="<?php echo $cod; ?>" />
							<input type="file" id="file" name="file" onchange="updatepicture(this);" />
							
							</div>
							</div>
				</div>
						<div class="col-md-6">
						<div class="form-group espaco-padrao">
						
							<div class="form-group">
							<b><p id="message1">Envie uma selfie segurando seu RG/CNH</p><b>
							<input type="file" id="file" name="file1" onchange="updatepicture1(this);" />
							
						
							</div>
							</div>
				</div>
				</div>
					<div class="row">
						<div class="col-md-12">
					<button type="submit" class="btn btn-primary" onclick="verificar_foto()">Enviar</button>
					<input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)"> 
						</div>
					</div>
					</form>
	
					<?Php
		}else{
			echo "";
		}


		?>

<?php
$consulta = "SELECT documentos.aprovado, comentarios_reprovados.comentario FROM documentos,comentarios_reprovados where documentos.cod_user = $cod";
$resultado = mysqli_query($link,$consulta);
$linha = mysqli_num_rows($resultado);

foreach ($resultado as $rows){

	$ativado = $rows['aprovado'];
	$comentario = $rows['comentario'];

	if ($ativo == 3){ 

		echo "Documentos enviados e aprovados";
			}
			
			elseif($ativo == 0) {
			
		?>
		
				<div class="row">
					<div class="col-md-6">
						<div class="form-group espaco-padrao">
							<?php

								if($ativo == 4){

								echo "Seus documentos foram reprovados por: $comentario";

								?>
							<form action="../Back/documentos.php" method="POST" name="form1" enctype="multipart/form-data">
							<div class="form-group">
							<b><p id="message">Envie seu RG/CNH</p></b>
							<input type="hidden" id="cod" name="cod" value="<?php echo $cod; ?>" />
							<input type="file" id="file" name="file" onchange="updatepicture(this);" />
							
							</div>
							</div>
				</div>
						<div class="col-md-6">
						<div class="form-group espaco-padrao">
						
							<div class="form-group">
							<b><p id="message1">Envie uma selfie segurando seu RG/CNH</p><b>
							<input type="file" id="file" name="file1" onchange="updatepicture1(this);" />
							
						
							</div>
							</div>
				</div>
				</div>
					<div class="row">
						<div class="col-md-12">
					<button type="submit" class="btn btn-primary" onclick="verificar_foto()">Enviar</button>
					<input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)"> 
						</div>
					</div>
					</form>
					</div>
		<?php }}
else{

	echo "Documentos enviados.";
}

}
