<?php

class Foto{
		
			private $Id_galeria;
			private $ID;
			private $Imagen;
			private $Data;
			
		
			
	
		    
		
			
			private $tabela;
			private $conexao;
			//utilizamos construct para atribuir valors a los atributos y expessificamos a tabela q vamos acesar 
			public function __Construct(){
				$this->conexao = mysqli_connect("localhost","root","" ,"celenifotos")
				or die ("Erro 404");
				$this->tabela = "fotos";
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
				$sql = "INSERT INTO $this->tabela( Imagen,Data,Id_galeria) 
				values('$this->Imagen','$this->Data', $this->Id_galeria) ";
				$retorno = mysqli_query ($this->conexao, $sql);
			
				return $retorno;
			}
			public function listar ($complemento = ""){
				$sql = "SELECT $this->tabela.*,galeria.Nome as galeria FROM 
				$this->tabela INNER JOIN galeria ON $this->tabela.Id_galeria= galeria.ID ".$complemento;
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Foto();
					$obj->ID = $res['ID'];	
					$obj-> Imagen = $res ['Imagen']; 
				 	$obj->Data = $res['Data'];				    
				    $obj->Id_galeria =$res['galeria'];

					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				
			}
			public function listarprincipal() {
				$sql = "SELECT * FROM $this->tabela LIMIT 6 ";
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Foto();
					$obj->ID = $res['ID'];	
					$obj-> Imagen = $res ['Imagen']; 
				 	$obj->Data = $res['Data'];				    

					
					$arrayObj[] = $obj;
					
				}
				return $arrayObj;
				
			}
			
					
					
			public function retornarUnico(){
		 $sql = "SELECT $this->tabela.*,galeria.Nome as galeriaFROM 
				$this->tabela INNER JOIN galeria ON $this->tabela.Id_galeria = galeria.ID
				where $this->tabela.ID=$this->ID";
		 $retorno = mysqli_query($this->conexao, $sql);
		 //separa as colunas como o banco
		 $resultado = mysqli_fetch_assoc($retorno);
		 if($resultado){
			 $objeto = new Foto();
			 $objeto->ID = $resultado['ID'];			
			 $objeto->Data = $resultado['Data'];
			 $objeto->Imagen = $resultado['Imagen']; 
			 $objeto->Id_galeria = $resultado['galeria'];
							
			 
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	 
	 public function editar(){
		 $sql = "UPDATE $this->tabela SET Id_galeria = $this->Id_galeria, WHERE ID = $this->ID";
		 $retorno = mysqli_query($this->conexao,$sql);
		 return $retorno;
	 }
	 public function excluir(){
		 $sql ="DELETE FROM $this->tabela WHERE ID=$this->ID";
         $retorno = mysqli_query($this->conexao, $sql);
		 return $retorno;
		 }
		 public function editarimg(){	 
		 $sql = "UPDATE $this->tabela SET 
		 Imagen = '$this->Imagen' WHERE ID= $this->ID";
		 $retorno = mysqli_query($this->conexao,$sql);
		 return $retorno;
			 
		 }
}

?>