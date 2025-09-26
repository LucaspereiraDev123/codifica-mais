<?php

$valorProduto = readline ("Digite o valor do produto: ");
$valorDesconto = readline ("Digite o valor do desconto: ");

function calculoDesconto($valorProduto, $valorDesconto) {
    $desconto = $valorProduto * ($valorDesconto /100);
    $valorFinal = $valorProduto - $desconto;
        return $valorFinal;
}

echo "O valor final com desconto é: " . calculoDesconto($valorProduto, $valorDesconto);