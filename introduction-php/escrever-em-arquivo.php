<?php

$arquivo = fopen('produtos.csv', 'a+'); // mode leitura e escrita
fwrite($arquivo, 'Suporte para notebook' . PHP_EOL);
fwrite($arquivo, 'Teclado e mouse sem fio' . PHP_EOL);
fwrite($arquivo, 'HD externo' . PHP_EOL);

fclose($arquivo);