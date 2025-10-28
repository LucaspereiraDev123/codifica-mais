<?php

// XSS (Cross-Site Scripting), que foi um dos conceitos que aprendemos na aula. O XSS é uma técnica de ataque que permite que um invasor insira scripts maliciosos em páginas web, e é essencial que você sempre valide e sanitize as entradas do usuário para proteger suas aplicações.

# código omitido

var_dump($filme['nome']);
var_dump(strpos($filme['nome'], ':'));


# código omitido

var_dump(substr($filme['nome'], 0));


# código omitido

require "funcoes.php";

# código omitido

echo json_encode($filme);

# código omitido

var_dump(json_decode('{"nome":"Thor: Ragnarok", "ano":2021, "nota":7.8, "genero":"super-her\u00f3i"}'));

# código omitido

file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);
//Repare que é uma linha de código bem simples. O primeiro parâmetro da função file_put_contents() é o caminho do arquivo, que no nosso caso é o __DIR__ (o diretório atual do arquivo screen-match.php), concatenando com a string '/filme.json'. Ou seja, no diretório atual, o arquivo a ser gravado se chama filme.json. E o conteúdo que vamos escrever é o segundo parâmetro: o valor da variável filmeComoStringJson.

# código omitido

$conteudoArquivoFilme = file_get_contents($caminhoArquivo);

//Temos o conteúdo desse arquivo de filme. Agora queremos transformá-lo de JSON, que é o que temos, para um array associativo. Então, vamos criar uma variável filme, que será igual a json_decode($conteudoArquivoFilme, true) (com true informando que queremos um array associativo):

$filme = json_decode($conteudoArquivoFilme, true);

# código omitido
