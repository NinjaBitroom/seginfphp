<header>
    <h1>Cyber Security</h1>
</header>
<nav style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="index.php">Início</a>
        <?php if (isset($_SESSION['login'])) : ?>
            <a href="dashboard.php">Painel</a>
        <?php endif ?>
        <a href="sobre.php">Sobre</a>
        <a href="servicos.php">Serviços</a>
        <a href="faleconosco.php">Fale conosco</a>
    </div>
    <div>
        <?php if (isset($_SESSION['login'])) : ?>
            <form action="deslogar.php" method="post">
                <button type="submit" class="logout-button">Sair</button>
            </form>
        <?php else : ?>
            <button onclick="window.location.href='logar.php'" class="login-button">Entrar</button>
        <?php endif ?>
    </div>
</nav>