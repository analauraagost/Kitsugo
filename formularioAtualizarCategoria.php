<?php require "cabecalho.php"; ?><h1>
    Atualizar categoria
    <h1>
    <form method = "post" action = "atualizarCategoria.php" enctype="multipart/form-data">
       <input placeholder = "ID" type = "text" name = "id_categoria">
       <input placeholder = "categoria" type = "text" name = "categoria">
       <button type = "submit">Cadastrar categoria</button>
    </form>
    
    <?php require "rodape.php"; ?>