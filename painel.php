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
    <link rel="stylesheet" href="CSS/estilo.css">
    <script src="/JS/script.js"></script>
    <title>Produtos</title>
</head>

<body>
    <header>

        <nav>
            <ul>
                <li><a href="painel.php">Produtos</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="perfil.php">perfil</a></li>
                <li><a href="logout.php">sair</a></li>
            </ul>
        </nav>

    </header>
    <a href="index.html">
        <img id="logo" src="IMG/logo.png" title="Logo Monkeys" alt="Logo Monkeys" width="200px" height="200px">
    </a>
    <main>
    <h2>Olá, seja bem vindo <?php echo $_SESSION['usuario'];?></h2>
        <section id="container">
            <div class="produtos">
                <img src="IMG/KitHeinz.jpeg" title="KitHeinz" alt="KitHeinz" width="200px" height="200px">
                <div class="descricao">

                    <h4>Kit Heinz</h4>
                    <p>Kit Tradicional Heinz 03 Unidades <br> Ketchup - 397g + Maionese 215g<br> + Mostarda Amarela 255g
                    </p>
                    <p>R$ 19,00</p>
                    <br>
                    <input type="number" value="1" min="1" max="10" id="qtd1">
                    <button class="btnComprar" type="button" id="adicionar1" id="produto1"
                        onclick="AddCarrinho('Kit Heinz', document.getElementById('qtd1').value, '19.00', 1)"> Adicionar
                        no carrinho
                    </button>
                </div>
            </div>
            <div class="produtos">
                <img src="IMG/batata.jpeg" title="Batata Frita" alt="Batata Frita" width="200px" height="200px">
                <div class="descricao">
                    <h4>Batata Frita </h4>
                    <p>Batata Palito Congelada MCCAIN <br>Corte Tradicional Pacote 720g</p>
                    <p>R$18,00 </p>
                    <br>
                    <input type="number" value="1" min="1" max="10" id="qtd2">
                    <button class="btnComprar" type="button" id="adicionar1" id="produto1"
                        onclick="AddCarrinho('Batata Frita', document.getElementById('qtd2').value, '18.00', 2)">
                        Adicionar
                        no carrinho </button>
                </div>
            </div>
            <div class="produtos">
                <img src="IMG/arroz.jpeg" title="Arroz" alt="Arroz" width="200px" height="200px">
                <div class="descricao">
                    <h4>Arroz</h4>
                    <p>Arroz Parboilizado Tipo 1 CAMIL Pacote 5kg</p>
                    <p>R$19,00 </p>
                    <br>
                    <input type="number" value="1" min="1" max="10" id="qtd3" placeholder="Qtd">
                    <button class="btnComprar" type="button" id="adicionar1" id="produto1"
                        onclick="AddCarrinho('Arroz', document.getElementById('qtd3').value, '19.00', 3)"> Adicionar
                        no carrinho
                    </button>
                </div>
            </div>
            <div class="produtos">
                <img src="IMG/feijao.jpeg" title="Feijão" alt="Feijão" width="200px" height="200px">
                <div class="descricao">
                    <h4>Feijão</h4>
                    <p>Feijão Carioca Tipo 1 KICALDO Pacote 1Kg</p>
                    <p>R$6.40 </p>
                    <br>
                    <input type="number" value="1" min="1" max="10" id="qtd4" placeholder="Qtd">
                    <button class="btnComprar" type="button" id="adicionar1" id="produto1"
                        onclick="AddCarrinho('Feijão', document.getElementById('qtd4').value, '6.40', 4)"> Adicionar
                        no carrinho
                    </button>
                </div>
            </div>
            <div class="produtos">
                <img src="IMG/coca.jpeg" title="Coca-Cola" alt="Coca-cola" width="200px" height="200px">
                <div class="descricao">
                    <h4>Coca-Cola</h4>
                    <p>Coca-Cola Sabor Original PET 2L</p>
                    <p>R$5.99 </p>
                    <br>
                    <input type="number" value="1" min="1" max="10" id="qtd5" placeholder="Qtd">
                    <button class="btnComprar" type="button" id="adicionar1" id="produto1"
                        onclick="AddCarrinho('Coca-cola', document.getElementById('qtd5').value, '5.99', 5)"> Adicionar
                        no carrinho
                    </button>
                </div>
            </div>
            <div class="produtos">
                <img src="IMG/alface.jpeg" title="Alface" alt="Alface" width="200px" height="200px">
                <div class="descricao">
                    <h4>Alface Americana</h4>
                    <p>Alface Americana Bola 250g</p>
                    <p>R$3.50 </p>
                    <br>
                    <input type="number" value="1" min="1" max="10" id="qtd6" placeholder="Qtd">
                    <button class="btnComprar" type="button" id="adicionar1" id="produto1"
                        onclick="AddCarrinho('Alface', document.getElementById('qtd6').value, '3.50', 6)"> Adicionar
                        no carrinho
                    </button>
                </div>
            </div>
        </section>
    </main>

    <h3>Obrigado por comprar no nosso site</h3>

    <footer class="footer-distributed">

        <div class="footer-right">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

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

