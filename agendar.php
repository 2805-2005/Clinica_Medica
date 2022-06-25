<?php
	include 'conexao_cadastro.php';
	$nome = $_POST['nome'];
    $exame = $_POST['exame'];
    $data_consulta = $_POST['data_consulta'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $contato = $_POST['Contato'];
    
	$sql = "INSERT INTO cliente(nome, exame, data_consulta, data_nascimento, cpf, Contato) VALUES ('$nome', '$exame', '$data_consulta', '$data_nascimento', '$cpf', '$contato')";
	$inserir = mysqli_query($conexao, $sql);



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
	<title>Cadastro de Categoria</title>
</head>
<body>
	<div class="container classContainer02">
		<h3>Categoria adicionada com sucesso</h3>
		<div class="d-flex justify-content-center">
			<a href="agendamento_pag.php" class="btn btn-primary text-white mt-2">Voltar</a>
		</div>
	</div>
	<!-- Optional JavaScript; -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>







