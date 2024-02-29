<?php
	session_start();
	if (!isset($_SESSION['login'])) {
		header('Location: logar.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Início</title>
</head>
<body>
	<main>
		<h1>Olá, mundo!</h1>
		<p>Este é um exemplo de página HTML.</p>
	</main>
</body>
</html>