<?php
    session_start();
    unset($_SESSION['login']);
    header("Location: logar.php");
    exit();
?>
