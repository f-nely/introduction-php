<?php

include 'header.php';
include 'menu.php';
include 'acoes.php';

$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {
    home();
} elseif ($url === '/login') {
    login();
} elseif ($url === '/cadastro') {
    cadastro();
} elseif ($url === '/listar') {
    listar();
} else {
    pageNotFound();
}

include 'footer.php';
