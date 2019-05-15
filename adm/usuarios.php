<?php
include "../Telas/sessao.php";
include "../adm/menu.php";
include "../Back/conexao.php";


        //Verificar a pagina anterior e posterior
        
        //Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
//echo $pagina;

//Selecionar todos os produtos da tabela
$result_produtos = "SELECT * FROM usuarios";
$resultado_produtos = mysqli_query($link, $result_produtos);

//Contar o total de produtos
$total_produtos = mysqli_num_rows($resultado_produtos);
//echo $total_produtos;

//Seta a quantidade de produtos por pagina
$quantidade_pg = 10;
// $quantidade_pg;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_produtos/$quantidade_pg);

//echo $num_pagina;

//Calcular o inicio da visualizacao
$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;

//echo $inicio;

//Selecionar os produtos a serem apresentado na página
$result_produtos = "SELECT * FROM usuarios limit $inicio,$quantidade_pg";
$resultado_produtos= mysqli_query($link, $result_produtos);
$total_produtos = mysqli_num_rows($resultado_produtos);

				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
	
?>
<div class="container">
    <div class='row'>
        <div class="col-md-12 espaco-padrao">
        <h2>Usuários</h2>
        </div>
    </div>
<div class="row">
    <div class="col-md-12 espaco-padrao">
    <form action="../adm/busca_dados.php" method="POST" >
    <input type="text" class="form-control" id="exampleInputEmail1" name="busca" aria-describedby="emailHelp" placeholder="Busca" require="required">
    <br>
    <div class="row">
      <div class="col-md-12">
    <button type="submit" class="btn btn-danger">Buscar</button>
      </div>
    </div>
    
</form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Detalhes</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php
    
       $consulta = "Select * from usuarios limit $inicio,$quantidade_pg";
       $resultado = mysqli_query($link,$consulta);
       

       foreach ($resultado as $rows){ 

           $codigo = $rows['cod'];
           $nome = $rows['nome'];
           $email = $rows['email'];
          

           ?>
        <div class="col-md-12">
            <div class="row">
      <th scope="row"><?php echo $codigo?></th>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo  $nome ?></td>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
      <td><?php echo $email ?></td>
            </div>
        </div>
    
            <div class="col-md-12">
            <div class="row">
      <td align='center'><a href="resultado.php?cod= <?=$codigo;?>"><button type="button" class="btn btn-success">Detalhes</button></a></td>
            </div>
        </div>
        </div>
    </tr>

         <?php   

        }

        ?>
        </tbody>
</table>

    </div>

</div>
<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a class='pagina' href="usuarios.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a class='pagina' href="usuarios.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a class='pagina' href="usuarios.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

<div>
    
