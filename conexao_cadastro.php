<?php
    $servidor = "localhost";
	$usuario  = "root";
	$senha = "";
	$database = "cadastro";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	if(!$conexao){
		echo("Falha de Conexão: " . $conexao->connect_error());
	}
?>