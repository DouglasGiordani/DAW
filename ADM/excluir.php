<?php
	 include_once("../../class/Carregar.class.php");
	 include_once("../../interface/topo.php");
	 if(!$_GET ['id']){
		 header ("location:listar.php");
		 }
		 else {
			 $id=$_GET["id"];
			 $objeto = new Produto();
			 $objeto->ID=$id;
			 $retorno = $objeto->excluir();
		 if($retorno)
			 echo "Excluido com sucesso";
		 else
			 echo "Erro 404";
		 
		 }
	 ?>
	 <?php
	include_once("../../interface/rodape.php");
	?>