<?php

require './Funcionario.php';

$funcionario = new Funcionario("Jubiscreido", "CEO", 1000000);

echo "1 - Aterar cargo" .PHP_EOL;
echo "2 - Alterar salario" .PHP_EOL;
echo "3 - Exibir detalhes" .PHP_EOL;
echo "4 - Sair" .PHP_EOL;

while(true){
    $opcao = readline("Selecione o que quer fazer: ");

    switch($opcao){
        case 1:
            $novoCargo = readline("Digite o novo cargo: ") .PHP_EOL;
            $funcionario->alterarCargo((string)$novoCargo); 
            break;

        case 2:
            $novoSalario = readline("Dgite o novo salario: ") .PHP_EOL;
            $funcionario->alterarSalario((int)$novoSalario);
            break;
        
        case 3:
            echo $funcionario->exibirDetalhes() .PHP_EOL;
            break;
        
        case 4:
            echo "Saindo." .PHP_EOL;
            echo "Saindo.." .PHP_EOL;
            echo "Saindo..." .PHP_EOL;
            echo "" .PHP_EOL;
            exit();
        
        default:
            echo "Opçao invalida" .PHP_EOL;
    }
}
