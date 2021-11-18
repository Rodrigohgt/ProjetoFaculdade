<?php 

if (!$_SESSION['usuario']) {
    header('Location: login.php');
    header('Location: carrinho.php');
    header('Location: perfil.php');
    exit();
}