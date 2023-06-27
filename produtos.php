<?php require "cabecalho.php"; ?>
            <?php
            session_start();

               require "conexao.php";
               $comando = "SELECT * FROM produtos";
               $resultado = mysqli_query($conexao, $comando);
            ?>
            <h1 id = "produtos-nome">Produtos</h1>
            <div class="produtos">
               <?php while ($produtos = mysqli_fetch_assoc($resultado)) : ?>
               <div class="rowprodutos">
                  <div class="col-3">
                     <div id="prod-prop" class="produto-imagem">
                        <a href="exibirProduto.php?id_produto=<?php echo $produtos['id_produto']; ?>">
                            <img src = "<?=$produtos["imagem"]?>" width="250px" height="250px">
                        </a>
                     </div>
                     <p><?=$produtos["titulo"]?> </p>
                     <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                     </div>
                     <p><?=$produtos["preco"]?> </p>
                  </div>
               </div>
               <?php endwhile ?>
               <?php require "rodape.php"; ?>