<?php require "cabecalho.php"; ?>
    <div class="row">
      <div class="col-75">
      <div class="container" id = "finped">
      <form action="/action_page.php">
  
      <div class="row">
      <div class="col-50">
          <h3>Informações</h3>
          <label for="fname"><i class="fa fa-user"></i> Nome Completo</label>
          <input type="text" id="fname" name="firstname" placeholder="Fernando Machado">
          <label for="email"><i class="fa fa-envelope"></i> Email</label>
          <input type="text" id="email" name="email" placeholder="fernando@gmail.com">
          <label for="adr"><i class="fa fa-address-card-o"></i> Endereço</label>
          <input type="text" id="adr" name="address" placeholder="Rua das Flores, 197, Jardim Banana">
          <label for="city"><i class="fa fa-institution"></i> Cidade</label>
          <input type="text" id="city" name="city" placeholder="Itapetininga">
          
      </div>
  
      <div class="col-50">
          <h3>Pagamento</h3>
          <label for="fname">Cartões Aceitos: </label>
          <div class="icon-container">
          <i class="fa fa-cc-visa" style="color:navy;"></i>
          <i class="fa fa-cc-amex" style="color:blue;"></i>
          <i class="fa fa-cc-mastercard" style="color:red;"></i>
          <i class="fa fa-cc-discover" style="color:orange;"></i>
          </div>
          
          <label for="ccnum">Número do Cartão de Crédito: </label>
          <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
          <label for="ccnum">Insira cupom de desconto: </label>
          <input type="text" id="text" name="cupomdesc" placeholder="UEEEPAuiCaVaLo69666">
      </div>
  
      </div>
      <label>
      <input type="checkbox" checked="checked" name="sameadr"> Guardar esse endereço como "Padrão"
      </label>
      <input type="submit" value="Finalizar Pedido" class="btn">
  </form>
  </div>
  </div>
  
  <div class="col-25">
  <div class="container">
  
  
  <p><a href="#">Fone de Ouvido Kaonashi:</a> <span class="price">R$79,99</span></p>
  <p><a href="#">Poke Teclas</a> <span class="price">R$50,00</span></p>
  <p><a href="#">  Gabinete Gamer:</a> <span class="price">R$899,99</span></p>
  
  <hr>
  <p>Total: <span class="price" style="color:orange"><b> R$1.029,98</b></span></p>
  </div>
  </div>
  </div>
  
   
    </div></div></div>


    <?php require "rodape.php"; ?>