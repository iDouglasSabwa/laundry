<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Dhobi Register | Laun</title>
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

	


	<!-- Contact section -->
	<section class="contact-section" style="background-image: linear-gradient(indigo, black);" >
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-12 contact-info" style="margin: auto;  width: 100%;padding-bottom: 30px">
					<h3 class="text-white">Signing up as Dhobi</h3>
					
					<form class="contact-form" action="../helpers/dhobi_register.php" method="post" autocomplete="off" enctype="multipart/form-data">						
						<input type="text" name= "uname" placeholder="Your name" required>
						<div class="row">
							<div class="col-lg-6">
								<input type="number" name="natid" placeholder="National ID" required="required">
							</div>
							<div class="col-lg-6">
									<input type="text" name="uphone" placeholder="Phone" required="required">
							</div>
						</div>
						<select name="zone" required="required">
							<option value="">Select your operation zone...</option>
							<option value="Lang'ata">Lang'ata</option>
							<option value="Karen">Karen</option>
							<option value="Rongai">Rongai</option>
						</select>
						<div class="row">
							<div class="col-lg-6">
								<input type="email" name="email" placeholder="Your e-mail" required="required">
							</div>
							<div class="col-lg-6">
								<input type="password" name="password" placeholder="Set Password" required="required">
							</div>
						</div>
						<label><h6 class="text-white">Photo</h6></label>
						<input type="file" name="uphoto" placeholder="Set Password" required="required"><br><br>
						<button class="site-btn" name="submit">Submit Details <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
					</form>
				</div>
			</div>
		</div>
		
	</section>
	<!-- Contact section end -->


	


	<!-- Footer section -->
	<section class="footer-section" style="background-color: black">
		<div class="container">
			
			<div class="container" style="padding-bottom: 30px;text-align: center;">
				<p class="text-white">&copy 2021 Copyright Reserved LAUN SERVICES </p>


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
