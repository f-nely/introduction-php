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

        $mensagem = 'Pronto, Cadastro realizado!';

        include 'mensagem.php';
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

function excluir(): void
{
    $id = $_GET['id'];
    
    $contatos = file('contatos.csv'); // buscar todos os contatos
    unset($contatos[$id]);

    unlink('contatos.csv');

    $arquivo = fopen('contatos.csv', 'a+');

    foreach ($contatos as $cadaContato) {
        fwrite($arquivo, $cadaContato);
    }

    $mensagem = 'Pronto, contato excluido!';

    include 'mensagem.php';
}

function editar(): void
{
    $id = $_GET['id'];

    $contatos = file('contatos.csv');

    if ($_POST) {
        $nome = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['phone'];

        $contatos[$id] = "{$nome}; {$email}; {$telefone}" . PHP_EOL;

        unlink('contatos.csv');
        
        $arquivo = fopen('contatos.csv', 'a+');

        foreach ($contatos as $cadaContato) {
            fwrite($arquivo, $cadaContato);
        }

        fclose($arquivo);

        $mensagem = 'Pronto, contato atualizado!';

        include 'mensagem.php';
    }

    $dados = explode(';', $contatos[$id]);

    include 'editar.php';
}