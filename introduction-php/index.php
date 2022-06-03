<?php

// echo date('d/m/Y H:i');
include 'header.php';

$url = $_SERVER['REQUEST_URI'];

if ($url === '/introduction-php/') {
    // echo '<h1>Página Inicial</h1>';
    include 'home.php';
} elseif ($url == '/introduction-php/login') {
    // echo '<h1>Página de Login</h1>';
    include 'login.php';
} elseif ($url === '/introduction-php/cadastro') {
    echo '<h1>Página de Cadastro</h1>';
} else {
    echo '<h1>Página não encontrada</h1>';
}

include 'footer.php';