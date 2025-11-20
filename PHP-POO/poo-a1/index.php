<?php

require './ContaBancaria.php';

$conta = new ContaBancaria(123456, 'Lucas', 100);

echo "1-Depositar" .PHP_EOL;
echo "2-Sacar" .PHP_EOL;
echo "3-Exbir Saldo" .PHP_EOL;
echo "4-Sair" .PHP_EOL;


while(true){
    $opcao = readline("Digite o que você fazer: ");

    switch($opcao){
        case 1:
            $valor = readline("Valor para depositar: ");
            $conta->depositar((int)$valor);
            break;
        
        case 2: 
            $valor = readline("Valor para sacar: ");
            $conta->sacar((int)$valor);
            break;
        
        case 3:
            $conta->exibirSaldo();
            echo "" .PHP_EOL;
            break;
        
        case 4:
            echo "Saindo." .PHP_EOL;
            echo "Saindo.." .PHP_EOL;
            echo "Saindo..." .PHP_EOL;
            echo "" .PHP_EOL;
            exit();
        
        default:
            echo "Opção Invalida, tente novamente";
            echo "" .PHP_EOL;
    }

}







