<?php
   include_once ("../../class/Carregar.class.php");
   	include_once("../../interface/topo.php");
   if(!$_GET["id"]){
	header("location:listar.php");
   }
   else{
	   $ID = $_GET["id"];
	   $objeto = new Foto();
	   $objeto->ID = $ID;
	   $variavel = $objeto->retornarUnico();
   }
   $objgaleria = New Galeria();
	$resultado = $objgaleira->listar();
?>



<html>
<head></head>
<body>
<h1> <center> Editar Produtos</center></h1>
   <form method="POST" action="editarok.php"  enctype="multipart/form-data">
      <table border="4" align="center" >
	<tr>
	<td><label>Nome</label></td>
	<td><input style= "COLOR:#000000" type="text" name="Nome" value="<?php echo $variavel->Nome;?>"/></td></tr>
	  <tr><td><label> Data<label></td>
	  <td><input style= "COLOR:#000000" type="date" name="Data" value="<?php echo $variavel->Preco;?>"/><td></tr>
	   <tr><td><label>Descricao</label></td> 
	   <td><input style= "COLOR:#000000" type="text" name="Descricao" value="<?php echo $variavel->Descricao;?>"/></td></tr>
	<tr><td><label>Galeria</label></td>
	<td><select  style= "COLOR:#000000" name="Id_galeria"/> 
	    <option style= "COLOR:#000000" value="">Selecione</option>
	
	<?php
			foreach ($resultado as $dados){
				if($dados->ID == $variavel->Id_galeria){
					echo "<option value='$dados->ID' selected>$dados->Nome</option>";
				}
				else{
					echo "<option value='$dados->ID'>$dados->Nome</option>";
				}
			}
		?>
	 </select></td></tr>
	  <input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
	<tr><td>  <input style= "COLOR:#000000" type="submit" name="Alterar"/></td></tr>
	   
   </form>
		
	
</body>
</html>
<?php
	include_once("../../interface/rodape.php");
	?>