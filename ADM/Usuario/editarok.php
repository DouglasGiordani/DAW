<?php
include_once("../../interface/topo.php");
	include_once("../../class/Carregar.class.php");
	$objUsuario = New Usuario();
	$objUsuario->Nome = $_POST["Nome"];
	$objUsuario->Email = $_POST["Email"];
	$objUsuario->Senha = $_POST["Senha"];
	$objUsuario->ID = $_POST["ID"];
	$retorno = $objUsuario->editar();
	if ($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado";
	
?>
<?php
include_once("../../interface/rodape.php");
?>