<?php

$notasCursoA = [
    10,
    9, 
    9.5,
    7,
];

$notasCursoB = [
    8, 
    9.4,
    5, 
    6,
];

function mediaDeNotas(array $notas): float
{
    // $total = 0;
    // $quantidade = 0;

    // foreach ($notas as $nota) {
    //     $total += $nota;
    //     $quantidade++;
    // }

    // return $total / $quantidade;
    return array_sum($notas) / count($notas);
}

echo mediaDeNotas($notasCursoA);
echo '<br>';
echo mediaDeNotas($notasCursoB);
echo '<br>';

$firstName = 'alessandro';
$lastName = 'FEITOZA';
$name = 'regis dos santos';

echo ucfirst($firstName);
echo '<br>';
echo ucfirst(strtolower($lastName));
echo '<br>';
echo ucwords($name);
echo '<br>';

echo date('d/m/Y H:i:s');
