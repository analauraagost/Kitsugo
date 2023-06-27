<?php require "cabecalho.php";
require "conexao.php";

    $id_cliente = $_POST ["id_cliente"];
    $nome = $_POST ["nome"];
    $CPF = $_POST ["CPF"];
    $email = $_POST ["email"];
    $cidade = $_POST ["cidade"];
    $cidade = $_POST ["cidade"];
    $uf = $_POST ["uf"];


$comando = "UPDATE usuario SET id_cliente = '$id_cliente', nome = '$nome', CPF = '$CPF', email = '$email', cidade = '$cidade', cidade = '$cidade', uf = '$uf' WHERE id_cliente = '$id_cliente'";
$resultado = mysqli_query($conexao, $comando);

mysqli_close($conexao);

if ($resultado == true) {
    echo "O produto foi atualizado com sucesso!";
} else {
    echo "O produto não foi atualizado com sucesso!";
}
?>
 <?php require "rodape.php"; ?><?php

