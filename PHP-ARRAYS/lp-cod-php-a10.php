<?php

$funcionarios = [
    [
        'Nome' => 'Pedro',
        'Salario Base' => 2500,
        'Horas extras' => 10
    ],

    [
        'Nome' => 'Renata',
        'Salario Base' => 3000,
        'Horas extras' => 5
    ],

    [
        'Nome' => 'Sergio',
        'Salario Base' => 2800,
        'Horas extras' => 8
    ],

    [
        'Nome' => 'Vanessa',
        'Salario Base' => 3200,
        'Horas extras' => 12
    ],

    [
        'Nome' => 'Andre',
        'Salario Base' => 1700,
        'Horas extras' => 0
    ]
];

function calcularSalarioTotal($salarioBase, $horasExtras) {
    $valorHoraDoMes = $salarioBase / 160;      // valor da hora normal
    $valorHoraExtra = $valorHoraDoMes * 1.5;   // hora extra vale 1.5x
    $salarioComHoraExtra = $salarioBase + ($horasExtras * $valorHoraExtra);
    return $salarioComHoraExtra;
}


function listarFuncionarios($funcionarios){
    foreach($funcionarios as $colaborador){

        $salarioTotal = calcularSalarioTotal($colaborador['Salario Base'], $colaborador['Horas extras']);
        
        echo "Nome: " . $colaborador['Nome'] . PHP_EOL;
        echo "Salario base: " . $colaborador['Salario Base'] . PHP_EOL;
        echo "Horas extras: " . $colaborador['Horas extras'] . PHP_EOL;
        echo "Salario total: R$ " . number_format($salarioTotal, 2, ',', '.') . PHP_EOL; 
        echo PHP_EOL;
    }
}

//chamo a função que ja executa todas as orientações
listarFuncionarios($funcionarios);