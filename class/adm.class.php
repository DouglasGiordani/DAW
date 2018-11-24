<?php

class adm{
			private $ID;
			private $Nome;
			private $Nume_de_usuario;	
    		private $Tipo;
			private $Senha;
		    
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __construct(){
				$this->conexao = mysqli_connect("localhost","root","" ,"celenifotos")
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
				$sql = "INSERT INTO $this->tabela(Nome, Nome_de_usuario, Tipo, Senha) 
				values('$this->Nome', '$this->Nome_de_usuario', '$this->Tipo','$this->cripo') ";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
			}

			public function listar (){
				$sql = "SELECT * FROM $this->tabela";
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new adm();
					$obj->ID = $res['ID'];
					$obj->Nome = $res ['Nome'];
					$obj->Nome_de_usuario = $res ['Nome_de_usuario'];
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
			 $objeto = new adm();
			 $objeto->ID = $resultado['ID'];
			 $objeto->Nome = $resultado['Nome'];
			 $objeto->Nome_de_usuario = $resultado['Nome_de_usuario'];
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
		 Nome = '$this->Nome', Nome_de_usuario = '$this->Nome_de_usuario',
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
		 $sql = "SELECT * FROM $this->tabela where Nome_de_usuario='$this->Nome_de_usuario' and Senha='$this->Senha' and Tipo='Administrador'";
		 $retorno = mysqli_query($this->conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){ 
			 $objeto = new adm();
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