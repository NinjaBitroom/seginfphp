<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Início</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<?php require_once 'includes/base/styles.php'; ?>
</head>

<body>
	<?php require_once 'includes/base/header.php'; ?>
	<main>
		<section class="main-section">
			<h2>Bem-vindo ao Mundo da Cyber Segurança</h2>
			<p>Proteja-se contra as ameaças digitais mais perigosas</p>
			<p>Aqui estão alguns dos tipos de malware mais conhecidos:</p>
		</section>

		<section class="malware-section">
			<div class="malware-item">
				<img src="includes/imagens/ransomware.jpg" alt="Malware 1">
				<h3>Ransomware</h3>
				<p>O ransomware é um tipo de malware que criptografa os arquivos do computador e exige um resgate para restaurá-los.</p>
			</div>
			<div class="malware-item">
				<img src="includes/imagens/spyware.jpg" alt="Malware 2">
				<h3>Spyware</h3>
				<p>O spyware é um software malicioso projetado para espionar as atividades do usuário sem o seu conhecimento.</p>
			</div>
			<div class="malware-item">
				<img src="includes/imagens/trojan.jpg" alt="Malware 3">
				<h3>Trojan Horse</h3>
				<p>O cavalo de Troia é um tipo de malware que se disfarça de software legítimo para enganar os usuários e roubar informações.</p>
			</div>
		</section>
	</main>
	<footer>
		<div class="social-icons">
			<a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
			<a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
			<a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
			<a href="#" class="social-icon telegram"><i class="fab fa-telegram"></i></a>
		</div>
	</footer>
</body>

</html>