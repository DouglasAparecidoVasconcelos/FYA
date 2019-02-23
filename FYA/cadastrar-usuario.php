<?php
	
	

	
	
	
?>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Pizzas</title>
	<link rel="stylesheet" type="text/css" href="assets/css/stylo.css">
	<style type="text/css">
		.cadastro-usuario{			
			width: 930px;
			margin: auto;
			height: auto;
			border-style: groove;
			border-radius: 15px;
		}
		.cadastro-usuario h3{
			margin-top: 15px;
			text-align: center;
		}
		.cadastro-usuario form{
			margin-left: 15px;
			margin-right: 15px; 
		}
	</style>

<br>
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

  	

  ?>