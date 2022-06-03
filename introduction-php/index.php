<?php

include 'header.php';
include 'menu.php';

$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {
    include 'home.php';
} elseif ($url === '/login') {
    include 'login.php';
} elseif ($url === '/cadastro') {
    include 'cadastro.php';
} else {
    include '404.php';
}

include 'footer.php';
