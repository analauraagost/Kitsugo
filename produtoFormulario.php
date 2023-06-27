<?php require "cabecalho.php"; ?>
<div class="principal">
   <h1>Cadastrar Novo Produto<h1>
   <form method = "post" action = "produtoInserir.php" enctype="multipart/form-data">
      <input placeholder = "Título" type = "text" name = "titulo">
      <input placeholder = "Descrição" type = "text" name = "descricao">
      <input placeholder = "Preço" type = "text" name = "preco">
      Selecione uma imagem: <input type = "file" name = "arquivo">
      <button type = "submit">Cadastrar produto</button>
   </form>
   <div class = "rodape">
      <div class = "rodape-pagamento">
         <img src = "imagens/pagamento.png" width = "900px" height="200px">
      </div>
      <div class = "rodape-certificado">
         <img id = "certificado" src = "imagens/certificado.jpg" width = "150px" height="80px">
      </div>
   </div>
</div>
<?php require "rodape.php";?>