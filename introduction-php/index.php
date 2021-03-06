<?php

include 'header.php';
include 'menu.php';
include 'acoes.php';

$url = explode('?', $_SERVER['REQUEST_URI']);

match ($url[0]) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => pageNotFound(),
};

include 'footer.php';
