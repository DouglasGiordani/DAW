<?php
include_once("../../interface/topo.php");
?>
<html>
<head></head>
<body>
 <h1> <center> Adicionar Usuario</center></h1>
	<form method="POST" action="inserirok.php">
	<table border="4" align="center" >
	<tr>
	<td><label>Nome</label></td>
	<td><input style= "COLOR:#000000"  type="text" name="Nome"/></td> </tr>
    <tr><td><label>Email</label></td>	
	<td><input style= "COLOR:#000000" type="text" name="Email"/></tr></td>
	<tr><td><label>Tipo</label></td>	
	<td><input style= "COLOR:#000000" type="text" name="Tipo"/></tr></td>
	<tr><td><label>Senha </label></td>
  <td><input style= "COLOR:#000000" type="password" name="Senha"/></td></tr>
	<tr><td></td><td><input style= "COLOR:#000000"  type="submit" name="botao"/></td></tr>
	</table>
	</form>
	</body>
	</html>
<?php
include_once("../../interface/rodape.php");
?>
 