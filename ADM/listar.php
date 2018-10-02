<?php
	include_once("../../class/Carregar.class.php");
	include_once("../../interface/topo.php");
	$objProdutos = New Produto();
	$resultado = $objProdutos->listar();

	
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
			<h1> <center> Lista de Produtos</center></h1>
				<table border="3">
					<thead>
						<th>ID</th>
						<th>Nome</th>
						<th>Imagen</th>
						<th>Preco</th>
						<th>Categoria</th>
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
							<td>$local->Preco</td>
							<td>$local->Id_categorias</td>
							<td>$local->Descricao</td>
							<td> <a href='editar.php?id=$local->ID'>Editar</td> 
							<td> <a href='excluir.php?id=$local->ID'>Excluir</td>
							<td> <a href='editarimg.php?id=$local->ID'>Editar Imagen</td>
							<td> <a href='../produto/verprodutos.php?id=$local->ID'>Ver vendas</td> 							
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