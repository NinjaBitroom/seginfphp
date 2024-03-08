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

    $query = "SELECT * FROM login WHERE login = '$login'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $senhaHash = $row['senha'];

        if (password_verify($senha, $senhaHash)) {
            $_SESSION['login'] = $login;
            header('Location: index.php');
            exit();
        } else {
            $error_message = "Login ou senha inválidos!";
        }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php require_once 'includes/auth/styles.php'; ?>
</head>

<body>
    <main>
        <h1>Login</h1>
        <a href="index.php">Ir para o Início</a>
        <form action="logar.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login" required>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <?php if (!empty($error_message)) : ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <span>Não tem uma conta?</span>
        <a href="registrar.php">Registrar</a>
    </main>
    <footer>
        <p>
        <div class="social-icons">
            <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon telegram"><i class="fab fa-telegram"></i></a>
        </div>
    </footer>
</body>

</html>