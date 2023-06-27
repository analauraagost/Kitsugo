<?php require "cabecalho.php"; ?><?php
$id_produto = $_GET['id_produto'];

require "conexao.php";

$comando = "DELETE FROM produtos WHERE id_produto = '$id_produto'";

$resultado = mysqli_query($conexao, $comando);

if ($resultado == true) {
    echo "O produto foi deletado com sucesso!";
} else {
    echo "O produto não foi deletado com sucesso!";
}

mysqli_close($conexao);
?>
<?php require "rodape.php"; ?>
