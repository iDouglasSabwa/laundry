<?php session_start();

if (isset($_SESSION['uid'])) {
	#code
	session_destroy();
};



?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Laun | Home</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Laun Services">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="#">Client</a>
						<ul class="sub-menu">
							<li><a href="client/register.php">Register</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</li>
					<li><a href="#">Dhobi</a>
						<ul class="sub-menu">
							<li><a href="dhobi/register.php">Register</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</li>
					
					
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->



	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/laun1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>WELCOME TO</span>
							<h2>LAUN SERVICES</h2>
							<p><b>Laun is here to ensure that you experience the best of services in Laundry cleaning by providing the easiest way and most efficient way to get a laundry worker near you with the best of abilities</b></p>
							<a href="login.php" class="site-btn sb-line">USER SIGN IN</a>
							<a href="login.php" class="site-btn sb-white">DHOBI SIGN IN</a>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/laun2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>WELCOME TO</span>
							<h2>LAUN SERVICES</h2>
							<p> <b>Let our platform get you a laundry worker at the comfort of your house. We offer the cleanest way to have your laundry done.</b> </p>
							<a href="login.php" class="site-btn sb-line">USER SIGN IN</a>
							<a href="login.php" class="site-btn sb-white">DHOBI SIGN IN</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->

		
	<!-- Laun filter section -->
	<section class="product-filter-section mb-5" style="padding-top:65px">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-6">
					<h5 class="text-center" style="text-transform: uppercase;color: #f51167">Earn money with Laun</h5><br>
					<div class="product-item text-center">
						<div class="pi-pic">
							<div class="tag-sale">LAUN</div>
							<img src="./img/handwash.jpg" alt="" style="height: 360px;border-radius: 5%">
						</div>
						<div class="pi-text">
							<p><b>Wash clothes with Laun</b></p>
							<p>Earn by delivering door to door laundry cleaning services to the clients on the platform</p><br>
							<a href="dhobi/register.php" class="site-btn">Dhobi Sign up <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6">
					<h5 class="text-center" style="text-transform: uppercase;color: #f51167">Order with Laun</h5><br>
					<div class="product-item text-center">
						<div class="pi-pic">
							<div class="tag-sale">LAUN</div>
							<img src="./img/orderlaun.jpg" alt=""  style="height: 360px;border-radius: 5%">
						</div>
						<div class="pi-text">
							<p><b>Request an Order with Laun</b></p>
							<p>For faster door to door services order or schedule laundry cleaning services with Laun</p><br>
							<a href="client/register.php" class="site-btn">Client sign up <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
								
			</div>
		</div>
	</section>
	<!-- Laun filter section end -->


	<!-- Laun filter section -->
	<section class="product-filter-section mt-5 mb-5" style="padding-top: 35px" >
		<div class="container">
			<h2 class="text-center mt-5">About Us</h2>
			<div class="row mt-5">
				<div class="col-lg-6 col-sm-6">
					<h2 class="text-center text-info"><i class="fa fa-book"></i></h2><br>
					<h5 class="text-center">About Us</h5>
					<div class="product-item text-center">
						<div class="pi-text">
							<p>Find out more on how we started and what motivated us</p><br>
							<a href="about.php" ><p style="color: #f51167"><u>LEARN MORE</u></p></a><br>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6">
					<h2 class="text-center text-info"><i class="fa fa-shopping-cart"></i></h2><br>
					<h5 class="text-center">Services</h5>
					<div class="product-item text-center">
						<div class="pi-text">
							<p>Find out more on products and offers on Laun</p><br>
							<a href="services.php" ><p style="color: #f51167"><u>LEARN MORE</u></p></a>
						</div>
					</div>
				</div>
								
			</div>
		</div>
	</section>
	<!-- Laun filter section end -->

	<!-- Banner section -->
	<section class="banner-section" style="margin-bottom: 0px;padding-bottom: 0px" id="availability">
		<div >
			<h2 class="text-center">Availability</h2>
			<div class="banner set-bg mt-5" data-setbg="img/traff.jpg" style="margin-bottom: 0px;padding-bottom: 50px">
				<div class="tag-new">NEW TOWNS</div>
				<span class="text-white">We are available at: </span>
				<div class="footer-widget about-widget" style="padding-bottom: 0px;margin-bottom: 10px">
						
						<ul >
							<li><a href="#0" class="text-white" style="font-size: 18px">Karen</a></li>
							<li><a href="#0" class="text-white" style="font-size: 18px">Lang'ata</a></li>
							<li><a href="#0" class="text-white" style="font-size: 18px">Rongai</a></li>
						</ul>
					</div>
				<a href="login.php" class="site-btn">ORDER NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


	<!-- Features section -->
	<section class="features-section" >
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<a href="client/register.php"><h2>Sign Up as Client</h2></a>
					</div>
				</div>
				<div class="col-md-6 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<a href="dhobi/register.php"><h2>Sign Up as Dhobi</h2></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Features section end -->





	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="index.php"><h2>Laun</h2></a>
						<p>Let our platform get you a laundry worker at the comfort of your house. We offer the cleanest way to have your laundry done.</p>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Sites</h2>
						<ul>
							<li><a href="about.php">About Us</a></li>
							<li><a href="services.php">Services</a></li>
							
						</ul>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Products</h2>
						<ul>
							<li><a href="dhobi/register.php">Wash</a></li>
							<li><a href="client/register.php">Order</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Contact Us</h2>
						
						<div class="con-info">
							<span>T.</span>
							<p>+254 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>wawelisa@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
