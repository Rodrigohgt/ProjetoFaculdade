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
    <link rel="stylesheet" href="CSS/perfil.css">
    <link rel="stylesheet" href="CSS/carrinho.css">
    <title>Perfil do Cliente</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="painel.php">Produtos</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="logout.php">sair</a></li>
            </ul>
        </nav>
    </header>
    <a href="index.html">
        <img id="logo" src="IMG/logo.png" title="Logo Monkeys" alt="Logo Monkeys" width="200px" height="200px">
    </a>

    <div id="container">
    <h2>Olá, seja bem vindo <?php echo $_SESSION['usuario'];?></h2>
        </h2>
        <label class="lblForm" for="nome">Nome:</label><br>
        <input class="inputForm" type="text" placeholder="Nome Completo"> <br><br>

        <label class="lblForm" for="email">E-mail:</label><br>
        <input class="inputForm" type="email" placeholder="E-mail"> <br><br>

        <label class="lblForm" for="celular">Celular:</label><br>
        <input class="inputForm" type="tel" placeholder="Celular"><br><br>

        <label class="lblForm" for="telefone">Telefone:</label><br>
        <input class="inputForm" type="tel" placeholder="Telefone"><br><br>


        <label for="pagamento">Forma de Pagamento:</label> <br>
        <select class="pagtoForm" name="pagamento" id="pagamento">
            <option value="credito">Crédito</option>
            <option value="debito">Débito</option>
        </select>

        <input class="inputForm" type="text" placeholder="Número do Cartão">
        <br><br>
        <label for="pagamento">Forma de Pagamento:</label> <br>
        <select class="pagtoForm" name="pagamento">
            <option value="credito">Crédito</option>
            <option value="debito">Débito</option>
        </select>
        <input class="inputForm" type="text" placeholder="Número do Cartão">
    </div>

    <h3>Obrigado por comprar com a gente</h3>
    <footer class="footer-distributed">
        <div class="footer-right">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>

        <div class="footer-left">
            <p class="footer-links">
                <a class="link-1" href="#">Home</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
                <a href="#">Faq</a>
                <a href="#">Contact</a>
            </p>
            <p>Company Name &copy; 2015</p>
        </div>

    </footer>
</body>

</html>