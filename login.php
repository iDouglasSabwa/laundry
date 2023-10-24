<?php session_start();

if (isset($_SESSION['uid'])) {
	#code
	session_destroy();
};?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>User Login | Laun</title>
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
<body  style="background-image: linear-gradient(teal, black);">
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	
	<!-- Contact section -->
	<section class="contact-section" >
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-12 contact-info" style="margin: auto;  width: 100%;padding-bottom: 30px">
					<h3 class="text-white">Login to your account on Laun</h3>
					
					<form class="contact-form" action="helpers/user_login.php" method="post" autocomplete="off">						
						<input type="email" name="email" placeholder="Your e-mail">
						<input type="password" name="password" placeholder="Your Password"><br><br>
						<button class="site-btn" name="submit"><i class="fa fa-user-o" aria-hidden="true"></i>&nbspSubmit Details</button>
					</form>
					<div style="margin: auto;  width: 100%">
						<h5 class="mt-5 text-white"><a href="dhobi/register.php">Sign up as Dhobi <i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp </a>   |  &nbsp<a href="client/register.php">Sign Up as Client <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></h5>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	<!-- Contact section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
