<?php
	include_once("../../class/Carregar.class.php");
 include_once("../interface/topo.php");

 $obj = New Foto();
	$resul = $obj->listar();
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
							
							<div class="grid_4">
								<h3>Animals</h3>
							</div>
							<div class="clear"></div>
							<div class="grid_4">
								<a href="../interface/images/full4.jpg" class="gal_item">
								<img src="../interface/images/page2_img4.jpg" alt="">
								<div class="gal_caption">
									<time datetime="2014-01-01">17 Feb 2014</time>
								</div>
								<span class="gal_magnify"></span>
								</a>
							</div>
							<div class="grid_4">
								<a href="../interface/images/full5.jpg" class="gal_item">
									<img src="../interface/images/page2_img5.jpg" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">20 Feb 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<div class="grid_4">
								<a href="../interface/images/full6.jpg" class="gal_item">
									<img src="../interface/images/page2_img6.jpg" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">24 Feb 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<div class="grid_4">
								<h3>Nature</h3>
							</div>
							<div class="clear"></div>
							<div class="grid_4">
								<a href="../interface/images/full7.jpg" class="gal_item">
									<img src="../interface/images/page2_img7.jpg" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">01 Mar 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<div class="grid_4">
								<a href="../interface/images/full8.jpg" class="gal_item">
									<img src="../interface/images/page2_img8.jpg" alt="">
									<div class="gal_caption">
										<time datetime="2014-01-01">10 Mar 2014</time>
									</div>
									<span class="gal_magnify"></span>
								</a>
							</div>
							<div class="grid_4">
								<a href="../interface/images/full9.jpg" class="gal_item">
									<img src="../interface/images/page2_img9.jpg" alt="">
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
 include_once("../interface/rodape.php");
?>