<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>ClaVents</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/linearicons.css">
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/bootstrap.css">
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/magnific-popup.css">
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/nice-select.css">					
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/animate.min.css">
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/owl.carousel.css">
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/modal.css">
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/multi-select.css">
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/css/main.css">
			<!-- DATE-PICKER -->
			<link rel="stylesheet" href="<?= base_url(); ?>assets/website/vendor/date-picker/css/datepicker.min.css">
		</head>
		<body>

			<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
						<div id="logo">
							<a href="index.html"><img src="#" alt="" title="" /></a>
						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
									<li class="menu-active"><a href="<?= site_url(); ?>Home">Beranda</a></li>
									<li class="menu-has-children"><a href="">Events</a>
										<ul>
											<li><a href="<?= site_url(); ?>Events/Bazaar">Bazaar</a></li>
											<li><a href="<?= site_url(); ?>Events/Job_Fair">Job Fair</a></li>
											<li><a href="<?= site_url(); ?>Events/Lomba">Lomba</a></li>
											<li><a href="<?= site_url(); ?>Events/Pameran">Pameran</a></li>
											<li><a href="<?= site_url(); ?>Events/Seminar">Seminar</a></li>
										</ul>
									</li> 
									<li><a href="<?= site_url(); ?>About">Tentang</a></li>
									<li><a href="<?= site_url(); ?>Contact">Kontak</a></li>
									<li><a class="ticker-btn" href="#">Buat Event</a></li>	
								</ul>			          				          
							</ul>
						</nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			</header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area2 relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Event				
							</h1>	
							<p class="text-white link-nav">
								<a href="index.html">Beranda</a> 
								<span class="lnr lnr-arrow-right"></span>  
								<a href="category.html">
									<?php echo $header['page1'] ?>
								</a>
								<?php if($header['page1'] == "Event") { ?>
									<span class="lnr lnr-arrow-right"></span>  
									<a href="category.html">
										<?php echo $header['page2'] ?>
									</a>
								<?php } ?>
							</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->