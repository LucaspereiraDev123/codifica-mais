<?php

require 'vendor/autoload.php';

session_start();

// protege a página
if (!isset($_SESSION['usuario_id'])) {
    header('Location: index.php');
    exit;
}
?><!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>League of Legends</title>

</head>

<body>
    <div class="contenier-login">
        <header class="contenier-login-cabecalho">
            <h1>Painel</h1>
        </header>
        <main>
            <section class="contenier-login-sessao">
                <form>
                    <div class="contenier-login-sessao-formulario">
                        <p>Olá, <?= htmlspecialchars($_SESSION['usuario_nome']); ?>. Você esta logado</p>
                    </div>
                    <a href="logout.php" class="contenier-login-sessao-botaoEntrar">
                        Deslogar
                    </a>
                </form>
            </section>
        </main>
    </div>
</body>

</html>