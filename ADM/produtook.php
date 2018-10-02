<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objProdutos = New Produto();
	$objProdutos->Id_categorias = $_POST["Id_categorias"];
	$objProdutos->Nome = $_POST["Nome"];
	$objProdutos->Preco = $_POST["Preco"];
	$objProdutos->Descricao = $_POST["Descricao"];
	
	if($_FILES["Imagen"]){
		$diretorio = "../../Imagen/";
		$nome = $_FILES["Imagen"]["name"];
		$nomeTemporario = $_FILES["Imagen"]["tmp_name"];
		move_uploaded_file($nomeTemporario,$diretorio.$nome);
		
	}
	$objProdutos->Imagen= $nome;
	
	
	$retorno = $objProdutos->inserir();
	if ($retorno)
		 echo "funciono Você e muito proo";
	else
		 echo "não funciono você e bronce"; 
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>