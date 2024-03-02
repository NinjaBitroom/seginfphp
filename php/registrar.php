<?php
	session_start();
    if (isset($_SESSION['login'])) {
        header('Location: index.php');
        exit();
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "seginf";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $error_message = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        // Verifica se o login já existe
        $query = "SELECT * FROM login WHERE login = '$login'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $error_message = "Este login já está em uso.";
        } else {
            $sql = "INSERT INTO login (login, senha) VALUES ('$login', '$senha')";
            if (mysqli_query($conn, $sql)) {
                echo "Login criado com sucesso!";
                // Redireciona para a página de login após o registro
                header('Location: logar.php');
                exit();
            } else {
                echo "Erro ao criar login: " . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <!-- Adicionar estilo CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        main {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
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
        .error-message {
            color: #ff0000;
            margin-bottom: 10px;
        }
        .login-link {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }
        .login-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <main>
        <h1>Registrar</h1>
        <form action="registrar.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login" required>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <button type="submit">Registrar</button>
        </form>
        <?php if(!empty($error_message)): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <span>Já possui uma conta?</span>
        <a class="login-link" href="logar.php">Login</a>
    </main>
</body>
</html>
