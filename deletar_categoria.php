<?php
  include 'conexao_cadastro.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM cliente WHERE id = $id";
  $deletar = mysqli_query($conexao, $sql)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <title>Remoção de Categoria</title>
</head>
<body>
    <div class="container classContainer02">
        <h3>Deletado com sucesso</h3>
        <div class="d-flex justify-content-center">
            <a href="prontuario_pag.php" class="btn btn-primary text-white mt-2">Voltar</a>
        </div>
    </div>
    <!-- Optional JavaScript; -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>

