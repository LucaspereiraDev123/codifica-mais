<?php

echo "Digite seu ano em que nasceu: ";
$anoNascimento = trim(fgets(STDIN));

$idadeAtual = 2025 - $anoNascimento;
echo "Sua idade atual é: $idadeAtual anos";

?>