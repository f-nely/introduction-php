<form action="" method="post">
    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">

    <button>Enviar</button>
</form>

<?php
    if (isset($_POST)) {
        echo $_POST['nome'];
    }
?>