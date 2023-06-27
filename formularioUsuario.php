<?php require "cabecalho.php"; ?><form method = "post" action = "usuarioInserir.php" enctype="multipart/form-data">
<input placeholder = "nome" type = "text" name = "nome">
<input placeholder = "CPF" type = "number" name = "CPF">
<input placeholder = "email" type = "text" name = "email">
<input placeholder = "endereço" type = "text" name = "endereco">
<input placeholder = "cidade" type = "text" name = "cidade">
<input placeholder = "uf" type = "text" name = "uf">
<button type = "submit">Cadastrar usuário</button>
</form>

<?php require "rodape.php"; ?>