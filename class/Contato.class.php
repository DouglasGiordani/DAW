<?php

class Contato{
			private $ID;
			private $contato;
			private $Endereco;
			private $Email;
			
		
			
	
		    
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __Construct(){
				$this->conexao = mysqli_connect("localhost","root","" ,"celenifotos")
				or die ("Erro 404");
				$this->tabela = "contato";
			}
			//fecha a conexao se deixar o banco aberto e elemina da memoria 
			public function __destruct(){
				unset ($this->link);
				
			} 
			// serve para acessar um valor
			public function __get($key){
				return $this->$key;
			}
			//para modificar um valor
			public function __set($key, $value){
				$this->$key = $value;
			}
			public function inserir(){
				$sql = "INSERT INTO $this->tabela(contato, Endereco, Email) 
				values('$this->contato', '$this->Endereco', '$this->Email')";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
			}
			
			
			public function listar (){
				$sql = "SELECT * FROM $this->tabela";
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
				    $obj = new Contato();
					$obj->ID = $res['ID'];
				 	$obj->contato = $res['contato'];
					$obj->Endereco = $res['Endereco'];
					$obj->Email = $res ['Email']; 	   					
				   

					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				
			}
			
					
					
					public function retornarUnico(){
		 $sql = "SELECT * FROM $this->tabela where ID=$this->ID";
		 $retorno = mysqli_query($this->conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){
			 $objeto = new contato();
			 $objeto->ID = $resultado['ID'];
			 $objeto->contato = $resultado['contato'];
			 $objeto->Endereco = $resultado['Endereco'];
			 $objeto->Email = $resultado['Email'];				
			 
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	 
	   public function editar(){
		 $sql = "UPDATE $this->tabela SET
		 contato = '$this->contato', Endereco = '$this->Endereco',
		 Email = '$this->Email' WHERE ID=$this->ID";
		 $retorno = mysqli_query($this->conexao,$sql);
		 return $retorno;
	 }
	 public function excluir(){
		 $sql ="DELETE FROM $this->tabela WHERE ID=$this->ID";
         $retorno = mysqli_query($this->conexao, $sql);
		 return $retorno;
		 }
		
}

?>