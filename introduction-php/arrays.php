<?php

$nomes = [
    'Alessandro', 
    'Diana', 
    'Taylor', 
    'Anne',
];

// var_dump($nome);
echo $nomes[1];

$fruits = [
    'Laranja', // 0
    'Banana', // 1
    'Abacaxi' // 2
];

// adicionando nova fruta no array
$fruits[] = 'Maça'; // 3
$fruits[7] = 'Morango'; // 7
$fruits[10] = 'Melancia'; // 10
$fruits[] = 'Tangerina';
$fruits[] = 'Uva';
var_dump($fruits);

?>

<ul>
    <?php 
        foreach ($fruits as $fruit) {
            echo "<li>{$fruit}</li>";
        }
    ?>
</ul>