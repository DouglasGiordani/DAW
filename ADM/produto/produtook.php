<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objfoto = new Foto();
	$objfoto->ID = $_POST["ID"];
	$objfoto->Id_galeria = $_POST["Id_galeria"];
	$objfoto->Nome = $_POST["Nome"];
	$objfoto->Data = $_POST["Data"];
	$objfoto->Descricao = $_POST["Descricao"];
	
	if($_FILES["Imagen"]){
		$diretorio = "../../Imagen/";
		$nome = $_FILES["Imagen"]["name"];
		$nomeTemporario = $_FILES["Imagen"]["tmp_name"];
		move_uploaded_file($nomeTemporario,$diretorio.$nome);
		
	}
	$objfoto->Imagen= $nome;
	
	
	$retorno = $objfoto->inserir();
	if ($retorno)
		 echo "funciono Você e muito proo";
	else
		 echo "não funciono você e bronce"; 
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>