<?php
	include_once("../../class/carregar.class.php");
	include_once("../../interface/topo.php");
	$objgaleria = New Galeria();
	$objgaleria->Nome = $_POST["Nome"];
	$retorno = $objgaleria->inserir();
	if ($retorno)
		echo "funciono Você e muito proo";
	else
		echo "não funciono você e bronce";
	?>
	<?php
	include_once("../../interface/rodape.php");
	?>