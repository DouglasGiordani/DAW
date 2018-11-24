<?php
	include_once("../../class/Carregar.class.php");
include_once("../../interface/topo.php");
	$obj = new adm();
	$obj->Nome = $_POST["Nome"];
	$obj->Nome_de_usuario = $_POST["Nome_de_usuario"];
	$obj->Tipo = $_POST["Tipo"];
	$obj->Senha = $_POST["Senha"];
	$obj->Senha = md5("Senha");
	$retorno = $obj->inserir();
	
	
	if ($retorno)
		
		echo "Usuário cadastrado com sucesso";
	else
		print_r($obj);
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>