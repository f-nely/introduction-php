<?php

declare(strict_types=1);

function multiplicacao(int $n1, int $n2): int
{
    return $n1 * $n2;
}

echo multiplicacao(6, 3);

echo '<br>';

function gretting(string $name): string
{
    return "Good evening, {$name}!";
}

echo gretting('Taylor');

echo '<br>';

function showNames(array $names): void
{
    foreach ($names as $name) {
        echo "Name: {$name} <br>";
    }
}

showNames(['Elton', 'Diana', 'Arthur']);