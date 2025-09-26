<?php 

$peso = readline("Digite seu peso em kg: ");
$altura = readline("Digite sua altura em metros: ");

function imc($peso,$altura) 
{
	$imc = $peso/($altura * $altura);
	return $imc;

}

$indice = imc($peso,$altura);

if($indice < 18.5) {
	echo "Magreza" .PHP_EOL;
    echo "O resultado do seu IMC é: " . $indice .PHP_EOL;

} elseif ($indice >= 18.5 && $indice <= 24.9){
    echo "Normal" .PHP_EOL;
    echo "O resultado do seu IMC é: " . $indice .PHP_EOL;

} elseif ($indice >= 25 && $indice <= 29.9){
    echo "Sobrepeso" .PHP_EOL;
    echo "O resultado do seu IMC é: " . $indice .PHP_EOL;

} elseif ($indice >= 30 && $indice <= 34.9){
    echo "Obesidade grau 1" .PHP_EOL;
    echo "O resultado do seu IMC é: " . $indice .PHP_EOL;

} elseif ($indice >= 35 && $indice <= 39.9){
    echo "Obesidade grau 2" .PHP_EOL;
    echo "O resultado do seu IMC é: ". $indice .PHP_EOL;

} else {
    echo "Obesidade grau 3" .PHP_EOL;
}

