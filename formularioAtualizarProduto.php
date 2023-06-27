<?php require "cabecalho.php"; ?><h1>
Atualizar Produto
<h1>
<form method = "post" action = "atualizarProduto.php" enctype="multipart/form-data">
   <input placeholder = "ID" type = "text" name = "id_produto">
   <input placeholder = "Título" type = "text" name = "titulo">
   <input placeholder = "Descrição" type = "text" name = "descricao">
   <input placeholder = "Preço" type = "text" name = "preco">
   Selecione uma imagem: <input type = "file" name = "arquivo">
   <button type = "submit">Cadastrar produto</button>
</form>

<?php require "rodape.php"; ?>