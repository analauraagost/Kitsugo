<?php require "cabecalho.php";
require "conexaoADM.php";

?>
<form method="POST" action= "areadoADM.php">
    <label for="adm">Administrador:</label>
    <input type="text" name="adm" id="adm" required>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>
    <button type="submit">Acessar</button>
</form>

<?php require "rodape.php"; ?>