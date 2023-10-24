<?php session_start();

if (isset($_SESSION['uid'])) {
	#code
	session_destroy();
};



?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Laun | Services</title>
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
					<li><a href="#">Sites</a>
						<ul class="sub-menu">
							<li><a href="about.php">About Us</a></li>
							<li><a href="services.php">Services</a></li>
						</ul>
					</li>
					
						
					</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->



	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Services</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Laun's Services and Offerings</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	
	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<h4 class="mt-5 text-center text-secondary">We are changing how people receive and access laundry services by implementing:</h4>
	

			<div class="row">
				<div class="col-xl-6 col-lg-6" style="text-align: center;" >
					<img class="mt-5" src="img/laun2.jpg" style="height: 150px;border-radius: 10px">
					<h5 style="padding-top: 10px">Laundry Options</h5>
					<p  style="font-size: 17px;padding-top: 10px">With Laun, you can access laundry services at the comfort of your home within areas around Karen, Rongai and Lang'ata.</p>
					<a href="client/register.php" class="site-btn">Learn More</a>

				</div>

				<div class="col-xl-6 col-lg-6" style="text-align: center;">
					<img class="mt-5" src="img/wallet.jpg" style="height: 150px;width:300px;object-fit: cover;border-radius: 10px">
					<h5 style="padding-top: 10px">Earning with Laun</h5>
					<p  style="font-size: 17px;padding-top: 10px">In addition to customer services, Laun gives you opportunities to earn as a dhobi through the services you provide to clients.</p>
					<a href="dhobi/register.php" class="site-btn">Earn Now</a>
				</div>
				
			</div>
	   </div>
	</section>
	<!-- Product filter section end -->

	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<p class="mt-5 text-info" style="font-size: 19px"><i class="fa fa-check"></i>&nbspLaun's most popular laundry options: Request an order and reserve services at an affordable price according to your load size</p>
	

			<div class="row">
				<div class="col-xl-4 col-lg-4">
					<img class="mt-5" src="img/ss.jpg" style="height: 150px;border-radius: 10px">
					<h5 style="padding-top: 10px">Small Load Size</h5>
				</div>

				<div class="col-xl-4 col-lg-4">
					<img class="mt-5" src="img/ms.jpg" style="height: 150px;width:300px;object-fit: cover;border-radius: 10px">
					<h5 style="padding-top: 10px">Medium Load Size</h5>
				</div>

				<div class="col-xl-4 col-lg-4">
					<img class="mt-5" src="img/ls.jpg" style="height: 150px;width:300px;object-fit: cover;border-radius: 10px">
					<h5 style="padding-top: 10px">Large Load Size</h5>
				</div>
				
			</div>
	   </div>
	</section>
	<!-- Product filter section end -->

		<!-- Product filter section -->
	<section class="product-filter-section mt-5">
		<div class="container">
		
			<div class="row">
				<div class="col-xl-6 col-lg-6" style="text-align: center;" >
					<h2 class="text-center text-info"><i class="fa fa-exclamation-triangle"></i></h2><br>
					<h5 style="padding-top: 10px">Safety</h5>
					<p  style="font-size: 17px;padding-top: 10px">Peace of mind is designed into your experience</p>
					<a href="safety.php" class="site-btn">Learn More</a>

				</div>

				<div class="col-xl-6 col-lg-6" style="text-align: center;">
					<h2 class="text-center text-success"><i class="fa fa-globe"></i></h2><br>
					<h5 style="padding-top: 10px">Availability</h5>
					<p  style="font-size: 17px;padding-top: 10px">We are currently available in 3 towns</p>
					<a href="index.php#availability" class="site-btn">Learn More</a>
				</div>
				
			</div>
	   </div>
	</section>
	<!-- Product filter section end -->

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
