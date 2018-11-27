<?php
include_once("../class/Carregar.class.php");
 include_once("../web/topo.php");
 
  $obj = New Foto();
	$resultado = $obj->listar();	
?>
		<div class="main">
			<div class="slider_wrapper">
				<div id="camera_wrap" class="">
					<div data-src="../Imagen/capa.jpg">
						<div class="caption fadeIn">
							<div class="title">Praça internacional</div>
							<p>Um símbolo da Fronteira da Paz: O obelisco da Praça Internacional. 
							À esquerda, o Brasil; à direita, o Uruguai.</p>
						</div>
					</div>
					<div data-src="../Imagen/cassino.jpg">
						<div class="caption fadeIn">
							<div class="title">Rivera Casino & Resort, Rivera</div>
							<p>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras  facilisis nulla vel viverra auctor, leo magna sodales felis, quis malesuada ibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis</p>
							<p>Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a,mmodo luctus libero. Praesent faucibus malesu</p>
							<a href="#">Learn More</a>
						</div>
					</div>
					<div data-src="../Imagen/slider2.jpg">
						<div class="caption fadeIn">
							<div class="title">In Motion</div>
							<p>In mollis erat mattis neque facilisis, sit amet ultricies erat rutrumras  facilisis nulla vel viverra auctor, leo magna sodales felis, quis malesuada ibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis</p>
							<p>Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a,mmodo luctus libero. Praesent faucibus malesu</p>
							<a href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
<!--=====================Content======================-->
			</br></br></br></br></br>
			<section class="content">
				<div class="container"><div class="ic"></div>
					<div class="row">
						<div class="grid_12">
							<h2>Fotos</h2>
							<div class="gallery">
								<div class="row">
								<?php 
								foreach($resultado as $local){	
									echo ("
									<div class='grid_4'>
										<a href='../Imagen/$local->Imagen' class='gal_item'>
											<img src='../Imagen/$local->Imagen' alt=''>
											<div class='gal_caption'><time>$local->Data</time></div>
											<span class='gal_magnify'></span>
										</a>
									</div>
								");}
								?>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					
			
			</div>
			</div>
			</section>
			</div>
<?php
 include_once("../web/rodape.php");
?>