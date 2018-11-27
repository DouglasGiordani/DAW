<?php
	include_once("../../class/Carregar.class.php");
include_once("../../interface/topo.php");
	$obj = new contato();
	$obj->contato = $_POST["contato"];
	$obj->Endereco = $_POST["Endereco"];
	$obj->Email = $_POST["Email"];
	
	$retorno = $obj->inserir();
	
	
	if ($retorno)
		
		echo "Usuário cadastrado com sucesso";
	else
		print_r($obj);
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>