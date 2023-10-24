<?php

//To check the method used to submit the form
if(!$_POST) exit;

//Get the data that was submitted
$uid = $_POST['uid'];
$uname = $_POST['uname'];
$zone = $_POST['zone'];
$osize = $_POST['osize'];
$iron = $_POST['iron'];
$roll = $_POST['roll'];

$dhobid = $_POST['dhobid'];
//Sanitize data
function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Sanitize the data that was submitted
$uid = clean($uid);
$uname = clean($uname);
$zone = clean($zone);
$zone = str_replace("'","\'",$zone);
$osize = clean($osize);
$iron = clean($iron);
$roll = clean($roll);


//Include the database connection file
include 'connect.php';


//Prepare to insert records into the table
if (isset($_POST['submit'])) {
	# code...

  if ($osize = 'Large') {
    # code...
    $price = 2500;
  } elseif ($osize = 'Medium') {
    # code...
    $price = 1500;
  } elseif ($osize ='Small') {
    # code...
    $price = 1000;
  }
 
  $amount = intval($iron) + intval($roll) + $price;

	//Insert  records
   $sql = "INSERT INTO orders (user_id,zone,order_size,ironing,press,amount,paymode,receipt,dhobi_id,status) VALUES('$uid','$zone','$osize','$iron','$roll','$amount','None','None','$dhobid','Pending')";
	 $query = mysqli_query($con,$sql);

   if (!$query) {
     # code...
    echo "Error".mysqli_error($con);
   }

	if ($query) {

    $ordsql = "SELECT * FROM orders WHERE user_id = '$uid' ORDER BY id DESC LIMIT 1";
    $ordsql = mysqli_query($con,$ordsql);

    foreach ($ordsql as $key => $value) {
      # code...
      $ordid = $value['id'];
    }
	
		//Redirect to home page    
  		echo '<h1 style="color:green;text-align:center;margin-top:20%;font-family:Segoe UI">Order made successfully</h1>';
      echo "<script>
            setTimeout(function() {
               window.location = '../client/payment.php?order=$ordid';
            },500);
         </script>";
         		exit();
         	} 

     else {

      echo '<h1 style="color:red;text-align:center;margin-top:20%;font-family:Segoe UI">Order request failed</h1>';
      echo "<script>
              setTimeout(function() {
                 window.location = '../client/dhobis.php';
            },10000);
         </script>";
            exit();
    }
 
 	//Close the database connection
   	$close = mysqli_close($con);
   	return $close;
	}
 

else {
	//If the submit process fails to execute
	echo '<h1 style="color:red;text-align:center;margin-top:20%;font-family:Segoe UI">An error occured</h1>';
	//Redirect to Login page
	echo "<script>
            setTimeout(function() {
               window.location = '../login.php';
            },1500);
         </script>";
	}

?>