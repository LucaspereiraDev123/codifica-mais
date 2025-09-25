<?php

$variavel = readline("Digite o valor da sua conta:");
$gorgeta = readline("Digite o valor da gorgeta:");

$gorgetaPorcetagem = $gorgeta / 100;

$gorgetaConta = $variavel * $gorgetaPorcetagem;

$totalConta = $variavel + $gorgetaConta;

echo "O valor total da sua conta + a gorgeta é de: $totalConta";
