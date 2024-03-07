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
    <?php require_once 'includes/base/styles.php'; ?>
</head>
<body>
    <?php require_once 'includes/base/header.php'; ?>
    <main>
        <h2>Nossa História</h2>
        <p>Somos uma empresa dedicada a fornecer soluções inovadoras para nossos clientes. Fundada em 20XX, temos anos de experiência no mercado e uma equipe talentosa pronta para atender às necessidades dos clientes.</p>
        
        <h2>Nossa Missão</h2>
        <p>Nossa missão é fornecer produtos e serviços da mais alta qualidade, superando as expectativas dos clientes e contribuindo para o sucesso de seus projetos.</p>
        
        <h2>Nossa Visão</h2>
        <p>Nossa visão é ser reconhecida como líder de mercado em nossa área de atuação, com um compromisso contínuo com a inovação, excelência e satisfação do cliente.</p>
    </main>
</body>
</html>
