<?php require "cabecalho.php"; ?><?php  
         $id_cliente = $_GET['id_cliente'];
         
         
         require "conexao.php";
         
         $comando = "SELECT * FROM usuario WHERE id_cliente = $id_cliente";
         $resultado = mysqli_query($conexao, $comando);
         
         if (mysqli_num_rows($resultado) == 0) {
             echo "usuario não encontrado";
         } else {
             $usuario = mysqli_fetch_assoc($resultado);
             echo "<p>email: {$usuario['email']}</p>";
             echo "<p>nome: {$usuario['nome']}</p>";
         
         }?><?php require "conexao.php";?>
            
<?php mysqli_close($conexao); ?>

<?php require "rodape.php"; ?>