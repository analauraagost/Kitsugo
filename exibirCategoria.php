<?php require "cabecalho.php"; ?><?php  
         $id_categoria = $_GET['id_categoria'];
         
         
         require "conexao.php";
         
         $comando = "SELECT * FROM categoria WHERE id_categoria = $id_categoria";
         $resultado = mysqli_query($conexao, $comando);
         
         if (mysqli_num_rows($resultado) == 0) {
             echo "categoria não encontrado";
         } else {
             $categoria = mysqli_fetch_assoc($resultado);
             echo "<p>Categoria: {$categoria['categoria']}</p>";
         
         }?><?php require "conexao.php";?>
            
<?php mysqli_close($conexao); ?>
               <?php require "rodape.php"; ?>