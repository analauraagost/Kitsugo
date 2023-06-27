<?php require "cabecalho.php"; ?><?php
$id_cliente = $_GET['id_cliente'];

require "conexao.php";

$comando = "DELETE FROM usuario WHERE id_cliente = '$id_cliente'";

$resultado = mysqli_query($conexao, $comando);

if ($resultado == true) {
    echo "O produto foi deletado com sucesso!";
} else {
    echo "O produto não foi deletado com sucesso!";
}

mysqli_close($conexao);
?>

<?php require "rodape.php"; ?>