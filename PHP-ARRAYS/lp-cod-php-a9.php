<?php

$estoque = [
    ["Bermuda", 59.9, 6],
    ["Camisa", 89.9, 5],
    ["Sapato", 179.9, 10],
    ["Calça", 99.9, 7]
];

$totalValor = 0; // meu contador

foreach ($estoque as $produto){
    $preco = $produto[1]; //aqui eu chamo o valor unitario do produto
    $quantidade = $produto[2]; //aqui eu chamo a quantidade
    $totalValor += $preco * $quantidade; //aqui eu multiplico incrementando no meu contador
}

echo "O valor total em estoque é: " . number_format($totalValor, 2, ',', '.'); 