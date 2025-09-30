<?php


$itensChurrasco = ['Picanha','Alcatra','Carvão','Refrigerante'];
$precoItens =[100, 80, 50, 20];

$quantidadePessoas = readline("Quantas pessoas vão para esse churrasco ?: ");

$valorTotalItens = array_sum($precoItens);

function valorDeCadaPessoa ($valorTotalItens,$quantidadePessoas) 
{
    $resultado = $valorTotalItens / $quantidadePessoas;
    return $resultado;
}

echo "".PHP_EOL;

if($quantidadePessoas <= 1){
    echo "O churrasco foi cancelado, todo mundo furou!";

} elseif ($precoItens[0] > $precoItens[1] && $precoItens[0] > $precoItens[2] && $precoItens[0] > $precoItens[3]){
    for($i = 0; $i < $quantidadePessoas; $i++) {
    echo "Pessoa " . ($i+1) . " vai pagar R$ " . valorDeCadaPessoa ($valorTotalItens,$quantidadePessoas) .PHP_EOL;
}
    echo "O item mais caro é: " .$itensChurrasco[0] .PHP_EOL;
    echo "Ela custa: R$ " . $precoItens[0] .PHP_EOL;

} elseif ($precoItens[1] > $precoItens[0] && $precoItens[1] > $precoItens[2] && $precoItens[1] > $precoItens[3]) {
    for($i = 0; $i < $quantidadePessoas; $i++) {
    echo "Pessoa " . ($i+1) . " vai pagar R$ " . valorDeCadaPessoa ($valorTotalItens,$quantidadePessoas) .PHP_EOL;
}
    echo "O item mais caro é: " .$itensChurrasco[1] .PHP_EOL;
    echo "Ela custa: R$ " . $precoItens[1] .PHP_EOL;


} elseif ($precoItens[2] > $precoItens[0] && $precoItens[2] > $precoItens[1] && $precoItens[2] > $precoItens[3]) {
    for($i = 0; $i < $quantidadePessoas; $i++) {
    echo "Pessoa " . ($i+1) . " vai pagar R$ " . valorDeCadaPessoa ($valorTotalItens,$quantidadePessoas) .PHP_EOL;
}
    echo "O item mais caro é: " .$itensChurrasco[2] .PHP_EOL;
    echo "Ela custa: R$ " . $precoItens[2] .PHP_EOL;


} else {
    for($i = 0; $i < $quantidadePessoas; $i++) {
    echo "Pessoa " . ($i+1) . " vai pagar R$ " . valorDeCadaPessoa ($valorTotalItens,$quantidadePessoas) .PHP_EOL;
}
    echo "O item mais caro é: " .$itensChurrasco[3];
    echo "Ela custa: R$ " . $precoItens[3] .PHP_EOL;
}

echo "" .PHP_EOL;





