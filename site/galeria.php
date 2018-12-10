<?php
	include_once("../class/Carregar.class.php");
 include_once("../web/topo.php");

 $obj = New Foto();
	$resultado = $obj->listar();
	
	
	$objgaleria =New Galeria();
	 $resul = $objgaleria->listar();
 ?>
		<div class="main">
<!--=====================Content======================-->
			<section class="content cont_pad1">
				<div class="container"><div class="ic"></div>
					<div class="gallery gall__1">
						<div class="row">
							</br></br></br></br>
							<div class="clear"></div>
							<div class='grid_4 filter-tope-group'>
								<button class="how-active1" data-filter="*">
									Todas as Fotos
									</button>
							<?php	
								foreach($resul as $local){	
									echo ("<button class='' data-filter='.$local->Nome'>
									$local->Nome
									</button>");}
								?>
								</div>
							</br></br></br></br>
							<div class="row isotope-grid">
							
							<?php	
        					foreach($resultado as $local){	
									echo ("<div class='grid_4 isotope-item  $local->Id_galeria'>													
							<div class='clear'></div>
							<div class='grid_4'>
										<a href='../Imagen/$local->Imagen' class='gal_item'>
										<img src='../Imagen/$local->Imagen'	 alt=''>
								
								<div class='gal_caption'>
									<time>$local->Data</time>
								</div>
								<span class='gal_magnify'></span>
								</a></div>	</div>");}
							?>
							</div>
							
						</div>
					</div>
				</div>
			</section>
<?php
 include_once("../web/rodape.php");
?>