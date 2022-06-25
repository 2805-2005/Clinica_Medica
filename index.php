</html>
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

    <title>Tela de Cadastro</title>

  </head>

  <body>

    <main class="form-signin">

      <div class="container shadow p-3 bg-white rounded border">

        <form action="cadastrar.php" method="POST">

          <div class="d-flex justify-content-center mb-4">
            <img src="./img/logo02.png" alt="imagem da logomarca" width="250px" height="230px">
          </div>

          <div class="form-group">
            <label for="">Usuário:</label>
            <input type="text" name="nome" class="form-control" id="usuario" placeholder="Entre com o se nome" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="">Senha:</label>
            <input type="password"  name="senha" class="form-control" id="senha" placeholder="Entre com o sua senha" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="">CEP:</label>
            <input type="number"  name="cep" class="form-control" id="cep" placeholder="Digite seu cep" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="">Contato:</label>
            <input type="number"  name="contato" class="form-control" id="contato" placeholder="Digite seu contato" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="">Email:</label>
            <input type="e-mail"  name="email" class="form-control" id="email" placeholder="Digite seu email" autocomplete="off" required>

            <br>

            

            <br>

            <center> <button>  cadastrar </button> </center>
          </div>
        
        </form>
      </div><!--container-->
    </main>
  
    <!-- JavaScript (Opcional) -->
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
  </html>
