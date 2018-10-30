<?php
	include_once("../../class/Carregar.class.php");
	$obj = new Adm();
	$obj->Nome_de_usuario = $_POST["Nome_de_usuario"];
	$obj->Senha = $_POST["Senha"];
	$retorno = $obj->loginadm();
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
	