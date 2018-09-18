<?php

class Usuario{
			private $ID;
			private $Nome;
			private $Email;	
    		private $Tipo;
			private $Senha;
		    
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __construct(){
				$this->conexao = mysqli_connect("127.0.0.1","root","" ,"celenifotos")
				or die ("Erro 404");
				$this->tabela = "adm";
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
				$sql = "INSERT INTO $this->tabela(Nome, Email, Nascimento, RG, Tipo, Senha) 
				values('$this->Nome', '$this->Email', '$this->Tipo','$this->Senha') ";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
			}

			public function listar (){
				$sql = "SELECT * FROM $this->tabela";
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Usuario();
					$obj->ID = $res['ID'];
					$obj->Nome = $res ['Nome'];
					$obj->Email = $res ['Email'];
					$obj->Tipo = $res ['Tipo'];
					$obj->Senha = $res ['Senha'];
					
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
			 $objeto = new Usuario();
			 $objeto->ID = $resultado['ID'];
			 $objeto->Nome = $resultado['Nome'];
			 $objeto->Email = $resultado['Email'];
			 $objeto->Tipo = $resultado['Tipo'];
			 $objeto->Senha = $resultado['Senha'];
			 
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	  public function editar(){
		 $sql = "UPDATE $this->tabela SET
		 Nome = '$this->Nome', Email = '$this->Email',
		 Tipo = '$this->Tipo', Senha = '$this->Senha' WHERE ID=$this->ID";
		 $retorno = mysqli_query($this->conexao,$sql);
		 return $retorno;
	 }
	 	 public function excluir(){
		 $sql ="DELETE FROM $this->tabela WHERE ID=$this->ID";
         $retorno = mysqli_query($this->conexao, $sql);
		 return $retorno;
		 }
		 	public function loginadm(){
		 $sql = "SELECT * FROM $this->tabela where Email='$this->Email' and Senha='$this->Senha' and Tipo='Administrador'";
		 $retorno = mysqli_query($this->conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){ 
			 $objeto = new Usuario();
			 $objeto->ID = $resultado['ID'];	
			 
        	 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	
}
?>