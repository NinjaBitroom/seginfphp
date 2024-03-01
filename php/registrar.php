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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $sql = "INSERT INTO login (login, senha) VALUES ('$login', '$senha')";
        if (mysqli_query($conn, $sql)) {
            echo "Login criado com sucesso!";
        } else {
            echo "Erro ao criar login: " . mysqli_error($conn);
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
</head>
<body>
    <main>
        <h1>Registrar</h1>
        <form action="registrar.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login" required>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <button type="submit">Registrar</button>
        </form>
        <span>Já possui uma conta?</span>
        <a href="logar.php">Login</a>
    </main>
</body>
</html>