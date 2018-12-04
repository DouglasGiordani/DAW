<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$obj = new agenda();
	$obj->ID = $_POST["ID"];
    $obj->Id_admin = $_POST["Id_admin"];
	$obj->data = $_POST["data"];
	$obj->Evento = $_POST["Evento"];
	
	
 	$retorno = $obj->editar();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado"; 
	
?>
<?php
	include_once("../../interface/rodape.php");
	?>