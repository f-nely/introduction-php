<h1>Editar Cadastro</h1>
<hr>
<form action="" method="POST">
    <input type="text" name="name" id="name" value="<?php echo $dados[0]?>" placeholder="Seu nome" class="form-control mt-2">

    <input type="email" name="email" id="email" value="<?php echo $dados[1]?>" placeholder="Seu email" class="form-control mt-2">

    <input type="tel" name="phone" id="phone" value="<?php echo $dados[2]?>" placeholder="Seu telefone" class="form-control mt-2">

    <button class="btn btn-primary mt-3">Enviar</button>
</form>