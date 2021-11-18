<?php
session_start();
include('verifica_login.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/carrinho.css">
    <title>Carrinho</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="painel.php">Produtos</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="perfil.php">perfil</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <a href="index.html">
        <img id="logo" src="IMG/logo.png" title="Logo Monkeys" alt="Logo Monkeys" width="200px" height="200px">
    </a>

    <main>
        <h1 class="menu-openner">Monkeys Ecommerce</h1>
        <br><br>
        <div class="modelsWindowBody">
            <div class="modelsBig">
                <h2>Carrinho</h2>
                <img src="">
                <div id="itens"></div>
                <div>
                    Total: <span id="total"></span><br><br>
                </div>

            </div>
        </div>
        <div>
            <button class="botao" type="button" onclick=" localStorage.clear(); location.reload();"> Limpar carrinho
            </button>
            <a href="pagamento.php"><button class="botao" type="button"> Comprar </button></a>
        </div>
    </main>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Monkeys<span> seu Mercadinho Online </span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Monkeys Ecommerce</p>

            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>

        <div class="footer-right">
            <p>Fale conosco!</p>
            <form action="#" method="post">
                <input type="text" name="email" placeholder="E-mail">
                <textarea name="message" placeholder="Mensagem"></textarea>
                <input type="reset" value="Limpar">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </footer>

    <script src="JS/script.js"></script>
</body>

</html>