<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">

    <title>PHP</title>

    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        input {
            display: block;
            margin: 10px 0;
            padding: 5px 6px;
        }

        button {
            background: #0080FA;
            color: #FFF;
            border: 1px solid #0080FA;
            padding: 7px 10px;
        }

        button:hover {
            background: #FFF;
            color: #0080FA;
            border: 1px solid #0080FA;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Formulário de Cadastro</legend>
            <input type="number" name="number1" id="number1" placeholder="Digite um número">

            <input type="number" name="number2" id="number2" placeholder="Digite outro número">
           
            <button type="submit">Enviar</button>
        </fieldset>

    </form>
</body>
</html>

<?php
    if (isset($_POST)) {
        echo $_POST['number1'] . '+' . $_POST['number2'] . ' = ';
        echo $_POST['number1'] + $_POST['number2'];
        var_dump($_POST);
    }
?>

