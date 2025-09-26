<?php


$intensChurrasco = ['Picanha','Alcatra','Carvão','Refrigerante'];
$precoItens =[100, 80, 50, 20];

$quantidadePessoas = readline("Quantas pessoas vão para esse churrasco ?: ");

$valorTotalItens = array_sum($precoItens);

function valorDeCadaPessoa ($valorTotalItens,$quantidadePessoas) 
{
    $resultado = $valorTotalItens / $quantidadePessoas;
    return $resultado;
}

for($i = 0; $i < $quantidadePessoas; $i++) {
    echo "Pessoa: " . ($i+1) . " vai pagar R$ " . valorDeCadaPessoa ($valorTotalItens,$quantidadePessoas) .PHP_EOL;
}





