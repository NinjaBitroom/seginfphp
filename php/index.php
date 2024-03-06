<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Início</title>
	<?php require_once 'includes/base/styles.php'; ?>
</head>
<body>
	<header>
		<h1>Site Sobre Autenticação</h1>
	</header>
	<nav style="display: flex; justify-content: space-between; align-items: center;">
		<div>
			<a href="index.php">Home</a>
			<a href="sobre.php">Sobre</a>
			<a href="servicos.php">Serviços</a>
			<a href="faleconosco.php">Fale conosco</a>
		</div>	
		<div>
			<?php if (isset($_SESSION['login'])): ?>
				<form action="deslogar.php" method="post">
					<button type="submit">Deslogar</button>
				</form>
			<?php  else: ?>
				<button onclick="window.location.href='registrar.php'">Registrar/Login</button>
			<?php endif ?>
		</div>
	</nav>
	<main>
		<h2>Conteúdo Principal</h2>
		<p>Aqui você pode adicionar o conteúdo principal da sua página.</p>
	</main>
</body>
</html>
