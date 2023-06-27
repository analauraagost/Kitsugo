<?php require "cabecalho.php"; ?><?php
$id_categoria = $_GET['id_categoria'];

require "conexao.php";

$comando = "DELETE FROM categoria WHERE id_categoria = '$id_categoria'";

$resultado = mysqli_query($conexao, $comando);

mysqli_close($conexao);
if ($resultado == true) {
    echo "O categoria foi deletado com sucesso!";
} else {
    echo "O categoria não foi deletado com sucesso!";
}

?>

<?php require "rodape.php"; ?>