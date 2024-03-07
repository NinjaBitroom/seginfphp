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
    <?php require_once 'includes/base/header.php'; ?>
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
