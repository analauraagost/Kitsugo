<?php require "cabecalho.php"; ?><?php
require "conexao.php";
$comando = "SELECT * FROM categoria";
$resultado = mysqli_query($conexao, $comando);
?>
<h1>categoria</h1>
<div class="categoria">
<?php while ($categoria = mysqli_fetch_assoc($resultado)) : ?>
<div class="rowcategoria">
<div class="col-3">
<div id="prod-prop" class="produto-imagem">
<h1><?php echo $categoria['categoria']; ?>"</h1>
</div>
<p><?=$categoria["categoria"]?> </p>
<td><a href="exibirCategoria.php?id_categoria=<?php echo $categoria['id_categoria']; ?>">Detalhes</a></td>
<td><a href="deletarCategoria.php?id_categoria=<?php echo $categoria['id_categoria']; ?>">Deletar</a></td>
<td><a href="formularioAtualizarCategoria.html?id_categoria=<?php echo $categoria['id_categoria']; ?>">Atualizar</a></td>

</div>
</div>
               
<?php endwhile ?><?php require "rodape.php"; ?>