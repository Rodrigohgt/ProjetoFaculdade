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
    <link rel="stylesheet" href="pagamento.css">
    <script src="pagamento.js"></script>
    <title> Pagamento</title>
</head>

<body>
    <form name="pagamento" action="#" method="post" onsubmit='return validar()'>
        <div class="container p-0">
            <div class="card px-4">
                <p class="h8 py-3">Pagamento</p>
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Titular</p> <input class="form-control mb-3" id="nome" type="text" placeholder="Nome do titular">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Número cartão</p> <input class="form-control mb-3" id="num" type="text" placeholder="**** **** ******">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Validade</p> <input class="form-control mb-3" id="validade" type="text" placeholder="MM/YYYY">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">CVV/CVC</p> <input class="form-control mb-3 pt-2 " id="cvv" type="password" placeholder="***">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="btn btn-primary mb-3"> <span class="ps-3">Efetuar Pagamento</span> <span class="fas fa-arrow-right"></span> </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="JS/script.js"></script>

</html>