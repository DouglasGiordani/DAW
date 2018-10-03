<?php
	include_once("../../class/Carregar.class.php");
include_once("../../interface/topo.php");
	$obj = new adm();
	$obj->Nome = $_POST["Nome"];
	$obj->Email = $_POST["Email"];
	$obj->Tipo = "Administrador";
	$obj->Senha = $_POST["Senha"];
	$retorno = $obj->inserir();
	if ($retorno)
		echo "funciono Você e muito proo";
	else
		echo "não funciono você e bronce";
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>