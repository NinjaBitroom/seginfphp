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

    if (mysqli_num_rows($result) > 0) {
        $error_message = "Este login já está em uso.";
    } else {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO login (login, senha) VALUES ('$login', '$senhaHash')";

        if (mysqli_query($conn, $sql)) {
            echo "Login criado com sucesso!";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php require_once 'includes/auth/styles.php'; ?>
</head>

<body>
    <main>
        <h1>Registrar</h1>
        <a href="index.php">Ir para o Início</a>
        <form action="registrar.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login" required>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <button type="submit">Registrar</button>
        </form>
        <?php if (!empty($error_message)) : ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <span>Já possui uma conta?</span>
        <a href="logar.php">Login</a>
    </main>
    <footer style="padding-top: 12px;">
        <div class="social-icons">
            <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon telegram"><i class="fab fa-telegram"></i></a>
        </div>
    </footer>
</body>

</html>