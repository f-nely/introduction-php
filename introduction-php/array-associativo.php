<?php

$dados = [
    'nome' => 'Taylor',
    'sobrenome' => 'Otwell',
    'cidade' => 'Littler Rock',
    'idade' => 34,
    'ano_formacao' => 2001,
    'cor_preferida' => 'azul',
];

var_dump($dados);
echo "Nome: {$dados['nome']} <br>";
echo "Cidade: {$dados['cidade']} <br>";

foreach ($dados as $key => $value) {
    echo "{$key}: {$value} <br>";
}

?>

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Cidade</th>
            <th>Idade</th>
            <th>Ano formação</th>
            <th>Cor preferida</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
                foreach ($dados as $key => $value) {
                    echo "<td>{$value}</td>";
                    //echo "{$key}: {$value} <br>";
                }
            ?>
        </tr>
    </tbody>
</table>