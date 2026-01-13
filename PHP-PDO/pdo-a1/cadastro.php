<?php 

require 'vendor/autoload.php';
require 'conexao-bd.php';

//Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //pegando os dados do formulário
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    //$_POST['nome'] vem do formulário
    //?? '' evita erro se o campo não existir
    //trim() remove espaços extras no começo e no fim

    //Confere se nome, email ou senha não foram preenchidos.
    if ($nome === '' || $email === '' || $senha === '') {
        header('Location: /index.php?sucesso=0&erro=campos_vazios');
        exit;
    }

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $nome);
    $statement->bindValue(2, $email);
    $statement->bindValue(3, $senha);
    $sucesso = $statement->execute();

    if ($sucesso === false) {
        header('Location: /index.php?sucesso=0');
        exit;
    } else {
        header('Location: /index.php?sucesso=1');
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
    <div class="contenier-cadastro">
        <header class="contenier-cadastro-cabecalho">
            <h1>Cadastro</h1>
        </header>
        <main>
            <section class="contenier-cadastro-sessao">
                <form action="cadastro.php" method="post">
                    <div class="contenier-cadastro-sessao-formulario">
                        <label>Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                    </div>
                    <div class="contenier-cadastro-sessao-formulario">
                        <label>E-mail</label>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>
                    <div class="contenier-cadastro-sessao-formulario">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" placeholder="********" required>
                    </div>
                    <div class="contenier-cadastro-sessao-formulario">
                        <label for="senha_confirm">Confirmar senha:</label>
                        <input type="password" id="senha_confirm" name="senha_confirm" placeholder="********" required>
                    </div>
                    <button class="contenier-cadastro-sessao-botaoEntrar"type="submit">Criar conta</button>
                    <a href="cadastro.php" class="contenier-cadastro-sessao-cancelar">Cancelar</a>
                </form>
            </section>
        </main>

        <footer class="contenier-cadastro-rodape">
            <p>&copy; 2024 - Todos os direitos reservados</p>
        </footer>
    </div>
</body>

</html>