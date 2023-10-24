<!-- Header section -->
	<header class="header-section">
		
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="../index.php">Home</a></li>
					<li><a href="order_requests.php?id=<?php echo $_SESSION['uid'] ;?>">Order Requests</a></li>
					<li><a href="order_history.php?id=<?php echo $_SESSION['uid'] ;?>">Order History</a></li>
					<li><a href="../login.php">Logout</a></li>
					<li><a href="#">You are logged in as: <?php echo $_SESSION['uname'] ;?> </a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->