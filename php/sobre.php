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
    <title>Sobre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php require_once 'includes/base/styles.php'; ?>
</head>

<body>
    <?php require_once 'includes/base/header.php'; ?>
    <main>
        <div class="content-item">
            <div class="image-container">
                <img src="includes/imagens/imagem1.jpg" alt="Imagem 1">
                <div class="image-overlay">
                    <div class="overlay-content">
                        <h2>Protegendo o seu Mundo Digital</h2>
                        <p>Nossa empresa de cibersegurança é uma referência no mercado, dedicada a proteger organizações contra as crescentes ameaças cibernéticas. Com uma equipe altamente qualificada e experiente, oferecemos soluções abrangentes e inovadoras para garantir a segurança digital dos nossos clientes.</p>
                        <a href="sobre.php" class="overlay-button">Saiba Mais</a>
                        <footer style="padding-top: 12px;">
                            <div class="social-icons">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-icon telegram"><i class="fab fa-telegram"></i></a>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>