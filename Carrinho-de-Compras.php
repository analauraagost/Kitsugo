<?php require "cabecalho.php"; ?>
    <div id = "pai">
        <div id = "filho">
        <div id = "meucarrinho">
        <?php
// Verificar se um cupom de desconto foi aplicado
if (isset($_POST['cupom'])) {
    $cupom = $_POST['cupom'];

    // Verificar se o cupom é válido
    if ($cupom === 'DESCONTO10') {
        // Aplicar o desconto de 10%
        $valorTotal = 100; // Valor total dos produtos
        $desconto = $valorTotal * 0.1; // Calcular o valor do desconto

        $valorFinal = $valorTotal - $desconto;

        echo "Cupom aplicado: $cupom<br>";
        echo "Valor total: R$ $valorTotal<br>";
        echo "Desconto: R$ $desconto<br>";
        echo "Valor final: R$ $valorFinal";
    } else {
        echo "Cupom inválido!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cupom de Desconto</title>
</head>
<body>
    <h1>Cupom de Desconto</h1>
    <form method="post" action="">
        <label for="cupom">Digite o cupom de desconto:</label>
        <input type="text" name="cupom">
        <input type="submit" value="Aplicar">
    </form>
</body>
</html>

          <ul>
              <h1 id = "carrinho-nomes">Meu carrinho:</h1><br><br>
              <?php
if (isset($_SESSION['carrinho'])) {
    $carrinho = $_SESSION['carrinho'];

    if (!empty($carrinho)) {
        require "conexao.php";

        $produtos = array();

        foreach ($carrinho as $produtoId) {
            $comando = "SELECT * FROM produtos WHERE id = $produtoId";
            $resultado = mysqli_query($conexao, $comando);
            $produto = mysqli_fetch_assoc($resultado);

            if ($produto) {
                $produtos[] = $produto;
            }
        }

        foreach ($produtos as $produto) {
            echo "ID: " . $produto['id'] . "<br>";
            echo "Título: " . $produto['titulo'] . "<br>";
            echo "Preço: " . $produto['preco'] . "<br>";
            echo "<hr>";
        }
        echo "<h2>Resumo do Pedido</h2>";

        foreach ($produtos as $produto) {
            echo "Produto: " . $produto['titulo'] . "<br>";
            echo "Preço: $" . $produto['preco'] . "<br>";
            echo "<hr>";
        }

        echo "<strong>Total: $" . $total . "</strong>";
    } else {
        echo "Carrinho vazio";
    }
} else {
    echo "Carrinho vazio";
}
?>
      </div>
      </div>
      </div>
   
    </div></div></div>


    <?php require "rodape.php"; ?>