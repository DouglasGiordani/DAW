<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objCategorias = New Categorias();
	$resultado = $objCategorias->listar();
	
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1> <center> Adicionar imagem</center></h1>
	<form method="POST" action="produtook.php" enctype="multipart/form-data">
	<table border="4" align="center" >
	<tr>
	<td><label>Nome</label></td>
	 <td><input  style= "COLOR:#000000" type="text" name="Nome"/></td></tr>
    <tr><td><label>Imagen</label> </td>
	<td><input type="file"  name="Imagen"/></td></tr>
    <tr><td><label>Data</label> </td>
	<td><input  style= "COLOR:#000000" type="date" name="data"/></td></tr>
	<tr><td><label>Descricao</label> </td>
	<td><input style= "COLOR:#000000"  type="text" name="Descricao"/></td></tr>  
	<tr><td></td><td><input style= "COLOR:#000000"  type="submit" name="botao"/></td></tr>
	</table>
	</form>
	</body>
	</html>
	<?php
	include_once("../../interface/rodape.php");
	?>
