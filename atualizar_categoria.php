<?php
    include 'conexao_cadastro.php';    
    $id = $_POST['id'];
    $data_consulta = $_POST['data_consulta'];
    $sql = "UPDATE cliente SET data_consulta = '$data_consulta' WHERE id = $id";
    $atualizar = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Atualização de Categoria</title>
</head>
<body>
    <div class="container classContainer02">
        <h3>Atualizado com sucesso</h3>
        <div class="d-flex justify-content-center">
            <a href="prontuario_pag.php" class="btn btn-primary text-white mt-2">Voltar</a>
        </div>
    </div>
<!-- Optional JavaScript; -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>