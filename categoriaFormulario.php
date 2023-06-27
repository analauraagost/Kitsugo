<?php require "cabecalho.php"; ?>
<div class="principal">
   <h1>Cadastrar Nova Categoria<h1>
   <form method = "post" action = "categoriaInserir.php" enctype="multipart/form-data">
      <input placeholder = "Categoria" type = "text" name = "categoria">
      <button type = "submit">Cadastrar categoria</button>
   </form>
</div>
<?php require "rodape.php"; ?>