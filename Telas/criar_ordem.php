<div id="loader" class="loader"></div>
<div style="display:none" id="tudo_page">
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
<body>
<?php 
		if($ativo == 1 || $ativo == 3){
			?>
<div class='container'> 
    <div class="col-md-12">
		<h2 class="espaco-padrao">Criar uma ordem</h2>
		
</div>
 
<form name="form1" id='form1' action="../Back/realizar_ordem.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">

            <label for="exampleInputEmail1">Digite a fração de bitcoins inteira (Valor TOTAL):</label>
            <input type="text" class="form-control btc" id="exampleInputEmail1" name="valor_total"
                aria-describedby="emailHelp" placeholder="Digite a fração total de bitcoins" required>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Digite a fração de bitcoins:</label>
            <div id="dynamicDiv">
                <p>
                    <input type="text" id="inputeste" class="form-control btc" name="quantidade[]" size="20" value=""
                        placeholder="Digite a fração" />
                    <br>

                    <a class="btn btn-primary" href="javascript:void(0)" id="addInput">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        Adicionar outra fração
                    </a>
                </p>
            </div>
        </div>
        <div class="form-group">

            <div id="dynamicDiv1">
                <p>
                    <label for="exampleInputEmail1">Copie o número da carteira (Wallet):</label>
                    <input type="text" id="inputeste1" class="form-control" name="carteira[]" size="20" value=""
                        placeholder="Digite o número da carteira" />
                    <br>
                    <a class="btn btn-primary" href="javascript:void(0)" id="addInput1">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        Adicionar outra carteira
                    </a>
                </p>
            </div>


            <div class="form-group">
                <div id="dynamicDiv2">
                    <p id="message"><b>Selecione o comprovante de pagamento</b></p>
                    <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                    <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                    <a class="btn btn-primary" href="javascript:void(0)" id="addInput2">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        Adicionar outro comprovante
                    </a>

                    <iframe style="display:none" name="iframe"></iframe>
                </div>
            </div>

            <button type="submit" id="cadastrar" name="upload" style="margin-left:1%" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

<?php } elseif ($ativo == 0) { ?>
	<div class="container">
	<div class="row espaco-padrao">
		<div class="col-md-12">
	<div class="jumbotron">
  <h1 class="display-4">Bem-vindo!</h1>
  <p class="lead">É necessário enviar seus documentos para criar uma ordem.</p>
  <hr class="my-4">
  <p>Clique em Meu perfil e na tela meu pefil clique em documentos</p>
  <a class="btn btn-primary btn-lg" href="../Telas/meu_perfil.php" role="button">Meu perfil</a>
</div>
		</div>
	</div>
	</div>

<?php }else{ ?>

	<div class="container">
	<div class="row espaco-padrao">
		<div class="col-md-12">
	<div class="jumbotron">
  <h1 class="display-4">Seus documentos foram REPROVADOS</h1>
  <p class="lead">Envie novamente seus documentos</p>
  <hr class="my-4">
  <p>Clique em Meu perfil.Na tela meu pefil clique em documentos e veja o motivo da reprovação!</p>
  <a class="btn btn-primary btn-lg" href="../Telas/meu_perfil.php" role="button">Meu perfil</a>
</div>
		</div>
	</div>
	</div>



<?php } ?>
</div>

</body>
<script>
//Script que carrega o load na tela inicial.
jQuery(window).load(function () {
      $(".loader").delay(50).fadeOut("slow"); //retire o delay quando for copiar!
    $("#tudo_page").toggle("fast");
});
//Função usada para adicionar os campos dinamicamente.
</script>
<script>
    var contador = 0;
    var limite = 3;

		    $(function campos() {
            var scntDiv = $('#dynamicDiv');
            $(document).on('click', '#addInput', function campos(event) {
                event.preventDefault();
                if (contador < limite) {
                $('<p>' +
                    '<input type="text" id="chuchu" class="form-control btc" name="quantidade[]" size="20"  placeholder="Digite outra fração" /><br> ' +
                    '<a class="btn btn-danger" href="javascript:void(0)" id="remInput">' +
                    '<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> ' +
                    'Remover Campo' +
                    '</a>' +
                    '</p>').appendTo(scntDiv);
                    contador++; // incremento do contador
        }
                return false;
            });

            var scntDiv1 = $('#dynamicDiv1');
            $("#addInput1").on('click', function campos() {
                if (contador < limite) {
                $('<p>' +
                    '<input type="text" id="dynamicChuchu" class="form-control" name="carteira[]" size="20"  placeholder="Digite outra carteira" /><br> ' +
                    '<a class="btn btn-danger" href="javascript:void(0)" id="remInput1">' +
                    '<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> ' +
                    'Remover Campo' +
                    '</a>' +
                    '</p>').appendTo(scntDiv1);
                    contador++; // incremento do contador
        }
                return false;
            });
            $(document).on('click', '#remInput1', function campos() {
                $(this).parents('p').remove();
                return false;
            });
            var scntDiv2 = $('#dynamicDiv2');
            $("#addInput2").on('click', function campos() {
                if (contador < limite) {
                $('<p>' +
                    '<br>' +
                    '<input type="file" id="dynamicChuchu2" name="file[]" onchange="updatepicture(this);" />  ' +
                    '<a class="btn btn-danger" href="javascript:void(0)" id="remInput2">' +
                    '<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> ' +
                    'Remover Campo' +
                    '</a>' +
                    '</p>').appendTo(scntDiv2);
                    contador++; // incremento do contador
        }
                return false;
            });
            $(document).on('click', '#remInput2', function campos() {
                $(this).parents('p').remove();
                return false;
            });

            $(document).on('click', '#remInput', function campos() {
                $(this).parents('p').remove();
                return false;

            });
        });

        // $(document).on('submit', '#form1', function (event) {
        //     alert("Handler for .submit() called.");
        //     event.preventDefault();
        // });

        
    $(document).ready(function(){
        $('.btc').mask('0,00000000', {reverse: true});
    }
  );
 
    </script>
</html>



	