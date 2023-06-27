<?php require "cabecalho.php"; ?><?php
require "conexao.php";
$comando = "SELECT * FROM usuario";
$resultado = mysqli_query($conexao, $comando);
?>
<h1>usuario</h1>
<div class="usuario">
<?php while ($usuario = mysqli_fetch_assoc($resultado)) : ?>
<div class="rowusuario">
<div class="col-3">
<div id="prod-prop" class="produto-imagem">
<h1><?php echo $usuario['nome']; ?>"</h1>
</div>
<p><?=$usuario["nome"]?> </p>
<p><?=$usuario["email"]?> </p>
<p><?=$usuario["CPF"]?> </p>
<p><?=$usuario["endereco"]?> </p>
<td><a href="exibirUsuario.php?id_cliente=<?php echo $usuario['id_cliente']; ?>">Detalhes</a></td>
<td><a href="deletarUsuario.php?id_cliente=<?php echo $usuario['id_cliente']; ?>">Deletar</a></td>
<td><a href="formularioAtualizarUsuario.html?id_cliente=<?php echo $usuario['id_cliente']; ?>">Atualizar</a></td>

</div>
</div>
<?php endwhile ?>           <?php require "rodape.php"; ?>
