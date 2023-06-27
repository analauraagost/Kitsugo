<?php require "cabecalho.php"; ?>
<?php require "conexao.php";

$pesquisar = $_POST['pesquisar'];
$resultado = "SELECT * FROM produtos where titulo LIKE '%$pesquisar%' LIMIT 10";
$resultado = mysqli_query($conexao, $resultado);

while($rows = mysqli_fetch_array($resultado)){
    echo "Produto: ".$rows['titulo']."<br>";
}
?>    <?php require "rodape.php"; ?>