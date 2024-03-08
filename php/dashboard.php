<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: logar.php');
    exit();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seginf";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <?php require_once 'includes/base/styles.php'; ?>
</head>

<body>
    <?php require_once 'includes/base/header.php'; ?>
    <main>
        <section>
            <h1>Painel de Pesquisa de Produtos</h1>
            <form action="dashboard.php" method="post">
                <input type="text" name="query" placeholder="Digite o nome do produto">
                <button type="submit">Pesquisar</button>
            </form>
        </section>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $query = $_POST['query'];
            
            $sql = "SELECT * FROM produtos WHERE descricao LIKE '%$query%' OR preco LIKE '%$query%'";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Descrição: " . $row['descricao'] . "</p>";
                    echo "<p>Preço: " . $row['preco'] . "</p>";
                }
            } else {
                echo "Nenhum resultado encontrado.";
            }
        }
        ?>
    </main>

</body>

</html>