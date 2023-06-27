<?php require "cabecalho.php"; ?><?php

    $titulo = $_POST ["titulo"];
    $preco = $_POST ["preco"];
    $descricao = $_POST ["descricao"];

    $arquivo = $_FILES["arquivo"];
    $imagem = 'imagens/'.$_FILES['arquivo']['name']; 
    $de = $_FILES['arquivo']['tmp_name']; 
    move_uploaded_file($de, $imagem);
    
    require "conexao.php";

    $comando = "INSERT INTO produtos (titulo, preco, descricao, imagem) VALUES ('$titulo', '$preco', '$descricao', '$imagem')";

    $resultado = mysqli_query($conexao, $comando);

    if ($resultado == true){
        echo "O produto foi registrado com sucesso!";
    }else{ echo "O produto não foi registrado com sucesso!";}?>
    <?php require "rodape.php"; ?>