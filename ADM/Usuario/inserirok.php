<?php
	include_once("../../class/Carregar.class.php");
include_once("../../interface/topo.php");
	$objUsuario = new Usuario();
	$objUsuario->Nome = $_POST["Nome"];
	$objUsuario->Email = $_POST["Email"];
	$objUsuario->Nascimento = $_POST["Nascimento"];
	$objUsuario->RG = $_POST["RG"];
	$objUsuario->Tipo = "Administrador";
	$objUsuario->Senha = $_POST["Senha"];
	$retorno = $objUsuario->inserir();
	if ($retorno)
		echo "funciono Você e muito proo";
	else
		echo "não funciono você e bronce";
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>