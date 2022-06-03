<?php

include 'header.php';
include 'menu.php';
include 'acoes.php';

$url = $_SERVER['REQUEST_URI'];

match ($url) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    default => pageNotFound(),
};

include 'footer.php';
