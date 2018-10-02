<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objFotos = new Foto();
	$objFotos->ID = $_POST["ID"];
	
	if($_FILES["Foto"]){
		$diretorio = "../../Imagen/";
		$nome = $_FILES["Foto"]["name"];
		$nomeTemporario = $_FILES["Foto"]["tmp_name"];
		move_uploaded_file($nomeTemporario,$diretorio.$nome);
		
	}
	$objFotos->Foto= $nome;
	
 	$retorno = $objFotos->editarimg();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado"; 
	
?>
<?php
	include_once("../../interface/rodape.php");
	?>