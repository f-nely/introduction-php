<?php

function login(): void
{
    include 'login.php';
}

function cadastro(): void
{
    // var_dump($_POST);
    if ($_POST) {
        $nome = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['phone'];
    
        $arquivo = fopen('contatos.csv', 'a+');
        fwrite($arquivo, "{$nome};{$email};{$telefone}" . PHP_EOL);
        
        fclose($arquivo);
        echo 'Pronto, Cadastro realizado!';
    }

    include 'cadastro.php';
}

function home(): void
{
    include 'home.php';
}

function listar(): void
{
    $contatos = file('contatos.csv');
    include 'listar.php';
}

function pageNotFound(): void
{
    include '404.php';
}

function relatorio(): void
{
    include 'relatorio.php';
}