<?php require "cabecalho.php"; ?><h1>
    Atualizar usuario
    <h1>
    <form method = "post" action = "atualizarUsuario.php" enctype="multipart/form-data">
        
        <input placeholder = "id" type = "text" name = "id_cliente">
        <input placeholder = "nome" type = "text" name = "nome">
        <input placeholder = "CPF" type = "number" name = "CPF">
        <input placeholder = "email" type = "text" name = "email">
        <input placeholder = "endereço" type = "text" name = "endereco">
        <input placeholder = "cidade" type = "text" name = "cidade">
        <input placeholder = "uf" type = "text" name = "uf">
       <button type = "submit">Atualizar usuario</button>
    </form>
    
    <?php require "rodape.php"; ?>