<?php

$anoNascimento = '2001';

$idade = 2025 - $anoNascimento;

echo $idade;
//o PHP entente a string como numerica por apenas haver numero nela.
//Espaços vazios antes e depois são ignorados.
//Espaços entre os numero da erro.
//Letras antes ou depois do numero da um aviso, não recomendado.
//Em comparações etntre uma string ou um numero, o PHP vai tentar converter para se igualarem no tipo.