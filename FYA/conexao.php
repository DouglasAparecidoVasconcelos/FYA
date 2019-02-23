<?php 
	try{
		$pdo=new PDO("mysql:dbname=animal_projeto;host:localhost","root","");
	}catch(PDOException $e){
		echo "Falou: ".$e->getMessage();
	}
	
?>