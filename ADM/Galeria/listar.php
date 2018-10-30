<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objgaleria = New Galeria();
	$resultado = $objgaleria->listar();
	
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
			<h1> <center> Galerias</center></h1>
			
				<table align="center" border="3" width="50%">
					<thead>
						<th class="tituloTabela">ID</th>
						<th class="tituloTabela">Nome</th>
						<th class="tituloTabela"colspan="2">Ações</th>
						
					</thead>
					<tbody>
					<?php
						foreach($resultado as $local){
							echo UTF8_encode("<tr>
							<td>$local->ID</td>
							<td>$local->Nome</td>
							<td> <a href='editar.php?id=$local->ID'>Editar</td> 
							<td> <a href='excluir.php?id=$local->ID'>Excluir</td>
							</tr>");
							
						}
					?>
					</tbody>
				</table>
			</body>
		</html>
		<?php
		include_once("../../interface/rodape.php");
		?>