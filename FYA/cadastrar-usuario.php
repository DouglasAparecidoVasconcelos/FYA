<?php 
	require "header.php";
?>
<div class="cadastro-usuario">
	 <form method="POST" action="cadastrar-usuario.php">
	            <h3>Cadastro de Usuário</h3>            
      	 <label>Nome</label> <br/>
         <input type="text" name="nome"  class="form-control" required ><br>

         <label>E-mail</label> <br/>
         <input type="email" name="email"  class="form-control" required><br>

         <label>Senha</label> <br/>
         <input type="password" name="senha"  class="form-control" required>
         <br>        

          <label>Cidade</label> <br/>
         <input type="text" name="cidade"  class="form-control" required>
         <br>

          <label>Bairro</label> <br/>
         <input type="text" name="bairro"  class="form-control" required>
         <br>

          <label>Logradouro</label> <br/>
         <input type="text" name="logradouro"  class="form-control" required>
         <br>

          <label>Número</label> <br/>
         <input type="text" name="numero"  class="form-control" required>
         <br><br>

         <input type="submit" value="Salvar" class="btn btn-success btn-lg btn-block">

	  </form><br>
  </div>
<?php
	require 'usuario.php';
	require "footer.php";
?>