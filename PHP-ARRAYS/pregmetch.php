<?php

$telefone = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 99999 - 9999'];

foreach ($telefone as $telefone){
    $telefoneValido = preg_match(
        '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$', 
        $telefone,
        $correspondencia

    );
}
//verificação de string, verifica se a string passada como parametro esta condizendo com a expressão
//^ = inicio da string; $ = final da string
//chamada de expressão regular

preg_replace(
    '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$',
    '(xx) \2',
    $telefone
) .PHP_EOL;

//é uma função que altera uma parte da string atraves da expressão regular
//esta substituindo por (xx) o ddd do numero
//tenho que indicar onde vou alterar, no caso $telefone

$dataTransformada = preg_replace('/^([0-9]{4})-([0-9]{2})-([0-9]{2})', '\3/\2/\1', $data);
//funcao sem variavel defina apenas para mostrar como altarar um formate de data de 2022-06-08 para 08-06-2022

