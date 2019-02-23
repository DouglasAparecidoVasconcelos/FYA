<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	
		<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Noto+Sans" rel="stylesheet">
	<title>Projeto</title>
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
//	require  'conexao.php';
//	session_start();
//	session_destroy();
//	$_SESSION['id']=1	
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
					<a href="index.php">Find Your Animal</a> 
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