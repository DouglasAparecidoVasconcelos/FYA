<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	
		<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Noto+Sans" rel="stylesheet">
	<title>Projeto</title>
	<style type="text/css">
		body{
			margin: 0;
			font-family: 'Fira Sans', sans-serif;
		}
		.top-01{
			text-align: right;
			line-height: 50px;
			background-color: #d9d9d9;
			height: 50px;
			width: 100%;
		}
		.nav-menu {
		  display: none;
		}
		.login a{
			text-decoration: none;
			color: #000;
		}
		.top-01 img{
			float: right;
			padding-left: 5px;
			margin-right: 15px;	
			margin-top: 5px;		
			width: 40px;
			height: auto;
		}
		.top-02{
			width: 100%;
			height: 170px;
			background-color: #eeeeee;		
		}
		.inside-top-02{
			width: 1080px;
			height: 170px;
			margin: auto;
		}
		.inside-top-02 .logo{
			float: left;
			width: 300px;
			font-size: 216%;
			line-height: 170px;
			font-family: 'Noto Sans', sans-serif;
			
		}

		.menu{
			float: right;
			width: 775px;
			height: auto;
			
			
		}
		 ul{
			margin: 0;
		}

		.inside-top-02 .menu li{

			width: 300px;
			padding-left: 10px;
			padding-right: 10px;
			font-size: 106%;
			list-style: none;
			display: inline;
			line-height: 170px;
			font-family: 'Noto Sans', sans-serif;
			border-bottom: 5px solid transparent;
		}
		.inside-top-02 .menu a{
			color: #000;
			text-decoration: none;
		}
		.inside-top-02 .menu li:hover{
			border-bottom: 5px solid #1E90FF;

		}
		/*.actived{
			border-bottom: 5px solid #1E90FF;
		}*/

		.meio{
			width: 1080px;
			height: auto;
			margin: auto;
			border-left: 1px solid #eeeeee;
			border-right: 1px solid #eeeeee;
		}
		footer{
			float: left;
			width: 100%;
			height: 200px;   			
			background-color: #000;
			color: #fff;
			text-align: center;
		}
		.animal-block{
			margin: 10px;
			text-align: center;
			background-color: #01acca;
			width: 338px;
			height: 600px;
			float: left;
			color: #fff;
			border: 1px solid transparent;
			
		}
		.propaganda{
			float: right;
			width: 1080px;
			height: 150px;
			margin: auto;
			background-color: #eeeeee;
		}
		.animal-block img{
			
			width: 336px;
			height: 380px;
			background-color: grey;
		}
		.animal-block a{
			text-decoration: none;
		}
		#bt_menu{
			display: none;
		}
		.viewmore{
			background-color: #fff;
			color: #01acca;
			width: 100px;
			height: 40px;
			font-size: 100%;
			border-style: none;

		}
		label[for="bt_menu"]{
				display: none;
				cursor: pointer;
		}
		@media only screen and (max-width: 600px) {
	  		body {
			    margin: 0;
			  }
			  .topo-01{
			  	width: 100%;
			  }
			  #bt_menu{
			  	
			  	display: none;
			  }
			.menu{
				width: 100%;
			  height: auto;
			}
			 ul{
			 	display: block

			 }
			  
				.inside-top-02 li{
					width: 100%;
					padding-left: 17px;
					padding-right: 17px;
				}
			/* .inside-top-02 .menu li{
			 	
				width: 100%;
				height: auto;
				padding-left: 10px;
				padding-right: 10px;
				float: none;
				font-size: 106%;
				display: block;
				text-align: right;
				background-color: red;
				list-style: none;			
				font-family: 'Noto Sans', sans-serif;
				border-bottom: 5px solid transparent;
			 }
			 */
			  .login{
			  	width: 100%;
			  }
			 .animal-block{
			 	margin-top: 10px;
			 	margin-left: 0;
				text-align: center;
				background-color: #01acca;
				width: 100%;
				height: 600px;				
				color: #fff;
				border: 1px solid transparent;
				
			}
			.animal-block img{
				width: 96%;
			}
			.propaganda{
				width: 100%;
			}
			.meio{
				width: 100%;
			}
			.inside-top-02{
				width: 100%;
			}
			label[for="bt_menu"]{
				margin-left: 2px;
				float: left;
				cursor: pointer;
				display: block;
			}
		

		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('#bt_menu').change(function(){
				
				  if ($(this).prop("checked") == true) {
   						document.getElementById("nav").style.display='block';

  					}else{
  						document.getElementById("nav").style.display='none';
  					}
				
			});
		});
	</script>
</head>
<?php
var_dump($_FILES);
	require  'conexao.php';
	/*session_start();
	session_destroy();*/
	/*$_SESSION['id']=1;*/	
/*	if(isset($_SESSION['id']) && empty($_SESSION['id']==false)){
		

	}else{
		header("Location: cadastrar-usuario.php");

	}*/
?>
<body>
	<header>
		<div class="top-01">
			<div class="login">
					 <input type="checkbox" id="bt_menu" >
					 <label for="bt_menu">☰ Menu</label>
					<?php  
					if(isset($_SESSION['id']) && empty($_SESSION['id']==false)){
							echo "Giovani de Oliveira &nbsp;&nbsp;&nbsp;";

						}else{
							echo "
							<a href='login.php' data-toggle='modal' data-target='#modalLogin'>
								Login/Cadastre-se <img src='images/login.png'> 
							</a>";
						} 
					?>		
				
			</div>
			
		</div>
		<div class="top-02">
			<div class="inside-top-02">
				<div class="logo">
					Find Your Animal
				</div>
					
				<div class="menu">
				<ul class="nav-list " id="nav">
						<li ><a class="actived" href="#">Home</a></li>
						<li><a href="#">Sobre Nós</a></li>
						<li><a href="#">Econtre seu Animal</a></li>
						<li><a href="#">Animais Encontrados</a></li>
						<li><a href="#">Eventos</a></li>
						<li><a href="#">Dicas</a></li>
					</ul>
				</div>
			</div>			
		</div>
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
		<footer>
			Politica de Privacidade
		</footer>
</body>
</html>