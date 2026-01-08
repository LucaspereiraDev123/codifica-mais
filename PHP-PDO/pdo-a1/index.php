<?php

require 'vendor/autoload.php';
require 'conexao-bd.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';

    //Busca apenas pelo email
    $sql = "SELECT id, email, senha, nome FROM usuarios WHERE email = ?";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $email);
    $statement->execute();

    //Pega as informações do usuário do banco e transforma para um array no phps
    $usuario = $statement->fetch();

    //Verifica se existe e se a senha confere
    if ($senha === $usuario['senha']) {

        //Cria sessão
        $_SESSION['usuario_email'] = $usuario['email'];
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];

        //Redireciona
        header('Location: /home.php');
        exit;
    } 
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
            <h1>Login</h1>
        </header>
        <main>
            <section class="contenier-login-sessao">
                <form method="post">
                    <div class="contenier-login-sessao-formulario">
                        <label>E-mail</label>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>
                    <div class="contenier-login-sessao-formulario">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" placeholder="********" required>
                    </div>
                    <button href="home.php" class="contenier-login-sessao-botaoEntrar"type="submit">Entrar</button>
                    <a href="cadastro.php" class="contenier-login-sessao-cadastro">Crie sua conta</a>
                </form>
            </section>
        </main>

        <footer class="contenier-login-rodape">
            <p>&copy; 2024 - Todos os direitos reservados</p>
        </footer>
    </div>
</body>

</html>
