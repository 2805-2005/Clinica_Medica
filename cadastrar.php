<?php
   include("conexao_cadastro.php");

   $nome = $_POST['nome'];
   $senha = $_POST['senha'];
   $cep = $_POST['cep'];
   $contato = $_POST['contato'];
   $email = $_POST['email'];

   $sql = "INSERT INTO usuario(nome, senha, cep, contato, email) VALUES ('$nome', '$senha', $cep, '$contato', '$email')";

   if(mysqli_query($conexao, $sql)){
    
   }
   else{
       echo "".mysqli_connect_error($conexao);
   }
   mysqli_close($conexao);
 
   ?>

<!doctype html>
  <html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

    <title>Tela de Login</title>
  </head>
  <body>
    <main class="form-signin">
      <div class="container shadow p-3 bg-white rounded border">
        <form action="index1.php" method="POST">
          <div class="d-flex justify-content-center mb-4">
            <img src="./img/logo02.png" alt="imagem da logomarca" width="250px" height="230px">
          </div>
          <div class="form-group">
            <label for="">E-mail:</label>
            <input type="text" class="form-control" id="E-mail" placeholder="Entre com o seu e-mail" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" autocomplete="off" required>
          </div>

        <!--botão+script-->
          <div class="d-flex justify-content-center">
            <a id ="mns_bnv" href="pag_principal.php" class="btn btn-primary text-white mt-2">Entrar</a>
        </div>

        <script text = "text/javascript"src="mns.js"></script>
        
          <p class="d-flex justify-content-center mb-3 mt-2 text-muted"> Corporação RF </p> 
        </form>
        
      </div><!--container-->
    </main>
    
    
    
    <!-- JavaScript (Opcional) -->
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
  </html>