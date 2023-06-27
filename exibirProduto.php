<?php require "cabecalho.php"; ?>
      <?php  
         $id_produto = $_GET['id_produto'];
         
         
         require "conexao.php";
         
         $comando = "SELECT * FROM produtos WHERE id_produto = $id_produto";
         $resultado = mysqli_query($conexao, $comando);
         
         if (mysqli_num_rows($resultado) == 0) {
             echo "Produto não encontrado";
         } else {
             $produto = mysqli_fetch_assoc($resultado);
             echo "<h1 id = texto>{$produto['titulo']}</h1 id = texto>";
             echo "<p>Descrição: {$produto['descricao']}</p>";
             echo "<p>Preço: {$produto['preco']}</p>";
             echo "<p><img src='{$produto['imagem']}'></p>";
         
         }?><?php require "conexao.php";?>
            <a href="formularioAtualizarProduto.html?id_produto=<?php echo $produto['id_produto']; ?>">Editar</a>
            <a href="deletarProduto.php?id_produto=<?php echo $produto['id_produto']; ?>">Deletar</a>

<?php mysqli_close($conexao); ?>

<?php require "rodape.php"; ?>