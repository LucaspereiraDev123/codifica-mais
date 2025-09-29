<?php

$notasAlunos = [
    [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
    [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
    [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
    [5.0, 4.6, 7.8, 9.0, 6.0]  // Aluno 4
];

// Função para calcular a média de um aluno
function calcularMedia($notas) {
    $soma = 0;
    $quantidade = 0;

    foreach ($notas as $nota) {
        $soma += $nota;
        $quantidade++;
    }

    return $soma / $quantidade;
}

// Contadores
$aprovados = 0;
$reprovados = 0;

// Percorrer todos os alunos
foreach ($notasAlunos as $indice => $notas) {
    $media = calcularMedia($notas);
    $resultado = ($media >= 7.0) ? "APROVADO" : "REPROVADO";

    echo "Aluno " . ($indice + 1) . " - Média: " . number_format($media, 2) . " - $resultado" . PHP_EOL;

    if ($media >= 7.0) {
        $aprovados++;
    } else {
        $reprovados++;
    }
}

echo "Total de alunos aprovados: $aprovados" . PHP_EOL;
echo "Total de alunos reprovados: $reprovados" . PHP_EOL;







