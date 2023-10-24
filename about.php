<?php session_start();

if (isset($_SESSION['uid'])) {
	#code
	session_destroy();
};



?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Laun | About</title>
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
			<h4>About Us</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">About us</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<img src="img/laun1.jpg" style="height: 400px;width: 100%;object-fit: cover;">
			
		</div>
	</section>
	<!-- Features section end -->


	
	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<p class="mt-5" style="font-size: 18px"><b>We provide opportunities by making laundry services at home.</b> <br>
			You are one click away from receiving various laundry services at the comfort of your home. Laun wants to ensure all that is possible by providing a safe and sufficient way of dhobis accessing the clients easier and faster</p>
	

			<div class="row">
				<div class="col-xl-6 col-lg-6">
					<img src="img/baskfold.jpg">
				</div>

				<div class="col-xl-6 col-lg-6">
					<h5 class="mt-5">Laundry Services</h5>
					<p  style="font-size: 18px">In addition to giving our customers a way to receive laundry services we have worked on a way to access that in your home. We also want to provide more job opportunities and broaden our company</p>
					<a href="services.php" class="site-btn">Services</a>
				</div>
				
			</div>

			<div class="row mt-5">
				<div class="col-xl-6 col-lg-6">
					<h5 class="mt-5">Your safety as a client or dhobi</h5>
					<p  style="font-size: 18px">Whether you are receiving our services or offering them, your safety is essential to us. We have come up with ways to ensure that your safety is guaranteed during your operations</p>
					<a href="safety.php" class="site-btn">Learn More</a>
				</div>
					<div class="col-xl-6 col-lg-6">
					<img  src="img/orderlaun.jpg" style="height: 250px;width: 100%;object-fit: cover;">
					
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
