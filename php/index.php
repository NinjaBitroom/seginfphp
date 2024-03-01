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
		<h1>Parabéns <?php echo $_SESSION['login'] ?>! Você está autenticado!</h1>
		<a href="deslogar.php">Sair</a>
	</main>
</body>
</html>