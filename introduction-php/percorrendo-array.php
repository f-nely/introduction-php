<?php

$bandas = [
    'Dream theater',
    'Neo Pi Neo',
    'Pearl Jam',
    'Iron Maiden',
    'Nirvana',
    'Oasis',
    'Led Zeppelin'
];

$bandas[2] = 'U2';

echo '<ul>';
// for ($i = 0; $i < count($bandas); $i++) {
//     echo "<li>{$bandas[$i]}</li>";
// }
    foreach ($bandas as $banda) {
        echo "<li>{$banda}</li>";
    }
echo '</ul>';