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

        $query = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);

        if ($row == 1) {
            $_SESSION['login'] = $login;
            header('Location: index.php');
            exit();
        } else {
            $error_message = "Login ou senha inválidos!";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once 'includes/auth/styles.php'; ?>
</head>
<body>
    <main>
        <h1>Login</h1>
        <form action="logar.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login" required>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <?php if(!empty($error_message)): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <span>Não tem uma conta?</span>
        <a class="register-link" href="registrar.php">Registrar</a>
    </main>
</body>
</html>
