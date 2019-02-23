<?php 
	require "header.php";
?>
		<div class="meio">
			<div class="animal-block">
				
				<img src="images/img-dog-01.jpg">
				<h2>Nome do Anilmal</h2>
				<p>
					Duis id metus enim, sed dignissim magna. Quisque dapibus pulvinar diam eget adipiscing. Ut aliquet ipsum quis lorem elementum lacinia. 
				</p>
				<a href="">
					<input type="submit" name="viewmore" class="viewmore" value="ver mais">
				</a>
			</div>
			<div class="animal-block">

				
			</div>
			<div class="animal-block">
				
			</div>
			<div class="propaganda">
			
			</div>
			<div class="animal-block">
				
			</div>
			<div class="animal-block">
				
			</div>
			<div class="animal-block">
				
			</div>
			
		</div>
		
		
	</header>
	<!-- Modal Login-->
		<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">ACESSE O SEU PERFIL</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		     	<form>
					<div class="login">
						<label>Login:</label><br>
						<input type="text" class="form-control" name="Login"><br>
						<label>Senha:</label><br>
						<input type="password" class="form-control" name="senha"><br><br>
						<!-- <input type="submit"  class="btn btn-dark" name="enviar" value="Enviar"><br> -->
						
					</div>
					<a href="cadastrar-usuario.php">Criar uma conta!</a> &nbsp; &nbsp;
					<a href="#">Esqueci a senha?</a>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		        <button type="button" class="btn btn-primary">Entrar</button>
		      </div>
		    </div>
		  </div>
		</div>
<?php require "footer.php"; ?>