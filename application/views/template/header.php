<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- # Apache config
<FilesMatch ".(eot|ttf|otf|woff)">
    Header set Access-Control-Allow-Origin "*"
</FilesMatch>

# nginx config
if ($filename ~* ^.*?\.(eot)|(ttf)|(woff)$){
    add_header Access-Control-Allow-Origin *;
} -->


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="icon" href="<?php echo base_url('assets/venomebicon.png');?>" type="image/png">
	<meta name="author" content="venoweb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url("assets/style.css"); ?>" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url("assets/css/dark.css"); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/font-icons.css"); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css"); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css"); ?>" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/components/bs-switches.css"); ?>" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css"); ?>" type="text/css" />
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Seo Demo Specific Stylesheet 037DC3-->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/colors.php?color=0b77fd"); 
	?>" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="<?php echo base_url("assets/demos/seo/css/fonts.css"); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url("assets/demos/seo/seo.css"); ?>" type="text/css" />
	<!-- / -->

<!-- custom css -->
<style>
.senter{
display: flex;
justify-content: center;


}
</style>		
<!-- custom css -->	


	<!-- Document Title
	============================================= -->
	<title>Venoweb</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="transparent-topbar">

			<div class="container clearfix">

				<div class="col_half nobottommargin clearfix">

					<!-- Top Links
					============================================= -->
<!-- 					<div class="top-links">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="<?php echo base_url('faq') ?>">FAQs</a></li>
							
							<li><a href="#"><img src="<?php echo base_url("assets/demos/seo/images/flags/eng.png"); ?>" alt="Lang">EN</a>
								<ul>
									<li><a href="#"><img src="<?php echo base_url("assets/demos/seo/images/flags/fre.png"); ?>" alt="Lang">ID</a></li>
								</ul>
							</li>
						</ul>
					</div> --><!-- .top-links end -->

				</div>

				<div class="col_half fright dark col_last clearfix nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="https://www.facebook.com/venoweb/" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<!-- <li><a href="#" class="si-twitter" target="_blank"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li> -->
							<li><a href="https://www.youtube.com/channel/UCu10jx4e8-s0yfqFztCoEFA" class="si-youtube" target="_blank"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
							<li><a href="https://www.instagram.com/venoweb/" class="si-instagram" target="_blank"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+6285643245554" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+6285643245554</span></a></li>
							<li><a href="mailto:info@venoweb.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@venoweb.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header floating-header clearfix">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="<?php echo base_url(); ?>" class="standard-logo" data-dark-logo="<?php echo base_url("assets/images/venoweblogo.png");?>"><img src="<?php echo base_url("assets/images/venoweblogo.png");?>" alt="Venoweb Logo" style="padding: 15px; "></a>
						<a href="<?php echo base_url(); ?>" class="retina-logo" data-dark-logo="<?php echo base_url("assets/images/venoweblogo.png");?>"><img src="<?php echo base_url("assets/images/venoweblogo.png");?>" alt="Venoweb Logo" style="padding: 15px; max-height: 80px; position: relative; top: 10px;" ></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="with-arrows">

						<ul>
							<li><a href="<?php echo base_url('services') ?>"><div>Services</div></a>
								<ul>
									<li><a href="<?php echo base_url('services/webdevelopment') ?>"><div>Website Development</div></a></li>
<!-- 									<li><a href="<?php echo base_url('services/webappdevelopment') ?>"><div>WebApp Development</div></a></li>
									<li><a href="<?php echo base_url('services/webtesting') ?>"><div>Web Testing</div></a></li> -->
									<li><a href="<?php echo base_url('services/datascience') ?>"><div>Data Science</div></a></li>
									<!-- <li><a href="<?php echo base_url('services/mobile_development') ?>"><div>Mobile App Development</div></a></li> -->
								</ul>
							</li>
							<li><a href="<?php echo base_url('portfolio') ?>"><div>Portfolio</div></a>
<!-- 							<ul>
									<li><a href="<?php echo base_url('themes') ?>"><div>Themes</div></a></li>
									<li><a href="<?php echo base_url('plugin') ?>"><div>Plugin</div></a></li>
								</ul> -->
							
							
							</li>
							<li><a href="<?php echo base_url('careers') ?>"><div>Careers</div></a></li>
							<li><a href="<?php echo base_url('about') ?>"><div>About</div></a>
<!-- 							<ul>
									<li><a href="<?php echo base_url('about/about_us') ?>"><div>About Us</div></a></li>
									<li><a href="<?php echo base_url('about/team') ?>"><div>Our Teams</div></a></li>
									<li><a href="<?php echo base_url('about/contact') ?>"><div>Contact</div></a></li>
									
								</ul> -->
						</ul>

						<!-- Top Search
						============================================= 
						<div id="top-search" class="fleft">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="#" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div> #top-search end -->

						<!-- Menu Buttons
						============================================= -->
						<a href="<?php echo base_url('home/start') ?>" class="button button-rounded fright leftmargin-sm">Get Started</a>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->