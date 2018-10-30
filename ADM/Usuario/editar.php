<?php
   include_once ("../../class/Carregar.class.php");
   include_once("../../interface/topo.php");
   if(!$_GET["id"]){
	header("location:inserir.php");
   }
   else{
	   $ID = $_GET["id"];
	   $objeto = new adm();
	   $objeto->ID = $ID;
	   $variavel = $objeto->retornarUnico();
   }
   
?>



<html>
<head></head>
<body>
 <h1> <center> Editar Usuario</center></h1>
   <form method="POST" action="editarok.php">   
   <table border="4" align="center" >
   <h1>
	<tr>
	<td><label>Nome</label></td>
	 <td> <input style= "COLOR:#000000"  type="text" name="Nome" value="<?php echo $variavel->Nome;?>"/></td></tr>
	  <tr><td> Nome de usuario</td>
	  <td><input style= "COLOR:#000000" type="text" name="Nome_de_usuario" value="<?php echo $variavel->Nome_de_usuario;?>"/><td></tr>
	   <tr><td>Senha</td>
	   <td><input style= "COLOR:#000000" type="password" name="Senha" value="<?php echo $variavel->Senha;?>"/></td></tr>
	  <input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
	  <tr><td><input style= "COLOR:#000000"  type="submit" name="Alterar"/></td></tr>
	   
   </form>
		
	
</body>
</html>
<?php
include_once("../../interface/rodape.php");
?>
