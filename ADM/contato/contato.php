<?php

	include_once("../../interface/topo.php");
	
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1> <center>Adicionar contato</center></h1>
	<form method="POST" action="contatook.php" enctype="multipart/form-data">
	<table border="4" align="center">
	<tr>

    <tr><td><label>Contato</label> </td>
	<td><input style= "COLOR:#000000"  type="text"  name="contato"/></td></tr>
    <tr><td><label>Endereço</label> </td>
	<td><input  style= "COLOR:#000000" type="text"  name="Endereco"/></td></tr>
	<tr><td><label>Email</label></td>
	<td><input  style= "COLOR:#000000" type="text"  name="Email"/></td></tr>
	 </select></td></tr>
	<tr><td></td><td><input style= "COLOR:#000000"  type="submit" name="botao"/></td></tr>
	</table>
	</form>
	</body>
	</html>
	<?php
	include_once("../../interface/rodape.php");
	?>
