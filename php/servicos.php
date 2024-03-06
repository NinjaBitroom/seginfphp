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
    <header>
        <h1>Serviços</h1>
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
        <h2>Nossos Serviços</h2>
        <p>Oferecemos uma variedade de serviços para atender às necessidades de nossos clientes. Abaixo estão alguns dos serviços que fornecemos:</p>
        
        <h3>Serviço 1</h3>
        <p>Descrição detalhada do Serviço 1.</p>
        
        <h3>Serviço 2</h3>
        <p>Descrição detalhada do Serviço 2.</p>
        
        <h3>Serviço 3</h3>
        <p>Descrição detalhada do Serviço 3.</p>
        
        <!-- Adicione mais serviços conforme necessário -->
    </main>
</body>
</html>
