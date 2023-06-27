<?php require "cabecalho.php"; ?>
<div class="container">
    <form action="action_page.php">
  
      <label for="name">Seu nome</label>
      <input type="text" id="name" name="name" placeholder="Seu nome é">
  
      <label for="reclamacao">Sua reclamação é sobre:</label>
      <select id="reclamacao" name="reclamacao">
        <option value="reclamacao">Produto</option>
        <option value="reclamacao">Atendimento</option>
        <option value="reclamacao">Entrega</option>
      </select>
  
      <label for="objetivo">Objetivo</label>
      <textarea id="objetivo" name="objetivo" placeholder="Escreva" style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
  
    </form>
</div>
   
    </div></div></div>

    <?php require "rodape.php"; ?>