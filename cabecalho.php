<!DOCTYPE php>
<php lang= "pt-br">
   <head>
      <title>Kitsugo</title>
      <meta charset = "UTF-8">
      <link rel="stylesheet" href="KITSUGO.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Press+Start+2P&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title> Kitsugo</title>
   </head>
   <body>
      <!--CABECALHO-->
      <div class="header">
         <div class="container">
            <div class = "navbar">
               <div class = "logo">
                  <img src = "imagens/Logo-Kitsugo.jpg" width= "300px">
               </div>
               <nav>
                  <div class="BOTAO">
                  <form method="POST" action="pesquisar.php">
                        <input type="text" name = "pesquisar" placeholder="PESQUISAR">

                        <button type="submit" value = ""><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="produtos.php">Produtos</a></li>
                     <li><a href="Sobre.php">Sobre</a></li>
                     <li><a href="Contato.php">Contato</a></li>
                     <li><a href="Login.php">Login</a></li>
                     <li><a href="Carrinho-de-Compras.php">Carrinho</a></li>
                     <li><a href="entradaAreadoADM.php">ADM</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
