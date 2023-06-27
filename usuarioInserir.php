<?php require "cabecalho.php"; ?><?php

    $nome = $_POST ["nome"];
    $CPF = $_POST ["CPF"];
    $email = $_POST ["email"];
    $endereco = $_POST ["endereco"];
    $cidade = $_POST ["cidade"];
    $uf = $_POST ["uf"];
    
    require "conexao.php";

    $comando = "INSERT INTO usuario (nome, CPF, email, endereco, cidade, uf) VALUES ('$nome', '$CPF', '$email', '$endereco', '$cidade', '$uf')";

    $resultado = mysqli_query($conexao, $comando);

    if ($resultado == true){
        echo "O usuário foi registrado com sucesso!";
    }else{ echo "O usuário não foi registrado com sucesso!";}?>
    <?php require "rodape.php"; ?>