<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dapur Tante Lin &mdash; FnD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dapur tante lin, jakarta, sambal roa, refrada, lilisya" />
	<meta name="keywords" content="dapur tante lin, resto, foodcourt, cikini, jakarta, responsive" />
	<meta name="author" content="halolilisya" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- custom ku -->
	<!-- <link rel="stylesheet" href="css/custom.css"> -->

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- <script src="js/custom.js"></script> -->
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	 <script>
		var btnContainer = document.getElement("meMenu");

		// Get all buttons with class="btn" inside the container
		var btns = btnContainer.getElementsByClassName("li");

		// Loop through the buttons and add the active class to the current/clicked button
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function() {
		    var current = document.getElementsByClassName("active");
		    current[0].className = current[0].className.replace("active", "");
		    this.className += "active";
		  });
		}
	  </script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.php">Dapur Tante Lin<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul id="meMenu">
							<li class="active"><a href="#fh5co-blog">Menu</a></li>
							<li class=""><a href="#fh5co-slider">Galeri</a></li>
							<li class=""><a href="#fh5co-featured-testimony">Kitchen</a></li>
							<li class=""><a href="#fh5co-about">Order</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>The Sambal Roa <em>&amp;</em> International <em>with</em> Petai</h1>
							<h2>Special menu for Today Cooking with heart by <a href="https://dapurtantelin.com/" target="_blank">Tante Lin</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-blog" class="fh5co-section">
		<?php #include 'part/menu_resto.php'; ?>
	</div>

	<div id="fh5co-slider" class="fh5co-section animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="fh5co-heading">
						<h2>Hapiness between Dapur Tante Lin</h2>
						<p>Cooking as hobies and the passion to bring delicious taste in every plate to familly, courage Tante Lin bringing her cooking to public</p>
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<aside id="fh5co-slider-wrwap">
					<div class="flexslider">
						<ul class="slides">
					   	<li style="background-image: url(images/gallery_7.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Tante Lin</h2>
													<p>Sedang masak makanan favorite keluarga di dapur tercinta.</p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(images/gallery_6.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>First Kitchen</h2>
													<p>Tempat seluruh keajaiban makanan Dapur Tante Lin berawal</p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(images/gallery_5.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Signature Dish</h2>
													<p>Recommended and Signature dish of Tante Lin exclusive at Dapur Tante Lin</p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>		   	
					  	</ul>
				  	</div>
				</aside>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>History  <em>of</em> Dapur Tante Lin</h2>
					<div class="row">
						<div class="col-sm-6">
							<p>Home Cooking with special recipe from Indonesian dish.</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="images/person_1.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
					<blockquote>
						<p>Pesan mama, "makanlah makanan yang bergizi, bersih dan lezat ya!"</p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>Find Us <em>&amp;</em> Order</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5451382040433!2d106.83974271523593!3d-6.191562895517641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f44757ac5759%3A0x57909e4b9c323523!2sRumah%20Sakit%20PGI%20Cikini!5e0!3m2!1sid!2sid!4v1632476826318!5m2!1sid!2sid" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="col-md-3 col-md-push-1 animate-box">
					<p>Ready for Take Away?</p>
					<p><a href="#" class="btn btn-primary btn-outline">Book via WA</a></p>
					<p><a href="#" class="btn btn-primary btn-outline">Instagram</a></p>
					<p><a href="#" class="btn btn-primary btn-outline">Grab Food</a></p>
					<p><a href="#" class="btn btn-primary btn-outline">GoFood</a></p>
					<p><a href="#" class="btn btn-primary btn-outline">Shopee Food</a></p>
					
				</div>
			</div>
		</div>
	</div>
	
	<?php include 'part/footer.php'; ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

