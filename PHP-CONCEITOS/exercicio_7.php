<?php

echo "Digite um número: ";
$numero = trim(fgets(STDIN));

for ($i = 0; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}

?>