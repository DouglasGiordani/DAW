<?php

class Agenda{
			private $ID;
			private $Id_admin;
			private $data;
			private $Evento;
		
			
	
		    
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __Construct(){
				$this->conexao = mysqli_connect("localhost","root","" ,"celenifotos")
				or die ("Erro 404");
				$this->tabela = "agenda";
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
				$sql = "INSERT INTO 	$this->tabela(Id_admin, data, Evento) 
				values('$this->Id_admin', '$this->data', '$this->Evento') ";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
			}
			public function listar ($complemento = ""){
				$sql = "SELECT $this->tabela.*,ADM.Nome as ADM FROM 
				$this->tabela INNER JOIN ADM ON $this->tabela.Id_admin= ADM.ID ".$complemento;;
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Agenda();
					$obj->ID = $res['ID'];
				 	$obj->Id_admin = $res['ADM'];
					$obj->data = $res['data'];   
					$obj-> Evento = $res ['Evento'];    					
				   

					
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
			 $objeto = new Agenda();
			 $objeto->ID = $resultado['ID'];
			$objeto->Id_admin = $resultado['Id_admin'];
			$objeto-> data = $resultado ['data'];   
			$objeto-> Evento = $resultado ['Evento'];  
							
			 
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	 
	 public function editar(){
		 $sql = "UPDATE $this->tabela SET ID = $this->ID, WHERE ID = $this->ID";
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