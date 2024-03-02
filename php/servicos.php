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
    <!-- Adicionando estilos CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
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