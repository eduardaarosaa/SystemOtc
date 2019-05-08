<?php
include "head.php";
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
			alert("Anexe a selfil");
			return false;
		} 

	}

	function verificar_dados(){
		var erro = false;
		if (document.form1.nome.value == ""){
			alert("Preencha o campo nome") ;
			erro = true ;
		}
	if (document.form1.cpf.value == ""){
			alert("Preencha o campo cpf") ;
			erro = true ;
		}
    if (document.form1.agencia.value == ""){
			alert("Preencha o campo agencia") ;
			erro = true ;
		}
    if (document.form1.numero_conta.value == ""){
			alert("Preencha o campo número da conta") ;
			erro = true ;
		}
    if (document.form1.banco.value == ""){
			alert("Preencha o campo banco") ;
			erro = true ;
		}
    if(email.indexOf("@") < 0){
      alert("Preencha o campo E-mail");
			erro = true ;
		}
    if (document.form1.senha.value == ""){
			alert("Preencha o campo senha") ;
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
    <h2 class="espaco-padrao">Cadastre-se</h2>
</div>
    <div class="col-md-12">
<div class="form-group espaco-padrao">
    <form action="../Back/criar_usuarios.php" method="POST" name="form1" enctype="multipart/form-data">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" placeholder="Digte seu nome" require="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">CPF</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="cpf" aria-describedby="emailHelp" placeholder="Digte seu CPF">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Agência</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="agencia" aria-describedby="emailHelp" placeholder="Digte sua agência">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Número da conta</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="numero_conta" aria-describedby="emailHelp" placeholder="Digte o número da conta">
    <small id="emailHelp" class="form-text text-muted">Observação: Número da conta com o digíto. </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Banco</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="banco" aria-describedby="emailHelp" placeholder="Digte o nome do Banco">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digte seu e-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha">
    <small id="emailHelp" class="form-text text-muted">Observação: A senha precisa conter letras minusculas, maiusculas e 1 caracter especial. </small>
  </div>

  <div class="form-group">
  <input type="file" id="file" name="file" onchange="updatepicture(this);" />
<p id="message">Envie uma selfie com uma folha escrita quero comprar bitcoins na Bloco1 com a data</p>
<img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br>
<iframe style="display:none" name="iframe"></iframe>
  </div>
  </div>

  <button type="submit" class="btn btn-primary" onclick="verificar_foto()">Cadastrar</button>
</form>
  <input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)"> 
</div>
</div>