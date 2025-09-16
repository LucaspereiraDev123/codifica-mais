<?php

$numerosDigitados = [];

do {

    echo "Digite um numero (aperte -1 para sair do loop):";
    $numero = (int)trim(fgets(STDIN));

    if ($numero != -1) {
        $numerosDigitados[] = $numero;
    } 

}   while ($numero != -1);

        if (!empty($numerosDigitados)) { 
        $maior = max($numerosDigitados);
        $menor = min($numerosDigitados);

        echo "Numero maior digitado: " . $maior . PHP_EOL;
        echo "Numero menor digitado: " . $menor . PHP_EOL;
    } else {
        echo "Nenhum número foi digitado!" . PHP_EOL;
    }



?>



    

