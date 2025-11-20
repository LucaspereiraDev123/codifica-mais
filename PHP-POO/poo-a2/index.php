<?php

require './Produto.php';

$produto = new Produto("Camisa", 130, 10);

echo "1- Aterar preço" .PHP_EOL;
echo "2 - Alterar quantidade" .PHP_EOL;
echo "3 - Exibir detalhes" .PHP_EOL;
echo "4 - Sair" .PHP_EOL;

while(true){
    $opcao = readline("Selecione o que quer fazer: ");

    switch($opcao){
        case 1:
            $novoPreco = readline("Digite o novo Preço: ");
            $produto->alterarPreco((int)$novoPreco);
            break;

        case 2:
            $quantidade = readline("Quantidade para alterar: ");
            $produto->alterarQuantidade((int)$quantidade);
            break;

        case 3:
            echo $produto->exibirDetalhes() .PHP_EOL;
            break;
        
        case 4:
            echo "Saindo." .PHP_EOL;
            echo "Saindo.." .PHP_EOL;
            echo "Saindo..." .PHP_EOL;
            echo "" .PHP_EOL;
            exit();

        default:
            echo "Opção invalidada" .PHP_EOL;
            
    }
}