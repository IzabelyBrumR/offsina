<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Oficina Mecânica</title>
    <!-- Latest compiled and minified CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="resources/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="align-items-center" style="width: 100%; text-align: center;">
            <img src="resources/img/offsina_logo.png">
        </div>
        <nav>
            <?php
            @session_start();
            if(isset($_SESSION['login'])){
            echo '<nav class="nav justify-content-center h4">
                <a class="nav-link active" href="./listaClientes.php" aria-current="page">Cadastro de clientes</a>
                <a class="nav-link" href="./listaVeiculos.php">Cadastro de veículos</a>
                <a class="nav-link" href="./listaOrdensServico.php">Ordens de serviço</a>
                <a class="nav-link disabled" href="#">Listagem e consulta</a>
                <a class="nav-link" href="./controller/logoutController.php?cmd=logout">Logout</a>
                </nav>';
            }
            ?>

        </nav>
        <main>