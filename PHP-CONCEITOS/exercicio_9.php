<?php

echo "Ditgite um numero: ";
$numero = trim(fgets(STDIN));

echo "Digite outro numero: ";
$numero2 = trim(fgets(STDIN));

if ($numero > $numero2) {
    echo "O número $numero é maior que $numero2.";
} elseif ($numero < $numero2) {
    echo "O número $numero2 é maior que $numero.";
} else {
    echo "Os dois números são iguais.";
}

?>