<?php

echo "Digite um número: ";
$numero = trim(fgets(STDIN));

echo "Digite outro número: ";
$numero2 = trim(fgets(STDIN));  

$soma = $numero + $numero2;
echo "A soma dos dois números é: $soma";

?>