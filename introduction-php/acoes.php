<?php

function login(): void
{
    include 'login.php';
}

function cadastro(): void
{
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