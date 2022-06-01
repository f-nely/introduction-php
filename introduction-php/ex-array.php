<?php

$bandas = [
    ['Dream theater', 5],
    ['Iron Maidem', 10],
    ['Neo Pi Neo', 1],
];

foreach ($bandas as $key => $value) {
    var_dump($value);
}

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Qtd músicas</th>
    </tr>
    <tr>
        <?php
            echo "<td>{$bandas[0][0]}</td>";
            echo "<td>{$bandas[0][1]}</td>";
        ?>
    </tr>
    <tr>
        <?php
            echo "<td>{$bandas[1][0]}</td>";
            echo "<td>{$bandas[1][1]}</td>";
        ?>
    </tr>
    <tr>
        <?php
            echo "<td>{$bandas[2][0]}</td>";
            echo "<td>{$bandas[2][1]}</td>";
        ?>
    </tr>
</table>