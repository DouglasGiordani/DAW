<?php
 include_once("../../class/recaptchalib.php");
 
 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak">
    <link rel="icon" href="imagens/gamers.png">

    <title>Administrador</title>

    
    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  
    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>

   
  </head>

  <body>

    <div class="container"  >

      <form  class="form-signin" method="POST" action="loginok.php">
        <h1 class="form-signin-heading" >Login</h1>
        <label for="inputEmail" class="sr-only">Nome de usuario</label>
        <input type="text" name="Nome_de_usuario" id="inputEmail" class="form-control" placeholder="Nome de usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="Senha" id="inputPassword" class="form-control" placeholder="Senha" required>
		<div class="g-recaptcha" data-sitekey="6LenSX8UAAAAAEsJqT3yqfMzBAFSU-fMAdFWMDjf"></div>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Login</button>
      </form>

    </div>


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php

if(isset($_GET['msg'])){echo"<script>alert('Login e/ou Senha não Conferem!')
	;</script>";
}
?>