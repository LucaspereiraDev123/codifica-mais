<?php
//--------------------------------------------------------------------------
//Meu estoque
$estoque = [
    [
        'codigo' => 1,
        'nome' => 'Camisa Polo',
        'tamanho' => 'P',
        'cor' => 'Vermelho',
        'quantidade' => 60
    ],
    [
        'codigo' => 2,
        'nome' => 'Camisa Regata',
        'tamanho' => 'P',
        'cor' => 'Azul',
        'quantidade' => 40
    ],
];
//--------------------------------------------------------------------------


//--------------------------------------------------------------------------
//Minhas funções
function exibirMenu()
{
    echo "" .PHP_EOL;
    echo "MENU" . PHP_EOL;
    echo "1- Adicionar um produto" .PHP_EOL;
    echo "2- Remover um produto" .PHP_EOL;
    echo "3- Verificar o produto no estoque" .PHP_EOL;
    echo "4- Listar o estoque" .PHP_EOL;
    echo "5- Sair" .PHP_EOL;
    echo "" .PHP_EOL;   
}

function adicionarProduto(&$estoque, $codigo, $nomeProduto, $tamanho, $cor,
$quantidade)
{
    $produto = [
        'codigo' => $codigo,
        'nome' => $nomeProduto,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => $quantidade
    ];
    //aqui eu estou adicionado a variavel de array dentro da variavel estoque
    $estoque[] = $produto;
    //var_dump($estoque);
    return $estoque;
}

function venderProduto(&$estoque, $codigo, $quantidade)
{
    foreach ($estoque as $posicao => $produto) {
        if ($produto['codigo'] == $codigo) {

            if ($produto['quantidade'] < $quantidade) {
                echo "Quantidade indisponível no estoque." . PHP_EOL;
                return;
            }

            // Subtrai a quantidade
            $estoque[$posicao]['quantidade'] = $estoque[$posicao]['quantidade'] - $quantidade;
            

            // Remove o produto se zerar
            if ($estoque[$posicao]['quantidade'] == 0) {
                unset($estoque[$posicao]);
                echo "Produto esgotado e removido do estoque." . PHP_EOL;
            } else {
                echo "Produto vendido com sucesso!" . PHP_EOL;
            }

            return;
        }
    }

    echo "Produto não encontrado no estoque." . PHP_EOL;
}

//A verificação esta sendo feita através do codigo do produto
function verificarEstoque($estoque, $codigoEscolhido)
{
        foreach($estoque as $produto){
            if ($codigoEscolhido == $produto['codigo']){
                $resultado = $produto;
            } 
        }
        
        if(!empty($resultado)){
            return "O produto " . $resultado['nome'] . " está disponível no estoque";
        } else {
            return "Produto não encontrado";
        }

}

function listarEstoque($estoque)
{
    foreach ($estoque as $produto){
        echo"=============================" .PHP_EOL;
        echo "Codigo: " .  $produto['codigo'] .PHP_EOL; 
        echo "Nome: " . $produto['nome'] .PHP_EOL; 
        echo "Tamanho: " . $produto['tamanho'] .PHP_EOL; 
        echo "Cor: " . $produto['cor'] .PHP_EOL; 
        echo "Quantidade: " . $produto['quantidade'] .PHP_EOL; 
        echo"=============================" .PHP_EOL;
    }
    //return $produto .PHP_EOL;
}
//--------------------------------------------------------------------------

//--------------------------------------------------------------------------
// Execução da lógica

$escolhaMenu = 0;
while($escolhaMenu != 5) {
    exibirMenu();
    $escolhaMenu = readline("Escolha uma opção: ") .PHP_EOL;
    echo "" .PHP_EOL;
    
    switch($escolhaMenu){
        case 1:
            echo "Digite o codigo do produto: " .PHP_EOL;
            $codigo = readline("") .PHP_EOL;

            echo "Digite o nome do produto: " .PHP_EOL;
            $nomeProduto = readline("") .PHP_EOL;  

            echo "Digite o tamanho do produto: " .PHP_EOL;
            $tamanho = readline("") .PHP_EOL;

            echo "Digite a cor do produto: " .PHP_EOL;
            $cor = readline("") .PHP_EOL;

            echo "Digite a quantidade do produto: " .PHP_EOL;
            $quantidade = readline("") .PHP_EOL;

            adicionarProduto($estoque, $codigo, $nomeProduto, $tamanho, $cor, $quantidade);
            break;

        case 2:
            echo "Digite o codigo do produto: " .PHP_EOL;
            $codigo = readline("") .PHP_EOL;

            echo "Digite a quantidade do produto: " .PHP_EOL;
            $quantidade = readline("") .PHP_EOL;

            PHP_EOL;

            venderProduto($estoque, $codigo, $quantidade);
            break;

        case 3:
            $codigoEscolhido = readline("Digite o codigo do produto :") .PHP_EOL;
            $resultado = verificarEstoque($estoque, $codigoEscolhido);
            echo $resultado . PHP_EOL;
        break;
        
        case 4:
            echo "-------Seu estoque---------" .PHP_EOL;
            listarEstoque($estoque) . PHP_EOL;
            echo "---------------------------" .PHP_EOL;
            break;
        
        case 5:
            exit;

        default:
            echo "Opção invalida, redirecionado para o menu principal" .PHP_EOL;
            break;  
    }
}
//--------------------------------------------------------------------------
