<?php

do {
    echo "Digite um número A: ";
    $numero = (int) trim(fgets(STDIN));

    echo "Digite um número B: ";
    $numero2 = (int) trim(fgets(STDIN));

    if ($numero > $numero2) {
        echo "⚠️ O valor de A deve ser menor ou igual a B. Tente novamente.\n\n";
    }

} while ($numero > $numero2);

$soma = 0;
for ($i = $numero + 1; $i <= $numero2; $i++) {
    if ($i % 2 != 0) { 
        $soma += $i;
    }
}

echo "✅ A soma dos números ímpares entre $numero e $numero2 é: $soma\n";

?>