<?php

$a1 = [
    'nome' => 'Diana',
    'email' => 'dianaarnos@email.com', 
    'telefone' => '85 9 8889-0000',
    'notas' => [
        9,
        8.9,
        7.5,
        6
    ]
];

$a2 = [
    'nome' => 'Tailor',
    'email' => 'tailor@email.com', 
    'telefone' => '45 9 8889-0000',
    'notas' => [
        9,
        8.9,
        7.5,
        6
    ]
];

$alunos = [
    $a1,
    $a2,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($alunos as $aluno) {
                    echo '<tr>';
                        echo '<td>' . $aluno['nome'] . '</td>';
                        echo '<td>' . $aluno['email'] . '</td>';
                        echo '<td>' . $aluno['telefone'] . '</td>';
                    echo '<tr>';
                }
            ?>
        </tbody>
    </table>
</div>