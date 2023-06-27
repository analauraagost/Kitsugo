<?php require "cabecalho.php"; ?> <div class="row">
        <div class="col-2">
        <h1>Seu computador com um novo estilo!</h1>
        <p id = "texto">Dê ao seu Computador um carinho especial.<br>Dê Kitsugo!</p>
        <a href= "" class = "btn">Explore Agora! &#8594;</a>
    </div>
    <div class="row">
        <div class="col-2">
        <img id = "banner" src = "imagens/paraDesign.jpg"  width = "700px" height="400px">
        </div>
    </div>
    </div>
            <?php
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
