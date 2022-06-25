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
  <title>Edição de Categoria</title>
</head>
<body>
  <div class="container classContainer03">
    <h3>Formulário de Edição</h3>
    <form action="atualizar_categoria.php" method="POST" class="mt-4">
      <?php
      include 'conexao_cadastro.php';
      $id = $_GET['id'];
      $sql = "SELECT * FROM cliente WHERE id = $id";
      $busca = mysqli_query($conexao, $sql);

      while($array = mysqli_fetch_array($busca)){

        $id = $array['id'];
        $data_consulta = $array['data_consulta'];
        

        ?>
        <div class="form-group">
          <label for="">Data da Consulta: </label>
          <input type="text" name="data_consulta" class="form-control" value="<?php echo $data_consulta ?>">
          <input type="text" name="id" class="form-control" value="<?php echo $id ?>" style="display: none;">
        </div>

  
        <div class="d-flex justify-content-end">
          <div class="d-flex justify-content-end ">
          <a href="agendamento_pag.php" class="btn btn-primary mr-2">Voltar</a>
          <button type="submit" class="btn" id="button">Atualizar</button>
        </div>
      <?php }?>
    </form>
  </div>
<!-- Optional JavaScript; -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>