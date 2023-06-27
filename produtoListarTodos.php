<?php require "cabecalho.php"; ?><?php
require "conexao.php";
$comando = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $comando);
?>
<h1>produto</h1>
<div class="produto">
<?php while ($produto = mysqli_fetch_assoc($resultado)) : ?>
<div class="rowproduto">
<div class="col-3">
<div id="prod-prop" class="produto-imagem">
<h1><?php echo $produto['titulo']; ?>"</h1>
</div>
<p><?=$produto["titulo"]?> </p>
<p><?=$produto["descricao"]?> </p>
<p><?=$produto["preco"]?> </p>
<p><img src="<?=$produto["imagem"]?>" alt="Imagem do Produto"></p>

<td><a href="exibirproduto.php?id_produto=<?php echo $produto['id_produto']; ?>">Detalhes</a></td>
<td><a href="deletarproduto.php?id_produto=<?php echo $produto['id_produto']; ?>">Deletar</a></td>
<td><a href="formularioAtualizarProduto.php?id_produto=<?php echo $produto['id_produto']; ?>">Atualizar</a></td>

</div>
</div>
<?php endwhile ?>           <?php require "rodape.php"; ?>