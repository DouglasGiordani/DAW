<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Celeni Fotos</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="../web/images/favicon.ico">
		<link rel="shortcut icon" href="../web/images/favicon.ico">
		<link rel="stylesheet" href="../web/css/stuck.css">
		<link rel="stylesheet" href="../web/css/owl.carousel.css">
		<link rel="stylesheet" href="../web/css/form.css">
		<link rel="stylesheet" href="../web/css/touchTouch.css">
		<link rel="stylesheet" href="../web/css/camera.css">
		<link rel="stylesheet" href="../web/css/style.css">
		<script src="../web/js/jquery.js"></script>
		<script src="../web/js/jquery-migrate-1.1.1.js"></script>
		<script src="../web/js/script.js"></script>
		<script src="../web/js/superfish.js"></script>
		<script src="../web/js/jquery.equalheights.js"></script>
		<script src="../web/js/jquery.mobilemenu.js"></script>
		<script src="../web/js/jquery.easing.1.3.js"></script>
		<script src="../web/js/tmStickUp.js"></script>
		<script src="../web/js/jquery.ui.totop.js"></script>
		<script src="../web/js/touchTouch.jquery.js"></script>
		<script src="../web/js/owl.carousel.js"></script>
		<script src="../web/js/sForm.js"></script>
		<script src="../web/js/camera.js"></script>
	
		<script src="../web/js/jquery.mobile.customized.min.js"></script>
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '200',
				thumbnails: false,
				height: '39,0625%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			var owl = $("#owl");
			owl.owlCarousel({
				items : 7, //10 items above 1000px browser width
				itemsDesktop : [995,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 3], // betweem 900px and 601px
				itemsTablet: [700, 3], //2 items between 600 and 0
				itemsMobile : [479, 2], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
			$('.gallery a.gal_item').touchTouch();
		});
			$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
		});
		</script>
	
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
		<header>
			<div id="stuck_container">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<h1>
								<a href="index.php">
									<img src="../Imagen/download (1).png" alt="Your Happy Family">
								</a>
							</h1>
							<div class="menu_block ">
								<nav class="horizontal-nav full-width horizontalNav-notprocessed">
									<ul class="sf-menu">
										<li><a href="../site/index.php">inicio</a></li>
										<li><a href="../site/galeria.php">Galeria</a></li>
										<li><a href="../site/index-2.php">Resume</a></li>
										<li><a href="../site/index-3.php">Blog</a></li>
										<li><a href="../site/contato.php">Contato</a></li>
									</ul>
								</nav>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>