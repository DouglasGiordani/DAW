<?php
	include_once("../class/Carregar.class.php");
 include_once("../web/topo.php");

 $obj = New Foto();
	$resultado = $obj->listar();
 ?>
		<div class="main">
<!--=====================Content======================-->
			<section class="content cont_pad1">
				<div class="container"><div class="ic">More Website Templates @ TemplateMonster.com - May 05, 2014!</div>
					<div class="gallery gall__1">
						<div class="row">
							<div class="grid_4">
								<h3>People</h3>
							</div>
							<div class="clear"></div>
							<?php	
							
									echo ("
								<div class='grid_4'>
								<h3>$resultado->Id_galeria</h3>	
							</div>
							<div class='clear'></div>
								");
							
								foreach($resultado as $local){	
									echo ("
							<div class='grid_4'>
										<a href='../Imagen/$local->Imagen' class='gal_item'>
										<img src='../Imagen/$local->Imagen'	 alt=''>
								
								<div class='gal_caption'>
									<time>$local->Data</time>
								</div>
								<span class='gal_magnify'></span>
								</a></div>");}?>
							
							
							<div class="grid_4">
								<h3>Nature</h3>
							</div>
							<div class="clear"></div>
							<div class="grid_4">
								<a href="../web/images/full7.jpg" class="gal_item">
									<img src="../web/images/page2_img7.jpg" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">01 Mar 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<div class="grid_4">
								<a href="../web/images/full8.jpg" class="gal_item">
									<img src="../web/images/page2_img8.jpg" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">10 Mar 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<div class="grid_4">
								<a href="../web/images/full9.jpg" class="gal_item">
									<img src="../web/images/page2_img9.jpg" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">25 Mar 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
<?php
 include_once("../web/rodape.php");
?>