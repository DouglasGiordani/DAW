<?php
   
   include_once ("../../class/Carregar.class.php");
   include_once("../../interface/topo.php");
   if(!$_GET["id"]){
	header("location:listar.php");
   }
   else{
	   $ID = $_GET["id"];
	   $objeto = new Agenda();
	   $objeto->ID = $ID;
	   $variavel = $objeto->retornarUnico();
   }
   $objadm = New ADM();
	$resultado = $objadm->listar();



?>
<html>
<head></head>
<body>
<h1> <center> Editar Agenda</center></h1>
   <form method="POST" action="editarok.php"  enctype="multipart/form-data">
      <table border="4" align="center" >
	<tr>
	<td><label>Pessoa Responsável</label></td>
	<td style= "COLOR:#000000" ><select name="Id_admin"/>
	 <option value="">Selecione</option>
	
	 <?php
	 foreach($resultado as $local){
     echo UTF8_encode ("<option value='$local->ID'>$local->Nome</option>");}
	 ?>
	  <tr><td><label> Data<label></td>
	  <td><input style= "COLOR:#000000" type="data" name="data" value="<?php echo $variavel->data;?>"/><td></tr>
	   <tr><td><label>Evento</label></td> 
	   <td><input style= "COLOR:#000000" type="text" name="Evento" value="<?php echo $variavel->Evento;?>"/></td></tr>
		 </select></td></tr>
	  <input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
	<tr><td>  <input style= "COLOR:#000000" type="submit" name="Alterar"/></td></tr>
	   
   </form>
		
	
</body>
</html>
<?php
	include_once("../../interface/rodape.php");
	?>