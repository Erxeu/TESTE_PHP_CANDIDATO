<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> MEU CEP </title>
		<link rel="stylesheet" type="text/css" href="/css/style.css"/>
	</head>
	<body class="body">
		<h1 class ="title"> Buscar CEP </h1>
		<!--Caminho do arquivo de action estava incorreto'idex.php'-->
		<form action="index.php" method="post" class="form">
			<label class="text"> Insira o CEP: </label>
			<input type="text" name="cep">
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>
<?php

require_once __DIR__ . "/Address.php";

$address = new Address();

if(!empty($_POST['cep'])){

	$cep = $_POST['cep'];
	//Variável passada no parâmetro está errada '$cp'

	$endereco = $address->get_address($cep);

	echo "<label class='text-result'>CEP Informado: $endereco->cep </label>";
	//variável com nome incorreto '$addres' e 'logradoro'
	echo "<label class='text-result'>Rua: $endereco->logradouro</label>";
	echo "<label class='text-result'>Bairro: $endereco->bairro</label>";
	///variável com nome incorreto '$adress'
	echo "<label class='text-result'>Estado: $endereco->uf</label> ";
}
