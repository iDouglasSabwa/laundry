<?php 
 session_start();
 $uid = $_SESSION['uid'];
 $orderid = $_REQUEST['orderid'];
 include 'connect.php';

 $sql = "UPDATE orders SET status = 'Accepted' WHERE id = '$orderid'";
 $sql = mysqli_query($con,$sql);


  if ($sql) {
 	# code...
 	//If the the process runs
	echo '<h1 style="color:green;text-align:center;margin-top:20%;font-family:Segoe UI">Order request accepted </h1>';
	//Redirect to request page
	echo "<script>
            setTimeout(function() {
               window.location = '../dhobi/order_requests.php?id=$uid';
            },1500);
         </script>";
	} else {
	echo '<h1 style="color:red;text-align:center;margin-top:20%;font-family:Segoe UI">Failed to accept order </h1>';
	//Redirect to request page
	echo "<script>
            setTimeout(function() {
              window.location = '../dhobi/order_requests.php?id=$uid';
            },1500);
         </script>";	
	}

 ;?>