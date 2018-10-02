<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objfoto = new Foto();
	$objfoto->ID = $_POST["ID"];
	$objfoto->Id_galeria = $_POST["Id_galeria"];
	$objfoto->Nome = $_POST["Nome"];
	$objfoto->Data = $_POST["Data"];
	$objfoto->Descricao = $_POST["Descricao"];
	
 	$retorno = $objfoto->editar();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado"; 
	
?>
<?php
	include_once("../../interface/rodape.php");
	?>