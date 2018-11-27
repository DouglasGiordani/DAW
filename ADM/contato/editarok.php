<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objcontato = new Contato();
	$objcontato->ID = $_POST["ID"];
	$objcontato->contato = $_POST["contato"];
	$objcontato->Endereco = $_POST["Endereco"];
	$objcontato->Email = $_POST["Email"];
	
	
 	$retorno = $objcontato->editar();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "não editado"; 
	
?>
<?php
	include_once("../../interface/rodape.php");
	?>