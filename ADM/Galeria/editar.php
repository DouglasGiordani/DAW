<?php

   include_once ("../../class/Carregar.class.php");
   include_once("../../interface/topo.php");
   if(!$_GET["id"]){
	header("location:listar.php");
   }
   else{
	   $ID = $_GET["id"];
	   $objeto = new Galeria();
	   $objeto->ID = $ID;
	   $variavel = $objeto->retornarUnico();
   }
   
?>



<html>
<head></head>
<body>
<h1> <center> Editar Galerias</center></h1>
   <form  align="center" method="POST" action="editarok.php">   
	   Nome: <input align="center" type="text"  style="color: black" name="Nome" value="<?php echo $variavel->Nome;?>"/><br/>
	  <input type="hidden" style="color: black" name="ID" value="<?php echo $variavel->ID;?>"/>
	  <input type="submit"  style="color: black" name="Alterar"/>
	   
   </form>
		
	
</body>
</html>
<?php
		include_once("../../interface/rodape.php");
		?>