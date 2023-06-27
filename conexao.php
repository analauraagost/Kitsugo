<?php
$conexao = mysqli_connect("localhost", "root", "", "KITSUGO");
if ($conexao == false) {
    die(mysqli_connect_error());
}
?>