<?php
if (isset($_GET['id'])) {
    $produtoId = $_GET['id'];

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }

    $_SESSION['carrinho'][] = $produtoId;

    header('Location: produtoS.php?id=' . $produtoId);
    exit();
}
?>
