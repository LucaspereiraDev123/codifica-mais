<?php

$valorCompra = readline("Digite o valor da sua compra: ");
$percentualDesconto = 5;

function aplicarDesconto($valorCompra, $percentualDesconto)
{
    $valorDoDesconto = $valorCompra * ($percentualDesconto / 100);
    return $valorCompra - $valorDoDesconto;
}

function calcularDescontoProgressivo($valorCompra)
{
    if($valorCompra < 100){
        return "Sem desconto";

    } elseif ($valorCompra >= 100 && $valorCompra <=500){
        return aplicarDesconto($valorCompra, 10);

    } else {
        return aplicarDesconto($valorCompra, 20);
    }

}   

if ($valorCompra < 100){
    echo calcularDescontoProgressivo($valorCompra) .PHP_EOL;

} else {
    echo "Seu desconto é de: " . calcularDescontoProgressivo($valorCompra) .PHP_EOL;
}



