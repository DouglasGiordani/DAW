<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objgaleria = New Galeria();
	$resultado = $objgaleria->listar();
	
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1> <center>Adicionar Foto</center></h1>
	<form method="POST" action="produtook.php" enctype="multipart/form-data">
	<table border="4" align="center">
	<tr>

    <tr><td><label>Imagen</label> </td>
	<td><input type="file"  name="Imagen"/></td></tr>
    <tr><td><label>Data</label> </td>
	<td><input  style= "COLOR:#000000" type="date"  name="Data"/></td></tr>
	<tr><td><label>Galeria</label></td>
	<td style= "COLOR:#000000" ><select name="Id_galeria"/>
	 <option value="">Selecione</option>
	
	 <?php
	 foreach($resultado as $local){
     echo UTF8_encode ("<option value='$local->ID'>$local->Nome</option>");}
	 ?>
	 </select></td></tr>
	<tr><td></td><td><input style= "COLOR:#000000"  type="submit" name="botao"/></td></tr>
	</table>
	</form>
	</body>
	</html>
	<?php
	include_once("../../interface/rodape.php");
	?>
