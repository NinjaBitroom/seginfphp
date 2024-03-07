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
    <title>Serviços</title>
    <?php require_once 'includes/base/styles.php'; ?>
</head>
<body>
    <?php require_once 'includes/base/header.php'; ?>
    <main>
        <h2>Nossos Serviços</h2>
        <p>Oferecemos uma variedade de serviços para atender às necessidades de nossos clientes. Abaixo estão alguns dos serviços que fornecemos:</p>
        
        <h3>Serviço 1</h3>
        <p>Descrição detalhada do Serviço 1.</p>
        
        <h3>Serviço 2</h3>
        <p>Descrição detalhada do Serviço 2.</p>
        
        <h3>Serviço 3</h3>
        <p>Descrição detalhada do Serviço 3.</p>
    </main>
</body>
</html>
