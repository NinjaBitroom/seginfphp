<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php require_once 'includes/base/styles.php'; ?>
</head>

<body>
    <?php require_once 'includes/base/header.php'; ?>

    <main class="faleconosco-page">
        <h2>Entre em contato conosco</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Seu endereço de e-mail" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
    <p>
    <div class="social-icons">
        <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon telegram"><i class="fab fa-telegram"></i></a>
    </div>
</body>

</html>