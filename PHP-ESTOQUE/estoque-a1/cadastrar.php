<?php

require 'conexao-db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $codigo = $_POST['codigo'];
    $nome = trim($_POST['nome']);
    $quantidade = $_POST['quantidade'];
    $volume = $_POST['volume'];
    $fornecedor = $_POST['fornecedor'];
    $valor = $_POST['valor'];
    $image = $_FILES['imagem'];

    if (empty($codigo) || $codigo <= 0) {
        $arquivo = fopen("erros-a1/erros.log", "a");
        fwrite($arquivo, "[" . date("d/m/Y H:i:s") . "] Codigo: $codigo invalido\n");
        fclose($arquivo);
        header('location: cadastrar.php');
        exit();
    }

    if (empty($nome)) {
        $arquivo = fopen("erros-a1/erros.log", "a");
        fwrite($arquivo, "[" . date("d/m/Y H:i:s") . "] Nome: $nome invalido\n");
        fclose($arquivo);
        header('location: cadastrar.php');
        exit();
    }

    if ($quantidade < 0) {
        $arquivo = fopen("erros-a1/erros.log" ,"a");
        fwrite($arquivo, "[" . date("d/m/Y H:i:s") . "] Quantidade: $quantidade invalida\n");
        fclose($arquivo);
        header('Location: cadastrar.php');
        exit();
    }

    if ($volume < 0) {
        $arquivo = fopen("erros-a1/erros.log" ,"a");
        fwrite($arquivo, "[" . date("d/m/Y H:i:s") . "] Volume: $volume invalido\n");
        fclose($arquivo);
        header('Location: cadastrar.php');
        exit();
    }

    if ($valor <= 0) {
        $arquivo = fopen("erros-a1/erros.log" ,"a");
        fwrite($arquivo, "[" . date("d/m/Y H:i:s") . "] Valor: $valor invalido\n");
        fclose($arquivo);
        header('Location: cadastrar.php');
        exit();
    }

    $sql = "INSERT INTO produtos (codigo, nome, quantidade, volume, fornecedor, valor, image_url) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $codigo);
    $statement->bindValue(2, $nome);
    $statement->bindValue(3, $quantidade, PDO::PARAM_INT);
    $statement->bindValue(4, $volume, PDO::PARAM_INT);
    $statement->bindValue(5, $fornecedor);
    $statement->bindValue(6, $valor);
    $statement->bindValue(7, $image);

    $statement->execute();

    header('Location: cadastrar.php');
    exit;
}

?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="imagens/delta.png" type="image/png">
    <title>Delta Estoque</title>
</head>

<body>
    <header>
        <div class="cabecalho">
            <div class="cabecalho-titulo">
                <p>CADASTRAR</p>
            </div>
            <div class="cabecalho-logo">
                <a href="pagina-inicial.php">
                    <img class="cabecalho-logo-imagem" src="imagens/logo.png" alt="Página Inicial" ;>
                </a>
            </div>
        </div>
    </header>

    <main>
        <div class="principal">
            <form class="principal-formulario" action="cadastrar.php" method="post" enctype="multipart/form-data">
                <div class="principal-formulario-campo">
                    <label for="codigo">Código</label>
                    <input type="number" id="codigo" name="codigo" placeholder="Ex: 001" min="0" required>
                </div>
                <div class="principal-formulario-campo">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Camisa do bob esponja" required>
                </div>
                <script src="erros-a1/script.js"></script>
                <div class="principal-formulario-campo">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" id="quantidade" name="quantidade" placeholder="Ex: 10" min="0" required>
                </div>
                <div class="principal-formulario-campo">
                    <label for="volume">Volume</label>
                    <input type="number" id="volume" name="volume" placeholder="Ex: 20" min="1" required>
                </div>
                <div class="principal-formulario-campo">
                    <label for="fornecedor">Fornecedor</label>
                    <input type="text" id="fornecedor" name="fornecedor" placeholder="Ex: Lucas das camisas" required>
                </div>
                <div class="principal-formulario-campo">
                    <label for="valor">Valor (R$)</label>
                    <input type="number" id="valor" name="valor" min="1" placeholder="100" required>
                </div>
                <input type="file" name=imagem accept="image/*">
                <button class="principal-formulario-botao" type="submit"></button>
            </form>
        </div>
    </main>

    <footer>
        <div class="rodape">
            <p>@2026</p>
        </div>
    </footer>
</body>

</html>