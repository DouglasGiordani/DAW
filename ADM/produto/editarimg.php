<?php
   include_once ("../../class/Carregar.class.php");
   include_once("../../interface/topo.php");
   if(!$_GET["id"]){
	header("location:listar.php");
   }
   else{
	   $ID = $_GET["id"];
	 
   }
?>
<html>
<head></head>
<body>
<h1> <center> Editar Imagen</center></h1>
   <form method="POST" action="editarokimg.php"  enctype="multipart/form-data">
     <table border="4" align="center" >
	<tr>
	<td align="center"><label> Nova Imagen</label></td></tr>
     <tr><td><input  type="file" name="Imagen"/></td>
	 <td><input type="hidden" name="ID" value="<?php echo $ID;?>"/></td></tr>
	 <tr>
	<td> <input style= "COLOR:#000000" type="submit" name="Alterar"/>	</td></tr>

	   </table>
   </form>
		
	
</body>
</html>
<?php
	include_once("../../interface/rodape.php");
	?>