<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objfoto = new Foto();
	
	$objfoto->Id_galeria = $_POST["Id_galeria"];
	$objfoto->Data = $_POST["Data"];

	
	if($_FILES["Imagen"]){
		$diretorio = "../../Imagen/";
		$nome = $_FILES["Imagen"]["name"];
		$nomeTemporario = $_FILES["Imagen"]["tmp_name"];
		move_uploaded_file($nomeTemporario,$diretorio.$nome);
		
	}
	$objfoto->Imagen= $nome;
	
	
	$retorno = $objfoto->inserir();
	if ($retorno)
		 echo "funcionou";
	else
		 echo "não funcionou"; 
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>
