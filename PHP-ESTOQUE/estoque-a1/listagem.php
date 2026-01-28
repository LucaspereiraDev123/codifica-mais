<?php

require 'conexao-db.php';

// Pesquisa (usando método GET: ?nomeDoProduto=termo)
$nomeDoProduto = '';
//preciso definir pois quando eu abrir a pagina, ele vai exibir tudo por cair na outra condição
if (isset($_GET['nomeDoProduto'])) {
    //o trim esta removendo os espaços vazios digitados
    $nomeDoProduto = trim($_GET['nomeDoProduto']);
}

//se $nomeDoProduto não for vazio('')
if ($nomeDoProduto !== '') {
    $sql = "SELECT codigo, nome, quantidade, volume, fornecedor, valor, image_url FROM produtos
            WHERE codigo LIKE :like OR nome LIKE :like OR fornecedor LIKE :like";

    //Prepara o SQL com segurança, evita SQL Injection
    $statement = $pdo->prepare($sql);

    $like = '%' . $nomeDoProduto . '%';
    $statement->bindValue(':like', $like, PDO::PARAM_STR);
    $statement->execute();
    $produtos = $statement->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Sem pesquisa: lista todos
    $sql = "SELECT codigo, nome, quantidade, volume, fornecedor, valor, image_url FROM produtos";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $produtos = $statement->fetchAll(PDO::FETCH_ASSOC);
}

?><!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="listagem.css">
    <link rel="icon" href="imagens/delta.png" type="image/png">
    <title>Delta Estoque</title>
</head>

<body>
    <header>
        <div class="cabecalho">
            <form method="get" action="listagem.php" class="cabecalho-formulario">
                <div class="cabecalho-formulario-pesquisar">
                    <input type="text" name="nomeDoProduto" placeholder="Pesquisar produto..."
                        value="<?= isset($nomeDoProduto) ? htmlspecialchars($nomeDoProduto) : '' ?>">
                    <button type="submit" class="cabecalho-formulario-pesquisar-botaoBuscar"
                        aria-label="Buscar">
                        <img src="imagens/lupa.png" alt="Buscar">
                    </button>
                </div>
            </form>
            <div class="cabecalho-titulo">
                <p>LISTAGEM</p>
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
            <?php if (empty($produtos)): ?>
                <p class="principal-vazio">Nenhum produto encontrado.</p>
            <?php endif; ?>
            <?php foreach ($produtos as $produto): ?>
                <div class="principal-card-produto">
                    <a href="editar.php?codigo=<?= $produto['codigo'] ?>">
                        <div class="principal-card-produto-info">
                            <p><strong>Código:</strong> <?= $produto['codigo'] ?></p>
                            <p><strong>Nome:</strong> <?= $produto['nome'] ?></p>
                            <p><strong>Quantidade:</strong> <?= $produto['quantidade'] ?></p>
                            <p><strong>Volume:</strong> <?= $produto['volume'] ?></p>
                            <p><strong>Fornecedor:</strong> <?= $produto['fornecedor'] ?></p>
                            <p><strong>Valor:</strong> R$ <?= number_format($produto['valor'], 2, ',', '.') ?></p>
                        </div>

                        <div class="principal-card-produto-imagem">
                            <?php if (!empty($produto['image_url'])): ?>
                                <img src="imagens/<?= htmlspecialchars($produto['image_url']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>">
                            <?php else: ?>
                                <div class="placeholder" aria-hidden="true"></div>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
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