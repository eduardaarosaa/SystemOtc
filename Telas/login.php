<head>
<link rel="stylesheet" type="text/css" href="../style/login.css">
<link rel="stylesheet" type="text/css" href="../style/animate.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <h1>Mesa Balcão</h1>
            <img class='bounce' src="../Imagens/logo.jpg" width="180px"><br><br>
            <p>Cadastre-se ou faça login para ter acesso.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action="../Back/realizar_login.php" method="POST">
                  <div class="form-group">
                     <label>E-mail</label>
                     <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <a href="../Telas/cadastro.php" class="btn btn-secondary">Cadastre-se</a>
               </form>
            </div>
         </div>
      </div>