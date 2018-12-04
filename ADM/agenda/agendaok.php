<?php
	include_once("../../class/Carregar.class.php");
include_once("../../interface/topo.php");
	$obj = new Agenda();
	$obj->Id_admin = $_POST["Id_admin"];
	$obj->data = $_POST["data"];
	$obj->Evento = $_POST["Evento"];
	
	$retorno = $obj->inserir();
	
	
	if ($retorno)
		
		echo "agenda cadastrado com sucesso";
	else
		print_r($obj);
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>