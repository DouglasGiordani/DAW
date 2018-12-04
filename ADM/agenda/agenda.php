<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objadm = New ADM();
	$resultado = $objadm->listar();
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1> <center>Adicionar Agenda</center></h1>
	<form method="POST" action="agendaok.php" enctype="multipart/form-data">
	<table border="4" align="center">
	<tr>
	<tr><td><label>ID_ADM</label></td>
	<td style= "COLOR:#000000" ><select name="Id_admin"/>
	 <option value="">Selecione</option>
	
	 <?php
	 foreach($resultado as $local){
     echo UTF8_encode ("<option value='$local->ID'>$local->Nome</option>");}
	 ?>
	 </select></td></tr>
   
    <tr><td><label>Data</label> </td>
	<td><input  style= "COLOR:#000000" type="date"  name="data"/></td></tr>

	
	<tr><td><label>Evento</label></td>
	<td><input  style= "COLOR:#000000" type="text"  name="Evento"/></td></tr>
	 </select></td></tr>
	<tr><td></td><td><input style= "COLOR:#000000"  type="submit" name="botao"/></td></tr>
	</table>
	</form>
	</body>
	</html>
	<?php
	include_once("../../interface/rodape.php");
	?>
