<?php

$temperatura = readline("Digite uma temperatura: ");
$unidadeDeMedida = readline("Digite a unidade de medida (C ou F): ");

if ( $unidadeDeMedida == "C" || $unidadeDeMedida == "c") 
    {
    $f = ($temperatura * 9/5) + 32;
    echo "A temperatura em Fehrenheit é: $f";
}   

else 
    {
    $c = ($temperatura - 32) * 5/9;
    echo "A temperatura em Celsius é: $c";
}