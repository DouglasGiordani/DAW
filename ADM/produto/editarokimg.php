<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objfoto = new Foto();
	$objfoto->ID = $_POST["ID"];
	
	if($_FILES["Imagen"]){
		$diretorio = "../../Imagen/";
		$nome = $_FILES["Imagen"]["name"];
		$nomeTemporario = $_FILES["Imagen"]["tmp_name"];
		move_uploaded_file($nomeTemporario,$diretorio.$nome);
		
	}
	$objfoto->Imagen= $nome;
	
 	$retorno = $objfoto->editarimg();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado"; 
	
?>
<?php
	include_once("../../interface/rodape.php");
	?>