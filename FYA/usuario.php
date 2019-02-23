<?php
class Usuario{
	private $id;
	private $email;
	private $senha;
	private $nome;
	private $cidade;
	private $logradouro;
	private $bairro;
	private $numero;
	private $pdo;
	public function __construct($i=''){
		try{
			$this->pdo=new PDO("mysql:dbname=sistema_pizzas;host:localhost","root","");

			}catch(PDOException $e){
				echo "Falou: ".$e->getMessage();
			}
		if(!empty($i)){
			
			$sql="SELECT * FROM usuarios where id= ?";
			$sql=$this->pdo->prepare($sql);
			$sql->execute(array($i));
			if($sql->rowCount()>0){
				$data=$sql->fetch();
				$this->id=$data['id'];
				$this->email=$data['email'];
				$this->senha=$data['senha'];
				$this->nome=$data['nome'];
				$this->cidade=$data['cidade'];
				$this->logradouro=$data['logradouro'];
				$this->bairro=$data['bairro'];
				$this->numero=$data['numero'];
			}
		}
	}
	public function getId(){
		return $this->id;
	}
	public function setEmail($e){
		$this->email=$e;
	}
	public function getEmail(){
		return $this->email; 
	}
	public function setSenha($s){
		$this->senha=md5($s);
	}
	
	public function setNome($n){
		$this->nome=$n;
	}
	public function getNome(){
		return $this->nome;
	}

	public function setCidade($c){
		$this->cidade=$c;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function setLogradouro($l){
		$this->logradouro=$l;
	}
	public function getLogradouro(){
		return $this->logradouro;
	}
	public function setBairro($b){
		$this->bairro=$b;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function setNumero($n){
		$this->numero=$n;
	}
	public function getNumero(){
		return $this->numero;
	}
	public function salvar(){
		if(!empty($this->id)){
			$sql="UPDATE usuarios SET email=?, senha=?, nome=?,cidade=?,logradouro=?,bairro=?,numero=? WHERE id=1";
			$sql=$this->pdo->prepare($sql);
			$sql->execute(array($this->email,
				$this->senha,
				$this->nome,
				$this->cidade, 
				$this->logradouro, 
				$this->bairro, 
				$this->numero));
			

		}else{

			$sql="INSERT INTO usuarios SET email=?, senha=?, nome=?,cidade=?,logradouro=?,bairro=?,numero=? ";
			$sql=$this->pdo->prepare($sql);
			$sql->execute(array(
				$this->email,
				$this->senha,
				$this->nome,
				$this->cidade, 
				$this->logradouro, 
				$this->bairro, 
				$this->numero));
			
		}

	}
	/*public function mostratudo(){
		$sql="SELECT * FROM usuarios";
			$sql=$this->pdo->prepare($sql);
			$sql->execute(array());
			if($sql->rowCount()>0){
				$data=$sql->fetchAll();
				
			}
			var_dump($this);
			var_dump($data);
	}*/
}


?>