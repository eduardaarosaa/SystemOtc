<div class='container'>
  <?php
  include "sessao.php";
  ?>
</div>

<?php
include "menu.php";

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
		if (document.forms[ 'form1' ].file.value == '' && document.getElementById("image").src==""){
			alert("Anexe o comprovante de pagamento");
			return false;
		} 

	}

	function verificar_dados(){
		var erro = false;
		if (document.form1.quantidade.value == ""){
			alert("Preencha o campo quantidade") ;
			erro = true ;
		}
	if (document.form1.carteira.value == ""){
			alert("Preencha o campo carteira") ;
			erro = true ;
		}
	if (erro==false) {
		document.form1.submit();
	}
	}

</script>
</head>

<div class='container'> 
    <div class="col-md-12">
    <h2 class="espaco-padrao">Criar uma ordem</h2>
</div>
    <div class="col-md-12">
<div class="form-group">
    <form name="form1" action="../Back/realizar_ordem.php" method="POST" enctype="multipart/form-data">
    <label for="exampleInputEmail1">Digite a quantidade de bitcoins:</label>
    <input type="number" class="form-control" id="quantidade" name="quantidade" aria-describedby="emailHelp" placeholder="Digite a quantidade de bitcoin" require="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Digite o número da carteira:</label>
    <input type="text" class="form-control" id="carteira" name="carteira" aria-describedby="emailHelp" placeholder="Digte o número da carteira">
  </div>
  <div class="form-group">
  <input type="file" id="file" name="file" onchange="updatepicture(this);" />
<p id="message">Selecione o comprovante de pagamento</p>
<img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br>
<iframe style="display:none" name="iframe"></iframe>
  </div>
  </div>

  <button type="submit" style="margin-left:1%" class="btn btn-primary" onclick="verificar_foto()">Cadastrar</button>
</form>
</div>
