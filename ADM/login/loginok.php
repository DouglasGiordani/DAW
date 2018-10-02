<?php
	include_once("../../class/Carregar.class.php");
	$objUsuario = new Usuario();
	$objUsuario->Email = $_POST["Email"];
	$objUsuario->Senha = $_POST["Senha"];
	$retorno = $objUsuario->loginadm();
	if ($retorno){
		session_start();
		$_SESSION["ID"] = $retorno->ID;
		$_SESSION["Administrador"] = true;
		header("Location:../produto/listar.php");
	}
		
	else{
		header("Location:login.php?msg=erro");
		
	}	
	?>
	