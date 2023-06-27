<?php require "cabecalho.php"; ?>
<?php

   
require "conexao.php";

$id_produto = $_POST ["id_produto"];
$titulo = $_POST ["titulo"];
$preco = $_POST ["preco"];
$descricao = $_POST ["descricao"];

$arquivo = $_FILES["arquivo"];
$imagem = 'imagens/'.$_FILES['arquivo']['name']; 
$de = $_FILES['arquivo']['tmp_name']; 
move_uploaded_file($de, $imagem);


$comando = "UPDATE produtos SET id_produto = '$id_produto', titulo = '$titulo', preco = '$preco', descricao = '$descricao', imagem = '$imagem' WHERE id_produto = '$id_produto'";
$resultado = mysqli_query($conexao, $comando);

mysqli_close($conexao);

if ($resultado == true) {
    echo "O produto foi atualizado com sucesso!";
} else {
    echo "O produto não foi atualizado com sucesso!";
}
?>
<?php require "rodape.php"; ?>