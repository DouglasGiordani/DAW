<?php
   
   include_once ("../../class/Carregar.class.php");
   include_once("../../interface/topo.php");
   if(!$_GET["id"]){
	header("location:listar.php");
   }
   else{
	   $ID = $_GET["id"];
	   $objeto = new Contato();
	   $objeto->ID = $ID;
	   $variavel = $objeto->retornarUnico();
   }
   $objcontato = New Contato();
	$resultado = $objcontato->listar();
?>



<html>
<head></head>
<body>
<h1> <center> Editar contato</center></h1>
   <form method="POST" action="editarok.php"  enctype="multipart/form-data">
      <table border="4" align="center" >
	<tr>
	<td><label>Contato</label></td>
	<td><input style= "COLOR:#000000" type="text" name="contato" value="<?php echo $variavel->contato;?>"/></td></tr>
	  <tr><td><label> Endereço<label></td>
	  <td><input style= "COLOR:#000000" type="text" name="Endereco" value="<?php echo $variavel->Endereco;?>"/><td></tr>
	   <tr><td><label>Email</label></td> 
	   <td><input style= "COLOR:#000000" type="text" name="Email" value="<?php echo $variavel->Email;?>"/></td></tr>
		 </select></td></tr>
	  <input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
	<tr><td>  <input style= "COLOR:#000000" type="submit" name="Alterar"/></td></tr>
	   
   </form>
		
	
</body>
</html>
<?php
	include_once("../../interface/rodape.php");
	?>