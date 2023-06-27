<?php 
require "conexao.php";
$senhaFornecida = $_POST['senha'];

$query = "SELECT senha FROM administrador WHERE idADM = 1";

$resultado = mysqli_query($conexao, $query);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $linha = mysqli_fetch_assoc($resultado);
    $senhaArmazenada = $linha['senha'];

    if ($senhaFornecida === $senhaArmazenada) {
        echo "Bem-vindo(a) ao conteúdo protegido!";
    } else {
        echo "Senha incorreta. Tente novamente.";
    }
} else {
    echo "Usuário não encontrado.";
}

mysqli_close($conexao);?>