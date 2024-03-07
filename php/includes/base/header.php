<header>
    <h1>Site Sobre Autenticação</h1>
</header>
<nav style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="index.php">Início</a>
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