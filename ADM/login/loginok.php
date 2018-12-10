<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../class/recaptchalib.php");
	$obj = new Adm();
	$obj->Nome_de_usuario = addslashes($_POST["Nome_de_usuario"]);
	$obj->Senha =addslashes($_POST["Senha"]);
	$obj->cripo = md5($obj->Senha);
	$retorno = $obj->loginadm();
	 
			$secret = "6LenSX8UAAAAACgJovi0n4lJT_klfscoOr8qgMB2";
			$response = null;
			$reCaptcha = new ReCaptcha($secret);
	 if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
	           );
					}
			
	
	
	if ($retorno && $response != null && $response->success){
		session_start();
		$_SESSION["ID"] = $retorno->ID;
		$_SESSION["Administrador"] = true;
		header("Location:../produto/listar.php");
	}
		
	else{
		header("Location:login.php?msg=erro");
		
	}

			
	?>
	