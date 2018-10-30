<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objCategorias = New Galeria();
	$objCategorias->Nome = $_POST["Nome"];
	$objCategorias->ID = $_POST["ID"];
	$retorno = $objCategorias->editar();
	if ($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado";
	
?>
<?php
include_once("../../interface/rodape.php");
?>