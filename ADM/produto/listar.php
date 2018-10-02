<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objfoto = New Foto();
	$resultado = $objfoto->listar();

	
		?>
	<html>
	
		<head>
		<meta charset="UTF-8">
			<style>
			.tituloTabela{
				
				text-align:center;
			}
		</style>
		</head>
			<body>
			<h1> <center>Fotos</center></h1>
				<table border="3">
					<thead>
						<th>ID</th>
						<th>Nome</th>
						<th>Imagen</th>
						<th>Data</th>
						<th>galeria</th>
						<th class="tituloTabela">Descricao</th>
						<th class="tituloTabela" colspan="4">Ações</th>
						
					</thead>
					<tbody >
					<?php
						foreach($resultado as $local){
							echo ("<tr>
							<td>$local->ID</td>
							<td>$local->Nome</td>
							<td><img src='../../Imagen/$local->Imagen' width='150'/></td>
							<td>$local->Data</td>
							<td>$local->Id_galeria</td>
							<td>$local->Descricao</td>
							<td> <a href='editar.php?id=$local->ID'>Editar</td> 
							<td> <a href='excluir.php?id=$local->ID'>Excluir</td>
							<td> <a href='editarimg.php?id=$local->ID'>Editar Imagen</td>
														
							</tr>"
							);
							
						}
					?>
					</tbody>
				</table>
			</body>
		</html>
		<?php
	include_once("../../interface/rodape.php");
	?>