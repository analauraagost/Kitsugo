<?php require "cabecalho.php"; ?>
<?php

   
require "conexao.php";

$id_categoria = $_POST ["id_categoria"];
$categoria = $_POST ["categoria"];


$comando = "UPDATE categoria SET id_categoria = '$id_categoria', categoria = '$categoria' WHERE id_categoria = '$id_categoria'";
$resultado = mysqli_query($conexao, $comando);
mysqli_close($conexao);

if ($resultado == true) {
    echo "O categoria foi atualizado com sucesso!";
} else {
    echo "O categoria não foi atualizado com sucesso!";
}
?>
<?php require "rodape.php"; ?>