<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <?php require_once 'includes/base/styles.php'; ?>
</head>
<body>
    <header>
        <h1>Contato</h1>
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
        <h2>Entre em contato conosco</h2>
        <form action="#" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>
