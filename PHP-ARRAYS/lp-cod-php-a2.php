<?php

$largura = readline("Digite a largura do triângulo: ");
$altura = readline("Digite a altura do retângulo: ");

$area = $largura * $altura;
$perimetro = 2 * ($largura + $altura);

echo "A área do retângulo é: $area" . PHP_EOL;
echo "O perímetro do retângulo é: $perimetro";
