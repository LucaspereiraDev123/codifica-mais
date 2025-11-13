<?php

require 'vendor/autoload.php';

//Biblioteca de manipulação de datas
use Carbon\Carbon;

//Definição do timezone
date_default_timezone_set("America/Sao_Paulo");

//data e hora de agora
$agora = Carbon::now();
echo "Agora são: " . $agora . PHP_EOL;
echo "" .PHP_EOL;

//Estou gravando dentro desta variavel a data de nascimento atraves do readline
$dataNascimento = readline("Que dia você nasceu(Y-m-d) ?: ");
$dataNascimento = Carbon::parse($dataNascimento);

//quantos dias faltam para o meu proximo aniversario ?
$aniversario = readline("Que dia você faz aniversario(Y-m-d) ?: ");
$aniversario = Carbon::parse($aniversario);
echo "" .PHP_EOL;
/*Estou calculando a diferença de dias entre a data de hoje com o proximo aniversario recebido no 
readline*/
$diasProximoAniversario = $agora->diffInDays($aniversario);
echo "Faltam " . (int)$diasProximoAniversario . " dias para o meu próximo aniversário \o/ !!!" . PHP_EOL;


//minha idade
$idade = $dataNascimento->diffInYears($agora);
echo "Minha idade é: " . (int)$idade . PHP_EOL;

//quanto dias de vida eu tenho ?
$diasDeVida = $dataNascimento->diffInDays($agora);
echo "Tenho " . (int)$diasDeVida . " dias de vida!" . PHP_EOL;

//que dia da semana eu nasci ?
//Aqui to corvertendo a data que recebi em dataNascimento para o formato Carbon
//Estou utilizando a estrutura do locale para encontrar o dia da semana que nasci
echo "Eu nasci na " . Carbon::parse($dataNascimento)->locale('pt_BR')->dayName;







