<?php session_start();
if (!isset($_SESSION['uid'])) {
	# code...
	echo "<script>
            setTimeout(function() {
               window.location = '../login.php';
            },0);
         </script>";
};?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Complete Payments | Laun</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Laun Services">
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

	<?php include '../helpers/fetch.php';
	$oid = $_REQUEST['order'];
	?>
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
	<?php include 'menu.php';?>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>COMPLETE PAYMENT</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your payment</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1" style="margin: auto;  width: 100%;padding-bottom: 30px">
					<form class="checkout-form" action="mail.php" method="post" autocomplete="off">
						<div class="cf-title">PAY FOR YOUR ORDER</div>
						<h4 class="text-center text-success mb-5">Hi <?php echo $_SESSION['uname'] ;?>, your order costs KES <?php Payment($oid);?>/= </h4>
						<div class="row address-inputs">
							
							<div class="col-md-6">
								<select name="pmode" required="required">
									<option value="">Payment mode...</option>
									<option value="Cash">Cash on Delivery</option>
									<option value="MPESA">MPESA</option>
									<option value="Bank">Bank</option>
								</select>
							</div>
							<div class="col-md-6">
								<input type="text" name="receipt" placeholder="Receipt No" required="required">
							</div>
							<input type="text" hidden="hidden" name="uname" value="<?php echo $_SESSION['uname'] ;?>">
							<input type="text" hidden="hidden" name="oid" value="<?php echo $oid ;?>">
							<div class="col-md-12">
								<input type="text" name="email" placeholder="Billing email" required="required">
							</div>
							
							
						</div>
						
						<button class="site-btn submit-order-btn" name="submit">Submit Payment</button>
					</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- checkout section end -->

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="../index.php"><h2>Laun</h2></a>
						<p>Let our platform get you a laundry worker at the comfort of your house. We offer the cleanest way to have your laundry done.</p>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Sites</h2>
						<ul>
							<li><a href="../about.php">About Us</a></li>
							<li><a href="../services.php">Services</a></li>
							
						</ul>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Products</h2>
						<ul>
							<li><a href="../dhobi/register.php">Wash</a></li>
							<li><a href="../client/register.php">Order</a></li>
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
