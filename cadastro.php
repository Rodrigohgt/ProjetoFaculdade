<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <main class="container">

        <div id="logo_login">
            <a href="index.html">
                <h2>Cadastro <br>Monkeys</h2>
                <img id="img_login" src="IMG/logo.png" alt="Logo Monkeys" width="60px" height="60px">
            </a>
        </div>

        <form action="cadastrar.php" method="POST">

            <div class="input-field">

                <input type="text" name="nome" id="nome" placeholder="seu nome">

                <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuario">

                <input type="password" name="senha" id="senha" placeholder="Digite a senha">
            </div>

            <input type="submit" value="Cadastro">

        </form>

        <div class="footer">
            <span>Use suas redes sociais para fazer login<br>
                <a href="cadastro.html">Ou Cadastre-se cliquando aqui</a></span>
            <div class="social-fields">
                <div class="social-field twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                        Entre com o Twitter
                    </a>
                </div>
                <div class="social-field facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        Entre com o Facebook
                    </a>
                </div>
            </div>
            <div id="rodape_footer">
                <a href="login.html">Login</a>
                <a href="index.html">Produtos</a>
            </div>
        </div>
    </main>

</body>

</html>