<?php

require 'conexao-db.php';

$codigoGet = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT);

$sql = "SELECT * FROM produtos WHERE codigo = :codigo";
$statement = $pdo->prepare($sql);
$statement->execute(['codigo' => $codigoGet]);

$produtos = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $codigo = $_POST['codigo'];
    $nome = trim($_POST['nome']);
    $quantidade = $_POST['quantidade'];
    $volume = $_POST['volume'];
    $fornecedor = $_POST['fornecedor'];
    $valor = $_POST['valor'];
    $image = $_FILES['imagem']['name'];
    $acao = $_POST['acao'];
    
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
        
    if($acao === 'salvar') {
        $sql = "UPDATE produtos SET nome = :nome, quantidade = :quantidade, volume = :volume, fornecedor = :fornecedor, valor= :valor, image_url = :imagem WHERE codigo = :codigo";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':nome', $nome);
        $statement->bindValue(':quantidade', $quantidade, PDO::PARAM_INT);
        $statement->bindValue(':volume', $volume, PDO::PARAM_INT);
        $statement->bindValue(':fornecedor', $fornecedor);
        $statement->bindValue(':valor', $valor);
        $statement->bindValue(':imagem', $image);
        $statement->bindValue(':codigo', $codigo);
    
        $statement->execute();
        
        header('Location: listagem.php');
        exit;

    } 

    if ($acao === 'excluir') {
        $sql = "DELETE FROM produtos WHERE codigo = :codigo";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':codigo', $codigo);
        $statement->execute();

        header('Location: listagem.php');
        exit;
    }
}

?><!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="imagens/delta.png" type="image/png">
    <title>Delta Estoque</title>
</head>

<body>
    <header>
        <div class="cabecalho">
            <div class="cabecalho-titulo">
                <p>EDITAR</p>
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
            <?php foreach ($produtos as $produto): ?>
                <form class="principal-formulario" action="editar.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="codigo" value="<?= $produto['codigo'] ?>">
                    <div class="principal-formulario-campo">
                        <label for="numero">Código</label>
                        <input type="number" id="numero" name="codigo" value="<?= $produto['codigo'] ?>" min="0" required>
                    </div>
                    <div class="principal-formulario-campo">
                        <label for="texto">Nome do Produto</label>
                        <input type="text" name="nome" value="<?= $produto['nome'] ?>" required>
                    </div>
                    <script src="erros-a1/script.js"></script>
                    <div class="principal-formulario-campo">
                        <label for="numero">Quantidade</label>
                        <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>" min="1" required>
                    </div>
                    <div class="principal-formulario-campo">
                        <label for="numero">Volume</label>
                        <input type="number" name="volume" value="<?= $produto['volume'] ?>" min="1" required>
                    </div>
                    <div class="principal-formulario-campo">
                        <label for="numero">Fornecedor</label>
                        <input type="text" name="fornecedor" value="<?= $produto['fornecedor'] ?>" required>
                    </div>
                    <div class="principal-formulario-campo">
                        <label for="numero">Valor (R$)</label>
                        <input type="number" name="valor" value="<?= $produto['valor'] ?>" min="1" requires>
                    </div>
                    <div class="principal-formulario-botao-acoes">
                        <input type="file" name=imagem accept="image/*">
                        <button class="principal-formulario-botao-acoes-salvar" type="submit" name="acao" value="salvar"></button>
                        <button class="principal-formulario-botao-acoes-excluir" type="submit" name="acao" value="excluir"></button>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <div class="rodape">
            <p>@2026</p>
        </div>
    </footer>
</body>

</html>