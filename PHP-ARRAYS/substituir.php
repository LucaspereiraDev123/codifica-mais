<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

str_replace('poxa' , '****', $texto);
//retorna uma outra string substituindo a palavra poxa pelo ****

$textoDois = 'Texto com qualquer coisa poxa e caramba';

str_replace(['poxa' , 'caramba'] , ['******', '*******'], $textoDois);
//aqui eu passei mais de um termo para ele substituir
//preciso passar na mesma ordem
//tenho que passar ['******', '*******'] se não ele vai excluir o termo que ficou faltando, no caso o 'caramba'

$textoTres = 'Texto com qualquer coisa poxa e caramba';

strtr($textoTres, 'a', '*');
//essa fnção substitui caracteres especificos
//Todo os 'a' da string vão ser substituidos pelo '*'


$textoQuatro = ["hellow" => "hi" ,"hi" => "hello"];
echo strtr("hi all, I said  hello", $textoQuatro) . PHP_EOL;

echo str_replace(['hello', 'hi'] , ['hi', 'hello'], "hello all, I said hellow") .PHP_EOL;
//duas formas de substituir palavras de um string por outras
