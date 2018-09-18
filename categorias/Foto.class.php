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
				$this->conexao = mysqli_connect("127.0.0.1","root","" ,"celenifotos")
				or die ("Erro 404");
				$this->tabela = "galeria";
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
				$sql = "INSERT INTO 	$this->tabela(Id_galeria,Data, Imagen, Descricao) 
				values($this->Id_galeria '$this->Data', '$this->Imagen', '$this->Descricao') ";
				$retorno = mysqli_query ($this->conexao, $sql);
				return $retorno;
			}
			public function listar ($complemento = ""){
				$sql = "SELECT $this->tabela.*,galeria.Nome as galeria FROM 
				$this->tabela INNER JOIN galeria ON $this->tabela.Id_galeria= galeria.ID ".$complemento;
				$retorno = mysqli_query($this->conexao, $sql);
				
				$arrayObj = NULL;
				while($res = mysqli_fetch_assoc($retorno)){
					$obj = new Produto();
					$obj->ID = $res['ID'];
				 	$obj->Data = $res['Data'];
					$obj-> Imagen = $res ['Imagen'];
                    $obj-> Descricao = $res ['Descricao'];
				    $obj->Id_galeria =$res['galeria'];

					
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
			 $objeto = new Produto();
			 $objeto->ID = $resultado['ID'];
			 $objeto->Id_galeria = $resultado['galeria'];
			 $obj->Data = $res['Data'];
			 $objeto->Imagen = $resultado['Imagen'];
			$obj-> Descricao = $res ['Descricao'];					
			 
			 $retUsuar = $objeto;
		 }
		 else {
			 $retUsuar = null;
		 }
		 return $retUsuar;
	 }
	 
	 public function editar(){
		 $sql = "UPDATE $this->tabela SET Id_galeria = $this->Id_galeria,
		, Descricao = '$this->Descricao' WHERE ID = $this->ID";
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