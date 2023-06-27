<?php require "cabecalho.php"; ?>
<div id = "login-cadastro">


  <div id = "login">
      <h1 id="login-cad">Login:</h1>

      <div>
      <label for="customerEmail">Endereço de Email:</label>
      <input type="email"
      name="customer[email]"
      id="customerEmail"
      autocorrect="off"
      autocapitalize="off"
      autocomplete="email">
      </div>
      
      <br><br>

      <div>
      <label for="customerPassword">Senha:</label>
      <input type="password"
      name="customer[password]"
      id="customerPassword">
      </div>
      
      <br><br>

      <label>
        <input type = "checkbox" checked = "checked" name = "sameadr">
        Guardar Login
      </label>
      
      <input type="button" value="Entrar"/>
  </div>
<div id = "cadastro">
  <h1 id="login-cad">Cadastrar:</h1>
  <div>
  <label for="customerName">Nome Completo:</label>
  <input type="email"
  name="customer[text]"
  id="customerName">
  </div>
  
  <br><br>

  <div>
  <div>
  <label for="customerName">Nome de Usuário:</label>
  <input type="email"
  name="customer[text]"
  id="customerName">
  </div>
  <br><br>
  <div>
  <div>
  <label for="customerEmail">Endereço de Email:</label>
  <input type="email"
  name="customer[email]"
  id="customerEmail"
  autocorrect="off"
  autocapitalize="off"
  autocomplete="email">
  </div>
  <br><br>
  <div>
  <label for="customerPassword">Senha:</label>
  <input type="password"
  name="customer[password]"
  id="customerPassword">
  </div>
  <br><br>

<input type="button" value="Cadastrar" />
</div>

</div>

</div>
</div>
   
    </div></div></div>

    <?php require "rodape.php"; ?>