<?php

//require_once __DIR__ . '/ContaBancaria.php';
require_once __DIR__ . '/ContaCorrente.php';
require_once __DIR__ . '/ContaPoupanca.php';


$contaCorrente = new ContaCorrente( '' ,'Lucas', 200);
$contaPoupanca = new ContaPoupanca( '' ,'Tiffany', 400);

$contaCorrente->exibirSaldo();
$contaPoupanca->exibirSaldo();

$contaPoupanca->depositar(100);
$contaPoupanca->sacar(50);

$contaCorrente->sacar(50);
$contaCorrente->exibirSaldo();

$contaCorrente->transferirDinheiro($contaPoupanca, 40);

echo $contaPoupanca->getPorcentagemRendimento() . PHP_EOL;
$contaPoupanca->setPorcentagemRendimento(0.10);
echo $contaPoupanca->getPorcentagemRendimento() . PHP_EOL;
$contaPoupanca->exibirSaldo();

$contaPoupanca->aplicarRendimento();
$contaPoupanca->exibirSaldo();