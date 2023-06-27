<?php require "cabecalho.php"; ?><?php

    $categoria = $_POST ["categoria"];

    
    require "conexao.php";

    $comando = "INSERT INTO categoria (categoria) VALUES ('$categoria')";

    $resultado = mysqli_query($conexao, $comando);

    if ($resultado == true){
        echo "A categoria foi registrado com sucesso!";
    }else{ echo "O usuário não foi registrado com sucesso!";}?>
    <?php require "rodape.php"; ?>